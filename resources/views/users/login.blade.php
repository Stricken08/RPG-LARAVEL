@extends('layouts.layout')

@section('content')
<div class="body form">
    <h1>Se Connecter</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf



        <div class="form-group">
            <label for="email">Email :</label>
            <textarea name="email" id="email" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="password">mot de passe:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Se connecter</button>
        @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
        @endif

    </form>
</div>

@if ($errors->any())
@foreach ($errors->all() as $error)
<div>{{ $error }}</div>
@endforeach
@endif
@endsection