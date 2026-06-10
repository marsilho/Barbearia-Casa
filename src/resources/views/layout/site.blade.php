<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('partials.head')
</head>

<body>
    <div cress="page-wrapper">

        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    @include('partials.script')

</body>

</html>
