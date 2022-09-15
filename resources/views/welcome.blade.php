<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
    <div class="container">

        <div class='row'>
            <ul class="nav mt-5">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('test.one') }}">Test 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('test.two') }}">Test 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('test.three') }}">Test 3</a>
                </li>
            </ul>
        </div>

    </div>
</body>

</html>
