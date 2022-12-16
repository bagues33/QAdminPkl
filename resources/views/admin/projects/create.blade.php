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
					<!-- <x-input text="Deskripsi" name="deskripsi" type="text" /> -->
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
			        <x-input text="Estimasi Tanggal Selesai" name="tgl_selesai" type="date" />
				</div>
				<div class="col-md-6">
					<label for="budget">Budget</label>
					<div class="input-group mb-3">
  						<span class="input-group-text" id="budget">Rp</span>
  						<input type="text" class="form-control" placeholder="Enter Budget" aria-label="Enter Budget" aria-describedby="budget">
					</div>
					<!-- <x-input text="Budget" name="budget" type="text" /> -->
				</div>
			</div>

			<div class="row">
				<!-- <div class="col-md-6">
			        <label for="status">Status</label>
			        <select id="status" class="form-control" text="Status" name="status">
			        	<option value="onprogress">On Progress</option>
			        	<option value="done">Done</option>
			        </select>
				</div> -->
				<div class="col-md-6">
					<!-- <x-input text="Klien" name="klien" type="text" /> -->
					<label for="klien">Klien</label>
			        <select id="klien" class="form-control" text="Klien" name="id_klien">
						@forelse($kliens as $klien)
			        	<option value="{{ $klien->id_klien }}">{{ $klien->nama }}</option>
						@endforeach
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