<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tags</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body class="w-75 m-auto">
    <header class="mb-3">
        <nav class="nav justify-content-between">
            <a href="{{ route('tags.index') }}" class="nav-link">Tags</a>
            <div class="nav">
                <a class="nav-link" href="{{ route('tags.new') }}">New Tag</a>
                <a class="nav-link" href="{{ route('products.index') }}">Products</a>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p class="mt-3 lead text-center fs-6">&copy; Copyright 2022 - João da Mata</p>
    </footer>
</body>
</html>