@extends('layouts.app')
@section('content')
    @php $isEditing = isset($advertisement) @endphp
    <main class="container mx-auto">
        <form action="{{ $isEditing ? route('advertisements.update', ['id' => $advertisement->id]) : route('advertisements.store')}}"
              method="POST">
            <div class="card">
                <div class="card-header">
                    <span>{{Auth::user()->username}}</span>
                    <span class="card-title">
                        {{$isEditing ? 'Update' : 'Create'}} advertisement
                    </span>
                </div>
                <div class="card-body">


                    @if($isEditing)
                        @method('PUT')
                    @endif
                    @csrf
                    <div class="form-group">
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                        @endif
                        <label for="title" class="block">{{ __('Title') }}</label>
                        <input type="text" class="border border-blue-lighter form-control" name="title" id="title"
                               value="{{$isEditing ? $advertisement->title : ''}}">
                    </div>
                    <div class="form-group">
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                        @endif
                        <label for="description"
                               class="block">{{ __('Description') }}</label>
                        <textarea class="border border-blue-lighter form-control" name="description" id="description"
                                  cols="30"
                                  rows="10">{{$isEditing ? $advertisement->description : ''}}</textarea>
                    </div>

                </div>
                <div class="card-footer justify-end">
                    <button type="success" class="btn btn-success">{{$isEditing ? 'Save' : 'Create'}}</button>
                </div>
            </div>
        </form>

    </main>
@endsection
