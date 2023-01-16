@extends('admin.master')

@section('content')

<form action="{{url('/update-match/'.$match->id)}}" enctype="multipart/form-data"  method='POST' melt>
    @csrf

    <div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">

<div class="card">
    <div class="card-header">
        <h4>
            Edit Matches
            <a href="/matches">Back</a>
        </h4>
    </div>
    <div class="card-body">
        
        <select name="groups" id="">
            <option>select group</option>
            <option>1</option>
            <option>2</option>

        </select>
        <div class="form-group">
            <label>team1</label>
            <input type="text" value='{{$match->team1}}' name="team1" id="">
        </div>
        <div class="form-group">
            <label>team2</label>
            <input type="text" value='{{$match->team2}}' name="team2" id="">
        </div>
        
        <div class="form-group">
            <label>scour1</label>
            <input type="text" name="scour1" value='{{$match->scour1}}' id="">
        </div>
        <div class="form-group">
            <label>scour2</label>
            <input type="text" value='{{$match->scour2}}' name="scour2" id="">
        </div>
        <div class="form-group">
            <label>date</label>
            <input type="date" value='{{$match->date}}' name="date" id="">
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