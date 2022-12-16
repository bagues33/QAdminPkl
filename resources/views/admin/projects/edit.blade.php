<x-app-layout>
	<x-slot name="title">New Projects</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('admin.project.create') }}" method="post">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-md-6">
					<x-input text="Nama Project" value="{{ $project->nama }}" name="nama" type="text" />
				</div>
				<div class="col-md-6">
					<!-- <x-input text="Deskripsi" name="deskripsi" type="text" /> -->
					<x-textarea text="Deskripsi" name="deskripsi" value="{{ $project->deskripsi }}"></x-textarea>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
			        <x-input text="Tanggal Mulai" value="{{ $project->tgl_mulai }}" name="tgl_mulai" type="date" />
				</div>
				<div class="col-md-6">
					<x-input text="Deadline" value="{{ $project->deadline }}" name="deadline" type="date" />
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
			        <x-input text="Estimasi Tanggal Selesai" value="{{ $project->tgl_selesai }}" name="tgl_selesai" type="date" />
				</div>
				<div class="col-md-6">
					<x-input text="Budget" value="{{ $project->budget }}" name="budget" type="text" />
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
			        <!-- <x-input text="Status" name="status" type="text" /> -->
			        <label for="status">Status</label>
			        <select id="status" class="form-control" value="{{ $project->status }}" text="Status" name="status">
						<option value="Not Started">Not Started</option>
						<option value="Cancelled">Cancelled</option>
			        	<option value="In Progress">In Progress</option>
			        	<option value="Completed">Completed</option>
			        </select>
				</div>
				<div class="col-md-6">
					<!-- <x-input text="Klien" name="klien" type="text" /> -->
					<label for="klien">Klien</label>
			        <select id="klien" class="form-control" text="Klien" name="id_klien">
						@forelse($kliens as $klien)
			        	<option value="{{ $klien->id_klien }}">{{ $klien->nama }}</option>
						@endforeach
                        <option value="{{ $klien->id_klien }}">{{ $klien->nama }}</option>
			        </select>
					<!-- <x-input text="Budget" name="budget" type="text" /> -->
				</div>
			</div>
			<!-- <x-input text="kosong" name="budget" type="hidden" /> -->
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