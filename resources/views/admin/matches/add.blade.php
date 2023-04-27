@extends('admin.master')

@section('content')
    <div style="" class="container add-match-container">
        <form action="{{ url('/insert-match') }}" enctype="multipart/form-data" method='POST' melt>
            @csrf


            <div class="card">
                <div class="card-header">
                    <h4>
                        Add Matches
                        <a href="/admin/matches">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <select name="groups" id="">
                            <option>Select Group</option>
                            <option>1</option>
                            <option>2</option>
                            @error('groups')
                                <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                            @enderror
                        </select>
                    </div>
                    <div class="form-group has-input">
                        <label for="team1">Team 1</label>
                        <input type="text" name="team1" id="team1" class="form-control">
                        @error('team1')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group has-input">
                        <label for="team2">Team 2</label>
                        <input type="text" name="team2" id="team2" class="form-control">
                        @error('team2')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group has-input">
                        <label for="score1">Score 1</label>
                        <input type="text" name="score1" id="score1" class="form-control">
                        @error('scour1')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group has-input">
                        <label for="score2">Score 2</label>
                        <input type="text" name="score2" id="score2" class="form-control">
                        @error('scour2')
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
                        <label for="img1">Image 1</label>
                        <input type="file" name="img1" id="img1" class="form-control">

                    </div>
                    <div class="form-group has-input">
                        <label for="img2">Image 2</label>
                        <input type="file" name="img2" id="img2" class="form-control">
                    </div>


                    <div class="form-group">
                        <button class='btn btn-danger'>Insert</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
