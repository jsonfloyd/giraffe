@extends('layouts.app')
@section('content)
    @php $isEditing = isset($advertisement) @endphp
    <main class="container mx-auto">
        <form action="{{ $isEditing ? route('advertisements.update', ['id' => $advertisement->id]) : route('advertisements.create')}}"
              method="POST">
            @if($isEditing)
                @method('PUT')
            @endif
            @csrf
            @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
            <input type="text" name="title" id="title" value="{{$isEditing ? $advertisement->title : ''}}">
            @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
            <textarea name="description" id="description" cols="30"
                      rows="10">{{$isEditing ? $advertisement->description : ''}}</textarea>
            <button class="btn btn-success">{{$isEditing ? 'Save' : 'Create'}}</button>
        </form>
    </main>
@endsection