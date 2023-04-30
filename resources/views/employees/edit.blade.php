@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Edit Employee') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('employees.update', $employee->emp_no) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="emp_no">{{ __('Emp No') }}</label>
                    <input id="emp_no" type="text" class="form-control" name="emp_no" value="{{ $employee->emp_no }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="birth_date">{{ __('Birth Date') }}</label>
                    <input id="birth_date" type="date" class="form-control" name="birth_date" value="{{ $employee->birth_date}}" required>
                </div>

                <div class="form-group">
                    <label for="first_name">{{ __('First Name') }}</label>
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $employee->first_name }}" required>
                </div>

                <div class="form-group">
                    <label for="last_name">{{ __('Last Name') }}</label>
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $employee->last_name }}" required>
                </div>

                <div class="form-group">
                    <label for="gender">{{ __('Gender') }}</label>
                    <select id="gender" class="form-control" name="gender" required>
                        <option value="M" {{ $employee->gender === 'M' ? 'selected' : '' }}>{{ __('Male') }}</option>
                        <option value="F" {{ $employee->gender === 'F' ? 'selected' : '' }}>{{ __('Female') }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="birth_date">{{ __('Hire Date') }}</label>
                    <input id="birth_date" type="date" class="form-control" name="hire_date" value="{{ $employee->hire_date}}" required>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>

            
@endsection