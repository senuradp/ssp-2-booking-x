<div>
    <h1>Model List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                @foreach ($columns as $column)
                    <th scope="col">{{ ucwords(str_replace('_', ' ', $column)) }}</th>
                @endforeach
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($models as $model)
                <tr>
                    <th scope="row">{{ $model->id }}</th>
                    @foreach ($columns as $column)
                        {{-- dynamically allocting column names --}}
                        <td>
                            @if ($column === 'status' && $model->status === 1)
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-success" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" height="30">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            @else
                                {{ $model->{$column} }}
                            @endif
                        </td>
                    @endforeach

                    <td>
                        {{-- dynamically creating the actions routes with the models type --}}
                        @php
                            $route = strtolower(Str::plural(class_basename($model)));
                        @endphp
                        <a href="{{ route($route . '.show', $model->id) }}" class="btn btn-sm btn-success">View</a>
                        <a href="{{ route($route . '.edit', $model->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        {{-- <a href="{{ route('models.destroy', $model->id) }}" class="btn btn-sm btn-danger">Delete</a> --}}

                        {{-- to send the delete request via a form otherwise it goes as a get request --}}
                        <form id="model-delete-{{ $model->id }}" action="{{ route($route . '.destroy', $model->id) }}"
                            method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button"
                                onclick="confirm('Are you sure? ') ? document.getElementById('model-delete-{{ $model->id }}').submit() : ''"
                                class="btn btn-sm btn-danger">
                                Delete
                            </button>

                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{-- print the  paginated links --}}
    {{-- then go to app service provider in providers and add the bootstrap 5 pagination method in the boot method --}}
    {{ $models->links() }}
    {{-- to check if data is coming --}}
    {{-- {{ dd($users) }} --}}
</div>
