@include('partials.head')

    <div class="main-wrapper wrapper-2">
        {{-- HEADER  --}}
        @include('partials.header_user')
        
        {{-- MINI CART  --}}
        @include('partials.minicart')

        {{-- SIDEBAR OFF CANVAS  --}}
        @include('partials.sidebaroff_user')

        {{-- HERO - SLIDER --}}
        @yield('konten')
        
        {{-- FOOTER  --}}
        @include('partials.footer')
    </div>
    
@include('partials.foot')