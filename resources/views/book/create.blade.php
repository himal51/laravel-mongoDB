@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Book Create ') }}</div>

            <div class="card-body">
                <a href="#" class="btn btn-primary">
                    Book Create
                </a>
                <div class="mt-3">
                    <h3>List for Books</h3>

                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pages">Pages</label>
                            <input type="number" name="pages" id="pages" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author_id">Author</label>
                            <select name="author_id" id="author_id" class="form-control">
                                @foreach ($authors as $author)
                                    <option value="{{ $author->_id }}"> {{ $author->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success"> Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
