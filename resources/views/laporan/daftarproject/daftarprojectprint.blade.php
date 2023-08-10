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
        @media print 
        {
            @page {
              size: A4; /* DIN A4 standard, Europe */
              margin: 0;
            }
            html, body {
                width: 210mm;
                /* height: 297mm; */
                height: 282mm;
                font-size: 11px;
                background: #FFF;
                overflow: visible;
            }
            body {
                padding-top: 5mm;
            }
        }
    </style>
  </head>
  <body onload="window.print()">
    {{-- <body> --}}


    <div class="container-fluid mt-3">
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
            <div class="col-12">    
                <h3 class="text-center mt-5 mb-5">Laporan Seluruh Project</h3>
                <table class="table table-borderless">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Tgl Mulai</th>
                        <th>Deadline</th>
                        <th>Tgl Selesai</th>
                        <th>Budget</th>
                        <th>Status</th>
                        <th>Klien</th>
                        <th>Project Manager</th>
                        <th>Tenaga Ahli</th>
                    </thead>
                    <tbody>
                        @forelse($projects as $no => $project)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $project->nama }}</td>
                            <td>{{ $project->deskripsi }}</td>
                            <td>{{ $project->tgl_mulai }}</td>
                            <td>{{ $project->deadline }}</td>
                            <td>{{ $project->tgl_selesai ? $project->tgl_selesai : "Belum selesai" }}</td>
                            <td>{{ $project->budget }}</td>
                            <td>{{ $project->status }}</td>
                            <td>{{ $project->klien->nama }}</td>
                            <td>{{ $project->user->name }}</td>
                            <td>@forelse($project->tim as $tim)
                                {{ count($tim->anggota) }}
                                @empty
                                    {{ 0 }}
                                @endforelse
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="11" class="text-center">No data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div> 
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
