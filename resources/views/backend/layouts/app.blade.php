<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Hexagon Brain')">
    <meta name="author" content="@yield('meta_author', 'Hexagon Brain')">
    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <link rel="stylesheet" href="{{ URL::asset('css/summernote-bs4.css') }}" />

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{ style(mix('css/backend.css')) }}

    @stack('after-styles')

    <script>window.csrf = "{{ csrf_token() }}";
    @if (Auth::user())
    window.user = {"name":"{{ Auth::user()->name }}","email":"{{ Auth::user()->email }}","id":"{{ Auth::user()->id }}"};
    @endif
    </script>

</head>

<body class="{{ config('backend.body_classes') }}">
    @include('backend.includes.header')

    <div class="app-body">
        @include('backend.includes.sidebar')

        <main class="main">
            @include('includes.partials.logged-in-as')

            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="content-header">
                        @yield('page-header')
                    </div><!--content-header-->

                    @include('includes.partials.messages')
                    @yield('content')
                </div><!--animated-->
            </div><!--container-fluid-->
        </main><!--main-->

    </div><!--app-body-->

    @include('backend.includes.footer')

    <!-- Scripts -->
    @stack('before-scripts')
    {!! script(mix('js/backend.js')) !!}
    <script type="text/javascript" src="{{ URL::asset('js/summernote.min.js') }}"></script>
    @stack('after-scripts')

    <script>
    $('#summernote').summernote({
      fontNames: ['Arial', 'Jura', 'Courier New'],
      height: 200
    });
    </script>

</body>
</html>
