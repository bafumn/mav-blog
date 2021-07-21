<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Product::orderBy('created_at', 'desc');
        return view('home/index', compact('articles'));
    }
}
