@extends('layout.default')

@section('content')
    <div class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
        <div class="app-wrapper">

            <x-guru-header></x-guru-header>


            <x-guru-sidebar></x-guru-sidebar>

            <main class="app-main">
                @yield('main')
            </main>

            <x-guru-footer></x-guru-footer>

        </div>
    </div>
@endsection
