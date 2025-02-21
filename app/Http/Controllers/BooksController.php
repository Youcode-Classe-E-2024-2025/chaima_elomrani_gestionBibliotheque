<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Http;

class BooksController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function adminIndex()
    {
        $books = Book::all();
        return view('admin', compact('books'));
    }

    


    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            
            Book::create($request->all());
            return redirect('books');
        }
        $books = Book::all();
        return view('books', compact('books'));
    }

    // public function delete($id)
    // {
    //     Book::destroy($id);
    //     return redirect('/books');
    // }
}
