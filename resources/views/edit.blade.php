@extends('template.template')

@section('content')
    <h1>Edit Buku {{$book->judul}}</h1>
  
	<form action="/{{$book->id}}" method="post">
		<label for="judul">Judul Buku</label>
		<input type="text" name="judul" value="{{$book->judul}}">
		<br>
		<label for="edisi">Edisi</label>
		<input type="text" name="edisi" value="{{$book->edisi}}">
		<br>
		<label for="penulis">Penulis</label>
		<input type="text" name="penulis" value="{{$book->penulis}}">
		<br>
		<label for="penerbit">Penerbit</label>
		<input type="text" name="penerbit" value="{{$book->penerbit}}">
		<br>
		<label for="banyak_buku">Banyak Buku</label>
		<input type="text" name="banyak_buku" placeholder="Banyak Buku" id="banyak_buku">
		<br>
		<button type="submit" class="btn btn-primary">Submit</button>
		<input type="hidden" name="_method" value="PUT">
		{{ csrf_field() }}
	</form>
@endsection