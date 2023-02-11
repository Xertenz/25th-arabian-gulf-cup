@extends('admin.master')

@section('content')

<form action="{{url('/insert-groups')}}" method='POST'>
    @csrf

    <div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">

<div class="card">
    <div class="card-header">
        <h4>
            Add Groups
            <a href="/admin/groups">Back</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <select name='name'>
                <option>Select Team</option>
                <option>العراق</option>
                <option>السعودية</option>
                <option>اليمن</option>
                <option>الكويت</option>
                <option>عمان</option>
                <option>البحرين</option>
                <option>قطر</option>
                <option>الامارات</option>

            </select>
            @error('name')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <select name="typeGroup" id="">
            <option>select group</option>
            <option>1</option>
            <option>2</option>

        </select>
        @error('typeGroup')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        <div class="form-group">
            <label>Matches</label>
            <input type="text" name="matches" id="">
            @error('matches')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label>goals</label>
            <input type="text" name="goals" id="">
            @error('goals')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>dis Goals</label>
            <input type="text" name="disGoals" id="">
            @error('disGoals')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="text" name="points" id="">
            @error('points')
            <small style='font-size:20px' class='form-text text-danger'>{{$message}}</small>
            @enderror
        </div>
        <button class='btn btn-danger'>Insert</button>
    </div>
</div>

</div>
</form>

@endsection