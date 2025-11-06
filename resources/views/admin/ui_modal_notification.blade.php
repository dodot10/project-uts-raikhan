@extends('admin.layouts.app')

@section('title', 'Studio | Modal & Notification')

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-header">
                    Modal & Notification <small>Modal dialogs and notifications</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Modal Examples</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalExample">
                            Launch Modal
                        </button>
                        
                        <div class="modal fade" id="modalExample" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal Title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>This is a modal example content.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END #content -->
@endsection
