@extends('pages.master')

@section('content')

<div class="groups-content">
      <div class="container">
        <div class="group-items">
          <div class="group-item">
            <h2 class="group-title">Group A</h2>
            <table class="group-table">
              <thead>
                <tr>
                  <th>Team</th>
                  <th>W</th>
                  <th>L</th>
                  <th>D</th>
                  <th>Pts</th>
                </tr>
              </thead>
              <tbody>
                @foreach($group1 as $g)
                <tr>
                <td>{{$g->name}}</td>
                <td>{{$g->matches}}</td>
                <td>{{$g->disGoals}}</td>
                <td>{{$g->goals}}</td>
                <td>{{$g->points}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="group-item">
            <h2 class="group-title">Group B</h2>
            <table class="group-table">
              <thead>
                <tr>
                  <th>Team</th>
                  <th>W</th>
                  <th>L</th>
                  <th>D</th>
                  <th>Pts</th>
                </tr>
              </thead>
              <tbody>
              @foreach($group2 as $g2)
                <tr>
                <td>{{$g2->name}}</td>
                <td>{{$g2->matches}}</td>
                <td>{{$g2->disGoals}}</td>
                <td>{{$g2->goals}}</td>
                <td>{{$g2->points}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- <script src="js/navbar.js"></script> -->
    </div>

@endsection