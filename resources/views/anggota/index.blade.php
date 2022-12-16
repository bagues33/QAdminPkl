<x-app-layout>
	<x-slot name="title">Task</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Task</x-slot>
		<x-slot name="option">

		</x-slot>
		</x-slot>
		<table class="table table-bordered">
			<thead>
				<th>Nama Task</th>
				<!-- <th>Deskripsi</th> -->
                <th>Type</th>
                <th>Prioritas</th>
			</thead>
			<tbody>
				@forelse($tasks as $task)
				<tr>
					<td>{{ $task->nama }}</td>
					<!-- <td>{{ $task->deskripsi }}</td> -->
                    <td>{{ $task->type }}</td>
                    <td>{{ $task->prioritas }}</td>
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info"
						data-nama="{{ $task->nama }}" data-deskripsi="{{ $task->deskripsi }}" data-type="{{ $task->type }}" data-prioritas="{{ $task->prioritas }}" data-status="{{ $task->status }}" data-submittask="@if($task->submit_task) {{ $task->submit_task }} @else Belum submit task! @endif">
							<i class="fas fa-eye"></i>
						</button>
						<a href="{{ route('anggota.task.create', $task->id_task) }}" class="btn btn-success">
							<i class="fas fa-plus"></i>
						</a>
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
				<b>Nama Task</b>
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
		<hr>
		<div class="row mb-2">
			<div class="col-6">
				<b>Status</b>
			</div>
			<div class="col-6" id="status-modal"></div>
		</div>

		<div class="row mb-2">
			<div class="col-6">
				<b>Submit Task</b>
			</div>
			<div class="col-6" id="submittask-modal"></div>
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
				$('#status-modal').text($(this).data('status'))
				$('#submittask-modal').text($(this).data('submittask'))
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