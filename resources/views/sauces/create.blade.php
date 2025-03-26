@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4" style="color: #ff5733;">Ajouter une nouvelle sauce</h1>

    <form action="{{ route('sauces.store') }}" method="POST" enctype="multipart/form-data" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
        @csrf

        <!-- Nom de la sauce -->
        <div class="mb-3">
            <label for="name" class="form-label" style="color: #007bff; font-weight: bold;">Nom de la sauce</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback" style="color: #dc3545;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Fabricant -->
        <div class="mb-3">
            <label for="manufacturer" class="form-label" style="color: #007bff; font-weight: bold;">Fabricant</label>
            <input type="text" class="form-control @error('manufacturer') is-invalid @enderror" id="manufacturer" name="manufacturer" value="{{ old('manufacturer') }}" required>
            @error('manufacturer')
                <div class="invalid-feedback" style="color: #dc3545;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label" style="color: #007bff; font-weight: bold;">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback" style="color: #dc3545;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ingrédient principal -->
        <div class="mb-3">
            <label for="mainPepper" class="form-label" style="color: #007bff; font-weight: bold;">Ingrédient principal</label>
            <input type="text" class="form-control @error('mainPepper') is-invalid @enderror" id="mainPepper" name="mainPepper" value="{{ old('mainPepper') }}" required>
            @error('mainPepper')
                <div class="invalid-feedback" style="color: #dc3545;">{{ $message }}</div>
            @enderror
        </div>

        <!-- URL de l'image -->
        <div class="mb-3">
            <label for="imageUrl" class="form-label" style="color: #007bff; font-weight: bold;">URL de l'image</label>
            <input type="text" class="form-control @error('imageUrl') is-invalid @enderror" id="imageUrl" name="imageUrl" value="{{ old('imageUrl') }}">
            @error('imageUrl')
                <div class="invalid-feedback" style="color: #dc3545;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Niveau de piquant -->
        <div class="mb-3">
            <label for="heat" class="form-label" style="color: #007bff; font-weight: bold;">Niveau de piquant</label>
            <input type="number" class="form-control @error('heat') is-invalid @enderror" id="heat" name="heat" value="{{ old('heat') }}" min="1" max="10" required>
            @error('heat')
                <div class="invalid-feedback" style="color: #dc3545;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Bouton de soumission -->
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success" style="font-weight: bold; padding: 12px 20px; font-size: 16px; border-radius: 30px; background-color: #28a745; border-color: #28a745; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);">
                Ajouter la sauce
            </button>
        </div>
    </form>
</div>
@endsection
