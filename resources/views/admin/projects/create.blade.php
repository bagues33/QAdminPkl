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

			<div class="row">
				<div class="col-md-6">
					<x-input text="Nama Project" name="nama" type="text" />
				</div>
				<div class="col-md-6">
					<x-textarea text="Deskripsi" name="deskripsi"></x-textarea>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
			        <x-input text="Tanggal Mulai" name="tgl_mulai" type="date" />
				</div>
				<div class="col-md-6">
					<x-input text="Deadline" name="deadline" type="date" />
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<label for="klien">Klien</label>
			        <select id="klien" class="form-control" text="Klien" name="id_klien">
						@forelse($kliens as $klien)
			        	<option value="{{ $klien->id_klien }}">{{ $klien->nama }}</option>
						@endforeach
			        </select>
				</div>
				<div class="col-md-6">
					<label for="pm">PM (Project Manager)</label>
			        <select id="pm" class="form-control" text="Klien" name="pm">
						@forelse($pms as $pm)
			        	<option value="{{ $pm->id }}">{{ $pm->name }}</option>
						@endforeach
			        </select>
				</div>
				
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<label for="budget">Budget</label>
					<div class="input-group mb-3">
  						<span class="input-group-text" id="budget">Rp</span>
  						<input type="text" class="form-control" name="budget" placeholder="Enter Budget" aria-label="Enter Budget" aria-describedby="budget">
					</div>
				</div>
				<div class="col-md-6">
					<label for="status">Status</label>
			        <select id="status" class="form-control" text="Status" name="status">
						<option value="Not Started">Not Started</option>
			        	<option value="In Progress">In Progress</option>
			        </select>
				</div>
			</div>

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>