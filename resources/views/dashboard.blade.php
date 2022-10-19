@extends('layout.template')
@section('title', 'Silsilah Keluarga')
@section('content')
<table class="table table-boardered">
@if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fa fa-check"></i> Succes: {{ session('pesan') }}.<p>
    </div>
@endif
<a href="/add/" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Entri Data Anggota Keluarga</a>
<table class="table table-boardered">
<thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($orang as $index=>$data)
    <tr>
        <td>{{ $index+1 }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->jk }}</td>
        <td>{{ $data->status }}</td>
        <td>
            <div class="btn-group">
                <a href="/detail/{{ $data->id  }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                <a href="/edit/{{ $data->id  }}" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>
                <a onclick="return confirm('Apakah yakin data dengan ID = {{ $data->id }} akan di hapus?')" href="delete/{{ $data->id  }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection