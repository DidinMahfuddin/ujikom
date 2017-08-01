@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Siswa
		<div class="panel-title pull-right"><a href="/siswa/create">Tambah Data</a></div>
		</div>
		<div class="panel-body">
		  <table class="table">
		  	<thead>
		  	 <tr>
		  	 	<th>Nama</th>
		  	 	<th>Nama Orangtua</th>
		  	 	<th>Umur </th>
		  	 	<th>Alamat</th>
		  	 	<th>Jk</th>
		  	 	<th colspan="2">Action</th>
		  	 </tr> 
		  	 </thead>
		  	 <tbody>
		  	 	@foreach($siswa as $data)
		  	 	<tr>
		  	 	<td>{{$data->nama}}</td>
		  	 	<td>{{$data->orangtua->nama_ayah}} dan {{$data->orangtua->nama_ibu}}</td>
		  	 	<td>{{$data->umur}}</td>
		  	 	<td>{{$data->jk}}</td>
		  	 	<td>{{$data->alamat}}</td>
		  	 	<td>
		  	 		<a class="btn btn-info" href="/siswa/{{$data->id}}/edit">Edit</a> </td>
		  	 		<td> 
		  	 		<form action="{{route('siswa.destroy',$data->id)}}" method="post">
		  	 			<input name="_method" type="hidden" value="DELETE">
		  	 			<input name="_token" type="hidden">
		  	 			<a class="btn btn-primary" href="/siswa/{{$data->id}}">Show</a> </td>
		  	 			<td>
		  	 			<input class="btn btn-danger"  type="submit" value="Delete">
		  	 			{{csrf_field()}}

		  	 		</form>
		  	 	</td>
		  	 	</tr>
		  	 	@endforeach
		  	 </tbody>
		  	 </table>
	  </div>
   </div>
</div>


@endsection