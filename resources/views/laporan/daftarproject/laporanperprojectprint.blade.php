<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laporan Daftar Tim per Project</title>
    <style>
        .line {
            height: 2px !important;
            background-color: black !important;
            color: black !important;
        }
    </style>
  </head>
  <body onload="window.print()">
    {{-- <body> --}}


    <div class="container mt-3">
        <div class="row">
            <div class="col-2">
                <img class="img-fluid" src="{{ asset('dist/img/logo-picsi-2.png') }}" alt="">
            </div>
            <div class="col-10">
                <h4>PT. PILAR CIPTA SOLUSI INTEGRATIKA</h4>
                <p>Klitren, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55222</p>
            </div>
            <div class="line">
            </div>
        </div>
        {{-- <hr class="bg-dark" style="height: 3px"> --}}
       
        <div class="row">
            <h3 class="text-center mt-5 mb-5">Laporan Per Project</h3>
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
                        <td id="tgl-selesai">{{ $project->tgl_selesai ? $project->tgl_selesai : "Belum selesai" }}</td>
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
                            @forelse ($project->tim as $tim)
                                {{ count($tim->anggota) }}
                            @empty
                                {{ 0 }}
                            @endforelse
                        </td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td id="deskripsi">{{ $project->deskripsi }}</td>
                    </tr>
                 
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="d-flex justify-content-end mt-5">
                <div class="text-center" style="width: 200px;">
                    <p>Yogyakarta, {{ date('d-m-Y') }}</p>
                    <p>Mengetahui</p>
                    <br><br><br>
                    <p>( {{ $user->name }} )</p>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
