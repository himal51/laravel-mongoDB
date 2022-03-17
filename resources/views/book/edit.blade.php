@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Author Create ') }}</div>

            <div class="card-body">
                <a href="#" class="btn btn-primary">
                    Book Update
                </a>
                <div class="mt-3">
                    <h3>List for Book</h3>

                    <form action="{{ route('books.update', $book->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $book->name }}" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pages">Pages</label>
                            <input type="number" name="pages" value="{{ $book->pages }}" id="pages" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" value="{{ $book->price }}" id="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author_id">Author</label>
                            <select name="author_id" id="author_id" class="form-control">
                                @foreach ($authors as $author)
                                    <option value="{{ $author->_id }}" @if($author->_id == $book->author_id) selected @endif>
                                        {{ $author->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success"> Update</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection
