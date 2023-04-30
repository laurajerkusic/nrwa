@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Add New Salary') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('salaries.store') }}">
                @csrf

                <div class="form-group">
                    <label for="emp_no">{{ __('Emp No') }}</label>
                    <input id="emp_no" type="text" class="form-control" name="emp_no" value="{{ old('emp_no') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="salary">{{ __('Salary') }}</label>
                    <input id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}" required>
                </div>

                <div class="form-group">
                    <label for="from_date">{{ __('From Date') }}</label>
                    <input id="from_date" type="date" class="form-control" name="from_date" value="{{ old('from_date') }}" required>
                </div>

                <div class="form-group">
                    <label for="to_date">{{ __('To Date') }}</label>
                    <input id="to_date" type="date" class="form-control" name="to_date" value="{{ old('to_date') }}" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button
