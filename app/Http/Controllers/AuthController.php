<?php

namespace App\Http\Controllers;

use App\Album;
use App\Comment;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Post;
use App\Reply;
use App\Tag;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:api', ['except' => ['login', 'register']]);
	}

	/**
	 * Get a JWT via given credentials.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */

	public function login(Request $request)
	{
		$credentials = $request->only('email', 'password');

		if ($token = $this->guard()->attempt($credentials)) {
			return $this->respondWithToken($token);
		}

		return response()->json(['error' => 'Sai tên tài khoản hoặc mật khẩu'], 401);
	}

	/**
	 * Get the authenticated User.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function me()
	{
		return response()->json($this->guard()->user(), 200);
	}

	/**
	 * Log the user out (Invalidate the token).
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function logout()
	{
		$this->guard()->logout();

		return response()->json(['message' => 'Successfully logged out']);
	}

	/**
	 * Refresh a token.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function refresh()
	{
		return $this->respondWithToken($this->guard()->refresh());
	}

	/**
	 * Get the token array structure.
	 *
	 * @param string $token
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected function respondWithToken($token)
	{
		return response()->json([
			'access_token' => $token,
			'token_type' => 'bearer',
			'expires_in' => $this->guard()->factory()->getTTL() * 60,
		]);
	}

	/**
	 * Get the guard to be used during authentication.
	 *
	 * @return \Illuminate\Contracts\Auth\Guard
	 */
	public function guard()
	{
		return Auth::guard('api');
	}

	public function register(RegisterRequest $request)
	{
		$user = User::create($request->all());
		return $this->login($request);
	}

	public function update(Request $request)
	{
		$user = $this->guard()->user();
		$user->fill($request->all());
		if ($request->image) {
			$image = $request->image;
			$path = Storage::disk('public')->put('image', $image);
			$user->image = $path;
		}
		$user->save();
		return $user;
	}

	public function createBlog(Request $request)
	{
		$user = $this->guard()->user();
		$post = new Post();
		$post->title = $request->title;
		$post->description = $request->description;
		$post->content = $request->contents;
		$post->user_id = $user->id;
		if ($request->video) {
			$post->video = $request->video;
		}
		if ($request->image) {
			$image = $request->image;
			$path = Storage::disk('public')->put('image', $image);
			$post->image = $path;
		}
		$post->save();
		$i = 0;
		$tagReq = 'tag' . $i;
		$tags = Tag::all();
		while ($request->$tagReq !== null) {
			if (!$tags->contains('name', $request->$tagReq)) {
				$tag = new Tag();
				$tag->name = $request->$tagReq;
				$tag->save();
				$post->tag()->attach($tag->id);
			} else {
				$tag = Tag::where('name', $request->$tagReq)->get();
				$post->tag()->attach($tag[0]->id);
			}
			$i++;
			$tagReq = 'tag' . $i;

		}
		return response()->json($post);
	}

	public function showBlogs()
	{
		$user = $this->guard()->user();
		$posts = Post::where('user_id', $user->id)
			->orderBy('id', 'DESC')
			->get();
		return $posts;
	}

	public function deleteBlog($id)
	{
		$user = $this->guard()->user();
		$post = Post::findOrFail($id);
		$post->reply()->delete();
		$post->comments()->delete();
		$post->tag()->detach($post->id);
		$post->delete();
		return response()->json('Delete successfully');
	}

	public function showBlogDetail($id)
	{
		$user = $this->guard()->user();
		$post = Post::findOrFail($id);
		$post->tag;
		return $post;
	}

	public function updateBlog(Request $request, $id)
	{
		$user = $this->guard()->user();
		$post = Post::findOrFail($id);
		$post->title = $request->title;
		$post->description = $request->description;
		$post->content = $request->contents;
		$post->user_id = $user->id;
		$post->video = $request->video;
		if ($request->image) {
			$image = $request->image;
			$path = Storage::disk('public')->put('image', $image);
			$post->image = $path;
		}
		$i = 0;
		$tagReq = 'tag' . $i;
		$tags = Tag::all();
		while ($request->$tagReq !== null) {
			if (!$tags->contains('name', $request->$tagReq)) {
				$tag = new Tag();
				$tag->name = $request->$tagReq;
				$tag->save();
				$tagId[$i] = $tag->id;
			} else {
				$tag = Tag::where('name', $request->$tagReq)->get();
				$tagId[$i] = $tag[0]->id;
			}
			$i++;
			$tagReq = 'tag' . $i;

		}
		$post->tag()->sync($tagId);
		$post->save();
		return response()->json($post);
	}

	public function search(Request $request)
	{
		$user = $this->guard()->user();
		$keyword = $request->keyWords;

		if (!$keyword) {

			return response()->json('Khong co ket qua');

		}

		$posts = Post::where('user_id', $user->id)
			->where(function ($query) use ($keyword) {
				$query->where('title', 'LIKE', '%' . $keyword . '%')
					->orWhere('description', 'LIKE', '%' . $keyword . '%')
					->orWhere('content', 'LIKE', '%' . $keyword . '%');
			})->get();
		return $posts;
	}

	public function getAllTags()
	{
		$user = $this->guard()->user();
		$allTags = Tag::all();
		return $allTags;
	}

	public function searchByTag(Request $request)
	{
		$user = $this->guard()->user();
		$keyword = $request->tag;
		$post = Post::whereHas('tag', function ($query) use ($keyword) {
			$query->where('name', 'LIKE', '%' . $keyword . '%');
		})
			->where('user_id', $user->id)
			->get();
		return $post;
	}

	public function createComment(Request $request, $postId)
	{
		$user = $this->guard()->user();
		$comments = new Comment();
		$comments->body = $request->data;
		$comments->user_id = $user->id;
		$comments->post_id = $postId;
		$comments->save();
		$post = Post::findOrFail($postId)->comments;
		return $post;
	}

	public function getComment($postId)
	{
		$user = $this->guard()->user();
		$post = Post::findOrFail($postId)->comments;
		return $post;

	}

	public function createReply(Request $request, $cmtId)
	{
		$user = $this->guard()->user();
		$replies = new Reply();
		$replies->body = $request->body;
		$replies->user_id = $user->id;
		$replies->post_id = $request->postId;
		$replies->comment_id = $cmtId;
		$replies->save();
		return $replies = Reply::where('post_id', $request->postId)
			->where('comment_id', $cmtId)
			->where('user_id', $user->id)
			->get();
	}

	public function getAllReplies(Request $request, $cmtId)
	{
		$user = $this->guard()->user();
		$replies = Reply::where('post_id', $request->postId)
			->where('comment_id', $cmtId)
			->where('user_id', $user->id)
			->get();
		return $replies;
	}

	public function createAlbum(Request $request)
	{
		$user = $this->guard()->user();
		$i = 0;
		$img = 'images' . $i;
		while ($request->$img !== null) {
			$name = $request->$img->getClientOriginalName();
			$request->$img->move(public_path() . '/images/', $name);
			$data[] = $name;
			$i++;
			$img = 'images' . $i;
		}
		$album = new Album();
		$album->name = $request->name;
		$album->title = $request->title;
		$album->user_id = $user->id;
		$album->images = json_encode($data);
		$album->save();
		return $album;
	}

	public function getAllAlbum()
	{
		$user = $this->guard()->user();
		return $user->album;
	}

	public function showAlbumDetail($id) {
		$user = $this->guard()->user();
		$album = Album::findOrFail($id);
		$album->images = json_decode($album->images);
		return $album;
	}
	public function deleteAlbum($id) {
		$user = $this->guard()->user();
		$album = Album::findOrFail($id);

		$album->delete();
		return $user->album;
	}
	public function changePassword(Request $request) {
		$user = $this->guard()->user();
		$hashedPassword = $user->password;
		if (Hash::check($request->oldPassword, $hashedPassword)) {
			$user = User::findOrFail($user->id);
			$user->password = $request->password;
			$user->save();
			return response()->json('Change password successfully');

		}
		else {
			return response()->json('Có lỗi xảy ra');
		}
	}
}
