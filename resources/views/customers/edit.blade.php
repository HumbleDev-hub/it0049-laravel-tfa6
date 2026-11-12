@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Customer</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name', $customer->full_name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $customer->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $customer->phone) }}">
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar Image</label>
            @if($customer->avatar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $customer->avatar) }}" alt="Current Avatar" width="60" height="60" class="rounded-circle">
                </div>
            @endif
            <input type="file" class="form-control" id="avatar" name="avatar">
        </div>

        <button type="submit" class="btn btn-primary">Update Customer</button>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection