<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!--  CSS  -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Wait the page is fully loaded to load our script using 'defer' -->
    <script src="{{asset('js/app.js')}}" defer></script>
</head>

<body>
    <!-- NAVBAR -->
    <header>
        <div class="container">
            <nav class="nav">
                <a href="#">Home</a>
                <a href="#">Links</a>
            </nav>
        </div>
    </header>


    <main>
    <div class="container">
        <div class="row row-cols-md-3">
            @forelse($holidays as $holiday)
            <div class="col">
                <img src="{{$holiday->image}}" alt="...">
                <div class="card-body">
                    <h5>{{$holiday->name}}</h5>
                    <small>{{$holiday->description}}</small>
                    <span class="badge badge-danger">{{$holiday->price}}</span>
                </div>
            </div>
            @empty
            <p>Not card pack yet!</p>

            @endforelse
        </div>
    </div>
    </main>


    </div>
</body>

</html>