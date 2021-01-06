<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joseph Morales Silva</title>
    <link rel="icon" type="image/svg" href="images/rocket.svg" />
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>

<body>
<i class="icon-menu burger-button" id="burger-menu" ></i>
    <header class="header">
        <section class="container">
            <figure class="header__logo">
                <img src="{{ asset('/images/JOSEPH MORALES SILVA.png') }}" alt="logo" height="50px">
            </figure>
            <nav class="header__menu header__menu--isActive " >
                <ol>
                    <li>
                        <a class="header__menu--link" href="#portafolio">Portafolio</a>
                    </li>
                    <li>
                        <a class="header__menu--link" href="#eventos">Experiencia</a>
                    </li>
                    <li>
                        <a class="header__menu--link" href="#t_Juntos">Trabajemos juntos</a>
                    </li>
                </ol>
            </nav>
        </section>
    </header>

    <main>
        @yield('content')
    </main>
         <!-- <footer class="footer">
            <section class="container">
                
                <div>
                    <p>Proyecto Individual </p>
        
                </div>
                <div>
                    <p>Curso: IF 7102 Multimedios </p>
                </div>
            </section>
            
        </footer>  -->

        <script src="{{ asset('js/event.js')}}"></script>


</body>

</html>