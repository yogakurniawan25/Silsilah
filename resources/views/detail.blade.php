@extends('layout.template')
@section('title', 'Data Pribadi')
@section('content')

<table class="table table-bordered" width="300" cellspacing="0" cellpadding="5" align="center">
<tr align="center" bgcolor="#66CC33">
<td width="174">DATA DIRI</td>
<td width="200">KETERANGAN</td>
</tr>
<tr>
<td>Nama</td>
<td>{{ $orang->nama }}</td>
</tr>
<td>Jenis Kelamin</td>
<td>{{ $orang->jk }}</td>
</tr>
<td>Status</td>
<td>{{ $orang->status }}</td>
<tr>
</table>
<a href="/edit/{{ $orang->id }}" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i> Edit Data</a>
@endsection