@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header bg-primary text-white">
<h3 class="mb-0">Edit Tugas</h3>
</div>
<div class="card-body">
<form action="{{ route('tasks.update', $task) }}" method="POST">
@csrf
@method('PUT')
<div class="form-floating mb-3">
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $task->title }}" placeholder="Judul Tugas">
    <label for="title">Judul Tugas</label>
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-floating mb-3">
    <select name="completed" id="completed" class="form-select @error('completed') is-invalid @enderror">
        <option value="0" {{ !$task->completed ? 'selected' : '' }}>Belum selesai</option>
        <option value="1" {{ $task->completed ? 'selected' : '' }}>Selesai</option>
    </select>
    <label for="completed">Status</label>
    @error('completed')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection