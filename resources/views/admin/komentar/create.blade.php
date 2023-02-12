<x-app-layout>
	<x-slot name="title">New Komentar</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
        @role('pm')
		    <form action="{{ route('pm.komentar.create', $id_task) }}" method="post">
        @elseif('anggota')
            <form action="{{ route('anggota.komentar.create', $id_task) }}" method="post">
        @endrole
			@csrf

			<div class="row">
				<div class="col-md-6">
			        <x-textarea text="Isi Komentar" name="isi"></x-textarea>
				</div>
			</div>

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>