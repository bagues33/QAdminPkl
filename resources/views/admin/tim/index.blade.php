<x-app-layout>
	<x-slot name="title">Tim</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Tim</x-slot>
		<x-slot name="option">
			<a href="{{ route('admin.tim.create') }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
		</x-slot>
		<table class="table table-bordered">
			<thead>
				<th>Nama</th>
				<th>Deskripsi</th>
				<th>Nama Project</th>
			</thead>
			<tbody>
				@forelse($tims as $tim)
				<tr>
					<td>{{ $tim->nama}}</td>
					<td>{{ $tim->deskripsi }}</td>
					<td>{{ $tim->project->nama }}</td>
	
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info"
						data-nama="{{ $tim->nama }}" data-deskripsi="{{ $tim->deskripsi }}" data-id_project="{{ $tim->id_project }}">
							<i class="fas fa-eye"></i>
						</button>
						<a href="{{ route('admin.tim.edit', $tim->id_tim) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						
						<form action="{{ route('admin.tim.delete', $tim->id_tim) }}" style="display: inline-block;" method="POST">
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
				<b>Id Project</b>
			</div>
			<div class="col-6" id="id_project-modal"></div>
		</div>
	</x-modal>

	<x-slot name="script">
		<script>
			$('.info').click(function(e) {
				e.preventDefault()

				$('#nama-modal').text($(this).data('nama'))
				$('#deskripsi-modal').text($(this).data('deskripsi'))
				$('#id_project-modal').text($(this).data('id_project'))

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