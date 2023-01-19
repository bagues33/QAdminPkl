<x-app-layout>
	<x-slot name="title">Tim</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">Pilih Project</x-slot> 
		
		@forelse($projects as $project)
		<a href="{{ route('pm.project.show', $project->id_project) }}">
			<x-card-sum 
				text="{{ $project->nama }} " 
				value="" 
				icon="archive" 
				color="warning"
			/>	
		</a>
		@empty
			<h4>Project belum ada!</h4>
		@endforelse
		
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
				<b>Nama Project</b>
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