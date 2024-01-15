@extends('layouts.layout')

@section('container')
<main>
    <a href="{{ route('addPage') }}" class="btn btn-success mb-4">Add Destinations &nbsp; <i class="fa-solid fa-plus"></i></a>
    {{-- <a href="" class="btn btn-success mb-4">Add Category &nbsp; <i class="fa-solid fa-plus"></i></a> --}}
    @if (Session::has('status'))
    <div class="alert alert-success d-flex align-items-center w-50" role="alert">
        <svg class="shadow-lg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <style>
                svg {
                    fill: #ffffff
                }

            </style>
            <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
        </svg>
        <div class="ms-2">{{ Session::get('status') }}</div>
    </div>
    @endif
    <table class="table table-bordered display" id="example" style="width: 100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Address</th>
                <th>Coordinat</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destinations as $destination)
            <tr>
                <td>{{ $destination->id }}</td>
                <td>{{ $destination->name }}</td>
                <td class="d-flex justify-content-center"><img src="{{ asset('images/' . $destination->image) }}" alt="destination image" class="card-img-top w-50"></td>
                <td class="col-1">{{ $destination->address }}</td>
                <td class="col-2"><iframe src="{{ $destination->coordinat }}" frameborder="0"></iframe></td>
                <td>{{ $destination->kategori->name }}</td>
                <td class="d-flex gap-2 justify-content-center" style="padding: 90px">
                    <a href="{{ route('editPage', $destination->id) }}" class="btn  btn-primary"><i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{ route('delete', $destination->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to remove selected destination?')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
