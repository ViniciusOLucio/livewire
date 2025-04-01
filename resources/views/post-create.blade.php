@extends('welcome')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mb-4">Criar Post</h2>
                <!-- Formulário -->
                <livewire:post-create/>

                <!-- Livewire Component -->
            </div>
        </div>
    </div>

@endsection
