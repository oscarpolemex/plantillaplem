<!doctype html>
<html lang="en">
<head>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Hello, world!</title>
</head>
<body>
<h1><i class="icon ion-home"></i>Hello, world!</h1>
<script>
    $(document).ready(function () {
        $.ajax({
            url: 'https://api.datos.gob.mx/v1/data-core',
            dataType: 'json',
            success: function(response){
                console.log(response)
            }
        });
    });
</script>
</body>
</html>
