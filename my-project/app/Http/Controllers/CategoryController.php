<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function create()
    {
        return view('form-category');
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:255',
        ]);
 
        if ($validator->fails()) {
            return redirect('category/create')
                ->withErrors($validator, 'category')
                ->withInput();
        }

        return 200;
    }
}
