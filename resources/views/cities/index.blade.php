@extends('layouts.app')

@section('content')
    <div class="container">
        <div>List of all cities</div>

        @if ($cities->all())
            <select id="city_select" name="city_select" onchange="changePrefecture(this)">
                <option value="0">--- Choose City ---</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->kanji }} {{ $city->romaji }}</option>
                @endforeach
            </select>
        @else
            <div>Register a city!</div>
        @endif
        {{-- <div>
            <a class="btn btn-primary" href="prefectures/create">Add new prefecture</a>
        </div> --}}
    </div>
@endsection