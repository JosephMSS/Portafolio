@extends('layouts.app')
@section('content')
<i class="icon-menu burger-button" id="burger-menu" ></i>
    <header class="header">
        <section class="container">
            <figure class="header__logo">
                <img src="images/JOSEPH MORALES SILVA.png" alt="logo" height="50px">
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
        <section class="protagonist">
            <section class="container">
                <h1 class="protagonist__title">Hola, soy <strong>Joseph Morales</strong> <br>Desarrollador Junior<br>Estudiante de <strong>Informática
                        Empresarial</strong></h1>
            <figure class="logo">

                <img class="protagonist__img" src="images/a2.jpg" width="500" height="300" alt="Imagen de Portada" />
            </figure>
            
            </section>
    
        </section>
        <section id="portafolio" class="portfolio">
            <section class="container">
                <h2 class="portfolio__title">Portafolio</h2>
                    <article class="portfolio__project">
                        <div class="portfolio__project--details">
                            <h3 class="portfolio__project--title">Monso</h3>
                            <h6 class="portfolio__project--tech">Laravel</h6>
                            <p class="portfolio__project--date"><small><strong>Fecha:</strong> Julio 2020</small></p>
                            <p class="portfolio__project--url"><small><strong>Integrantes:</strong><a href="https://josue7114.github.io/PortafolioMulti/"> Josué Cordero,</a><a href="https://jruiz28.github.io/Portafolio/">Josué Ruiz,</a><a>Joseph Morales.</a></small></p>
                            <p class="portfolio__project--description">Desarrollo de una página web para la empresa Monso, con el fin de presentar el catálogo de productos que posee la compañia.  </p>
                        </div>
                        <figure class="portfolio__project--imageContainer">
                            <img class="portfolio__project--image" src="images/monso.png"
                                alt="proyecto de curso de react" width="500px">
                        </figure>
                    </article>
                <article class="portfolio__project">
                    <div class="portfolio__project--details">
                        <h3 class="portfolio__project--title">Joyota S.A</h3>
                        <h6 class="portfolio__project--tech">ASP .NET</h6>
                        <p class="portfolio__project--date"><small><strong>Fecha:</strong> Diciembre 2019</small></p>
                        <p class="portfolio__project--url"><small><strong>Integrantes: </strong><a href="https://sebasmesen17.github.io/CV/">Sebastián Mesen,</a><a href="https://jruiz28.github.io/Portafolio/">Josué Ruiz,</a><a>Joseph Morales.</a></small></p>
                        <p class="portfolio__project--description">Proyecto final del curso de Administracion de bases de datos y Lenguajes Comerciales, basado en la tecnologia ASP.NET. </p>
                    </div>
                    <figure class="portfolio__project--imageContainer">
                        <img class="portfolio__project--image" src="images/Joyota (1).png"
                            alt="proyecto de curso de react" width="500px">
                    </figure>
                </article>
            </section>
    
        </section>
        <section class="container">
            <h2 class="event__list--title">Más sobre mi experiencia</h2>
        </section>
         <section id="eventos" class="event__list">
            <section class="container">
                <!-- <article class="event">
                    <figure class="event__imgContainer">
                        <img class="event__img" alt="Imagen de experiencia" src="images/platzi-conf.jpg" width="500px" />
                    </figure>
                    <section class="event__detail">
                        <h3 class="event__title">Platzi conf Mexico 2018</h3>
                        <p class="event__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                            possimus
                            optio tenetur aliquam nam
                            unde
                            quibusdam, dolor cum odio quod harum fuga placeat. Deserunt eaque perferendis laboriosam id
                            velit
                            eum?
                        </p>
                        <a class="event__url" href="https://www.youtube.com/watch?v=khXfXYOLfzU">Ver platica</a>
                    </section>
                </article> -->
                <article class="event">
                    <figure class="event__imgContainer">
                        <img class="event__img" alt="Imagen de experiencia" src="images/responsive desing.png" width="500px" />
                    </figure>
                    <section class="event__detail">
                        <h3 class="event__title">Mobile First</h3>
                        <p class="event__description">Desarrollo de página web responsive para el curso: IF 7102 Multimedios. 
                        </p>
                        <a class="event__url" href="https://josephmss.github.io/MobileFirst/">Ver Proyecto</a>
                    </section>
                </article>
                <article class="event">
                    <figure class="event__imgContainer">
                        <img class="event__img" alt="Imagen de experiencia" src="images/team (1).png" width="500px" />
                    </figure>
                    <section class="event__detail">
                        <h3 class="event__title">TCU-632 Gestión local en las comunidades del Pacífico.</h3>
                        <p class="event__description">Participacion en el desarrollo del sistema de registro, control de adopciones y rescate animal de la  Asociación Adopciones Colitas Esparza. 
                        </p>
                    </section>
                </article>
               
            </section>
        </section> 
        <section id="t_Juntos" class="contact">
            <section class="container">
                <form action="#" class="contact__form">
                    <h3 class="contact__title">Creamos algo juntos?</h3>
                    <input class="contact__input" placeholder="Dejanos tu email !" type="text" name="email" id="Email">
                    <button class="contact__btn">Enviar</button>
                </form>
            </section>
            <section class="social">
                <a href="" class="social__link social__link--twitter"></a>
                <a href="https://www.facebook.com/joseph.morales.35110" class="social__link social__link--facebook"></a>
                <a href="https://github.com/JosephMSS" class="social__link social__link--github"></a>
                <a href="https://www.instagram.com/joseph.moraless/?hl=es-la" class="social__link social__link--instagram"></a>
            </section>
        </section>
@endsection
