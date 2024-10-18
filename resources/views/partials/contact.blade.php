@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Contact Page</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <table class="table table-bordered table-striped mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $data = [
                    ['name' => 'Hello', 'role' => 'Mahasiswa', 'email' => 'heloo@wooow.com'],
                    ['name' => 'World', 'role' => 'Karyawan', 'email' => 'world@hehehe.com'],
                    ['name' => 'Bangtan', 'role' => 'Dosen', 'email' => 'bities@wml.com'],
                ];
            @endphp
            @foreach($data as $index => $person)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $person['name'] }}</td>
                    <td>{{ $person['role'] }}</td>
                    <td>{{ $person['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/partials/login" class="btn btn-primary">Kembali</a>
@endsection
