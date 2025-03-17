@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Edit Employee</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('employees.update', $employee) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="First_Name" class="form-label">First Name</label>
                                <input type="text" class="form-control @error('First_Name') is-invalid @enderror" id="First_Name" name="First_Name" value="{{ old('First_Name', $employee->First_Name) }}" required>
                                @error('First_Name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="Last_Name" class="form-label">Last Name</label>
                                <input type="text" class="form-control @error('Last_Name') is-invalid @enderror" id="Last_Name" name="Last_Name" value="{{ old('Last_Name', $employee->Last_Name) }}" required>
                                @error('Last_Name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $employee->email) }}" required>
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="Birthday" class="form-label">Birthday</label>
                                <input type="date" class="form-control @error('Birthday') is-invalid @enderror" id="Birthday" name="Birthday" value="{{ old('Birthday', $employee->Birthday) }}">
                                @error('Birthday')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <textarea class="form-control @error('Address') is-invalid @enderror" id="Address" name="Address" rows="2">{{ old('Address', $employee->Address) }}</textarea>
                            @error('Address')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="Zip_Code" class="form-label">Zip Code</label>
                                <input type="text" class="form-control @error('Zip_Code') is-invalid @enderror" id="Zip_Code" name="Zip_Code" value="{{ old('Zip_Code', $employee->Zip_Code) }}">
                                @error('Zip_Code')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-4">
                                <label for="Place" class="form-label">Place</label>
                                <input type="text" class="form-control @error('Place') is-invalid @enderror" id="Place" name="Place" value="{{ old('Place', $employee->Place) }}">
                                @error('Place')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-4">
                                <label for="Country" class="form-label">Country</label>
                                <input type="text" class="form-control @error('Country') is-invalid @enderror" id="Country" name="Country" value="{{ old('Country', $employee->Country) }}">
                                @error('Country')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="Description" class="form-label">Description</label>
                            <textarea class="form-control @error('Description') is-invalid @enderror" id="Description" name="Description" rows="3">{{ old('Description', $employee->Description) }}</textarea>
                            @error('Description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="Additional_Info" class="form-label">Additional Information</label>
                            <textarea class="form-control @error('Additional_Info') is-invalid @enderror" id="Additional_Info" name="Additional_Info" rows="3">{{ old('Additional_Info', $employee->Additional_Info) }}</textarea>
                            @error('Additional_Info')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
