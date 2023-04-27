@extends('admin.master')

@section('content')
    <div style="" class="container add-news-container">
        <form action="{{ url('/insert-news') }}" enctype="multipart/form-data" method='POST' melt>
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4>
                        Add News
                        <a href="/admin/news">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <div class="form-group has-input">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group has-textarea">
                        <label for="description">Description</label>
                        <!-- <input type="text" name="description" id="description" class="form-control"> -->
                        <textarea class="form-control" id="description"></textarea>
                        @error('description')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group has-input">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date" class="form-control">
                        @error('date')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group has-input">
                        <label for="img">Image</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>

                    <div>
                        <button class='btn btn-danger'>Insert</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
