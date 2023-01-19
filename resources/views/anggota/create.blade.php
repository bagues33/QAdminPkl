<x-app-layout>
	<x-slot name="title">Submit Task</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('anggota.task.update', $task->id_task) }}" method="post" enctype="multipart/form-data">
			@csrf
			@method('put')
			<div class="row">
				<div class="col-md-6">
					<label for="nama">Nama Task</label>
					<input type="text" class="form-control" id="nama" name="nama" value="{{ $task->nama }}" readonly>
				</div>
				
				<div class="col-md-6">
                   <label for="deskripsi">Deskripsi</label>
				   <textarea readonly type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $task->deskripsi }}">{{ $task->deskripsi }}</textarea>
				</div>
			</div>
            <!-- <br> -->
            <div class="row">
                <div class="col-md-6">
					<label for="type">Type</label>
					<input id="type" type="text" class="form-control" name="type" value="{{ $task->type }}" readonly>
                </div>
				<div class="col-6">
					<br>
					<label for="prioritas">Prioritas</label>
					<input type="text" class="form-control" id="prioritas" name="prioritas" value="{{ $task->prioritas }}" readonly>
				</div>
            </div>

			<input type="hidden" name="id_anggota" value="{{ $task->id_anggota }}">
			<input type="hidden" name="parent_id_task" value="{{ $task->id_task }}">

			<div class="row">
				<div class="col-6">
					<label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="notstarted">Not Started</option>
						<option value="inprogress">In Progress</option>
                        <option value="done">Done</option>
						<option value="cancel">Cancel</option>
                        <!-- <option value="done">Done</option> -->
                    </select>
				</div>
				<div class="col-6">
					<br>
					<x-textarea text="Submit Task" name="submit_task" value="{{ $task->submit_task }}"></x-textarea>
				</div>
			</div>

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>