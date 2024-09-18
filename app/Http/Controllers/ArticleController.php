<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')->get();
        $categories = Category::all();
        return view('page_admin.news.index', compact('articles', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('page_admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'img_storage/' . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img_storage'), $imagePath);
        }

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => $imagePath,
        ]);

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('page_admin.news.update', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $article->image;
        if ($request->hasFile('image')) {
            if ($imagePath) {
                $fullPath = public_path($imagePath);
                if (file_exists($fullPath)) {
                    unlink($fullPath);
                }
            }
            $image = $request->file('image');
            $imagePath = 'img_storage/' . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img_storage'), $imagePath);
        }

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => $imagePath,
        ]);

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        if ($article->image) {
            $imagePath = public_path($article->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
