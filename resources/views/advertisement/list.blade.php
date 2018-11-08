@extends('layouts.app')
@section('content')
    <main class="container mx-auto mt-4">
        <div class="create-new text-center">
            <a href="{{route('advertisements.create')}}" class="btn btn-primary">Create</a>
        </div>
        <div class="list">
            @foreach($advertisements as $advertisement)
                @include('advertisement.item', ['advertisement' => $advertisement])
            @endforeach
        </div>
    </main>
    <nav class="container mx-auto mt-4">
        {{ $advertisements->links() }}
    </nav>
@endsection
