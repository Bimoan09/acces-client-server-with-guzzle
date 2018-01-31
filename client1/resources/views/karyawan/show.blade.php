@extends('layouts.master')
@section('content')

<div class="row">
<div class="col-lg-12">

<h1>Tampilkan Data Pegawai</h1>

    <div class="jumbotron text-center">
        <h2>{{ $karyawan->nama }}</h2>
        <p>
            <strong>Nama :</strong> {{ $karyawan->nama }}<br>
            <strong>Nip :</strong> {{ $karyawan->Nip}}<br>
            <strong>Alamat :</strong> {{$karyawan->alamat}}<br>
            <strong>HP :</strong> {{ $karyawan->HP }}<br>
            <strong>Email :</strong> {{ $karyawan->email }}<br>

        </p>
    </div>

</div>
</div>
@stop
