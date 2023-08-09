<head>
    <title>@yield('tieudetrang')</title>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container > header {
            height: 220px
        }

        .container >nav {
            height: 60px
        }

        .container > footer {
            height: 90px;
        }

        .container > main {
            display: flex;
            min-height: 500px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="bg-primary"></header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            @include('menu')
        </nav>
        <main>
            <article class="col-9 bg-light">
                @yield('noidung')
            </article>
            <aside class="col-3 bg-info">
                Thông Tin Bổ Sung
            </aside>
        </main>
        <footer class="bg-danger">
            Phát Triển Bởi Kiệt Nguyễn
        </footer>
    </div>
</body>
