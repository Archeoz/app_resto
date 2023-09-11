@extends('backend.back')
@section('admincontent')

<div>
    <h2>Insert Data</h2>
</div>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('admin/menu') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <select class="form-select" name="idkategori">
                    <option value="">=== Select Kategori ===</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                    @endforeach
                </select>
                <div class="mt-2">
                    <label class="form-label" for="">Menu</label>
                    <input class="form-control" type="text" name="menu" id="">
                    <span class="text-danger">
                        @error('menu')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Deskripsi</label>
                    <input class="form-control" type="text" name="deskripsi" id="">
                    <span class="text-danger">
                        @error('gambar')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Harga</label>
                    <input class="form-control" type="number" name="harga" id="">
                    <span class="text-danger">
                        @error('gambar')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Gambar</label>
                    <input class="form-control" type="file" name="gambar" id="">
                    <span class="text-danger">
                        @error('gambar')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary mt-3" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
@endsection