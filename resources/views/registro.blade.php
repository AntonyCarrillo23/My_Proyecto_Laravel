@extends('layouts.landing')

@section('title', 'Login')

@section('content')
    <div class="login-form">
        <h1>Registrarse</h1>
        <form method="POST" action="{{ route('registrarse') }}">
            @csrf
            <div>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password">Edad:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div>
                <label for="address">Direccion:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div>
                <label for="zip_code">Codigo postal:</label>
                <input type="number" id="zip_code" name="zip_code" required>
            </div>
            <div>
                <button type="submit">Registrarse</button>
            </div>
            <div>
                <a href="login">¿Ya tienes una cuenta ?</a>
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