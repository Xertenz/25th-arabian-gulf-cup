@extends('admin.master')

@section('content')
<div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">
<div class="card">
    <div class="card-header">
        <h4 class='m-30'>
            Groups
            <a href="/add-groups">Add</a>
        </h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Goals</th>
                    <th>disGoals</th>
                    <th>Matches</th>
                    <th>Points</th>

                </tr>
            </thead>
            <tbody>
                
                    @foreach($group as $g)
                    <tr>
                    <td>{{$g->name}}</td>
                    <td>{{$g->goals}}</td>
                    <td>{{$g->disGoals}}</td>
                    <td>{{$g->matches}}</td>
                    <td>{{$g->points}}</td>
                    <td><a class='btn btn-danger' href="{{url('/delete-group/'.$g->id)}}">Delete</a></td>
                    <td><a class='btn btn-primary' href="{{url('/edit-group/'.$g->id)}}">Edit</a></td>

                    </tr>
                    @endforeach
               
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection