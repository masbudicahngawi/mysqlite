<h5>Halaman INDEX Kota</h5>
<hr/>

@if (session('message'))
<h3 style="color:green">{{ session('message') }}</h3>
@endif

<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Provinsi</td>
	</tr>
	@foreach($data as $key => $item)
	<tr>
		<td><a href="{{ route('kotas.edit', $item->id) }}">{{ $key + 1}}</a></td>
		<td>{{ $item->nama }}</td>
		<td>{{ $item->provinsi }}</td>
	</tr>
	@endforeach
</table>