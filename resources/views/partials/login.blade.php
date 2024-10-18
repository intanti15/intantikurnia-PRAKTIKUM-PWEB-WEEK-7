@extends('layouts.app')

@section('title', 'Login Page')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="bg-light p-5 rounded shadow-sm" style="max-width: 500px; margin: auto;">
        <form action="/partials/login" method="POST">
            @csrf
            <div class="mb-4">
                <label class="form-labe">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-4">
                <label class="form-labe">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <a href="/partials/contact" class="btn btn-primary">Login</a>
        </form>
    </div>
@endsection
