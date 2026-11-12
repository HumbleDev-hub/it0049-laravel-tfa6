@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Customer Profile</h2>
    
    <div class="card mt-3">
        <div class="card-body text-center">
            @if($customer->avatar)
                <img src="{{ asset('storage/' . $customer->avatar) }}" alt="Avatar" width="120" height="120" class="rounded-circle mb-3 shadow">
            @else
                <div class="bg-secondary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 120px; height: 120px; font-size: 2rem;">
                    {{ strtoupper(substr($customer->full_name, 0, 2)) }}
                </div>
            @endif
            <h4>{{ $customer->full_name }}</h4>
            <p class="text-muted">{{ $customer->email }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Phone:</strong> {{ $customer->phone ?? 'N/A' }}</li>
            <li class="list-group-item"><strong>Created At:</strong> {{ $customer->created_at->format('M d, Y H:i') }}</li>
        </ul>
        <div class="card-body">
            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection