<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class NewsController extends Controller
{
    public function __construct(
        private NewsRepository $newsRepository, 
        private CategoryRepository $categoryRepository
    ) {
        //empty
    }
    
    public function index()
    {
        return view('home', [
            'news' => $this->newsRepository->list(request()->get('name'))
        ]);
    }

    public function filter(string $name = '')
    {
        return view('home', [
            'news' => $this->newsRepository->list()
        ]);
    }

    public function create() : View
    {
        return view('form-news', [
            'categories' => $this->categoryRepository->list()
        ]);
    }

    public function save(Request $request) : RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:255',
            'description' => 'required',
            'category' => 'required'
        ]);
 
        if ($validator->fails()) {
            return redirect('news/create')
                ->withErrors($validator, 'news')
                ->withInput();
        }

        $this->newsRepository->save([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category
        ]);
        
        return back()->with('success','Item created successfully!');
    }
}
