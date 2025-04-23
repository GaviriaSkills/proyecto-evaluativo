@extends('partials.layout')

@section('title', 'Home')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Desarrollo Web</h1>
                <p class="lead text-secondary">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum reiciendis tempora est, vero aspernatur dolor provident 
                    quaerat consequuntur! Reiciendis sint deleniti voluptatem eligendi sequi optio delectus error sapiente nesciunt dicta.
                </p>
                <div class="d-grid">
                    <a class="btn btn-lg btn-black text-light btn-primary mb-2" href="{{ route('product.index') }}">Productos</a>
                    <a class="btn btn-lg btn-black btn-outline-primary" href="{{ route('categorias.index') }}">Categorias</a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="{{ asset('images/Home.svg') }}" alt="Desarrollo Web">
            </div>
        </div>
    </div>
@endsection