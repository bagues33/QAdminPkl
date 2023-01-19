<x-app-layout>
	<x-slot name="title">Detail Project</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<!-- <h2>Detail Tim</h2> -->
		<div class="row mb-2">
			<div class="col-6">
				<b>Nama Project</b>
			</div>
			<div class="col-6">{{ $project->nama }}</div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Nama Klien</b>
			</div>
			<div class="col-6">{{ $project->klien->nama }}</div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Deskripsi</b>
			</div>
			<div class="col-6">{{ $project->deskripsi }}</div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Tanggal Mulai</b>
			</div>
				<div class="col-6">{{ $project->tgl_mulai }}</div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Deadline</b>
			</div>
				<div class="col-6">{{ $project->deadline }}</div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Budget</b>
			</div>	
				<div class="col-6">{{ $project->budget }}</div>
		</div>
	</x-card>
	<h3>Daftar Tim</h3>
	<x-card>
		<x-slot name="option">
			<a href="{{ route('pm.tim.create', $project->id_project) }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
		</x-slot>
		<div class="row">
			@forelse($tims as $tim)
			
			<x-card-tim
					text="{{ $tim->nama }}" 
					namaTim="{{ $tim->nama }}"
					deskripsi="{{ $tim->deskripsi }}"
					anggota="{{ $tim->id_tim }}"
					value="" 
					icon1="eye"
					color1="warning"
					url1="{{ route('pm.tim.show', $tim->id_tim) }}"
					icon2="pen" 
					color2="primary"
					url2="{{ route('pm.tim.edit', $tim->id_tim) }}"
					url3="{{  route('pm.tim.delete', ['id'=>$tim->id_tim,'id_project'=>$project->id_project]) }}"
				/>
			@endforeach
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
		<div class="row mb-2">
			<div class="col-6">
				<b>Deskripsi</b>
			</div>
			<div class="col-6" id="deskripsi-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Anggota</b>
			</div>
			<div class="col-6" id="anggota-modal"></div>
		</div>
	</x-modal>

	<x-slot name="script">
		<script>
			// $('.info').click(function(e) {
			// 	e.preventDefault()
			// 	$('#nama-modal').text($(this).data('nama'))
			// 	$('#deskripsi-modal').text($(this).data('deskripsi'))
			// 	$('#anggota-modal').text($(this).data('anggota'))
			// 	$('#infoModal').modal('show')
			// })

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