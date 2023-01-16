@extends('admin.master')

@section('content')


<div style="align-items: center; text-align:center; margin-left:300px; margin-top:30px; width:70%;" class="container">
<div class="card">
    <div class="card-header">
        <h4 class='m-30'>
            News
            <a href="/add-news">Add</a>
        </h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
            @foreach($news as $n)
            <tr>
                <td>{{$n->name}}</td>
                <td>{{$n->description}}</td>
                <td>{{$n->date}}</td>
                <td><img src="{{url('uploads/img/'.$n->img)}}" width='10%' alt=""></td>
                <td><a href="{{url('delete-news/'.$n->id)}}">Delete</a></td>
                <td><a href="{{url('edit-news/'.$n->id)}}">Edit</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection