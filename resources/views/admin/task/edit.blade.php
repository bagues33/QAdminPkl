<x-app-layout>
	<x-slot name="title">New Task</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('admin.task.update', $task->id_task) }}" method="post" enctype="multipart/form-data">
			@csrf
            @method('PUT')
			<div class="row">
				<div class="col-md-6">
					<x-input text="Nama Task" name="nama" type="text" value="{{ $task->nama }}"/>
				</div>
                <div class="col-md-6">
                    <label for="prioritas">Prioritas</label>
                    <select id="prioritas" class="form-control" text="prioritas" name="prioritas">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                    </select>
                    
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
                    <label for="type">Type</label>
                    <select id="type" class="form-control" text="type" name="type">
                            <option value="hard">Hard</option>
                            <option value="easy">Easy</option>
                    </select>
				</div>
                <div class="col-md-6">
                    <label for="id_anggota">Nama Anggota</label>
                    <select id="id_anggota" class="form-control" text="Nama Anggota" name="id_anggota">
                            @forelse($anggotas as $anggota)
                            <option value="{{ $anggota->id_anggota }}">{{ $anggota->user->name }}</option>
                            @endforeach
                    </select>
				</div>
			</div>

			<div class="row">
                <div class="col-md-6">
                    <br>
			        <x-textarea text="Deskripsi" name="deskripsi" value="{{ $task->deskripsi }}">{{ $task->deskripsi }}</x-textarea>
				</div>
			</div>
		

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>