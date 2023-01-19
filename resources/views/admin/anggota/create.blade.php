<x-app-layout>
	<x-slot name="title">New Anggota</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('admin.anggota.create') }}" method="post" enctype="multipart/form-data">
			@csrf

			<div class="row">
				<div class="col-md-6">
				<label for="tim">Nama Anggota</label>
                    <select id="tim" class="form-control" text="Klien" name="id_user">
						@forelse($anggotas as $anggota)
			        	<option value="{{ $anggota->id }}">{{ $anggota->name }}</option>
						@endforeach
			        </select>
				</div>
				<div class="col-md-6">
					<label for="tim">Nama Tim</label>
                    <select id="tim" class="form-control" text="Klien" name="id_tim">
						@forelse($tims as $tim)
			        	<option value="{{ $tim->id_tim }}">{{ $tim->nama }} ({{ $tim->project->nama }})</option>
						@endforeach
			        </select>
				</div>
			</div>

			<!-- <div class="row">
				<div class="col-md-6">
					<x-input text="Username" name="username" type="text" />
				</div>
                <div class="col-md-6">
					<x-input text="Password" name="password" type="text" />
				</div>
                <div class="col-md-6">
                    <x-textarea text="Alamat" name="alamat"></x-textarea>
				</div>
			</div> -->

			<!-- <div class="row">
				<div class="col-md-6">
					<x-input text="Photo" type="file" name="photo" />
				</div>
				<div class="col-md-6">
					<x-input text="Posisi" name="posisi" type="text" />
				</div>
			</div> -->

			<!-- <div class="row">
				<div class="col-md-6">
					<x-textarea text="Peran" name="peran"></x-textarea>
				</div>
				<div class="col-md-6">
                    <label for="tim">Nama Tim</label>
                    <select id="tim" class="form-control" text="Klien" name="id_tim">
						@forelse($tims as $tim)
			        	<option value="{{ $tim->id_tim }}">{{ $tim->nama }}</option>
						@endforeach
			        </select>
				</div>
			</div> -->

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>