@extends('admin.layouts.app')

@section('title', 'Studio | Form Elements')

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-header">
                    Form Elements <small>Various form input elements</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Text Input</label>
                                <input type="text" class="form-control" placeholder="Enter text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Input</label>
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Textarea</label>
                                <textarea class="form-control" rows="3" placeholder="Enter textarea"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select</label>
                                <select class="form-select">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END #content -->
@endsection
