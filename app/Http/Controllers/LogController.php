<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use App\Book;


class LogController extends Controller
{
    public function store($id)
    {
        
        $book=Book::find($id);
        if($book->banyak_buku>0) {
            $log = new Log;
            $log->nama_peminjam = 'Anas';
            $log->id_buku = $id; //tanggal apakah varchar supaya bisa make "agustus"?
            $log->judul_buku = $book->judul;
            $log->edisi_buku = $book->edisi;
            //if banyaknya buku >0
            
            $book->banyak_buku = $book->banyak_buku - 1;
            $log->save();
            $book->save();
            return redirect('');
        }
        echo 'Bukunya abis hehe';
    }

    public function show()
    {
    	$logs = Log::all();
    	return view('peminjaman', ['logs' => $logs]);
    }
}