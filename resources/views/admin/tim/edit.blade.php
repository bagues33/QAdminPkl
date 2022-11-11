<x-app-layout>
	<x-slot name="title">New Klien</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('admin.tim.update', $tims->id_tim) }}" method="post" enctype="multipart/form-data">
			@csrf
            @method('PUT')
			<div class="row">
				<div class="col-md-6">
					<x-input text="Nama Tim" name="nama" value="{{$tims->nama}}" type="text" />
				</div>
                <div class="col-md-6">
                    <label for="id_project">Id Project</label>
                    <select id="id_project" class="form-control" text="Id Project" name="id_project">
                            @forelse($projects as $project)
                            <option value="{{ $project->id_project }}">{{ $project->nama }}</option>
                            @endforeach
							<option value="{{ $tims->id_project }}">{{ $tims->id_project }}</option>
                    </select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
			        <x-textarea text="Deskripsi" value="{{$tims->deskripsi}}" name="deskripsi"></x-textarea>
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