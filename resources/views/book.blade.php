@extends('template.template')

@section('content')
<div class="container" style="margin-top: 100px; margin-bottom: 10px">
    <h1>Ini adalah buku {{$book->judul}}!!</h1>
    <p>Edisi : {{$book->edisi}}</p>
    <p>Judul : {{$book->judul}}</p>
    <p>Penulis : {{$book->penulis}}</p>
    <p>Penerbit : {{$book->penerbit}}</p>
    <p>Banyak Buku : {{$book->banyak_buku}}</p>    
    <div>
    	<a href="/{{$book->id}}/edit"><button class="btn btn-active" style="background-color: rgb(195, 216, 190); border-color: rgb(95, 249, 84);"><h5>Edit</h5></button></a>
   	</div>
</div>
@endsection