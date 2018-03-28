@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kontak</div>

                <div class="card-body">
					<p><a class="btn btn-primary" href="{{ route('contacts.create') }}">Tambah</a></p>
					<table class="table">
					  <thead class="thead-dark">
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">Nama</th>
						  <th scope="col">Alamat</th>
						  <th scope="col">Hobi</th>
						  <th scope="col">No Hp</th>
						  <th scope="col">Aksi</th>
						</tr>
					  </thead>
					  <tbody>
						<?php $no = 1; ?>
						@foreach($contacts as $contact)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $contact->nama }}</td>
							<td>{{ $contact->alamat }}</td>
							<td>{{ $contact->hobi }}</td>
							<td>{{ $contact->no_hp }}</td>
							<td>
								<form action="{{ route('contacts.destroy', $contact->id) }}" method="post" class="form-horizontal">
									<input type="hidden" value="DELETE" name="_method">
									<input type="hidden" value="{{ csrf_token() }}" name="_token">
									<a class="btn btn-xs btn-warning" href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
									<button type="submit" onclick="return confirm('apa anda yakin ingin menghapus?')" class="btn btn-xs btn-danger">X</button>
								</form>
							</td>
						</tr>
						@endforeach
					</table>
					
					<div class="paginations">
						{!! $contacts->links() !!}
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
