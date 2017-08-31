@extends('template.template')

@section('content')
<br><br><br><br><br>
<div class="container">
	<h1 class="text-center">Riwayat Peminjaman :</h1>
	<hr>
	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr class="navbar-default navbar-custom"  style="color: white; font-size: 16px;">
            	<th>No</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Edisi Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Diambil</th>
                <th>Tanggal Dikembalikan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach($logs as $log)
            <a href="/{{$log->id}}">
                <tr @if ($no % 2 === 1) class="success" @endif>
                    <td>{{$no}}</td>
                    <td>{{$log->nama_peminjam}}</td>
                    <td><a href="/{{$log->id_buku}}">{{$log->judul_buku}}</a></td>
                    <td>{{$log->edisi_buku}}</td>
                    <td>{{$log->tanggal_peminjaman}}</td>
                    <td>{{$log->tanggal_diambil}}</td>
                    <td>{{$log->tanggal_dikembalikan}}</td>
                    <td>{{$log->status_peminjaman}}</td>  
                </tr>
            </a>
                <?php $no++; ?>
            @endforeach
        </tbody>
    </table>
</div>
@endsection