@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Add New Employee') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('employees.store') }}">
                @csrf

                <div class="form-group">
                    <label for="emp_no">{{ __('Emp No') }}</label>
                    <input id="emp_no" type="text" class="form-control" name="emp_no" value="{{ old('emp_no') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="birth_date">{{ __('Birth Date') }}</label>
                    <input id="birth_date" type="date" class="form-control" name="birth_date" value="{{ old('birth_date') }}" required>
                </div>

                <div class="form-group">
                    <label for="first_name">{{ __('First Name') }}</label>
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>
                </div>

                <div class="form-group">
                    <label for="last_name">{{ __('Last Name') }}</label>
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
                </div>

                <div class="form-group">
                    <label for="gender">{{ __('Gender') }}</label></br>
                    <input type="radio" id="M" name="gender" value="M">
                    <label for="M">Muško</label><br>
                    <input type="radio" id="F" name="gender" value="F">
                    <label for="F">Žensko</label><br>
                <div class="form-group">
                    <label for="birth_date">{{ __('Hire Date') }}</label>
                    <input id="birth_date" type="date" class="form-control" name="hire_date" value="{{ old('hire_date') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Add employee</button>
      </form>
    @endsection