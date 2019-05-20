@extends('layouts.app')

@section('content')
    <div class="container">
        <div>List of all prefectures</div>


        @if ($prefectures->all())
            <select id="prefecture_select" name="prefecture_select" onchange="changePrefecture(this)">
                <option value="0">--- Choose Prefecture ---</option>
                @foreach($prefectures as $prefecture)
                    <option value="{{ $prefecture->id }}" {{ $prefecture->id == $id ? 'selected' : '' }}>{{ $prefecture->kanji }} {{ $prefecture->romaji }}</option>
                @endforeach
            </select>
        @else
            <div>Register a prefecture!</div>
        @endif

        @if ($cities->all())
            <select id="cities_select" name="cities_select" onchange="changeCity(this)">
                <option value="0">--- Choose City ---</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->kanji }} {{ $city->romaji }}</option>
                @endforeach
            </select>
        @else
            <div>Register a city!</div>
        @endif

        <script>
            function changePrefecture(selectedPrefecture) {
                // alert(selectedPrefecture.value)
                window.location.replace('/prefectures/' + selectedPrefecture.value)
            }
        </script>

        {{-- <div>
            <a class="btn btn-primary" href="prefectures/create">Add new prefecture</a>
        </div> --}}
    </div>
@endsection