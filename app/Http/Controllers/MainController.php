<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $authors = Author::all();
        $books = Book::all();
        return view('books', compact('authors', 'books'));
    }

    public function create()
    {
        return view('create');
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
            'author_id' => '',
            'description' => 'string',
            'page_count' => '',
        ]);
        Book::create($data);
        return redirect()->route('main');
    }
}
