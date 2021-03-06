<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * GET /books
     */
    public function index()
    {
        return 'Here are all the books...';
    }

    /**
     * GET /books/{title}
     */
    public function show($title)
    {
        dump(config('mail.supportEmail'));
        return view('books.show')->with(['title' => $title]);
    }
}
