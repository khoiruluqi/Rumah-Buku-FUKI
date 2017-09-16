<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
use SSO\SSO;

class RumbukController extends Controller
{
    public function library()
    {
        if(!SSO::check()){
            SSO::authenticate();
        }
    	$books = Book::all();
    	return view('welcome', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::find($id);
    	return view('book', ['book'=> $book]);
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('edit', ['book' => $book]);
    }  

    public function pinjam(Request $request)
    {
        $ids = explode(",", $request->ids);
        foreach ($ids as $id) {
            $book=Book::find($id);
            echo $book->judul;
        }
    }

    public function create()
    {
        return view('insert');
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->judul = $request->judul;
        $book->edisi = $request->edisi;
        $book->penulis = $request->penulis;
        $book->penerbit = $request->penerbit;
        $book->banyak_buku = $request->banyak_buku;
        $book->status = 'Tersedia';
        $book->save();
        return redirect('#library'); 
    }


    public function update(Request $request, $id)
    {   
        $book = Book::find($id);
        $book->judul = $request->judul;
        $book->edisi = $request->edisi;
        $book->penulis = $request->penulis;
        $book->penerbit = $request->penerbit;
        $book->banyak_buku = $request->banyak_buku;
        $book->save();
        return redirect('/' . $id);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('');
    }
}
