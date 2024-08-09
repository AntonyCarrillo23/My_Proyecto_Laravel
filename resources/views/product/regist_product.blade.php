@extends('layouts.landing')

@section('title', 'Login')

@section('content')
    <div class="login-form">
        <h1>Registrar producto</h1>
        <form method="POST" action="{{ route('product.regist_product') }}">
            @csrf
            <div>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" required>
            </div>
            <div>
                <label for="price">Contraseña:</label>
                <input type="number" id="price" name="price" required>
            </div>
            <div>
                <button type="submit">Registrar</button>
            </div>
            @if ($errors->any())
                <ul class="error-messages">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
@endsection