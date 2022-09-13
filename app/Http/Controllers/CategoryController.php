<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function __construct(private CategoryRepository $repository)
    {}
    
    public function create() : View
    {
        return view('form-category');
    }

    public function save(Request $request) : RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:255',
        ]);
 
        if ($validator->fails()) {
            return redirect('category/create')
                ->withErrors($validator, 'category')
                ->withInput();
        }

        $this->repository->save($request->name);
        
        return back()->with('success','Item created successfully!');
    }
}
