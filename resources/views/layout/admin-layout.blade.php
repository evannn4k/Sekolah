@extends('layout.default')

@section('content')
    <div class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
        <div class="app-wrapper">

            <x-header></x-header>


            <x-sidebar></x-sidebar>

            <main class="app-main">
                @yield('main')
            </main>

            <x-footer></x-footer>

        </div>
    </div>
@endsection
