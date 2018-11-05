@extends('layouts.app')
@section('content')
    <main class="container mx-auto">
        <div class="list">


            {{--@foreach($advertisements as $advertisement)--}}
            @include('advertisement.item')
            @include('advertisement.item')
            @include('advertisement.item')
            @include('advertisement.item')
            @include('advertisement.item')
            {{--@endforeach--}}
        </div>
    </main>

@endsection