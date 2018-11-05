@extends('layouts.app')
@section('content')
    <main class="container mx-auto">
    <div class="card">
        <div class="card-header">
            <p>{{$advertisement->author_name}}</p>
            <p>{{$advertisement->created_at}}</p>
        </div>
        <div class="card-body">
        <span class="card-title">
            {{$advertisement->title}}
        </span>
            <p>
                {{$advertisement->description}}
            </p>
        </div>
        <div class="card-footer">
            <div class="controls">
                @can('update', $advertisement)
                    <a href="{{route('advertisements.edit', ['advertisement' => $advertisement->id])}}" class="btn btn-success">Edit</a>
                    <form action="{{route('advertisements.destroy', ['advertisement' => $advertisement->id])}}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-destroy">Delete</button>
                    </form>
                @endcan
            </div>

        </div>
    </div>
    </main>
@endsection
