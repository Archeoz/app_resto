@extends('backend.back')
@section('admincontent')

<div>
    <h2>Update Data</h2>
</div>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('admin/postmenu/'.$menu->idmenu) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <select class="form-select" name="idkategori">
                    <option  value="">=== Select Kategori ===</option>
                    @foreach ($kategoris as $kategori)
                        <option @selected($kategori->idkategori==$menu->idkategori) value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                    @endforeach
                </select>
                <div class="mt-2">
                    <label class="form-label" for="">Menu</label>
                    <input class="form-control" type="text" value="{{ $menu->menu }}" name="menu" id="">
                    <span class="text-danger">
                        @error('menu')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Deskripsi</label>
                    <input class="form-control" type="text" value="{{ $menu->deskripsi }}" name="deskripsi" id="">
                    <span class="text-danger">
                        @error('gambar')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Harga</label>
                    <input class="form-control" type="number" value="{{ $menu->harga }}" name="harga" id="">
                    <span class="text-danger">
                        @error('gambar')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Gambar</label>
                    <input class="form-control" type="file" value="{{ $menu->gambar }}" name="gambar" id="">
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