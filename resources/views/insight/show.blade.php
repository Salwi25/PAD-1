@extends('layouts.welcome')

@section('navbar')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>{{$insight->judul}}</h1>
            <small>Tanggal : {{$insight->created_at}}</small>
            <p>{{$insight->deskripsi}}</p>
            <img src="{{asset('storage/posts_image/'.$insight->picture)}}" height="500" width="500">
            <br>
            <br>
            <a href="/insight/{{$insight->id}}/edit" class="btn btn-primary">Edit</a>

            <form action="{{ route('insight.destroy', $insight->id) }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $insight->id }}"> <br />
            <button type="submit" onclick ="return confirm('Yakin ingin menghapus?');" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection