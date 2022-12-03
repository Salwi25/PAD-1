@extends('layouts.welcome')

@section('navbar')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Edit Blog Post</h1>
            <form action="{{ route('FAQ.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" aria-describedby="emailHelp" name="pertanyaan" value="{{$faq->pertanyaan}}">
                </div>
                <div class="form-group">
                    <label for="jawaban">Jawaban</label>
                    <textarea class="form-control" id="jawaban" rows="5" name="jawaban">{{$faq->jawaban}}</textarea>
                </div>
                <input type="hidden" name="id" value="{{ $faq->id }}"><br/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection