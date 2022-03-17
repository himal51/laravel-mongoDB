@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Author Create ') }}</div>

            <div class="card-body">
                <a href="#" class="btn btn-primary">
                    Author Create
                </a>
                <div class="mt-3">
                    <h3>List for Authors</h3>

                    <form action="{{ route('authors.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success"> Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
