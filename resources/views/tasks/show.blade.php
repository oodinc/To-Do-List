@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $task->title }}</div>
                <div class="card-body">
                    <p><strong>Status:</strong> {{ $task->completed ? 'Selesai' : 'Belum selesai' }}</p>
                    <p><strong>Dibuat pada:</strong> {{ $task->created_at->format('d M Y H:i') }}</p>
                    <p><strong>Diubah pada:</strong> {{ $task->updated_at->format('d M Y H:i') }}</p>
                </div>
                <div class="card-footer">
                    <div class="btn-group" role="group">
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>
                    </div>
                    <div class="btn-group" role="group">
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
