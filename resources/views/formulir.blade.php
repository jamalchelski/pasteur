@extends('layouts.app')
@section('content')
    <div class="container">
        <h4 class="my-5">Data Calon Pembeli</h4>
 
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="20%">Nama</th>
							<th width="40%">alamat</th>
							<th>No Telp</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($registation as $g)
						<tr>
							<td>{{$g->nama}}</td>
							<td>{{$g->alamat}}</td>
							<td>{{$g->telp}}</td>
							<td>{{$g->email}}</td>
                            <td width="1%"><a class="btn btn-success mt-1" href="formulir/{{ $g->id }}">Confirm</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
    </div>
@endsection