@extends('layouts.app')

@section('title')
    Register New Task
    @endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3>Buat Kategori Baru</h3>
            <hr>
            {{ Form::open(['route' => 'todolist.store']) }}

            <div class="form-group">
                {{ Form::label('title', 'Title', ['class' => 'control-label']) }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            
            {{ Form::submit('Simpan Task', ['class' => 'btn btn-success btn-lg']) }}
            {{ Form::close() }}
        </div>
    </div>
</div>
    @endsection