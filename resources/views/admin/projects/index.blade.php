<x-app-layout>
	<x-slot name="title">Projects</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Project</x-slot>
		<x-slot name="option">
			<a href="{{ route('admin.project.create') }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
		</x-slot>
		<table class="table table-bordered">
			<thead>
				<th>Nama Project</th>
				<!-- <th>Deskripsi</th> -->
				<th>Tanggal Mulai</th>
				<th>Estimasi Tanggal Selesai</th>
				<th>Deadline</th>
				<th>Budget</th>
				<th>Status</th>
			</thead>
			<tbody>
				@forelse($projects as $project)
				<tr>
					<td>{{ $project->nama }}</td>
					<!-- <td>{{ $project->deskripsi }}</td> -->
					<td>{{ $project->tgl_mulai }}</td>
					<td>{{ $project->tgl_selesai }}</td>
					<td>{{ $project->deadline }}</td>
					<td>@currency($project->budget)</td>
					<td>{{ $project->status }}</td>
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info"
						data-nama="{{ $project->nama }}" data-deskripsi="{{ $project->deskripsi }}" data-tgl_mulai="{{ $project->tgl_mulai }}" data-tgl_selesai="{{ $project->tgl_selesai }}" data-deadline="{{ $project->deadline }}" data-budget="@currency($project->budget)" data-status="{{ $project->status }}">
							<i class="fas fa-eye"></i>
						</button>
						<a href="{{ route('admin.project.edit', $project->id_project) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						<form action="{{ route('admin.project.delete', $project->id_project) }}" style="display: inline-block;" method="POST">
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
				<b>Nama Project</b>
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
				<b>Tanggal Mulai</b>
			</div>
			<div class="col-6" id="tgl_mulai-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Estimasi Tanggal Selesai</b>
			</div>
			<div class="col-6" id="tgl_selesai-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Deadline</b>
			</div>
			<div class="col-6" id="deadline-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Budget</b>
			</div>
			<div class="col-6" id="budget-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Status</b>
			</div>
			<div class="col-6" id="status-modal"></div>
		</div>
		
	</x-modal>

	<x-slot name="script">
		<script>
			$('.info').click(function(e) {
				e.preventDefault()

				$('#nama-modal').text($(this).data('nama'))
				$('#deskripsi-modal').text($(this).data('deskripsi'))
				$('#tgl_mulai-modal').text($(this).data('tgl_mulai'))
				$('#tgl_selesai-modal').text($(this).data('tgl_selesai'))
				$('#deadline-modal').text($(this).data('deadline'))
				$('#budget-modal').text($(this).data('budget'))
				$('#status-modal').text($(this).data('status'))
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