@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($sauces as $sauce)
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-light rounded" style="background-color: #f8f9fa; border: 2px solid #ddd;">
                    <!-- Image -->
                    <img src="{{ $sauce->imageUrl }}" class="card-img-top" alt="{{ $sauce->name }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
                    
                    <div class="card-body">
                        <!-- Nom de la sauce -->
                        <h5 class="card-title" style="color: #ff5733; font-weight: bold;">{{ $sauce->name }}</h5>
                        
                        <!-- Fabricant -->
                        <p class="card-text" style="color: #333; font-size: 14px;"><strong>Fabricant :</strong> <span style="color: #007bff;">{{ $sauce->manufacturer }}</span></p>

                        <!-- Niveau d'épice -->
                        <p class="card-text" style="font-size: 14px;"><strong>Épicé :</strong> <span style="color: #ff9900;">🌶️ {{ $sauce->heat }}/10</span></p>
                        
                        <!-- Ingrédient principal -->
                        <p class="card-text" style="font-size: 14px;"><strong>Ingrédient principal :</strong> <span style="color: #28a745;">{{ $sauce->mainPepper }}</span></p>
                        
                        <!-- Likes et Dislikes -->
                        <p class="card-text" style="font-size: 14px;">
                            <strong>Likes :</strong> <span style="color: #28a745;">👍 {{ $sauce->likes }}</span> | 
                            <strong>Dislikes :</strong> <span style="color: #dc3545;">👎 {{ $sauce->dislikes }}</span>
                        </p>
                        
                        <!-- Bouton Voir plus -->
                        <a href="{{ route('sauces.show', $sauce->sauceId) }}" class="btn btn-warning" style="width: 100%; border-radius: 30px; padding: 10px; font-weight: bold;">Voir plus</a>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Bouton d'ajout de sauce -->
        <div class="col-12 text-center mt-4">
            <a href="{{ route('sauces.create') }}" class="btn btn-success btn-lg" style="width: 100px; height: 100px; font-size: 30px; border-radius: 50%; box-shadow: 0px 0px 15px rgba(0, 123, 255, 0.2);">
                <strong>+</strong>
            </a>
        </div>
    </div>
</div>
@endsection
