<x-app-layout>
	<x-slot name="title">Laporan Daftar Tim per Project</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		{{-- <x-slot name="title">All Klien</x-slot> --}}
        <x-slot name="option">
			{{-- <a id="print" href="{{ route('admin.laporan.klien.print') }}" class="btn btn-secondary">
				<i class="fas fa-print"></i>
			</a> --}}
            <a id="print" href="#" class="btn btn-secondary">
				<i class="fas fa-print"></i>
			</a>
		</x-slot>
        <Label for="">Pilih Project</Label>
        <select id="select_project" class="form-control" aria-label="Default select example">
            <option value="0">Pilih Project</option>
            @foreach ($list_project as $list)
             <option value="{{ $list->id_project }}">{{ $list->nama }}</option>
            @endforeach
        </select>
        @empty($projects)
            @forelse($projects as $no => $project)
            {{-- <h6>Nama Project : </h6> --}}
            <h5 id="nama_project" class="mt-4">{{ $project->nama }}</h5>
            <div class="table-responsive mt-4">
                <table id="data_tim" class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Nama Tim</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Anggota</th>
                    </thead>
                    <tbody>
                        @forelse($project->tim as $no => $tim)
                        <tr class="data-row">
                            <td>{{ ++$no }}</td>
                            <td>{{ $tim->nama }}</td>
                            <td>{{ $tim->deskripsi }}</td>
                            <td>
                                {{ count($tim->anggota) }}
                            </td>
                            {{-- <td class="text-center"> --}}
                                {{-- <button type="button" class="btn btn-info mr-1 info"
                                data-name="{{ $klien->nama }}" data-email="{{ $klien->email }}" data-notelpon="{{ $klien->no_telpon }}" data-alamat="{{ $klien->alamat }}" data-email="{{ $klien->photo }}" data-website="{{ $klien->website }}" data-deskripsi="{{ $klien->deskripsi }}" data-photo="{{ url('storage/posts/'.$klien->photo) }}">
                                    <i class="fas fa-eye"></i>
                                </button> --}}
                            {{-- </td> --}}
                        </tr>
                        @empty 
                        <tr>
                            <td colspan="4" class="text-center">No data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @empty
            @endforelse
        @else
            <h5 id="nama_project" class="mt-4"></h5>
            <div class="table-responsive mt-4">
                <table id="data_tim" class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Nama Tim</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Anggota</th>
                    </thead>
                    <tbody>
                        
                        <tr class="data-row">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                
                            </td>
                            {{-- <td class="text-center"> --}}
                                {{-- <button type="button" class="btn btn-info mr-1 info"
                                data-name="{{ $klien->nama }}" data-email="{{ $klien->email }}" data-notelpon="{{ $klien->no_telpon }}" data-alamat="{{ $klien->alamat }}" data-email="{{ $klien->photo }}" data-website="{{ $klien->website }}" data-deskripsi="{{ $klien->deskripsi }}" data-photo="{{ url('storage/posts/'.$klien->photo) }}">
                                    <i class="fas fa-eye"></i>
                                </button> --}}
                            {{-- </td> --}}
                        </tr>
                        
                        <tr>
                            <td id="no-data" colspan="4" class="text-center">No data</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        @endempty
    
	</x-card>

	<x-modal>
		<x-slot name="id">infoModal</x-slot>
		<x-slot name="title">Information</x-slot>

		<div class="row mb-2">
			<div class="col-6">
				<b>Nama</b>
			</div>
			<div class="col-6" id="nama-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>No Telpon</b>
			</div>
			<div class="col-6" id="notelpon-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Alamat</b>
			</div>
			<div class="col-6" id="alamat-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Email</b>
			</div>
			<div class="col-6" id="email-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Photo</b>
			</div>
			<div class="col-6"><img id="photo-modal" class="img-fluid" src="#"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Website</b>
			</div>
			<div class="col-6" id="website-modal"></div>
		</div>
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
                                $("#nama_project").text(function (index, text) {
                                    return text.replace(text, value.nama);
                                });
                                // console.log(value.nama);
                                if(value.tim.length) {
                                    $.each(value.tim, function (key,value) {
                                    trHTML += 
                                    '<tr class="data-row"><td>' + ++no + 
                                    '</td><td>' + value.nama + 
                                    '</td><td>' + value.deskripsi + 
                                    '</td><td>' + value.anggota.length + 
                                    '</td></tr>';    
                                     }) 
                                    //  console.log("data")
                                } else {
                                    trHTML += '<tr class="data-row"><td class="text-center" colspan="4">No data</td></tr>'
                                    // console.log("no data")
                                }
                            });
                            $('.data-row').remove();
                            $('#no-data').remove();
                            $('#data_tim').append(trHTML);
                        }
                    });
                });
            });

            $('#print').click(function(e){
				e.preventDefault()

               var pilih_project = $("#select_project option:selected").val();

                // console.log(pilih_project);
                window.location.href = "timperprojectprint/" + pilih_project;
				
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