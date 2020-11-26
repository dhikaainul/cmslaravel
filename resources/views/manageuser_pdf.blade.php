<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN USER</title>
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
		<h4>TABLE USER</h4>
	</center>
	<table class='table table-bordered table-striped'>
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>  
				<th>Image</th> 
				<th>Email</th>
				<th>Roles</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($user as $a)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$a->name}}</td>
				<td><img width="150px" src="{{asset('storage/'.$a->image)}}"></td>
				<td>{{$a->email}}</td>
				<td>{{$a->roles}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>