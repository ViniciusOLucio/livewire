<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public string $title;
    public string $content;

    public function store(Request $request)
    {
        // Valida os dados do formulário
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:10',
        ]);
    }

    public function create()
    {
        return view('post-create');

    }
}
