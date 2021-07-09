<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test LOOPIT</title>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" defer />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">

</head>

<body>
    <div id="app"></div>
</body>

<script>
    window.issloggedin = {{Auth::user()?true:false}};
</script>

</html>