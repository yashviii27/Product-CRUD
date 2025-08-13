@extends('layouts.app')

@section('content')

  
<div class="container">
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
        </div>
           <div class="mb-3">
            <label>Sku</label>
            <textarea name="sku" class="form-control">{{ $product->sku }}</textarea>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" step="0.01" value="{{ $product->price }}" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label>Image</label>
            <input type="string" name="image" step="0.01" value="{{ $product->image }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
