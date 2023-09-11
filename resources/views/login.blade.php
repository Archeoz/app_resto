@extends('front')
@section('content')
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/postlogin') }}" method="POST">
                @csrf
                @if (Session::has('pesan'))
                    <div class="alert alert-danger">
                        {{ Session::get('pesan') }}
                    </div>
                @endif
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
                        @error('password')
                            {{ $message }}    
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary mt-3" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection