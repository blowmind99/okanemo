<!DOCTYPE html>
<html lang="zxx" class="js">
@include('layout.public-component.head')
<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('layout.public-component.script')
</html>
