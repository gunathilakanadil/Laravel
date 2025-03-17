@extends('layouts.app')

@section('content')
<div class="container py-4" style="background-color: #f8f9fa;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header text-white bg-primary">
                    <h5 class="mb-0">Add New Employee</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="First_Name" class="form-label fw-semibold">First Name</label>
                                <input type="text" class="form-control border-secondary @error('First_Name') is-invalid @enderror" id="First_Name" name="First_Name" value="{{ old('First_Name') }}" required>
                                @error('First_Name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="Last_Name" class="form-label fw-semibold">Last Name</label>
                                <input type="text" class="form-control border-secondary @error('Last_Name') is-invalid @enderror" id="Last_Name" name="Last_Name" value="{{ old('Last_Name') }}" required>
                                @error('Last_Name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control border-secondary @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="Birthday" class="form-label fw-semibold">Birthday</label>
                                <input type="date" class="form-control border-secondary @error('Birthday') is-invalid @enderror" id="Birthday" name="Birthday" value="{{ old('Birthday') }}">
                                @error('Birthday')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="Address" class="form-label fw-semibold">Address</label>
                            <textarea class="form-control border-secondary @error('Address') is-invalid @enderror" id="Address" name="Address" rows="2">{{ old('Address') }}</textarea>
                            @error('Address')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="Zip_Code" class="form-label fw-semibold">Zip Code</label>
                                <input type="text" class="form-control border-secondary @error('Zip_Code') is-invalid @enderror" id="Zip_Code" name="Zip_Code" value="{{ old('Zip_Code') }}">
                                @error('Zip_Code')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-4">
                                <label for="Place" class="form-label fw-semibold">Place</label>
                                <input type="text" class="form-control border-secondary @error('Place') is-invalid @enderror" id="Place" name="Place" value="{{ old('Place') }}">
                                @error('Place')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-4">
                                <label for="Country" class="form-label fw-semibold">Country</label>
                                <input type="text" class="form-control border-secondary @error('Country') is-invalid @enderror" id="Country" name="Country" value="{{ old('Country') }}">
                                @error('Country')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="Description" class="form-label fw-semibold">Description</label>
                            <textarea class="form-control border-secondary @error('Description') is-invalid @enderror" id="Description" name="Description" rows="3">{{ old('Description') }}</textarea>
                            @error('Description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="Additional_Info" class="form-label fw-semibold">Additional Information</label>
                            <textarea class="form-control border-secondary @error('Additional_Info') is-invalid @enderror" id="Additional_Info" name="Additional_Info" rows="3">{{ old('Additional_Info') }}</textarea>
                            @error('Additional_Info')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
