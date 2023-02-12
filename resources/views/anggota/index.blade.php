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
				<th>Nama Project Manager</th>
				<th>Nama Task</th>
				<!-- <th>Deskripsi</th> -->
                <th>Type</th>
                <th>Prioritas</th>
				<th>Status</th>
				<th>Approved</th>
			</thead>
			<tbody>
				@forelse($tasks as $task)
				<tr>
					<td>{{ $task->anggota->getPm->name }}</td>
					<td>{{ $task->nama }}</td>
					<!-- <td>{{ $task->deskripsi }}</td> -->
                    <td>{{ $task->type }}</td>
                    <td>{{ $task->prioritas }}</td>
					<td>
						@if ($task->status == 'notstarted')
							<span class="badge bg-primary text-white">Not Started</span>
						@elseif($task->status == 'inprogress')
							<span class="badge bg-warning text-white">In Progress</span>
						@elseif($task->status == 'done')
							<span class="badge bg-success text-white">Done</span>
						@elseif($task->status == 'cancel')
							<span class="badge bg-danger text-white">Cancel</span>
						@endif
					</td>
					<td class="text-center">
						@if ($task->approved)
							<span class="badge bg-success text-white"><i class="fas fa-check"></i></span>
						@else
							<span class="badge bg-danger text-white"><i class="fa fa-times" aria-hidden="true"></i></span>
						@endif
					</td>
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info" data-pm="{{ $task->anggota->getPm->name }}"
						data-nama="{{ $task->nama }}" data-deskripsi="{{ $task->deskripsi }}" data-type="{{ $task->type }}" data-prioritas="{{ $task->prioritas }}" data-status="
						@if ($task->status == 'notstarted')
							<span class='badge bg-primary text-white'>Not Started</span> 
						@elseif($task->status == 'inprogress')
							<span class='badge bg-warning text-white'>In Progress</span>
						@elseif($task->status == 'done')
							<span class='badge bg-success text-white'>Done</span>
						@elseif($task->status == 'cancel')
							<span class='badge bg-danger text-white'>Cancel</span>
						@endif
						" 
						data-approved="
						@if ($task->approved)
							<span class='badge bg-success text-white'><i class='fas fa-check'></i></span>
						@else
							<span class='badge bg-danger text-white'><i class='fa fa-times' aria-hidden='true'></i></span>
						@endif
						"
						data-submittask="@if($task->submit_task) {{ $task->submit_task }} @else Belum submit task! @endif">
							<i class="fas fa-eye"></i>
						</button>
						<a href="{{ route('anggota.task.create', $task->id_task) }}" class="btn btn-success">
							<i class="fas fa-plus"></i>
						</a>
						<a href="{{ route('anggota.komentar', $task->id_task) }}" class="btn btn-warning">
							<i class="fas fa-comments"></i>
						</a>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="5" class="text-center">No Data</td>
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
				<b>Nama Project Manager</b>
			</div>
			<div class="col-6" id="pm-modal"></div>
		</div>
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
				<b>Approved</b>
			</div>
			<div class="col-6" id="approved-modal"></div>
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

				$('#pm-modal').text($(this).data('pm'))
				$('#nama-modal').text($(this).data('nama'))
				$('#deskripsi-modal').text($(this).data('deskripsi'))
				$('#type-modal').text($(this).data('type'))
				$('#prioritas-modal').text($(this).data('prioritas'))
				$('#status-modal').html($(this).data('status'))
				$('#approved-modal').html($(this).data('approved'))
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