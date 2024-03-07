<h5>Halaman EDIT/HAPUS Kota</h5>

<br/>

<form method="post" action="{{ route('kotas.update', $data->id) }}">
	@method('PUT')
	@csrf
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="{{ $data->nama }}" required></td>
		</tr>
		<tr>
			<td>Provinsi</td>
			<td><input type="text" name="provinsi" value="{{ $data->provinsi }}" required></td>
		</tr>
		<tr>
			<td><button type="submit" class="btn btn-primary">Submit</button></td>
		</tr>
	</table>
</form>