@yield('css')


<link rel="stylesheet" href="{{ asset('assets/plugins/noty/noty.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/notyf.css') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="{{ asset('assets/plugins/noty/noty.min.js') }}"></script>

{{-- @if (isset($mode) && $mode == 'rtl')

    <!-- App css -->
    @if (isset($demo) && $demo == 'creative')
        <link href="{{ asset('assets/css/bootstrap-creative.min.css') }}" rel="stylesheet" type="text/css"
            id="bs-default-stylesheet" />
        <link href="{{ asset('assets/css/app-creative-rtl.min.css') }} " rel="stylesheet" type="text/css"
            id="app-default-stylesheet" />
        <link href="{{ asset('assets/css/bootstrap-creative-dark.min.css') }} " rel="stylesheet" type="text/css"
            id="bs-dark-stylesheet" disabled />
        <link href="{{ asset('assets/css/app-creative-dark-rtl.min.css') }} " rel="stylesheet" type="text/css"
            id="app-dark-stylesheet" disabled />
    @else
        @if (isset($demo) && $demo == 'modern')
            <link href="{{ asset('assets/css/bootstrap-modern.min.css') }}" rel="stylesheet" type="text/css"
                id="bs-default-stylesheet" />
            <link href="{{ asset('assets/css/app-modern-rtl.min.css') }} " rel="stylesheet" type="text/css"
                id="app-default-stylesheet" />
            <link href="{{ asset('assets/css/bootstrap-modern-dark.min.css') }} " rel="stylesheet" type="text/css"
                id="bs-dark-stylesheet" disabled />
            <link href="{{ asset('assets/css/app-modern-dark-rtl.min.css') }} " rel="stylesheet" type="text/css"
                id="app-dark-stylesheet" disabled />
        @else
            @if (isset($demo) && $demo == 'material')
                <link href="{{ asset('assets/css/bootstrap-material.min.css') }}" rel="stylesheet" type="text/css"
                    id="bs-default-stylesheet" />
                <link href="{{ asset('assets/css/app-material-rtl.min.css') }} " rel="stylesheet" type="text/css"
                    id="app-default-stylesheet" />
                <link href="{{ asset('assets/css/bootstrap-material-dark.min.css') }} " rel="stylesheet"
                    type="text/css" id="bs-dark-stylesheet" disabled />
                <link href="{{ asset('assets/css/app-material-dark-rtl.min.css') }} " rel="stylesheet" type="text/css"
                    id="app-dark-stylesheet" disabled />
            @else
                @if (isset($demo) && $demo == 'purple')
                    <link href="{{ asset('assets/css/bootstrap-purple.min.css') }}" rel="stylesheet" type="text/css"
                        id="bs-default-stylesheet" />
                    <link href="{{ asset('assets/css/app-purple-rtl.min.css') }} " rel="stylesheet" type="text/css"
                        id="app-default-stylesheet" />
                    <link href="{{ asset('assets/css/bootstrap-purple-dark.min.css') }} " rel="stylesheet"
                        type="text/css" id="bs-dark-stylesheet" disabled />
                    <link href="{{ asset('assets/css/app-purple-dark-rtl.min.css') }} " rel="stylesheet"
                        type="text/css" id="app-dark-stylesheet" disabled />
                @else
                    @if (isset($demo) && $demo == 'saas')
                        <link href="{{ asset('assets/css/bootstrap-saas.min.css') }}" rel="stylesheet" type="text/css"
                            id="bs-default-stylesheet" />
                        <link href="{{ asset('assets/css/app-saas-rtl.min.css') }} " rel="stylesheet" type="text/css"
                            id="app-default-stylesheet" />
                        <link href="{{ asset('assets/css/bootstrap-saas-dark.min.css') }} " rel="stylesheet"
                            type="text/css" id="bs-dark-stylesheet" disabled />
                        <link href="{{ asset('assets/css/app-saas-dark-rtl.min.css') }} " rel="stylesheet"
                            type="text/css" id="app-dark-stylesheet" disabled />
                    @else
                        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
                            id="bs-default-stylesheet" />
                        <link href="{{ asset('assets/css/app-rtl.min.css') }} " rel="stylesheet" type="text/css"
                            id="app-default-stylesheet" />
                        <link href="{{ asset('assets/css/bootstrap-dark.min.css') }} " rel="stylesheet" type="text/css"
                            id="bs-dark-stylesheet" disabled />
                        <link href="{{ asset('assets/css/app-dark-rtl.min.css') }} " rel="stylesheet" type="text/css"
                            id="app-dark-stylesheet" disabled />
                    @endif
                @endif
            @endif
        @endif
    @endif

@else
    <!-- App css -->
    @if (isset($demo) && $demo == 'creative')
        <link href="{{ asset('assets/css/bootstrap-creative.min.css') }}" rel="stylesheet" type="text/css"
            id="bs-default-stylesheet" />
        <link href="{{ asset('assets/css/app-creative.min.css') }} " rel="stylesheet" type="text/css"
            id="app-default-stylesheet" />
        <link href="{{ asset('assets/css/bootstrap-creative-dark.min.css') }} " rel="stylesheet" type="text/css"
            id="bs-dark-stylesheet" disabled />
        <link href="{{ asset('assets/css/app-creative-dark.min.css') }} " rel="stylesheet" type="text/css"
            id="app-dark-stylesheet" disabled />
    @else
        @if (isset($demo) && $demo == 'modern')
            <link href="{{ asset('assets/css/bootstrap-modern.min.css') }}" rel="stylesheet" type="text/css"
                id="bs-default-stylesheet" />
            <link href="{{ asset('assets/css/app-modern.min.css') }} " rel="stylesheet" type="text/css"
                id="app-default-stylesheet" />
            <link href="{{ asset('assets/css/bootstrap-modern-dark.min.css') }} " rel="stylesheet" type="text/css"
                id="bs-dark-stylesheet" disabled />
            <link href="{{ asset('assets/css/app-modern-dark.min.css') }} " rel="stylesheet" type="text/css"
                id="app-dark-stylesheet" disabled />
        @else
            @if (isset($demo) && $demo == 'material')
                <link href="{{ asset('assets/css/bootstrap-material.min.css') }}" rel="stylesheet" type="text/css"
                    id="bs-default-stylesheet" />
                <link href="{{ asset('assets/css/app-material.min.css') }} " rel="stylesheet" type="text/css"
                    id="app-default-stylesheet" />
                <link href="{{ asset('assets/css/bootstrap-material-dark.min.css') }} " rel="stylesheet"
                    type="text/css" id="bs-dark-stylesheet" disabled />
                <link href="{{ asset('assets/css/app-material-dark.min.css') }} " rel="stylesheet" type="text/css"
                    id="app-dark-stylesheet" disabled />
            @else
                @if (isset($demo) && $demo == 'purple')
                    <link href="{{ asset('assets/css/bootstrap-purple.min.css') }}" rel="stylesheet" type="text/css"
                        id="bs-default-stylesheet" />
                    <link href="{{ asset('assets/css/app-purple.min.css') }} " rel="stylesheet" type="text/css"
                        id="app-default-stylesheet" />
                    <link href="{{ asset('assets/css/bootstrap-purple-dark.min.css') }} " rel="stylesheet"
                        type="text/css" id="bs-dark-stylesheet" disabled />
                    <link href="{{ asset('assets/css/app-purple-dark.min.css') }} " rel="stylesheet" type="text/css"
                        id="app-dark-stylesheet" disabled />
                @else
                    @if (isset($demo) && $demo == 'saas')
                        <link href="{{ asset('assets/css/bootstrap-saas.min.css') }}" rel="stylesheet" type="text/css"
                            id="bs-default-stylesheet" />
                        <link href="{{ asset('assets/css/app-saas.min.css') }} " rel="stylesheet" type="text/css"
                            id="app-default-stylesheet" />
                        <link href="{{ asset('assets/css/bootstrap-saas-dark.min.css') }} " rel="stylesheet"
                            type="text/css" id="bs-dark-stylesheet" disabled />
                        <link href="{{ asset('assets/css/app-saas-dark.min.css') }} " rel="stylesheet" type="text/css"
                            id="app-dark-stylesheet" disabled />
                    @else
                        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
                            id="bs-default-stylesheet" />
                        <link href="{{ asset('assets/css/app.min.css') }} " rel="stylesheet" type="text/css"
                            id="app-default-stylesheet" />
                        <link href="{{ asset('assets/css/bootstrap-dark.min.css') }} " rel="stylesheet" type="text/css"
                            id="bs-dark-stylesheet" disabled />
                        <link href="{{ asset('assets/css/app-dark.min.css') }} " rel="stylesheet" type="text/css"
                            id="app-dark-stylesheet" disabled />
                    @endif
                @endif
            @endif
        @endif
    @endif
@endif --}}
