

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
<div class="container" >
    <h1>Product List</h1>
    

    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Create Product</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th> <!-- Added Description column -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->description }}</td> <!-- Show description -->
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm" style=border-radius:2px>Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>