<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Store</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

@include('inc.navbar')

<div class="row">
    <div class="sidebar col-md-2 col-lg-2">
    @include('inc.sidebar')  
    </div>
    <div class="col-md-10 col-lg-10">
    @yield('content')
</div>
</div>




  
</body>
</html>