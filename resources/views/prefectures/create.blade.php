@extends('layouts.app')

@section('content')
    <div class="container">
        Add new prefecture

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="p-3 mb-2 bg-danger text-white">{{ $error }}</div>
            @endforeach
        @endif
        <form method="POST" action="/prefectures">
            @csrf
            <div class="form-group">
                <label for="romaji">Romaji</label>
                <input type="text" class="form-control" name="romaji" placeholder="Prefecture Name" required>
            </div>
            <div class="form-group">
                <label for="kana">Kana</label>
                <input type="text" class="form-control" name="kana" placeholder="Prefecture Name" required>
            </div>
            <div class="form-group">
                <label for="kanji">Kanji</label>
                <input type="text" class="form-control" name="kanji" placeholder="Prefecture Name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection