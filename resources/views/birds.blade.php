@extends('layout')

@section('title')
    Birds
@endsection

@section('content')
    <div class="bg-light-subtle py-3 py-md-5">
        <div class="container">
            <h1 class="text-center my-4 my-sm-5">Birds of Guatemala</h1>
            <p class="text-center"><em>Tap on the image to play/pause the audio</em></p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                @foreach ($birds as $bird)
                <div class="col">
                    <div id="card-{{$bird['id']}}" class="card text-center bird-card">
                        <img class="card-img-top bird-audio-img" src="{{$bird['sono']['med']}}" alt="Sonogram{{$bird['id']}}" loading="lazy" data-target="{{$bird['id']}}">
                        <audio id="{{$bird['id']}}" src="{{$bird['file']}}" controls preload="none"></audio>
                        <div class="card-body">
                            <h3 class="card-title fs-3">{{ $bird['gen'] }}</h3>
                            <h4 class="card-subtitle text-body-secondary fs-5">{{ $bird['en'] }}</h4>
                            <p class="card-text fs-6">{{ $bird['loc'] }}, {{ $bird['cnt']}} </p>
                        </div>
                        <div class="card-footer text-body-secondary">
                            {{$bird['rec']}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('footer-imports')
    <script src="{{ asset("js/script.js") }}"></script>
@endsection