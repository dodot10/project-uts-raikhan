<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>
<body>
    <!-- BEGIN #app -->
    <div id="app" class="app">
        @include('admin.partials.header')
        
        @include('admin.partials.sidebar')
        
        @yield('content')
    </div>
    <!-- END #app -->
    
    @include('admin.partials.scripts')
</body>
</html>
