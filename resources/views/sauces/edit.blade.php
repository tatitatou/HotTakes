@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center" style="color: #ff5733;">Modifier la sauce : <strong>{{ $sauce->name }}</strong></h2>

    {{-- Affichage des erreurs --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulaire de modification --}}
    <form action="{{ route('sauces.update', $sauce->sauceId) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nom de la sauce</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $sauce->name) }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="manufacturer" class="form-label">Fabricant</label>
            <input type="text" class="form-control @error('manufacturer') is-invalid @enderror" id="manufacturer" name="manufacturer" value="{{ old('manufacturer', $sauce->manufacturer) }}" required>
            @error('manufacturer')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description', $sauce->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mainPepper" class="form-label">Ingrédient principal</label>
            <input type="text" class="form-control @error('mainPepper') is-invalid @enderror" id="mainPepper" name="mainPepper" value="{{ old('mainPepper', $sauce->mainPepper) }}" required>
            @error('mainPepper')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="heat" class="form-label">Niveau de piquant (1-10)</label>
            <input type="number" class="form-control @error('heat') is-invalid @enderror" id="heat" name="heat" value="{{ old('heat', $sauce->heat) }}" min="1" max="10" required>
            @error('heat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="imageUrl" class="form-label">URL de l'image</label>
            <input type="text" class="form-control @error('imageUrl') is-invalid @enderror" id="imageUrl" name="imageUrl" value="{{ old('imageUrl', $sauce->imageUrl) }}" required>
            @error('imageUrl')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success" style="width: 48%;">Enregistrer les modifications</button>
            <a href="{{ route('sauces.index') }}" class="btn btn-secondary" style="width: 48%;">Annuler</a>
        </div>
    </form>
</div>
@endsection
