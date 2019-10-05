@section('content')
<div class="col-md-12">
    <a href="{{ route('kategori.create') }}" class="btn btn-outline-primary float-right">Buat Kategori Baru</a>
    <br><br>
    @foreach($todos as $todo)
        <div class="card">
            <div class="card-body">
                {{ $todo->id }}
                {{ $todo->jenis }}
                {{ $todo-> title}}
                {{ $todo->status }}
                <a href="{{ route('todolist.index', $kategori->id) }}">views</a>
            </div>
        </div>
        <br>
    @endforeach
</div>
@endsection
