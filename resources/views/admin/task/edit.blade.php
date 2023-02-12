<x-app-layout>
	<x-slot name="title">New Task</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('pm.task.update', $task->id_task) }}" method="post" enctype="multipart/form-data">
			@csrf
            @method('PUT')
			<div class="row">
				<div class="col-md-6">
					<x-input text="Nama Task" name="nama" type="text" value="{{ $task->nama }}"/>
				</div>
                <div class="col-md-6">
                    <label for="prioritas">Prioritas</label>
                    <select id="prioritas" class="form-control" text="prioritas" name="prioritas">
                            <option value="Low">Low</option>
                            <option value="High">High</option>
                    </select>
                    
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
                    <label for="type">Type</label>
                    <select id="type" class="form-control" text="type" name="type">
                            <option value="Easy">Easy</option>
                            <option value="Medium">Medium</option>
							<option value="Hard">Hard</option>
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
			        <x-input text="Deadline" name="deadline" type="date" value="{{ $task->deadline }}" />
				</div>
				<div class="col-md-6">
					<br>
                    <label for="type">Status</label>
                    <select id="type" class="form-control" text="type" name="status">
                            <option value="notstarted">Not Started</option>
                            <option value="inprogress">In Progress</option>
							<option value="done">Done</option>
							<option value="cancel">Cancel</option>
                    </select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
                    <br>
			        <x-textarea text="Deskripsi" name="deskripsi" value="{{ $task->deskripsi }}">{{ $task->deskripsi }}</x-textarea>
				</div>
				<div class="col-6">
					<br>
					<div class="form-check">
						@if ($task->approved)
							<input class="form-check-input" name="approved[]" type="checkbox" value="1" id="flexCheckDefault" checked>
						@else
							<input class="form-check-input" name="approved[]" type="checkbox" value="1" id="flexCheckDefault">
						@endif
						<label class="form-check-label" for="flexCheckDefault">
						  Approved
						</label>
					 </div>
				</div>
			</div>
		

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>