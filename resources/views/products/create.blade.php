@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?=format&fit=crop&w=1500&q=80');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    </style>
<div class="container">
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" step="0.01" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
