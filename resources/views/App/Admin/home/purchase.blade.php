<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - Management</title>
    <link rel="stylesheet" href="{{ asset('css/DataUsers.css') }}">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js' )}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
                a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<header>
    <nav>
            <ul>
                <li class="logout-form">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    <br>
    <div class="all">
    <div class="left">
    <div class="text"><a href="/dataUsers">Users</a></div>
    </div>

    <div class="center">
    <div class="explainer"><img src="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" alt=""></div>
    <div class="text"><a href="/posts911">Home</a></div>
    </div>

    <div class="right">
    <div class="text"><a href="/purchase">Purchase</a></div>
    </div>

    </div>
    <br><br>
    </header>
    <main>
    <div class="container">
        <h1>Purchase</h1>
        <h2> List</h2>
        <h6></h6>
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $posts as $post )
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        @if ($post->status)
                            Done
                        @else
                            Process
                        @endif
                    </td>
                    <td>
                    <a href="{{ url("/purchase/$post->id/edit")}} " class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </main>
    
</body>
</html>
