@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Update Employee</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update', $employee->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="employee_id">Employee ID</label>
                                <input type="text" name="employee_id" id="employee_id" class="form-control" value="{{ $employee->employee_id }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $employee->phone }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control">{{ $employee->address }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="number" name="salary" id="salary" class="form-control" step="0.01" value="{{ $employee->salary }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
