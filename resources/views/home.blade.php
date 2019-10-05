@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <a href="{{ route('kategori.create') }}" class="btn btn-outline-primary float-right">Buat Kategori Baru</a>
    <br><br>
    @foreach($kategoris as $kategori)
        <div class="card">
            <div class="card-body">                
                {{ $kategori->jenis }}
                <a href="{{ route('todolist.index', $kategori->id) }}" class="btn btn-outline-primary float-right">task</a>
                <a href="{{ route('todolist.index', $kategori->id) }}" class="btn btn-outline-primary float-right">hapus</a>
            </div>
        </div>
        <br>
    @endforeach
</div>
@endsection
