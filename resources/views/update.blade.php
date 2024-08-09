@extends('layouts.landing')

@section('title', 'Login')

@section('content')
    <div class="login-form" >
        <h1>Actualizar datos</h1>
        <form method="POST" action="{{route('actualizar')}}">
            @csrf
            <div>
                <input type="hidden" name="id" value="{{ $user->id }}">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name"  value="{{$user->name}}">
            </div>
            <div>
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" value="{{$user->email}}">
            </div>
            <div>
                <label for="password">Edad:</label>
                <input type="number" id="age" name="age" value="{{$user->age}}">
            </div>
            <div>
                <label for="address">Direccion:</label>
                <input type="text" id="address" name="address" value="{{$user->address}}">
            </div>
            <div>
                <label for="zip_code">Codigo postal:</label>
                <input type="number" id="zip_code" name="zip_code" value="{{$user->zip_code}}">
            </div>
            <div>
                <button type="submit">Actualizar</button>
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