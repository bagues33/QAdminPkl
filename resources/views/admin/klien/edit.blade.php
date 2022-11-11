<x-app-layout>
	<x-slot name="title">New Klien</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('admin.klien.update', $klien->id_klien) }}" method="post" enctype="multipart/form-data">
			@csrf
            @method('PUT')
			<div class="row">
				<div class="col-md-6">
					<x-input text="Nama Klien" value="{{ $klien->nama }}" name="nama" type="text" />
				</div>
				<div class="col-md-6">
					<!-- <x-input text="Deskripsi" name="deskripsi" type="text" /> -->
					<x-input text="No Telpon" value="{{ $klien->no_telpon }}" name="no_telpon" type="text"/>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
			        <x-textarea text="Alamat" value="{{ $klien->alamat }}" name="alamat"></x-textarea>
				</div>
				<div class="col-md-6">
					<x-input text="Email" value="{{ $klien->email }}" name="email" type="email" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
			        <x-input type="file" text="Photo" value="{{ $klien->photo }}" name="photo" />
				</div>
				<div class="col-md-6">
			        <x-input type="text" text="Website" value="{{ $klien->website }}" name="website" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
			        <x-textarea text="Deskripsi" value="{{ $klien->deskripsi }}" name="deskripsi"></x-textarea>
				</div>
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