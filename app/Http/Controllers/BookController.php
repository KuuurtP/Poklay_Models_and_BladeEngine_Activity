<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Fetch all books (consider pagination for larger datasets)
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}
