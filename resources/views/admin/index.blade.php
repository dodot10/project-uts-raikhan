@extends('admin.layouts.app')

@section('title', 'Studio | Dashboard')

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-header">
                    Dashboard <small>Admin Dashboard</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">TOTAL USERS</span>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-7">
                                <h3 class="mb-0">2,315</h3>
                            </div>
                            <div class="col-5">
                                <div class="mt-n2">
                                    <span class="text-success">+20.5%</span>
                                </div>
                            </div>
                        </div>
                        <div class="small text-body text-opacity-50 text-truncate">
                            <i class="fa fa-chevron-up fa-fw me-1"></i> 33.3% from last month
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">REVENUE</span>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-7">
                                <h3 class="mb-0">$52,391</h3>
                            </div>
                            <div class="col-5">
                                <div class="mt-n2">
                                    <span class="text-success">+15.2%</span>
                                </div>
                            </div>
                        </div>
                        <div class="small text-body text-opacity-50 text-truncate">
                            <i class="fa fa-chevron-up fa-fw me-1"></i> 25.5% from last month
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END #content -->
@endsection
