@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>Transaksi</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Transaksi
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			@include('layouts._flash')
			@if($errors->any())
			<div class="flash alert-danger">
				@foreach($errors->all() as $err)
					<li><span>{{ $err }}</span></li>
				@endforeach
			</div>
			@endif
			<form action="{{route('transaksi.store')}}" method = "post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Kode Transaksi</label>
					<input type="text" name="a" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Merk</label>
					<select class="form-control" name="barang">
					@foreach($barang as $b)
					<option value="{{$b->id}}">{{$b->merk}}</option>
					@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Tanggal</label>
					<input type="date" name="c" class="form-control" required="">
				</div>
				
				<div class="form-group">
					<label class="control-lable">Harga</label>
					<select class="form-control" name="d">
					@foreach($barang as $b)
					<option value="{{$b->harga}}">{{$b->merk}}->{{$b->harga}}</option>
					@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Jumlah</label>
					<input type="text" name="e" class="form-control" required="">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-succes">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>	
		</div>
	</div>
</div>
</div>
</div>
@endsection