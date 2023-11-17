@extends('admin\main')
@section('title')
    Contact 
@endsection
@section('content-section')

<div class="m-sm-4">

<form action="{{ url('/') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}" />
    <p class="text-danger">
        @error('name')
            {{ $message }}
        @enderror
    </p>
    
    </div>
    <div class="mb-3">
        <label class="form-label">Company</label>
        <input class="form-control form-control-lg" type="text" name="company" placeholder="Enter your company name" value="{{ old('company') }}" />
        <p class="text-danger">
            @error('company')
                {{ $message }}
            @enderror
        </p>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" />
        <p class="text-danger">
            @error('email')
                {{ $message }}
            @enderror
        </p>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
        <p class="text-danger">
            @error('password')
                {{ $message }}
            @enderror
        </p>
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input class="form-control form-control-lg" type="file" name="file" />
        <p class="text-danger">
            @error('file')
                {{ $message }}
            @enderror
        </p>
    </div>
    
    <div class="text-center mt-3">
        {{-- <a href="" class="btn btn-lg btn-primary">Sign up</a> --}}
        <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
    </div>
</form>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  
@endif

</div>
@endsection