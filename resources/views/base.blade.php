<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- balise title pour affichage  nom dans l'onglet -->
    <title>{{ config('app.name') }} @yield('page_title')</title>

    <!-- Bootstrap CSS dans le head-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @show
</head>
<body>
    <header>
        <h1>Balise H1 - site-salle-sport</h1>
        <nav>
            <!-- barre de navigation avec des liens vers chaque page du site -->
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li><a href="{{ route('cours') }}">Cours</a></li>
                <li><a href="{{ route('tarifs') }}">Tarifs</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('mentions-legales') }}">MentionsLegales</a></li>
            </ul>
        </nav>
    </header>
    
    @section('content')
    @show

    <footer>
        <ul>
            <li><a href="{{ route('mentions-legales') }}">Mentionslegales</a></li>
            <li>Copyright site-salle-sport 2023</li>
        </ul>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>