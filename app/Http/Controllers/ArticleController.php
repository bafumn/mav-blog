<?php

namespace App\Http\Controllers;

use App\Filters\ArticleFilter;
use App\Models\Article;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ArticleFilter $request)
    {

        $articles = Article::filter($request)->paginate(4);
        $categories = Category::where('count', '>', 0)->get();
        if ($request->request->ajax()) {
            return view('includes.articles', compact('articles'))->render();
        }

        return view('articles/index', compact('articles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'category_id' => $request->input('category'),
            'author_id' => Auth::user()->id,
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'description' => $request->input('description'),
        ];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('local')->put('/public/' . $fileName, file_get_contents($image));
            $image = Image::create([
                'path' => $fileName
            ]);
            $data['image_id'] = $image['id'];
        }
        Article::create($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('id', $id)->firstOrFail();
        return view('articles/show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
