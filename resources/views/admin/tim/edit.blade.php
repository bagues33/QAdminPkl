<x-app-layout>
	<x-slot name="title">Edit Tim</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('pm.tim.update', $tims->id_tim) }}" method="post" enctype="multipart/form-data">
			@csrf
            @method('PUT')
			<div class="row">
				<div class="col-md-6">
					<x-input text="Nama Tim" name="nama" value="{{$tims->nama}}" type="text" />
				</div>
                
			</div>

			<div class="row">
				<div class="col-md-6">
			        <x-textarea text="Deskripsi" value="{{$tims->deskripsi}}" name="deskripsi"></x-textarea>
				</div>
				<div class="col-6">
					<label for="anggota">Anggota</label>
					<div class="card p-3">
						<div class="list-group">
							@foreach($anggotas as $anggota)

							<label class="list-group-item">
								<input class="form-check-input me-1" type="checkbox" name="anggota[]" value="{{$anggota->id}}" id="anggota[]" @if(in_array($anggota->id, $select_anggota)) checked=checked @endif>	
								{{ $anggota->name}}
							</label>
									{{-- <label><input name="anggota[]" type="checkbox" value="{{$anggota->id}}" @if($anggota->id == $anggota_pilih->) checked=checked @endif>{{$anggota->name}}</label> --}}
								
							@endforeach
						</div>

					</div>
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