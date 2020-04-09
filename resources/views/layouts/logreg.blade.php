<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Title and favicon --}}
    <title>Hello Bulma!</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

    {{-- CSS Files --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@mdi/font@5.0.45/css/materialdesignicons.min.css">

    {{-- JS Files --}}
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.js"></script>

</head>

<style>
    .interactive-bg {
        height: 100vh;
        background-color: #00d1b2;
        -webkit-box-shadow: inset 24px 4px 64px -24px rgba(71,71,71,1);
        -moz-box-shadow: inset 24px 4px 64px -24px rgba(71,71,71,1);
        box-shadow: inset 24px 4px 64px -24px rgba(71,71,71,1);
        padding: 0px;
    }
    @media (max-width: 769px) {
        .interactive-bg{
            display: none
        }
    }

    .input {
        border-radius: 50px;
    }

    .button {
        margin-top: 20px;
        margin-bottom: 20px;
        min-width: 150px;
    }

    .login-logo {
        margin: 0 auto;
        margin-bottom: 50px;
        max-height: 100px;

    }

    .columns{
        margin: 0px;
    }
</style>


<body>

@yield('content')

</body>

</html>
