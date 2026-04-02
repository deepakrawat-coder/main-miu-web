@include('admin.panels.header-top')
@yield('styles')
@yield('schema')


@include('admin.panels.header-bottom')
@include('admin.panels.side-menu')
@include('admin.panels.menu')
@yield('content')
@include('admin.panels.footer-top')
@yield('scripts')
@include('admin.panels.footer-bottom')
