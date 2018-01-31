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
            {!! Form::model($karyawan, ['route' => ['karyawan.update', $karyawan->id], 'method' => 'PUT']) !!}

                <div class="form-group">
                    {!! Form::label('nama', 'nama') !!}
                    {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nip', 'nip') !!}
                    {!! Form::text('Nip', null, ['class' => 'form-control', 'placeholder' => 'masukan nip']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('alamat', 'Alamat') !!}
                    {!! Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'masukan alamat']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('hp', 'HP') !!}
                    {!! Form::text('HP', null, ['class' => 'form-control', 'placeholder' => 'berapa nomer HP anda?']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('Email', null, ['class' => 'form-control', 'placeholder' => 'masukan Email anda']) !!}
                </div>

                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
</div>
</div>
@stop
