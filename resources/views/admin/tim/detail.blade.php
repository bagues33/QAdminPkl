<x-app-layout>
	<x-slot name="title">Detail Tim</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<!-- <h2>Detail Tim</h2> -->
		<div class="row mb-2">
			<div class="col-6">
				<b>Nama</b>
			</div>
			<div class="col-6">{{$tims->nama}}</div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Deskripsi</b>
			</div>
			<div class="col-6">{{$tims->deskripsi}}</div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Nama Project</b>
			</div>
			<div class="col-6">{{$tims->project->nama}}</div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Daftar Anggota</b>
			</div>
			<div class="col-6">
			@forelse($anggotas as $anggota)
				{{$anggota->user->name}}
				<br>
			@empty
				<b>No data!</b>
			@endforelse
			</div>
		</div>
	</x-card>
</x-app-layout>