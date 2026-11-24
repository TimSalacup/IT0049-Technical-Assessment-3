<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tasks for Today</title>

    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            color: #1e293b;
        }
        header {
            background: #1e3a5f;
            color: white;
            padding: 20px;
        }
        header div, main {
            max-width: 900px;
            margin: 0 auto;
        }
        header h1 { margin: 0 0 15px; font-size: 24px; }
        nav { display: flex; gap: 18px; flex-wrap: wrap; }
        nav a { color: white; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        main {
            background: white;
            margin: 30px auto;
            padding: 25px;
            border-radius: 10px;
        }
        h2 { margin-top: 0; }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dbe3ed;
        }
        th { background: #eaf0f8; }
        .table-wrap { overflow-x: auto; }
        .muted { color: #526276; }
        @media (max-width: 940px) {
            main { margin: 20px 15px; }
        }
    </style>
</head>
<body>
    <header>
        <div>
            <h1>Tasks for Today</h1>
            <nav>
                <a href="{{ route('welcome') }}">Welcome</a>
                <a href="{{ route('tasks') }}">Task List</a>
                <a href="{{ route('profile') }}">Profile</a>
                <a href="{{ route('about') }}">About</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>