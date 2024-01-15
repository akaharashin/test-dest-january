@extends('layouts.layout')

@section('container')
    <main>
        <form action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-5">
                <div class="col-md-6 mx-auto mt-5">
                    <div class="card pb-3 p-4">

                        <div class="card-body ">
                            <h2>Add Destinations</h2>

                            <label class="form-label pt-2" for="name">Destination Name</label>
                            <input type="text" class="form-control" placeholder="Destination Name" required name="name"
                                class="form-control">

                            <label class="form-label pt-2" for="image">Image</label>
                            <input type="file" name="image" id="image" required class="form-control">
                            
                            <label class="form-label pt-2" for="address">Address</label>
                            <input type="text" class="form-control" placeholder="Address" required name="address"
                                class="form-control">

                            <label class="form-label pt-2" for="coordinat">Maps Link</label>
                            <input type="text" class="form-control" placeholder="Maps Link" required name="coordinat"
                                class="form-control">

                            <label for="" class="form-label pt-2">Kategori</label>
                            <select name="kategori_id" id="kategori" class="form-select">
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                @endforeach
                            </select>

                            <div class="flex mt-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
