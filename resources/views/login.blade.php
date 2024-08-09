@extends('layouts.landing')

@section('title', 'Login')

@section('content')
    <div class="login-form">
        <h1>Iniciar Sesión</h1>
        <form method="POST" action="{{ route('iniciar-sesion') }}">
            @csrf
            <div>
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button type="submit">Iniciar Sesión</button>
            </div>
            <div>
                <a href="registrarse">Registrate</a>
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
