@extends('layouts.welcome')

@section('navbar')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
            <h1>Add Blog Post</h1>
            <form action="{{ route('FAQ.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" aria-describedby="emailHelp" 
                    name="pertanyaan">
                    @error('pertanyaan')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jawaban">Jawaban</label>
                    <textarea class="form-control" id="jawaban" rows="5" name="jawaban"></textarea>
                    @error('jawaban')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection