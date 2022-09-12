<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CategoryRepository
{
    public function save(string $name) : bool
    {
        return DB::table('categories')->insert([
            'name' => $name
        ]);
    }

    public function list() : Collection
    {
        return DB::table('categories')->get();
    }
}