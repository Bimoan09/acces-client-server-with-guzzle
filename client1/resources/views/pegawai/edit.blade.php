@extends('layouts.master')
@section('content')

<div class="row">
<div class="col-lg-12">

<h1>Edit {{ $karyawan->nama }}</h1>

<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

</div>
</div>
@stop
