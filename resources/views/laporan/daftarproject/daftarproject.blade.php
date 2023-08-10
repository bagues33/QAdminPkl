<x-app-layout>
	<x-slot name="title">Laporan Keseluruhan Project</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		{{-- <x-slot name="title">All Klien</x-slot> --}}
        <x-slot name="option">
			<a href="{{ route('admin.laporan.daftarprojectprint') }}" class="btn btn-secondary">
				<i class="fas fa-print"></i>
			</a>
		</x-slot>
        <div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<th>No</th>
                <th>Nama</th>
				<th>Deskripsi</th>
				<th>Tgl Mulai</th>
				<th>Deadline</th>
				<th>Tgl Selesai</th>
                <th>Budget</th>
                <th>Status</th>
                <th>Klien</th>
                <th>Project Manager</th>
                <th>Tenaga Ahli</th>
			</thead>
			<tbody>
				@forelse($projects as $no => $project)
				<tr>
					<td>{{ ++$no }}</td>
					<td>{{ $project->nama }}</td>
					<td>{{ $project->deskripsi }}</td>
					<td>{{ $project->tgl_mulai }}</td>
                    <td>{{ $project->deadline }}</td>
					<td>{{ $project->tgl_selesai ? $project->tgl_selesai : "Belum selesai" }}</td>
                    <td>{{ $project->budget }}</td>
                    <td>{{ $project->status }}</td>
                    <td>{{ $project->klien->nama }}</td>
                    <td>{{ $project->user->name }}</td>
                    <td>@forelse($project->tim as $tim)
                           {{ count($tim->anggota) }}
                        @empty
							{{ 0 }}
                        @endforelse
                    </td>

					<td class="text-center">
						{{-- <button type="button" class="btn btn-info mr-1 info"
						data-name="{{ $klien->nama }}" data-email="{{ $klien->email }}" data-notelpon="{{ $klien->no_telpon }}" data-alamat="{{ $klien->alamat }}" data-email="{{ $klien->photo }}" data-website="{{ $klien->website }}" data-deskripsi="{{ $klien->deskripsi }}" data-photo="{{ url('storage/posts/'.$klien->photo) }}">
							<i class="fas fa-eye"></i>
						</button> --}}
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="11" class="text-center">No data</td>
				</tr>
				@endforelse
			</tbody>
		</table>
        </div>
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