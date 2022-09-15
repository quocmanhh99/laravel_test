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
    <div class="container mt-5">

        <div class='row mt-5'>
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
            <div class="col-12 mb-5">
                <h2 class="text-center">Test 3</h2>
                <p class="text-center"><b>1.1 Danh sách những người đạt điểm cao nhất trong từng trò chơi</b></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Game</th>
                            <th>User</th>
                            <th>Max Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $t = 1;
                        @endphp
                        @foreach ($userMaxScores as $user)
                            <tr>
                                <td>{{ $t++ }}</td>
                                <td>{{ $user->games['0']->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->max_score }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="col-12 mb-5">
                <p class="text-center"><b>1.2 Danh sách game</b></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Game</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $t = 1;
                        @endphp
                        @foreach ($games as $game)
                            <tr>
                                <td>{{ $t++ }}</td>
                                <td>{{ $game->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="col-12 mb-5">
                <p class="text-center"><b>1.3 Danh sách User</b></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $t = 1;
                        @endphp
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $t++ }}</td>
                                <td>{{ $user->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <br>
            <div class="col-12 mb-5">
                <p class="text-center"><b>1.4 Bảng User_Game</b></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>User ID</th>
                            <th>Game ID</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $t = 1;
                        @endphp
                        @foreach ($usergames as $usergame)
                            <tr>
                                <td>{{ $t++ }}</td>
                                <td>{{ $usergame->user_id}}</td>
                                <td>{{ $usergame->game_id}}</td>
                                <td>{{ $usergame->score}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>
