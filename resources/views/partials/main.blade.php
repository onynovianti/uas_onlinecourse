@include('partials.head')

    <div class="main-wrapper wrapper-2">
        {{-- HEADER  --}}
        @include('partials.header')
        
        {{-- MINI CART  --}}
        @include('partials.minicart')

        {{-- SIDEBAR OFF CANVAS  --}}
        @include('partials.sidebaroff')

        {{-- HERO - SLIDER --}}
        @yield('konten')
        
        {{-- FOOTER  --}}
        @include('partials.footer')
    </div>
    
@include('partials.foot')