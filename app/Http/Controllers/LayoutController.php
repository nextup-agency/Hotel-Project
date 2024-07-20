<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Requirement;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function home()
    {

        return view('/home');
    }

    public function residences()
    {

        return view('/residences');
    }

    public function office()
    {

        return view('/office');
    }

    public function contact()
    {

        return view('/contact');
    }

    public function about()
    {

        return view('/about');
    }

    public function articles()
    {
        // Ambil data recent posts, misalnya mengambil 5 post terbaru
        $articles = Article::orderBy('created_at', 'desc')->paginate(5); // Mengambil data blog dari database
        return view('/articles', compact('articles')); // Meneruskan data blog ke view frontend.blog.index
    }

    public function articleDetails($id)
    {
        $article = Article::find($id);

        return view('article-details', compact('article'));
    }

    public function requirementStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:requirements',
            'phone_number' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'phone_number.required' => 'Nomor telepon harus diisi',
            'message.required' => 'Pesan harus diisi',
        ]);

        Requirement::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Pesan berhasil dikirim.');
    }
}
