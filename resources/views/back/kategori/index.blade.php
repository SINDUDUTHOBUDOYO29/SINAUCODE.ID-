@extends('back.layout.template')

@section('title', 'List Kategori - Admin')

@section('content')
{{-- content --}}
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategories</h1>
    </div>
    {{-- <form action="index/search" method="GET">
        <div class="row mb-3">
            <label for="Search" class="col-sm-2 col-form-label">Search</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" value=""
                    placeholder="Please input key for search data..." name="search" autofocus
                    value="{{ old('search') }}">
            </div>
        </div>
    </form> --}}

    <div class="mt-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah">Tambah</button>

        @if ($errors->any())
        <div class="my-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        @if (session('success'))
        <div class="my-3">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>

        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Slug</th>
                    <th>Created At</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <div class="text-center">
                            <button class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#modalUpdate{{ $item->id }}">Edit</button>
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalDelete{{ $item->id }}">Delete</button>
                        </div>
                    </td>
                    @endforeach
            </tbody>
        </table>
    </div>
    <!---Modal--->
    @include('back.kategori.create_modal')

    <!---Modal Update--->
    @include('back.kategori.update_modal')

    <!---Modal delete--->
    @include('back.kategori.delete_modal')
</main>

@endsection