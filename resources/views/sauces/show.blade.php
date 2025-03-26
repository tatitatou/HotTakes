@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded" style="border-radius: 15px;">
                <img src="{{ $sauce->imageUrl }}" class="card-img-top" alt="{{ $sauce->name }}" style="height: 300px; object-fit: cover; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                <div class="card-body">
                    <h2 class="card-title" style="color: #ff5733; font-weight: bold;">{{ $sauce->name }}</h2>
                    <p class="card-text"><strong>Fabricant :</strong> {{ $sauce->manufacturer }}</p>
                    <p class="card-text"><strong>Description :</strong> {{ $sauce->description }}</p>
                    <p class="card-text"><strong>Ingrédient principal :</strong> 🌶️ {{ $sauce->mainPepper }}</p>
                    <p class="card-text"><strong>Épicé :</strong> {{ $sauce->heat }}/10</p>
                    <p class="card-text">
                        <strong>Likes :</strong> 👍 {{ $sauce->likes }}  
                        | <strong>Dislikes :</strong> 👎 {{ $sauce->dislikes }}
                    </p>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('sauces.index') }}" class="btn btn-secondary btn-lg" style="border-radius: 25px; padding: 10px 20px;">Retour</a>
                        <a href="{{ route('sauces.edit', $sauce->sauceId) }}" class="btn btn-warning btn-lg" style="border-radius: 25px; padding: 10px 20px;">Modifier</a>

                        <form action="{{ route('sauces.destroy', $sauce->sauceId) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-lg" style="border-radius: 25px; padding: 10px 20px;" onclick="return confirm('Supprimer cette sauce ?')">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
