@extends('layouts.app')

@section('content')
    <div class="container">
        <div>List of all prefectures</div>

        @if ($prefectures->all())
            <select id="prefecture_select" name="prefecture_select" onchange="changePrefecture(this)">
                <option value="0">--- Choose Prefecture ---</option>
                @foreach($prefectures as $prefecture)
                    <option value="{{ $prefecture->id }}">{{ $prefecture->kanji }} {{ $prefecture->romaji }}</option>
                @endforeach
            </select>
        @else
            <div>Register a prefecture!</div>
        @endif
        {{-- <div>
            <a class="btn btn-primary" href="prefectures/create">Add new prefecture</a>
        </div> --}}
    </div>
@endsection