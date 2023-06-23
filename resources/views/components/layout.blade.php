<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page ?? "Todo"}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <script src="https://kit.fontawesome.com/e51c76ee7f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <img src="{{asset('assets/images/laravel-icon.png')}}" alt="" srcset="">
        </aside>
        <div class="content">
            <nav>
                {{$btn ?? null}}
            </nav>
            <main>
                {{$slot}}
            </main>
        </div>
    </div>
</body>
</html>
