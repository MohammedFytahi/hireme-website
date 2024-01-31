<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        $categories = Category::all(); // Assuming you have a 'Category' model
        return view('service.create', ['categories' => $categories]);
    }
}
