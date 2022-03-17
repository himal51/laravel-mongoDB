@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Author') }}</div>

            <div class="card-body">
                <a href="{{ route('authors.create') }}" class="btn btn-primary">
                    Create New Author
                </a>
                <div class="mt-3">
                    <h3>List for Authors</h3>

                    <ul class="list-group">
                        @forelse($authors as $author)
                            <li class="list-group-item">
                                {{ $author->name }} | Total Books -  {{ count($author->books) }}

                                <span class="float-end">
                                    <a href="{{ route('authors.edit', [$author->id]) }}" class="btn btn-warning"> Edit</a>
                                    &nbsp; &nbsp; &nbsp;
                                    <form action="{{ route('authors.destroy', $author->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"> Delete</button>
                                    </form>
                                </span>
                            </li>

                        @empty
                            <li class="list-group-item">No Author added you </li>
                        @endforelse
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection
