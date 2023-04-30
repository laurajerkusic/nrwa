@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Employees') }}</div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ __('Emp No') }}</th>
                        <th>{{ __('Birth Date') }}</th>
                        <th>{{ __('First Name') }}</th>
                        <th>{{ __('Last Name') }}</th>
                        <th>{{ __('Gender') }}</th>
                        <th>{{ __('Hire Date') }}</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
</thead>
                <tbody>
                <a href="{{ route('employees.create')}}" class="btn btn-sm btn-primary">{{ __('Create') }}</a>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->emp_no }}</td>
                            <td>{{ $employee->birth_date}}</td>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->gender === 'M' ? __('Male') : __('Female') }}</td>
                            <td>{{ $employee->hire_date}}</td>
                            <td>
                                <a href="{{ route('employees.edit', $employee->emp_no) }}" class="btn btn-sm btn-primary">{{ __('Edit') }}</a>
                                <form method="POST" action="{{ route('employees.destroy', $employee->emp_no) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
