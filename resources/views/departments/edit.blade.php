@extends('layouts/app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Product Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('departments.update', $department->dept_no) }}">
        @csrf
          @method('PATCH')
          <div class="form-group">
              <label for="name">Product type Name:</label>
              <input type="text" class="form-control" name="dept_name" value="{{ $department->name }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection