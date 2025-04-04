@extends('welcome')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mb-4">Editar Postagem "{{ $post->title }}" </h2>
                <livewire:post-edit :post="$post"/>
            </div>
        </div>
    </div>

@endsection
