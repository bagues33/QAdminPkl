<div class="col-xl-{{ ($size) ?? '3' }} col-md-6 mb-4">
    <div class="card h-100">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="text-md font-weight-bold text-uppercase mb-1">{{ $text }}</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $value }}</div>
                    
                </div>
                <div class="col-auto">
                    <a href="{{ $url1 }}" class="info" data-nama="{{ $namaTim }}" data-deskripsi="{{ $deskripsi }}" data-anggota="{{ $anggota }}" href="{{ $url1 }}"><i class="fas fa-{{ $icon1 }} fa-2x text-{{ ($color1) ?? 'primary' }}"></i></a>
                    <a href="{{ $url2 }}"><i class="fas fa-{{ $icon2 }} fa-2x text-{{ ($color2) ?? 'primary' }}"></i></a>
                    <form action="{{ $url3 }}" style="display: inline-block;" method="POST">
                        @csrf
                        <a href="#" class="delete"><i class="fas fa-trash"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

