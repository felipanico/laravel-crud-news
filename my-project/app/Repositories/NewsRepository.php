<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class NewsRepository
{
    public function save(array $data) : bool
    {
        return DB::table('news')->insert($data);
    }

    public function list(string $name = null) : Collection
    {
        $query = DB::table('news')
            ->select('news.*', 'categories.name as categoryName')
            ->join('categories', 'category_id', 'categories.id');

        if ($name) {
            $query->where('news.name', 'like', '%' . $name . '%');
        }

        return $query->get();
    }
}