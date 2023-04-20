@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Tambah Tugas</div>

                    <div class="card-body">
                        <form action="{{ route('tasks.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Judul Tugas</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="completed" class="form-label">Status</label>
                                <select name="completed" id="completed" class="form-select">
                                    <option value="0">Belum selesai</option>
                                    <option value="1">Selesai</option>
                                </select>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
