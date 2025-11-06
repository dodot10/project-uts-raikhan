@extends('admin.layouts.app')

@section('title', 'Studio | Calendar')

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-header">
                    Calendar <small>View and manage your schedule</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END #content -->
@endsection
