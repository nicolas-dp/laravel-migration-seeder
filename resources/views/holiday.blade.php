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

</head>

<body>
    <!-- NAVBAR -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>


    <main class="bg-dark pt-5">
        <div class="container">
            <div class="text-center">
                <img src="https://www.meteoweb.eu/wp-content/uploads/2019/06/solstizio-estate-2019-1.gif" alt="">
            </div>
            <div class="row row-cols-md-4">
                @forelse($holidays as $holiday)
                <div class="col">
                    <img src="{{$holiday->image}}" alt="..." style="object-fit: cover; height: 145px; width: 210px;">
                    <div class="card-body text-white d-flex flex-wrap">
                        <h5 class="text-capitalize">{{$holiday->name}}</h5>
                        <small>{{$holiday->description}}</small>
                        <span>
                            Prezzo:
                            <badge class="badge bg-danger"> {{$holiday->price}} €</badge>
                        </span>
                    </div>
                </div>
                @empty
                <p>Not card pack yet!</p>

                @endforelse
            </div>
        </div>
    </main>


    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>