<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $data_article = Article::where('title', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%')
                ->orWhere('news_source', 'like', '%' . $query . '%')
                ->orderBy('id', 'desc')
                ->paginate(5);
        } else {
            $data_article = Article::orderBy('id', 'desc')->paginate(5);
        }

        // Mendapatkan nomor awal untuk setiap halaman
        $no = ($data_article->currentPage() - 1) * $data_article->perPage();

        return view('dashboard.article.index', compact('data_article', 'no', 'query'));
    }

    public function create()
    {

        return view('dashboard.article.create');
    }

    // Menyimpan data blog baru
    public function store(Request $request)
    {
        // Validasi data yang dikirim
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'news_source' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'title.required' => 'Penulis harus diisi',
            'description.required' => 'description harus diisi',
            'news_source.required' => 'news source harus diisi',
            'image.required' => 'image harus diunggah',
            'image.image' => 'File harus berupa gambar',
        ]);

        // Simpan data ke database
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->news_source = $request->news_source;


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/imagesarticle', $filename);
            $article->image = $path;
        }

        $article->save();
        // Redirect dengan pesan sukses
        return redirect()->route('article.index')->with('success', 'Data article berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        Storage::disk('local')->delete('public/imagesarticle/' . $article->image);
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Data article berhasil ditambahkan');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('dashboard.article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'news_source' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'title.required' => 'title harus diisi',
            'description.required' => 'description harus diisi',
            'news_source.required' => 'news source harus diisi',
            'image.image' => 'File harus berupa gambar',
        ]);

        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->news_source = $request->news_source;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/imagesarticle', $filename);
            Storage::disk('local')->delete($article->image);
            $article->image = $path;
        }

        $article->save();
        return redirect()->route('article.index')->with('success', 'Data article berhasil diperbarui');
    }
}
