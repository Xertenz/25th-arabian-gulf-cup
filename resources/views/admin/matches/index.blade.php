@extends('admin.master')

@section('content')


<div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">
<div class="card">
    <div class="card-header">
        <h4 class='m-30'>
            Matches
            <a href="/add-match">Add</a>
        </h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>team1</th>
                    <th>team2</th>
                    <th>scour1</th>
                    <th>scour2</th>
                    <th>group type</th>
                    <th>date</th>
                    <th>img1</th>
                    <th>img2</th>

                </tr>
            </thead>
            <tbody>
            @foreach($matches as $m)
            <tr>
                    <td>{{$m->team1}}</td>
                    <td>{{$m->team2}}</td>
                    <td>{{$m->scour1}}</td>
                    <td>{{$m->scour2}}</td>
                    <td>{{$m->groups}}</td>
                    <td>{{$m->date}}</td>
                    <td><img width='50%' src="{{url('/uploads/img/'.$m->img1)}}" alt=""></td>
                    <td><a href="{{url('/match-delete/'.$m->id)}}">Delete</a></td>
                    <td><a href="{{url('/match-edit/'.$m->id)}}">Edit</a></td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection