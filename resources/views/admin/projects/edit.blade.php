<x-app-layout>
	<x-slot name="title">New Projects</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('admin.project.update', $project->id_project) }}" method="post" enctype="multipart/form-data">
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
			        <x-input text="Tanggal Selesai" value="{{ $project->tgl_selesai }}" name="tgl_selesai" type="date" />
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
						<option value="Not Started" {{ $project->status == 'Not Started' ? 'selected' : '' }}>Not Started</option>
						<option value="Cancelled" {{ $project->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
						<option value="In Progress" {{ $project->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
						<option value="Completed" {{ $project->status == 'Completed' ? 'selected' : '' }}>Completed</option>
			        	
			        </select>
				</div>
				<div class="col-md-6">
					<!-- <x-input text="Klien" name="klien" type="text" /> -->
					<label for="klien">Klien</label>
			        <select id="klien" class="form-control" text="Klien" name="id_klien">
						@forelse($kliens as $klien)
			        		<option value="{{ $klien->id_klien }}" {{ $klien->id_klien == $project->id_klien ? 'selected' : '' }}>{{ $klien->nama }}</option>
						@endforeach
			        </select>
					<!-- <x-input text="Budget" name="budget" type="text" /> -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label class="mt-2" for="pm">PM</label>
			        <select id="pm" class="form-control" text="Klien" name="pm">
						@forelse($pms as $pm)
							<option value="{{ $pm->id }}">{{ $pm->name }}</option>
						@endforeach
			        </select>
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