<div class="col-md-6 col-lg-6 col-xl-3 mb-3">
    <div class="card h-100 {{ $class }} me-xl-3" style="min-width: 14rem;">
        <div class="card-header">{{ $header }}</div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="icon-card bg-white {{ $classIcon }} d-flex align-items-center justify-content-center">
                        {{ $icon }}
                    </div>
                </div>
                <div class="col-8">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
