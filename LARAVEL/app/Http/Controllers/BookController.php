<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    // Menampilkan semua buku
    public function index()
    {
        $books = DB::table('books')->get();
        return view('books.index', ['books' => $books]);
    }

    // Menampilkan form tambah buku
    public function create()
    {
        return view('books.create');
    }

    // Menyimpan buku baru ke database
    public function store(Request $request)
    {
        DB::table('books')->insert([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'genre' => $request->genre
        ]);

        return redirect('/books')->with('success', 'Book added successfully!');
    }

    // Menampilkan detail satu buku
    public function show($id)
    {
        $book = DB::table('books')->where('id', $id)->first();
        return view('books.show', ['book' => $book]);
    }

    // Menampilkan form edit buku
    public function edit($id)
    {
        $book = DB::table('books')->where('id', $id)->first();
        return view('books.edit', ['book' => $book]);
    }

    // Menyimpan perubahan buku
    public function update(Request $request, $id)
    {
        DB::table('books')->where('id', $id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'genre' => $request->genre
        ]);

        return redirect('/books')->with('success', 'Book updated successfully!');
    }

    // Menghapus buku
    public function destroy($id)
    {
        DB::table('books')->where('id', $id)->delete();
        return redirect('/books')->with('success', 'Book deleted successfully!');
    }
}
