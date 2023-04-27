@extends('admin.master')

@section('content')
    <div style="" class="container add-group-container">
        <form action="{{ url('/insert-groups') }}" method='POST'>
            @csrf

            <div class="card">
                <div class="card-header">
                    <h4>
                        Add Groups
                        <a href="/admin/groups">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <select name='name' class="form-select">
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
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select name="typeGroup" id="">
                            <option>Select Group</option>
                            <option>1</option>
                            <option>2</option>

                        </select>
                        @error('typeGroup')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group has-input">
                        <label for="matches">Matches</label>
                        <input type="number" name="matches" class="form-control" id="matches">
                        @error('matches')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group has-input">
                        <label for="goals">Goals</label>
                        <input type="number" name="goals" class="form-control" id="goals">
                        @error('goals')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group has-input">
                        <label for="disGoals">Dis Goals</label>
                        <input type="number" name="disGoals" class="form-control" id="disGoals">
                        @error('disGoals')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group has-input">
                        <label for="points">Points</label>
                        <input type="number" name="points" class="form-control" id="points">
                        @error('points')
                            <small style='font-size:20px' class='form-text text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class='btn btn-danger'>Insert</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
