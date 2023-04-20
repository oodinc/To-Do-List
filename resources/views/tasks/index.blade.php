@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h3 class="text-center mb-0">To-Do List</h3>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">Tambah Tugas</a>
          </div>
          <table class="table table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
              $counter = 1;
              @endphp
              @foreach ($tasks as $task)
              <tr>
                <th scope="row">{{ $counter }}</th>
                <td>{{ $task->title }}</td>
                <td>
                  @if ($task->completed)
                  <span class="badge bg-success">Selesai</span>
                  @else
                  <span class="badge bg-danger">Belum selesai</span>
                  @endif
                </td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="{{ route('tasks.show', $task) }}" class="btn btn-info"><i class="bi bi-eye"></i> Lihat</a>                 
                  </div>
                  <div class="btn-group" role="group">
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                  </div>
                  <div class="btn-group" role="group">
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                    </form>
                  </div>
                </td>
              </tr>
              @php
              $counter++;
              @endphp
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
