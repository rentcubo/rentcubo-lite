<!DOCTYPE html>

<html>

<head>

    <title>{{Setting::get('site_name')}}</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.provider.sub_layouts.head')

    @yield('styles')

</head>

<body>

    <div class="wrapper">

        <!-- Header section -->
        @include('layouts.provider.header') 

        <div class="container">

            <!-- Notification -->

            @include('notifications.notify')

        </div>
        
        @yield('content')

        <!-- Footer section -->

        @include('layouts.provider.footer') 

    </div>

    <!-- Scripts section -->

    @include('layouts.provider.scripts')

    @yield('scripts')

</body>

</html>