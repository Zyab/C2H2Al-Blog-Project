<?php

namespace App\Http\Repositories;
interface Repository
{
    public function getAll();
    public function findById($id);
    public function create($object);
    public function update($object);
    public function destroy($object);
}
