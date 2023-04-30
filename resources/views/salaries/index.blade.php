@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Salaries') }}</div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ __('Emp No') }}</th>
                        <th>{{ __('Salary') }}</th>
                        <th>{{ __('From Date') }}</th>
                        <th>{{ __('To Date') }}</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($salaries as $salary)
                        <tr>
                            <td>{{ $salary->emp_no }}</td>
                            <td>{{ $salary->salary }}</td>
                            <td>{{ $salary->from_date }}</td>
                            <td>{{ $salary->to_date }}</td>
                            <td>
                                <a href="{{ route('salaries.edit', $salary->id) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
