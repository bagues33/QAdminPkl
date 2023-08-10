<x-app-layout>
    <x-slot name="title">
        Dahsboard
    </x-slot>

    <section class="row">
        
        @role('Admin')
        <x-card-sum 
            text="Total Klien" 
            value="{{ $totalklien }}" 
            icon="male" 
            color="warning"
        />
        <x-card-sum 
            text="Total Project" 
            value="{{ $totalproject }}" 
            icon="archive" 
            color="primary"
        />
        <x-card-sum 
            text="Total Tim" 
            value="{{ $totaltim }}" 
            icon="users" 
            color="success"
        />
        <x-card-sum 
            text="Total Anggota" 
            value="{{ $totalanggota }}" 
            icon="user" 
            color="danger"
        />
        @endrole
        @role('pm')
        <x-card-sum 
            text="Total Project" 
            value="{{ $totalproject }}" 
            icon="archive" 
            color="primary"
        />
        <x-card-sum 
            text="Total Tim" 
            value="{{ $totaltim }}" 
            icon="users" 
            color="success"
        />
        <x-card-sum 
            text="Total Anggota" 
            value="{{ $totalanggota }}" 
            icon="user" 
            color="danger"
        />
        @endrole
        <x-card-sum 
            text="Total Task" 
            value="{{ $totaltaskanggota }}" 
            icon="tasks" 
            color="danger"
        />
        
    </section>

    <section class="row">
        {{-- log activity section --}}
        <div class="col-md-6">
            <x-card>
                <x-slot name="title">
                    Log Activity
                </x-slot>
                <x-slot name="option">
                    <a href="{{ route('logs') }}" class="btn btn-primary btn-sm">More</a>
                </x-slot>
                <table class="table">
                    <tbody>
                        @forelse($logs as $log)
                        <tr>
                            <td>{{ $log->description }}</td>
                            <td><small>{{ $log->created_at->diffForHumans() }}</small></td>
                        </tr>
                        @empty
                        <td colspan="2" class="text-center">No Data</td>
                        @endforelse
                    </tbody>
                </table>
            </x-card>
        </div>

        {{-- chart section --}}
        <div class="col-md-6">
            <!-- Area Charts -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
        </div>
    </section>

    <x-slot name="script">
        <script src="{{ asset('dist/js/demo/chart-area-demo.js') }}"></script>
    </x-slot>
</x-app-layout>