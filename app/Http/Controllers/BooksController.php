<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Http;

class BooksController extends Controller
{


    public function index(){
        return view('books');
    }

    // public function index(){
    //     $book = Book::all();
    //     return view('book.index',compact('books'));
    // }


    // public function creat(){
    //     return view('book.create');
    // }


    // public function store(Request $request){
    //     Book::create($request->all());
    //     return redirect('/books');
    // }

    // public function delete($id){
    //     Book::destroy($id);
    //     return redirect('/books');
    // }
}
