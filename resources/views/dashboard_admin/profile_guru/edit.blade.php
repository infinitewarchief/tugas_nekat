@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Profile Guru</h1>
    <form action="{{ route('profileguru.update', $profileguru->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $profileguru->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description">{{ $profileguru->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ $profileguru->image }}">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $profileguru->status }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
