<?php

namespace App\Http\Controllers\Admin;

use App\BookUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookBorrowerReturnController extends Controller
{
    public function index()
    {
        $book_users = BookUser::where('status', 1)->get();
        return view('admin.book-borrowers-return.index', compact('book_users'));
    }

    public function show($id)
    {
        $book_user = BookUser::find($id);

        return view('admin.book-borrowers-return.show', compact('book_user'));
    }
}
