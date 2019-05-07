<html lang="en">
<head>
    <title>Laravel Multiple File Upload Example</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h3 class="jumbotron">Laravel Multiple File Upload</h3>

    <form method="post" action="{{route('album.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="input-group control-group increment" >
            <input type="file" name="images[]" multiple class="form-control">
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

    </form>
</div>


<script type="text/javascript">


    $(document).ready(function() {

        $(".btn-success").click(function(){
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("body").on("click",".btn-danger",function(){
            $(this).parents(".control-group").remove();
        });

    });

</script>
</body>
</html>
