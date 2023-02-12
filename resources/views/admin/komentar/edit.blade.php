<x-app-layout>
	<x-slot name="title">New Komentar</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
        @role('pm')
		    <form action="{{ route('pm.komentar.update', ['id_task' => $id_task, 'id_komentar' => $id_komentar]) }}" method="post">
        @elseif('anggota')
            <form action="{{ route('anggota.komentar.update',['id_task' => $id_task, 'id_komentar' => $id_komentar]) }}" method="post">
        @endrole
			@csrf
            @method('PUT')
			<div class="row">
				<div class="col-md-6">
			        <x-textarea text="Isi Komentar" name="isi" value="{{ $komentar->isi }}"></x-textarea>
				</div>
			</div>

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>