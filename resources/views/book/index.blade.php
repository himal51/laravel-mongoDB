@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Book') }}</div>

            <div class="card-body">
                <a href="{{ route('books.create') }}" class="btn btn-primary">
                    Create New Book
                </a>
                <div class="mt-3">
                    <h3>List for Books</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Pages</th>
                                <th>Author Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                                <tr>
                                    <th>{{ $book->name }}</th>
                                    <th>৳ {{ $book->price }}</th>
                                    <th>{{ $book->pages }}</th>
                                    <th>{{ optional($book->author)->name }}</th>
                                    <th class="d-flex">
                                        <a href="{{ route('books.edit', [$book->id]) }}" class="btn btn-warning"> Edit</a>
                                        &nbsp; &nbsp; &nbsp;
                                        <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"> Delete</button>
                                        </form>
                                    </th>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="5" class="text-center"> No Book added you</th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
