<!DOCTYPE html>
<html lang="zxx" class="js">
@include('layout.public-component.head')
<body class="nk-body bg-lighter npc-default has-sidebar {{ Session::get('theme.skin_mode') }}" theme="{{ (Session::get('theme.skin_mode') == 'dark-mode') ? 'dark' : ''}}">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('layout.public-component.sidebar')
            <div class="nk-wrap ">
                @include('layout.public-component.header')
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title letter-space-1">@stack('subtitle')</h3>
                                            <div class="nk-block-des text-soft">
                                                <p class="letter-space-1 ff-mono">@stack('description')</p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            @stack('tools')
                                        </div>
                                    </div>
                                </div>
                                @include('layout.public-component.alert')
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                @include('layout.public-component.footer')
            </div>
        </div>
    </div>
    @include('layout.public-component.script')
    <script src="{{ url("assets/js/libs/datatable-btns.js?ver=3.1.1") }}"></script>
    <script src="{{ url("assets/js/unblock-ui.js") }}"></script>
    <script src="{{ url('assets/js/example-chart.js?ver=3.1.1') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</body>
</html>
