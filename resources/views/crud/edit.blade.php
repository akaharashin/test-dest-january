@extends('layouts.layout')

@section('container')
    <main>
        <form action="{{ route('update', $destination->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-5">
                <div class="col-md-6 mx-auto mt-5">
                    <div class="card pb-3 p-4">

                        <div class="card-body ">
                            <h2>Update Destinations</h2>

                            <label class="form-label pt-2" for="name">Destination Name</label>
                            <input type="text" class="form-control" placeholder="Destination Name"  name="name"
                                class="form-control" value="{{ $destination->name }}">

                            <label class="form-label pt-2" for="image">Image</label> <br>
                            <img src="{{ asset('images/'.$destination->image) }}" alt="Old Image" id="previewImage" width="200" class="p-4" class="w-25 h-25">
                            <input type="file" name="image" id="imageInput"  class="form-control" value="{{ $destination->image }}">
                            
                            <label class="form-label pt-2" for="address">Address</label>
                            <input type="text" class="form-control" placeholder="Address"  name="address"
                                class="form-control" value="{{ $destination->address }}">

                            <label class="form-label pt-2" for="coordinat">Maps Link</label>
                            <input type="text" class="form-control" placeholder="Maps Link"  name="coordinat"
                                class="form-control" value="{{ $destination->coordinat }}">

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

    <script>
        // Ambil referensi elemen input gambar dan elemen img untuk preview
        var imageInput = document.getElementById('imageInput');
        var previewImage = document.getElementById('previewImage');
    
        // Tambahkan event listener ke input gambar untuk mengubah elemen img saat gambar dipilih
        imageInput.addEventListener('change', function() {
            if (imageInput.files && imageInput.files[0]) {
                var reader = new FileReader();
    
                reader.onload = function(e) {
                    // Mengubah atribut src elemen img untuk menampilkan gambar yang dipilih
                    previewImage.src = e.target.result;
                };
    
                reader.readAsDataURL(imageInput.files[0]);
            }
        });
    </script>
@endsection
