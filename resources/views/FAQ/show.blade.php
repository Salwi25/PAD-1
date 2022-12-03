@extends('layouts.welcome')

@section('navbar')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>{{$faq->pertanyaan}}</h1>
            <small>Tanggal : {{$faq->created_at}}</small>
            <p>{{$faq->jawaban}}</p>
            <br>
            <br>
            <a href="/FAQ/{{$faq->id}}/edit" class="btn btn-primary">Edit</a>

            <form action="{{ route('FAQ.destroy', $faq->id) }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $faq->id }}"> <br />
            <button type="submit" onclick ="return confirm('Yakin ingin menghapus?');" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection