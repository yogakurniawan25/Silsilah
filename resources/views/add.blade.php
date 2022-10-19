@extends('layout.template')
@section('title', 'Entri Anggota Keluarga')
@section('content')
    
   <form action="/insert" method="POST">
    @csrf
    <div class="card-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
            <div class="text-danger">
                @error('nama')
                    {{ $message }}
                @enderror
            </div>
          </div>

          <div class="form-group">
            <label>Jenis Kelamin</label> <br>
            <input type="radio" name="jk" value="Laki-laki"> Laki-laki<br>
			<input type="radio" name="jk" value="Perempuan"> Perempuan<br>
            <div class="text-danger">
                @error('jk')
                    {{ $message }}
                @enderror
            </div>
          </div>

          <div class="form-group">
            <label>Status</label>
            <input type="text" name="status" class="form-control">
            <div class="text-danger">
                @error('status')
                    {{ $message }}
                @enderror
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Create <i class="far fa-save"></i></button>
        
   </form>
  
@endsection
