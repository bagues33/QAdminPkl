<x-app-layout>
	<x-slot name="title">New Tim</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('pm.tim.create', $id_project) }}" method="post">
			@csrf

			<div class="row">
				<div class="col-md-6">
					<x-input text="Nama Tim" name="nama" type="text" />
				</div>
                <!-- <div class="col-md-6">
                    <label for="id_project">Nama Project</label>
                    <select id="id_project" class="form-control" text="Id Project" name="id_project">
                            @forelse($projects as $project)
                            <option value="{{ $project->id_project }}">{{ $project->nama }}</option>
                            @endforeach
                    </select>
				</div> -->
				
			</div>

			<div class="row">
				<div class="col-md-6">
			        <x-textarea text="Deskripsi" name="deskripsi"></x-textarea>
				</div>
				<!-- <div class="col-6">
					<label for="anggota">Anggota</label>
					<div class="card p-3">
						<div class="list-group">
							@forelse($anggotas as $anggota)
								<label class="list-group-item">
									<input class="form-check-input me-1" type="checkbox" name="anggota[]" value="{{ $anggota->id }}">
									{{ $anggota->name }}
								</label>
							@endforeach
						</div>
					</div>
				</div> -->
			</div>

			<!-- <div class="row">
				<div class="col-md-6">
			        <x-input text="Status" name="status" type="text" />
				</div>
				<div class="col-md-6">
					<x-input text="Klien" name="klien" type="text" />
				</div>
			</div> -->
		

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>