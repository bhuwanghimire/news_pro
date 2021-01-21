<!doctype html>
<html lang="en">

<head>
    @include('admin.layout.top')
</head>

<body>
    <div class="dash">
       @include('admin.layout.navigation')
        <div class="dash-app">
                @include('admin.layout.header')
            <main class="dash-content">
                 @yield('content')
            </main>
        </div>
    </div>
   
    @include('admin.layout.bottom')
    
</body>

</html>