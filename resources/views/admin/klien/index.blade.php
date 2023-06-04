<x-app-layout>
	<x-slot name="title">Klien</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Klien</x-slot>
		<x-slot name="option">
			<a href="{{ route('admin.klien.create') }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
		</x-slot>
		<form class="navbar-search d-flex" action="{{ route('admin.klien.search') }}" method="GET">
			<div class="input-group">
				<input type="text" name="search" class="form-control bg-light border-1 small" placeholder="Silahkan ketik kata pencarian..."
					aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
				<div class="input-group-append">
					<button class="btn btn-primary" type="submit">
						<i class="fas fa-search fa-sm"></i>
					</button>
				</div>
			</div>
			<a href="{{ route('admin.klien') }}">
				<button class="btn btn-success ml-3" type="button">
					<i class="fas fa-sync"></i>
				</button>
			</a>
		</form>
		<table class="table table-bordered mt-4">
			<thead>
				<th>Nama</th>
				<th>No Telpon</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Photo</th>
			</thead>
			<tbody>
				@forelse($kliens as $klien)
				<tr>
					<td>{{ $klien->nama}}</td>
					<td>{{ $klien->no_telpon }}</td>
					<td>{{ $klien->alamat }}</td>
					<td>{{ $klien->email }}</td>
					<td><img src="{{ url('storage/posts/'.$klien->photo) }}" class="rounded" style="width: 150px"></td>
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info"
						data-name="{{ $klien->nama }}" data-email="{{ $klien->email }}" data-notelpon="{{ $klien->no_telpon }}" data-alamat="{{ $klien->alamat }}" data-email="{{ $klien->photo }}" data-website="{{ $klien->website }}" data-deskripsi="{{ $klien->deskripsi }}" data-photo="{{ url('storage/posts/'.$klien->photo) }}">
							<i class="fas fa-eye"></i>
						</button>
						<a href="{{ route('admin.klien.edit', $klien->id_klien) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						
						<form action="{{ route('admin.klien.delete', $klien->id_klien) }}" style="display: inline-block;" method="POST">
							@csrf
							<button type="button" class="btn btn-danger delete"><i class="fas fa-trash"></i></button>
						</form>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="5" class="text-center">No Data</td>
				</tr>
				@endforelse
			</tbody>
		</table>
		<p class="mt-3"> 
			Halaman : {{ $kliens->currentPage() }} /
			Jumlah Data : {{ $kliens->total() }} /
			Data Per Halaman : {{ $kliens->perPage() }} 
		</p>
        {{ $kliens->links() }}
	</x-card>

	<x-modal>
		<x-slot name="id">infoModal</x-slot>
		<x-slot name="title">Information</x-slot>

		<div class="row mb-2">
			<div class="col-6">
				<b>Nama</b>
			</div>
			<div class="col-6" id="nama-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>No Telpon</b>
			</div>
			<div class="col-6" id="notelpon-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Alamat</b>
			</div>
			<div class="col-6" id="alamat-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Email</b>
			</div>
			<div class="col-6" id="email-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Photo</b>
			</div>
			<div class="col-6"><img id="photo-modal" class="rounded" style="width: 150px" src="#"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Website</b>
			</div>
			<div class="col-6" id="website-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Deskripsi</b>
			</div>
			<div class="col-6" id="deskripsi-modal"></div>
		</div>
	</x-modal>

	<x-slot name="script">
		<script>
			$('.info').click(function(e) {
				e.preventDefault()

				$('#nama-modal').text($(this).data('name'))
				$('#notelpon-modal').text($(this).data('notelpon'))
				$('#alamat-modal').text($(this).data('alamat'))
				$('#email-modal').text($(this).data('email'))
				$('#photo-modal').attr('src', $(this).data('photo'))
				$('#website-modal').text($(this).data('website'))
				$('#deskripsi-modal').text($(this).data('deskripsi'))

				$('#infoModal').modal('show')
			})

			$('.delete').click(function(e){
				e.preventDefault()
				const ok = confirm('Ingin menghapus user?')

				if(ok) {
					$(this).parent().submit()
				}
			})
		</script>
	</x-slot>
</x-app-layout>