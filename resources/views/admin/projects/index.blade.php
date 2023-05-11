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
				<th>Deadline</th>
				<!-- <th>Tanggal Selesai</th> -->
				<th>Budget</th>
				<th>Status</th>
			</thead>
			<tbody>
				@forelse($projects as $project)
				<tr>
					<td>{{ $project->nama }}</td>
					<!-- <td>{{ $project->deskripsi }}</td> -->
					<td>{{ $project->tgl_mulai }}</td>
					<td>{{ $project->deadline }}</td>
					<!-- <td>{{ $project->tgl_selesai }}</td> -->
					<td>@currency($project->budget)</td>
					<td>{{ $project->status }}</td>
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info"
						data-nama="{{ $project->nama }}" data-deskripsi="{{ $project->deskripsi }}" data-tgl_mulai="{{ $project->tgl_mulai }}" data-tgl_selesai="{{ $project->tgl_selesai }}" data-deadline="{{ $project->deadline }}" data-budget="@currency($project->budget)" data-status="{{ $project->status }}" data-klien="{{ $project->klien->nama }}" data-pm="{{ $project->user->name }}">
							<i class="fas fa-eye"></i>
						</button>
						<a href="{{ route('admin.project.edit', $project->id_project) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						<form action="{{ route('admin.project.delete', $project->id_project) }}" style="display: inline-block;" method="POST">
							@csrf
							<button type="button" class="btn btn-danger delete"><i class="fas fa-trash"></i></button>
						</form>
						<a target="_blank" href="https://wa.me/6281225027507/?text=*PEMBERITAHUAN!!!*%0aNama Proyek : {{ $project->nama }}%0aNama Klien : {{ $project->klien->nama }}%0aNama PM (Project Manager) : {{ $project->user->name }}%0aDeskripsi : {{ $project->deskripsi }}%0aTanggal Mulai : {{ $project->tgl_mulai }}%0aDeadline : {{ $project->deadline }}%0aTanggal Selesai : {{ $project->tgl_selesai }}%0aBudget : {{ $project->budget }}%0aStatus : {{ $project->status }}" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
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
				<b>Nama Klien</b>
			</div>
			<div class="col-6" id="klien-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Nama PM (Project Manager)</b>
			</div>
			<div class="col-6" id="pm-modal"></div>
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
				<b>Deadline</b>
			</div>
			<div class="col-6" id="deadline-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Tanggal Selesai</b>
			</div>
			<div class="col-6" id="tgl_selesai-modal"></div>
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
				$('#klien-modal').text($(this).data('klien'))
				$('#pm-modal').text($(this).data('pm'))
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