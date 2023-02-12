<x-app-layout>
	<x-slot name="title">Komentar</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Comment</x-slot>
		<h5>Nama Task : {{ $nama_task->nama }}</h5>
		<x-slot name="option">
			@role('pm')
				<a href="{{ route('pm.komentar.create', $id_task) }}" class="btn btn-success">
					<i class="fas fa-plus"></i>
				</a>
			@elseif('anggota')
				<a href="{{ route('anggota.komentar.create', $id_task) }}" class="btn btn-success">
					<i class="fas fa-plus"></i>
				</a>
			@endrole
		</x-slot>
		<table class="table table-bordered">
			<thead>
				{{-- <th>Nama Task</th> --}}
				<th>Isi Komentar</th>
			</thead>
			<tbody>
				@forelse($komentars as $komentar)
				<tr>
					{{-- <td>{{ $komentar->task->nama}}</td> --}}
					<td>{{ $komentar->isi }}</td>
						<td class="text-center">
							<button type="button" class="btn btn-info mr-1 info"
							data-task="{{ $komentar->task->nama }}" data-isi="{{ $komentar->isi }}"><i class="fas fa-eye"></i>
							</button>
							@if($user->id == $komentar->id_user)
							@role('pm')
								<a href="{{ route('pm.komentar.edit', ['id_task' => $id_task, 'id_komentar' => $komentar->id_komentar]) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
								
								<form action="{{ route('pm.komentar.delete', ['id_task' => $id_task, 'id_komentar' => $komentar->id_komentar]) }}" style="display: inline-block;" method="POST">
									@csrf
									<button type="button" class="btn btn-danger delete"><i class="fas fa-trash"></i></button>
								</form>
							@elseif('anggota')
								<a href="{{ route('anggota.komentar.edit', ['id_task' => $id_task, 'id_komentar' => $komentar->id_komentar]) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
									
								<form action="{{ route('anggota.komentar.delete', ['id_task' => $id_task, 'id_komentar' => $komentar->id_komentar]) }}" style="display: inline-block;" method="POST">
									@csrf
									<button type="button" class="btn btn-danger delete"><i class="fas fa-trash"></i></button>
								</form>
							@endrole
							@else
							@endif
						</td>
				</tr>
				@empty
				<tr>
					<td colspan="2" class="text-center">No Data</td>
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
				<b>Isi Komentar</b>
			</div>
			<div class="col-6" id="isi-modal"></div>
		</div>
	</x-modal>

	<x-slot name="script">
		<script>
			$('.info').click(function(e) {
				e.preventDefault()
				$('#task-modal').text($(this).data('task'))
                $('#isi-modal').text($(this).data('isi'))
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