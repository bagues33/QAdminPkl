<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laporan Rekap Pekerjaan</title>
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
                <h3 class="text-center mt-5 mb-5">Rekap Pekerjaan</h3>
                <table class="table table-striped mt-2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Jumlah Klien</th>
                            <th>Jumlah Project</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rekaps as $no => $rekap)
                        <tr>
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $rekap->tahun }}</td>
                            <td>{{ $rekap->jumlah_klien }}</td>
                            <td>{{ $rekap->jumlah_project }}</td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div> 
        </div>
        <div class="row">
            <div class="col-6">
                <div class="d-flex justify-content-center mt-5">
                    <div class="text-center" style="width: 200px;">
                        {{-- <p>Yogyakarta, {{ date('d-m-Y') }}</p>
                        <p>Mengetahui</p>
                        <br><br><br>
                        <p>( {{ $user->name }} )</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-center mt-5">
                    <div class="text-center" style="width: 200px;">
                        <p>Yogyakarta, {{ date('d-m-Y') }}</p>
                        <p>Mengetahui</p>
                        <br><br><br>
                        <p>( {{ $user->name }} )</p>
                    </div>
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
