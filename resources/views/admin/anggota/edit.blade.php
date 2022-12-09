<x-app-layout>
	<x-slot name="title">New Anggota</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="post" enctype="multipart/form-data">
			@csrf
            @method('PUT')
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
			        	<option value="{{ $tim->id_tim }}">{{ $tim->nama }}</option>
						@endforeach
			        </select>
				</div>
			</div>

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>