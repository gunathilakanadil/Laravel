@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Employee Details</h5>
                    <div>
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Full Name:</div>
                        <div class="col-md-9">{{ $employee->full_name }}</div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Email:</div>
                        <div class="col-md-9">{{ $employee->email }}</div>
                    </div>
                    
                    @if($employee->Birthday)
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Birthday:</div>
                        <div class="col-md-9">{{ \Carbon\Carbon::parse($employee->Birthday)->format('F d, Y') }}</div>
                    </div>
                    @endif
                    
                    @if($employee->Address)
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Address:</div>
                        <div class="col-md-9">{{ $employee->Address }}</div>
                    </div>
                    @endif
                    
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Location:</div>
                        <div class="col-md-9">
                            @if($employee->Place || $employee->Zip_Code || $employee->Country)
                                {{ $employee->Place ?? '' }}
                                {{ $employee->Zip_Code ? ($employee->Place ? ', ' . $employee->Zip_Code : $employee->Zip_Code) : '' }}
                                {{ $employee->Country ? ($employee->Place || $employee->Zip_Code ? ', ' . $employee->Country : $employee->Country) : '' }}
                            @else
                                Not specified
                            @endif
                        </div>
                    </div>
                    
                    @if($employee->Description)
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Description:</div>
                        <div class="col-md-9">{{ $employee->Description }}</div>
                    </div>
                    @endif
                    
                    @if($employee->Additional_Info)
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Additional Info:</div>
                        <div class="col-md-9">{{ $employee->Additional_Info }}</div>
                    </div>
                    @endif
                    
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Created At:</div>
                        <div class="col-md-9">{{ $employee->created_at->format('F d, Y h:i A') }}</div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Last Updated:</div>
                        <div class="col-md-9">{{ $employee->updated_at->format('F d, Y h:i A') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection