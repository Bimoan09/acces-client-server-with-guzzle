@extends('layouts.master')
@section('content')

<div class="row">
<div class="col-lg-12">

<h1>Daftar Pegawai</h1>

<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Nama</td>
            <td>Nip</td>
            <td>Alamat</td>
            <td>HP</td>
            <td>Email</td>

        </tr>
    </thead>
    <tbody>
    @foreach($karyawan as $key => $value)
        <tr>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->Nip }}</td>
            <td>{{ $value->alamat}}</td>
            <td>{{ $value->HP}}</td>
            <td>{{ $value->email }}</td>


            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->
            <td>
                <a class="btn btn-small btn-success" href="{{ URL('karyawan/' . $value->id) }}">Tampilkan Data</a>

                <a class="btn btn-small btn-warning" href="{{ URL('karyawan/' . $value->id . '/edit') }}">Ubah Data</a>

                {!! Form::open(['url' => 'karyawan/' . $value->id, 'class' => 'pull-right']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Hapus Data', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</div>
@stop
