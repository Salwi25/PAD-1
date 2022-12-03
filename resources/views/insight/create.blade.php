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
            <form action="{{ route('insight.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="judul">Title</label>
                    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" 
                    name="judul">
                    @error('judul')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Description</label>
                    <textarea class="form-control" id="deskripsi" rows="5" name="deskripsi"></textarea>
                    @error('deskripsi')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="input-file">File Input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="picture">
                            <label class="custom-file-label" for="input-file">Choose File</label>
                        </div>
                    </div>
                    @error('picture')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection