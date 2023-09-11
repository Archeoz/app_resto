@extends('backend.back')
@section('admincontent')
    <div class="row">
        <div class="col-6">
            <form action="{{ url('admin/user/'.$user->id) }}" method="POST">
                @csrf
               @method('PUT')
                <div class="mt-2">
                    <label class="form-label" for="">Password</label>
                    <input class="form-control"  type="password" name="password" id="">
                    <span class="text-danger">
                        @error('password')
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