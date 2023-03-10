@extends('admin.master')

@section('content')

<form action="{{url('/insert-match')}}" enctype="multipart/form-data"  method='POST' melt>
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
        
        <select name="groups" id="">
            <option>select group</option>
            <option>1</option>
            <option>2</option>
            @error('groups')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </select>
        <div class="form-group">
            <label>team1</label>
            <input type="text" name="team1" id="">
            @error('team1')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>team2</label>
            <input type="text" name="team2" id="">
            @error('team2')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label>scour1</label>
            <input type="text" name="scour1" id="">
            @error('scour1')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>scour2</label>
            <input type="text" name="scour2" id="">
            @error('scour2')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>date</label>
            <input type="date" name="date" id="">
            @error('date')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label>img1</label>
            <input type="file" name="img1" id="">
            
        </div>
        <div class="form-group">
            <label>img2</label>
            <input type="file" name="img2" id="">
        </div>
        

        <button class='btn btn-danger'>Insert</button>
    </div>
</div>

</div>
</form>

@endsection