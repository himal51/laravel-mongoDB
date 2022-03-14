@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Author Create ') }}</div>

            <div class="card-body">
                <a href="#" class="btn btn-primary">
                    Author Update
                </a>
                <div class="mt-3">
                    <h3>List for Authors</h3>

                    <form action="{{ route('authors.update', $author->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ $author->name }}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success"> Update</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection
