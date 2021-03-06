<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.components.meta-data')
        @include('layouts.stackbox.components.head-scripts')
        @include('layouts.stackbox.components.styles')
    </head>
    <body>
        <div id="app">
            @include('layouts.stackbox.components.nav')
            <div class="content-wrapper ml-0 mt-115 mt-lg-130">
                <div class="container-fluid">
                    <div class="box-layout">
                        <div class="main-layout">
                            @yield('main')
                        </div>
                        <div class="side-layout" >
                            @yield('side')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.stackbox.components.bottom-scripts')
    </body>
</html>
