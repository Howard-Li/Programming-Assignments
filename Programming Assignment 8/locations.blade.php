@extends('layouts.page')

@section('title', 'Locations')

@section('content')
    @parent


@endsection

@section('content2')

        @foreach ($locations as $location)
            <p>{{ $location->value }}</p>
            <ol>
                @foreach($location->stories as $story)
                    <li>{{ $story->title }}</li>
                @endforeach
            </ol>
        @endforeach

@endsection

