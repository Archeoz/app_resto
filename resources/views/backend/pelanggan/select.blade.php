@extends('Backend.back')
@section('admincontent')
    <div>
        <h1>Pelanggan</h1>
    </div>
    
    <div>
       
       </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Status</th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            <tbody>
                @foreach ($pelanggans as $pelanggan)
                    <tr>
                        <td>{{ $no++ }}</td>                        
                        <td>{{ $pelanggan->pelanggan }}</td>
                        <td>{{ $pelanggan->alamat }}</td>
                        <td>{{ $pelanggan->email }}</td>
                        <td>{{ $pelanggan->telp }}</td>
                        @php
                            if ($pelanggan->aktif == 0) {
                                $aktif = '<a class="btn btn-danger" href="'.url('admin/pelanggan/'.$pelanggan->idpelanggan).'">BANNED</a>';
                            } else {
                                $aktif = '<a class="btn btn-success" href="'.url('admin/pelanggan/'.$pelanggan->idpelanggan).'">AKTIF</a>';
                                
                            }
                            
                        @endphp
                        <td>{!! $aktif !!}</td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-3">
            {{ $pelanggans -> withQueryString()->links() }}
          </div>
    </div>
@endsection