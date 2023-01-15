@extends('layouts.app')
@section('titulo', 'Regístrate en Devstagram')
@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-3">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen de registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" value="{{ old('name') }}" name="name" id="name" placeholder="Tu Nombre"
                        class="@error('name') border-red-500 @enderror border p-3 w-full rounded-lg">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Usuario
                    </label>
                    <input type="text" name="username" id="username" placeholder="Tu Nombre de Usuario"
                        class="@error('username') border-red-500 @enderror border p-3 w-full rounded-lg">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Correo
                    </label>
                    <input type="email" name="email" id="email" placeholder="Tu Email de Registro"
                        class="@error('email') @enderror border p-3 w-full rounded-lg">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="@error('password') border-red-500 @enderror border p-3 w-full rounded-lg">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Contraseña
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password"
                        class="@error('password_confirmation') border-red-500 @enderror border p-3 w-full rounded-lg">
                    @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
