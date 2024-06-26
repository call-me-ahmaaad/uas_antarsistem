<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anishop</title>
    <link rel="stylesheet" href={{URL::asset("/css/dashboard.css")}}>
</head>
<body>
    {{-- Header: Title Section --}}
    <div class="title">
        <h1>DASHBOARD</h1>
    </div>

    {{-- Container: Navigation Card Button --}}
    <div class="container">
        <a class="container card" href={{route('figure.list')}}>
            <h3>Figure List</h3>
            <p>Menampilkan daftar action figure di inventori.</p>
        </a>
        <a class="container card" href={{route('figure.add')}}>
            <h3>Add Figure</h3>
            <p>Menambahkan action figure ke inventori.</p>
        </a>
        <a class="container card" href="/hanselList">
            <h3>Hansel's Item</h3>
            <p>Menampilkan daftar item di inventori Tim Hansel.</p>
        </a>
    </div>

    {{-- Footer: Team Info --}}
    <div class="team">
        <h2>Created by Team 6</h2>
    </div>
</body>
</html>
