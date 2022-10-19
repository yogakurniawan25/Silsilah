@extends('layout.template')
@section('title', 'Update Anggota Keluarga')
@section('content')
    
   <form action="/update/{{ $orang->id }}" method="POST">
    @csrf
    <div class="card-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $orang->nama }}">
            <div class="text-danger">
                @error('nama')
                    {{ $message }}
                @enderror
            </div>
          </div>

          <div class="form-group">
            <label>Jenis Kelamin</label> <br>
            <?php if($orang->jk=='Laki-laki'){?>
                <input type="radio" name="jk" value="Laki-laki" checked >Laki-laki<br>
                <input type="radio" name="jk" value="Perempuan">Perempuan<br>
            <?php }else{?>
                <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
                <input type="radio" name="jk" value="Perempuan" checked>Perempuan<br>
            <?php }?>  
           
            <div class="text-danger">
                @error('jk')
                    {{ $message }}
                @enderror
            </div>
          </div>

          <div class="form-group">
            <label>Status</label>
            <input type="text" name="status" class="form-control" value="{{ $orang->status }}">
            <div class="text-danger">
                @error('status')
                    {{ $message }}
                @enderror
            </div>
          </div>

          <button type="submit" class="btn btn-warning">Update <i class="far fa-save"></i></button>
        
   </form>
  
@endsection
