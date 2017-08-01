@extends('layouts.master')
@section('isi')
 <div class="row">
 	<center><h1>Data Siswa</h1></center>
 	<div class="panel panel-primary">
 		<div class="panel-heading">Data Siswa
 		<div class="panel-title pull-right">
 			<a href="{{ URL::previous() }}">Kembali </a></div>
 		</div>

 		<div class="panel-body">
 			<form action="{{route('siswa.update', $siswa->id)}}" method="POST">
 			<input type="hidden" name="_method" value="PUT">
 			<input type="hidden" name="_token" value="{{ csrf_token() }}">
 			
 			<div class="form-group">
 				<label class="control-lable">Nama</label>
 				<input type="text" name="a" value="{{$siswa->nama}}" class="form-control" required="">
 				</div>
		<div class="form-group">
 				<label class="control-lable">Nama OrangTua</label>
 				<select  class="form-control" name="b">
 				@foreach($ortu as $data)
 				<option value="{{$data->id}}" selected="">{{$data->nama_ayah}} dan {{$data->nama_ibu}}</option>
 				@endforeach
 				</select>
 				</div>

 		<div class="form-group">
 				<label class="control-lable">Umur</label>
 				<input type="number" name="c" value="{{$siswa->umur}}" class="form-control" required="">
 				</div>
 		<div class="form-group">
 				<label class="control-lable">Jk</label>
 				<input type="text" name="d" value="{{$siswa->jk}}" class="form-control" required="">
 				</div>
 		<div class="form-group">
 				<label class="control-lable">Alamat</label>
 				<textarea class="form-control" rows="10" name="e" required="">{{$siswa->alamat}}</textarea> 				</div>
 		<div class="form-group">
 				<button type="submit" class="btn btn-success">Simpan</button>
 				<button type="reset" class="btn btn-danger">Reset</button>	
 			</div>
 		</form>
 		</div>
 	</div>
 </div>
 @endsection