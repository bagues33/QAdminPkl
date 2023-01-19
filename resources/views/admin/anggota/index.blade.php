<x-app-layout>
	<x-slot name="title">Anggota</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Anggota</x-slot>
		<x-slot name="option">
			<a href="{{ route('admin.anggota.create') }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
		</x-slot>
		<table class="table table-bordered">
			<thead>
				<th>Nama Anggota</th>
				<th>Nama Tim</th>
				<th>Nama Project</th>
			</thead>
			<tbody>
				@forelse($anggotas as $anggota)
				<tr>
					<td>{{ $anggota->user->name }}</td>
					<!-- <td>{{ $anggota->deskripsi }}</td> -->
					<td>{{ $anggota->tim->nama }}</td>
					<!-- <td><img class="img-fluid w-50" src="{{ url('storage/posts/'.$anggota->photo) }}" alt=""></td> -->
					<td>{{ $anggota->tim->project->nama }}</td>
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info"
						data-nama="{{ $anggota->user->name }}" data-namaproject="{{ $anggota->tim->project->nama }}" data-alamat="{{ $anggota->alamat }}" data-username="{{ $anggota->username }}" data-photo="{{ url('storage/posts/'.$anggota->photo) }}" data-posisi="{{ $anggota->posisi }}" data-peran="{{ $anggota->peran }}" data-tim="{{ $anggota->tim->nama }}" data-password="{{ $anggota->password }}">
							<i class="fas fa-eye"></i>
						</button>
						<a href="{{ route('admin.anggota.edit', $anggota->id_anggota) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						<form action="{{ route('admin.anggota.delete', $anggota->id_anggota) }}" style="display: inline-block;" method="POST">
							@csrf
							<button type="button" class="btn btn-danger delete"><i class="fas fa-trash"></i></button>
						</form>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="3" class="text-center">No Member</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</x-card>

	<x-modal>
		<x-slot name="id">infoModal</x-slot>
		<x-slot name="title">Information</x-slot>

		<div class="row mb-2">
			<div class="col-6">
				<b>Nama Anggota</b>
			</div>
			<div class="col-6" id="nama-modal"></div>
		</div>
		<!-- <div class="row mb-2">
			<div class="col-6">
				<b>No Telpon</b>
			</div>
			<div class="col-6" id="no_telpon-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Alamat</b>
			</div>
			<div class="col-6" id="alamat-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Username</b>
			</div>
			<div class="col-6" id="username-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Password</b>
			</div>
			<div class="col-6" id="password-modal"></div>
		</div> -->
		<!-- <div class="row mb-2">
			<div class="col-6">
				<b>Photo</b>
			</div>
			<div class="col-3" ><img class="img-fluid" id="photo-modal" src="#" alt=""></div>
		</div> -->
		<!-- <div class="row mb-2">
			<div class="col-6">
				<b>Posisi</b>
			</div>
			<div class="col-6" id="posisi-modal"></div>
		</div> -->
		<div class="row mb-2">
			<div class="col-6">
				<b>Nama Tim</b>
			</div>
			<div class="col-6" id="tim-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Nama Project</b>
			</div>
			<div class="col-6" id="namaproject-modal"></div>
		</div>
		
	</x-modal>

	<x-slot name="script">
		<script>
			$('.info').click(function(e) {
				e.preventDefault()

				$('#nama-modal').text($(this).data('nama'))
				$('#namaproject-modal').text($(this).data('namaproject'))
				$('#alamat-modal').text($(this).data('alamat'))
				$('#username-modal').text($(this).data('username'))
				$('#password-modal').text($(this).data('password'))
				$('#photo-modal').attr('src', $(this).data('photo'))
				$('#posisi-modal').text($(this).data('posisi'))
				$('#peran-modal').text($(this).data('peran'))
				$('#tim-modal').text($(this).data('tim'))
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