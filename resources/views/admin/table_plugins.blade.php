@extends('admin.layouts.app')

@section('title', 'Studio | Table Plugins')

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-header">
                    Table Plugins <small>Advanced data tables</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END #content -->
@endsection
