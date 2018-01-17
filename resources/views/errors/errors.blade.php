@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-xs-12">
	<center><h1>Maaf Stok Tidak Mencukupi</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Stok
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<a href="{{url('admin/transaksi')}}">Kembali ke Transaksi</a>
					</tr>
				</thead>
			</table>	
		</div>
	</div>
	</div>
</div>
</div>
@endsection