@extends('admin.master')

@section('content')

<form action="{{url('/update-news/'.$news->id)}}" enctype="multipart/form-data"  method='POST' melt>
    @csrf

    <div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">

<div class="card">
    <div class="card-header">
        <h4>
            Add Matches
            <a href="/matches">Back</a>
        </h4>
    </div>
    <div class="card-body">
    
        <div class="form-group">
            <label>name</label>
            <input type="text" value='{{$news->name}}' name="name" id="">
        </div>
        <div class="form-group">
            <label>description</label>
            <input type="text" value='{{$news->description}}' name="description" id="">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" value='{{$news->date}}' name="date" id="">
        </div>
        <div class="form-group">
            <label>image</label>
            <input type="file" name="img" id="">
        </div>
        
        
        <button class='btn btn-danger'>Update</button>
    </div>
</div>

</div>
</form>

@endsection