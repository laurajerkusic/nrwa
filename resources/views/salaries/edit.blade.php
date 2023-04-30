@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Edit Salary') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('salaries.update', $salary->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="emp_no">{{ __('Emp No') }}</label>
                    <input id="emp_no" type="text" class="form-control" name="emp_no" value="{{ $salary->emp_no }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="salary">{{ __('Salary') }}</label>
                    <input id="salary" type="text" class="form-control" name="salary" value="{{ $salary->salary }}" required>
                </div>

                <div class="form-group">
                    <label for="from_date">{{ __('From Date') }}</label>
                    <input id="from_date" type="date" class="form-control" name="from_date" value="{{ $salary->from_date }}" required>
                </div>

                <div class="form-group">
                    <label for="to_date">{{ __('To Date') }}</label>
                    <input id="to_date" type="date" class="form-control" name="to_date" value="{{ $salary->to_date }}" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
