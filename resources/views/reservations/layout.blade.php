<!DOCTYPE html>
<html>
<head>
    <title>Student CRUD</title> 
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="bg" style="background-image: url(assets/img/slide/depositphotos_9073482-stock-photo-generic-reserved-sign-with-fork.jpg);">
<div class="container">
    @yield('content')
</div>

</body>
<script>
    $(document).ready(function() {
        // Submit the search form when the search input field changes
        $('#search-input').on('input', function() {
            $('form#search-form').submit();
        });
    });
</script>
</html>
