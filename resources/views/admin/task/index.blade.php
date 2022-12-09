<x-app-layout>
	<x-slot name="title">Task</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Task</x-slot>
		<x-slot name="option">
			<a href="{{ route('admin.task.create') }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
		</x-slot>
		<table class="table table-bordered">
			<thead>
				<th>Nama</th>
				<th>Deskripsi</th>
				<th>Type</th>
				<th>Prioritas</th>
			</thead>
			<tbody>
				@forelse($tasks as $task)
				<tr>
					<td>{{ $task->nama}}</td>
					<td>{{ $task->deskripsi }}</td>
					<td>{{ $task->type }}</td>
					<td>{{ $task->prioritas }}</td>
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info"
						data-nama="{{ $task->nama }}" data-deskripsi="{{ $task->deskripsi }}" data-type="{{ $task->type }}" data-prioritas="{{ $task->prioritas }}" data-anggota="{{ $task->anggota->user->name }}">
							<i class="fas fa-eye"></i>
						</button>
						<!-- <a href="{{ route('admin.task.show', $task->id_task) }}" class="btn btn-primary mr-1"><i class="fas fa-eye"></i></a>  -->
						<a href="{{ route('admin.task.edit', $task->id_task) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						
						<form action="{{ route('admin.task.delete', $task->id_task) }}" style="display: inline-block;" method="POST">
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
				<b>Nama</b>
			</div>
			<div class="col-6" id="nama-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Deskripsi</b>
			</div>
			<div class="col-6" id="deskripsi-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Type</b>
			</div>
			<div class="col-6" id="type-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Prioritas</b>
			</div>
			<div class="col-6" id="prioritas-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Nama Anggota</b>
			</div>
			<div class="col-6" id="anggota-modal"></div>
		</div>
	</x-modal>

	<x-slot name="script">
		<script>
			$('.info').click(function(e) {
				e.preventDefault()
				$('#nama-modal').text($(this).data('nama'))
				$('#deskripsi-modal').text($(this).data('deskripsi'))
				$('#type-modal').text($(this).data('type'))
				$('#prioritas-modal').text($(this).data('prioritas'))
				$('#anggota-modal').text($(this).data('anggota'))

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