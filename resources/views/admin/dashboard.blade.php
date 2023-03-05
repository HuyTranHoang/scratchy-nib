<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('home.index')}}" class="btn btn-sm btn-outline-primary">Back to homepage</a>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card text-bg-success mb-3 me-xl-3" style="min-width: 14rem;">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="icon-card bg-white text-success d-flex align-items-center justify-content-center">
                                    <i class="fa-duotone fa-user"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <h5 class="card-title">151</h5>
                                <p class="card-text">Registered Users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card text-bg-danger mb-3 me-xl-3" style="min-width: 14rem;">
                    <div class="card-header">Visitors</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="icon-card bg-white text-danger d-flex align-items-center justify-content-center">
                                    <i class="fa-duotone fa-chart-simple"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <h5 class="card-title">123</h5>
                                <p class="card-text">Total visitor count</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card text-bg-primary mb-3 me-xl-3" style="min-width: 14rem;">
                    <div class="card-header">Calligraphies</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="icon-card bg-white text-primary d-flex align-items-center justify-content-center">
                                    <i class="fa-duotone fa-pen-nib"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <h5 class="card-title">22</h5>
                                <p class="card-text">Total calligraphy count</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card text-bg-secondary mb-3" style="min-width: 14rem;">
                    <div class="card-header">Feedback</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="icon-card bg-white text-secondary d-flex align-items-center justify-content-center">
                                    <i class="fa-duotone fa-comments"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <h5 class="card-title">123</h5>
                                <p class="card-text">Total feedback count</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3">

    </div>

</x-admin-layout>
