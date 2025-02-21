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
            $request->validate([
                'author' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'status' => 'required|string',
                'image' => 'nullable|image|max:2048', // Example validation for image
            ]);

            $path = $request->hasFile('image') ? $request->file('image')->store('images', 'public') : null;
            
            Book::create([
                'author' => $request->author,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $path,
            ]);
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
