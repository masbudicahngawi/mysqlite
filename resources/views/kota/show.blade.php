<h5>This is data with ID : {{ $data->id }}</h5>
<hr/>
<table border="1">
	<tr>
		<td>Nama Kota</td>
		<td>Provinsi</td>
	</tr>
	<tr>
		<td>{{ $data->nama }}</td>
		<td>{{ $data->provinsi }}</td>
	</tr>
</table>