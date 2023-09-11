@extends('backend.back')
@section('admincontent')
    <div class="row">
        <div class="col-6">
            <form action="{{ url('admin/user') }}" method="POST">
                @csrf
               
                <div class="mt-2">
                    <label class="form-label" for="">Level</label>
                   <select class="form-select" name="level" id="">
                        <option value="manager">Manager</option>
                        <option value="kasir">kasir</option>
                        <option value="admin">admin</option>
                   </select>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Nama</label>
                    <input class="form-control" type="text" name="name" id="">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Email</label>
                    <input class="form-control" type="email" name="email" id="">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Password</label>
                    <input class="form-control" type="password" name="password" id="">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                
                <div class="mt-2">
                    <button class="btn btn-primary mt-3" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection