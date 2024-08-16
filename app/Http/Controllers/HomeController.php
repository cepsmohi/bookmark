<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }
    public function categories()
    {
        return view('links');
    }
    public function subcategories(Category $category)
    {
        return view('links', compact('category'));
    }
    public function subcategorieslinks(Category $category, Subcategory $subcategory)
    {
        return view('links', compact('category', 'subcategory'));
    }
    public function links()
    {
        return view('links', compact('category'));
    }
}
