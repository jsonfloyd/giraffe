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
                <a href="{{route('advertisements.edit', ['advertisement' => 1])}}" class="btn btn-success">Edit</a>
                <form action="{{route('advertisements.edit', ['advertisement' => 1])}}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-destroy">Delete</button>
                </form>
            @endcan
        </div>
        <div class="details">
            <a href="{{route('advertisements.show', ['advertisement' => 1])}}" class="btn btn-primary">Details</a>
        </div>

    </div>
</div>