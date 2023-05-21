<x-app-layout>
	<x-slot name="title">Laporan Per Project</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		{{-- <x-slot name="title">All Klien</x-slot> --}}
        <x-slot name="option">
			<a id="print" href="#" class="btn btn-secondary">
				<i class="fas fa-print"></i>
			</a>
		</x-slot>
		<Label for="">Pilih Tahun</Label>
        <select id="select_tahun" class="form-control" aria-label="Default select example">
            <option value="0">Pilih Tahun</option>
            @foreach ($list_tahun as $list)
             <option value="{{ $list->year }}">{{ $list->year }}</option>
            @endforeach
        </select>
		<Label for="">Pilih Project</Label>
        <select id="select_project" class="form-control" aria-label="Default select example">
            <option value="0">Pilih Project</option>
            @foreach ($list_project as $list)
             <option value="{{ $list->id_project }}">{{ $list->nama }}</option>
            @endforeach
        </select>
		<br>
        <div class="table-responsive">
		<table class="table table-borderless">
			<thead>
			</thead>
			<tbody>
				{{-- @forelse($projects as $no => $project) --}}
				<tr>
					<td>Nama Project</td>
                    <td>:</td>
                    <td id="nama-project">{{ $project->nama }}</td>
				</tr>
                <tr>
					<td>Nama Klien</td>
                    <td>:</td>
                    <td id="nama-klien">{{ $project->klien->nama }}</td>
				</tr>
                <tr>
					<td>Tanggal Mulai</td>
                    <td>:</td>
                    <td id="tgl-mulai">{{ $project->tgl_mulai }}</td>
				</tr>
                <tr>
					<td>Deadline</td>
                    <td>:</td>
                    <td id="deadline">{{ $project->deadline }}</td>
				</tr>
                <tr>
					<td>Tanggal Selesai</td>
                    <td>:</td>
                    <td id="tgl-selesai">{{ $project->tgl_selesai }}</td>
				</tr>
                <tr>
					<td>Budget</td>
                    <td>:</td>
                    <td id="budget">{{ $project->budget }}</td>
				</tr>
                <tr>
					<td>Status</td>
                    <td>:</td>
                    <td id="status">{{ $project->status }}</td>
				</tr>
                <tr>
					<td>Project Manager</td>
                    <td>:</td>
                    <td id="pm">{{ $project->user->name }}</td>
				</tr>
                <tr>
					<td>Jumlah Tenaga Ahli</td>
                    <td>:</td>
                    <td id="tenaga-ahli">
						@foreach ($project->tim as $tim)
							{{ count($tim->anggota) }}
						@endforeach
					</td>
				</tr>
                <tr>
					<td>Deskripsi</td>
                    <td>:</td>
                    <td id="deskripsi">{{ $project->deskripsi }}</td>
				</tr>
				{{-- @empty --}}
				{{-- <tr>
					<td colspan="3" class="text-center">No Member</td>
				</tr> --}}
				{{-- @endforelse --}}
			</tbody>
		</table>
        </div>
	</x-card>

	<x-modal>
		<x-slot name="id">infoModal</x-slot>
		<x-slot name="title">Information</x-slot>

		<div class="row mb-2">
			<div class="col-6">
				<b>Deskripsi</b>
			</div>
			<div class="col-6" id="deskripsi-modal"></div>
		</div>
	</x-modal>

	<x-slot name="script">
		<script>

			$(document).ready(function(){

			// Department Change
			$('#select_project').change(function(){

				// Department id
				var id = $(this).val();
				// console.log(id);

				// AJAX request 
				$.ajax({
					url: 'datatimperproject/' + id,
					type: 'get',
					dataType: 'json',
					success: function(response){
						console.log(response);
						var trHTML = '';
						var no = 0;
						$.each(response, function (key,value) {
							// console.log(value.nama);
							$('#nama-project').text(value.nama);
							$('#nama-klien').text(value.klien.nama);
							$('#tgl-mulai').text(value.tgl_mulai);
							$('#deadline').text(value.deadline);
							$('#tgl-selesai').text(value.tgl_selesai ? value.tgl_selesai : "Belum selesai");
							$('#budget').text(value.budget);
							$('#status').text(value.status);
							$('#pm').text(value.user.name);
							if(value.tim.length) {
								$.each(value.tim, function (key,value) {
									$('#tenaga-ahli').text(value.anggota.length);
								});	
							} else {
								$('#tenaga-ahli').text(0);
							}
							$('#deskripsi').text(value.deskripsi);
						});
					}
				});
			});

			$('#select_tahun').change(function(){

				// Department id
				var id = $(this).val();
				// console.log(id);
				$('#select_project').find('option').not(':first').remove();
				// AJAX request 
				$.ajax({
				url: 'getlistproject/' + id,
				type: 'get',
				dataType: 'json',
				success: function(response){
					// console.log(response);
					var trHTML = '';
					var no = 0;
					$.each(response, function (key,value) {
						// console.log(value.nama);
						var option = "<option value='"+value.id_project+"'>"+value.nama+"</option>"; 

                		 $("#select_project").append(option); 
					});
				}
				});
			});

			});

			$('#print').click(function(e){
				e.preventDefault()

               var pilih_project = $("#select_project option:selected").val();

                // console.log(pilih_project);
                window.location.href = "laporanperprojectprint/" + pilih_project;
				
			})


			$('.info').click(function(e) {
				e.preventDefault()

				$('#nama-modal').text($(this).data('name'))
				$('#notelpon-modal').text($(this).data('notelpon'))
				$('#alamat-modal').text($(this).data('alamat'))
				$('#email-modal').text($(this).data('email'))
				$('#photo-modal').attr('src', $(this).data('photo'))
				$('#website-modal').text($(this).data('website'))
				$('#deskripsi-modal').text($(this).data('deskripsi'))

				$('#infoModal').modal('show')
			})

			$('.delete').click(function(e){
				e.preventDefault()
				const ok = confirm('Ingin menghapus user?')

				if(ok) {
					$(this).parent().submit()
				}
			})
		</script>
	</x-slot>
</x-app-layout>