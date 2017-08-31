@extends('template.template')

@section('link')
<style>
	.lumayanGede {
		font-family: lato, verdana;
		font-size: 24px;
	}	
</style>
@endsection

@section('content')
	<div class="container">
		<h1 class="text-center" style="margin-top: 150px">Tambah Buku</h1>
		<hr>
		<form action="/" method="post" class="lumayanGede">
			<div class="col-sm-12" style="margin-bottom: 5px">
				<label for="judul" class="col-sm-4">Judul Buku</label>
				<input type="text" name="judul" class="col-sm-8" placeholder="Judul Buku" id="judul">
			</div>
			<div class="col-sm-12" style="margin-bottom: 5px">
				<label for="edisi" class="col-sm-4">Edisi</label>
				<input class="col-sm-8" type="text" name="edisi" placeholder="Edisi" id="edisi">
			</div>
			<div class="col-sm-12" style="margin-bottom: 5px">
				<label class="col-sm-4" for="penulis">Penulis</label>
				<input type="text" class="col-sm-8" name="penulis" placeholder="Penulis" id="penulis">
			</div>
			<div class="col-sm-12" style="margin-bottom: 5px">
				<label for="penerbit" class="col-sm-4">Penerbit</label>
				<input type="text" name="penerbit" class="col-sm-8" placeholder="Penerbit" id="penerbit">
			</div>
			<div class="col-sm-12">
				<label for="banyak_buku" class="col-sm-4">Banyak Buku</label>
				<input type="text" name="banyak_buku" class="col-sm-8" placeholder="Banyak Buku" id="banyak_buku">
			</div>

			<div class="col-sm-12" style="margin-top: 40px; margin-bottom: 10px;">
				<div class="col-sm-2"></div>
				<button type="submit" class="btn btn-success col-sm-8"><h3>Submit</h3></button>
				<div class="col-sm-2"></div>
			</div>
			
			{{ csrf_field() }}
		</form>
	</div>
@endsection