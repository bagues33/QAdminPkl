<x-app-layout>
	<x-slot name="title">Task For Anggota</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Task</x-slot>
		<x-slot name="option">
			<a href="{{ route('pm.task.create') }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
		</x-slot>
		<table class="table table-bordered">
			<thead>
				<th>Nama</th>
				<th>Prioritas</th>
				<th>Deadline</th>
				<th>Nama Anggota</th>
				<th>Status</th>
				<th>Approved</th>
			</thead>
			<tbody>
				@forelse($tasks as $task)
				<tr>
					<td>{{ $task->nama}}</td>
					<td>{{ $task->prioritas }}</td>
					<td>{{ $task->deadline }}</td>
					<td>{{ $task->anggota->user->name }}</td>
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
						<button type="button" class="btn btn-info mr-1 info"
						data-nama="{{ $task->nama }}" data-deskripsi="{{ $task->deskripsi }}" data-type="{{ $task->type }}" data-prioritas="{{ $task->prioritas }}" data-anggota="{{ $task->anggota->user->name }}" data-deadline="{{ $task->deadline }}" data-status="
						@if ($task->status == 'notstarted')
							<span class='badge bg-primary text-white'>Not Started</span> 
						@elseif($task->status == 'inprogress')
							<span class='badge bg-warning text-white'>In Progress</span>
						@elseif($task->status == 'done')
							<span class='badge bg-success text-white'>Done</span>
						@elseif($task->status == 'cancel')
							<span class='badge bg-danger text-white'>Cancel</span>
						@endif
						" data-submittask=" @if ($task->submit_task) {{ $task->submit_task }} @else Submit task belum ada! @endif">
							<i class="fas fa-eye"></i>
						</button>
						<!-- <a href="{{ route('pm.task.show', $task->id_task) }}" class="btn btn-primary mr-1"><i class="fas fa-eye"></i></a>  -->
						<a href="{{ route('pm.task.edit', $task->id_task) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						
						<form action="{{ route('pm.task.delete', $task->id_task) }}" style="display: inline-block;" method="POST">
							@csrf
							<button type="button" class="btn btn-danger delete"><i class="fas fa-trash"></i></button>
						</form>
						<a href="{{ route('pm.komentar', $task->id_task) }}" class="btn btn-warning">
							<i class="fas fa-comments"></i>
						</a>
						<a target="_blank" href="https://wa.me/6281225027507/?text=*PEMBERITAHUAN!!!*%0aNama Task : {{ $task->nama }}%0aDeskripsi : {{ $task->deskripsi }}%0aType : {{ $task->type }}%0aPrioritas : {{ $task->prioritas }}%0aDeadline : {{ $task->deadline }}%0aNama Anggota : {{ $task->anggota->user->name }}%0aStatus Task : {{ $task->status }}" class="btn btn-success">
							<i class="fab fa-whatsapp"></i>
						</a>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="6" class="text-center">No Data</td>
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
				<b>Deadline</b>
			</div>
			<div class="col-6" id="deadline-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Nama Anggota</b>
			</div>
			<div class="col-6" id="anggota-modal"></div>
		</div>
		<hr>
		<div class="row mb-2">
			<div class="col-6">
				<b>Status Task</b>
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
				$('#deadline-modal').text($(this).data('deadline'))
				$('#anggota-modal').text($(this).data('anggota'))
				$('#status-modal').html($(this).data('status'))
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