<!DOCTYPE html>
<html>
<head>
	<title>Laporan Rincian Produk Insprd27</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h4>LAPORAN RINCIAN PRODUK INSPIRED27</h4>
	</center>
	<br></br>
        <h5>PRODUK PAKAIAN LAKI-LAKI</h5>
	<table class='table table-bordered table-striped'>
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>  
				<th>Image</th> 
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($laki as $a)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$a->title}}</td>
				<td><img width="150px" src="{{asset('storage/'.$a->image)}}"></td>
				<td>{{$a->price}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
<br></br>
  <h5>PRODUK PAKAIAN PEREMPUAN</h5>
	<table class='table table-bordered table-striped'>
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>  
				<th>Image</th> 
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($perempuan as $a)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$a->title}}</td>
				<td><img width="150px" src="{{asset('storage/'.$a->image)}}"></td>
				<td>{{$a->price}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>