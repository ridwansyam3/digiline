@extends('komponen/aplikasi')
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">User List</h4><hr>
                @include('komponen/pesan')
                <a href="/user/create" class="btn btn-primary mb-3">+ Tambah Data User</a>
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Avatar</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Saldo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td><p>{{ $item->id }}</p></td>
                            <td>@if($item->avatar)
                                <img src="{{ url('avatar'.'/'.$item->avatar) }}" class="mx-auto d-block">
                            @else
                                <img src="{{ asset('images/profile.png') }}" class="mx-auto d-block">
                            @endif</td>
                            <td><p>{{ $item->name }}</p></td>
                            <td><p>{{ $item->email}}</p></td>
                            <td><p>{{ $item->no_telp }}</p></td>
                            <td><p>{{ $item->jenis_kelamin }}</p></td>
                            <td><p>{{ $item->tanggal_lahir }}</p></td>
                            <td><p>{{ $item->saldo }}</p></td>
                            <td><a href="{{ url('/user/'.$item->id)}}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ url('/user/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Apakah anda yakin mau hapus data ?')" class='d-inline' action="{{'/user/'.$item->id}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                {{ $data->links() }}
              </div>
              
            </div>
          </div>
      </div>
    </div>
</div>
@endsection