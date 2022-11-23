@extends('web.layout')
@section('content')
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img" data-parallax="scroll" data-image-src="{{asset('img/about.jpg')}}"></div>
            </div>
            <div class="col-lg-6">
                <div class="section-header">
                    <p>Aprende Sobre Nosotros</p>

                </div>
                <div class="about-tab">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#tab-content-1">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-2">Misión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-3">Visión</a>
                        </li>
                    </ul>

                    <div class="tab-content" style="text-align: justify">
                        <div id="tab-content-1" class="container tab-pane active">

                            Somos un equipo de Profesionales dedicados a satisfacer las necesidades y requerimientos de nuestros todos
                            nuestros clientes, ya sea que necesite una página web, un sistema de ventas integrado de facturación electrónica
                            o cualquier software nosotros podemos solucionar sus problemas mediante soluciones integrales y a medida.
                        </div>
                        <div id="tab-content-2" class="container tab-pane fade">
                            <p style="text-align: center"><b>«Llevar soluciones integrales a todos nuestros clientes»</b> </p>
                            Ser una gran empresa innovadora de soluciones técnicas e informáticas, llevando a nuestros
                            clientes la mejor experiencia, a la vez lograr ser un líder tecnológico en el trascurso del tiempo.
                            Otro de los enfoques de esta misión es llevar nuestros productos a un nivel excepcional y
                            lograr ser la empresa top que brinde soluciones informáticas a los empresarios de mi localidad, <b>PIURA</b>.

                        </div>
                        <div id="tab-content-3" class="container tab-pane fade">
                            Ser parte de su familia empresarial para todos nuestros clientes , ayudándolos a crear
                            soluciones y servicios innovadores para su crecimiento laboral , sobre la base de nuestra
                            responsabilidad, calidad, productividad y compromiso.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial">
    <div class="container">
        <div class="section-header text-center">
            <p>Testimonios de nuestros Clientes</p>
            <h2>Clientes que confian en nosotros</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <div class="testimonial-profile">
                    <img src="img/testimonial-1.jpg" alt="Image">
                    <div class="testimonial-name">
                        <h3>Person Name</h3>
                        <p>Profession</p>
                    </div>
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-profile">
                    <img src="img/testimonial-2.jpg" alt="Image">
                    <div class="testimonial-name">
                        <h3>Person Name</h3>
                        <p>Profession</p>
                    </div>
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-profile">
                    <img src="img/testimonial-3.jpg" alt="Image">
                    <div class="testimonial-name">
                        <h3>Person Name</h3>
                        <p>Profession</p>
                    </div>
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-profile">
                    <img src="img/testimonial-4.jpg" alt="Image">
                    <div class="testimonial-name">
                        <h3>Person Name</h3>
                        <p>Profession</p>
                    </div>
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Conozca a nuestro equipo</p>
            <h2>Los chicos que están detrás de nuestro gran éxito.</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-1.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Donald John</h2>
                        <p>Founder & CEO</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-2.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Adam Phillips</h2>
                        <p>Chef Executive</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-3.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Thomas Olsen</h2>
                        <p>Chef Advisor</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-4.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>James Alien</h2>
                        <p>Advisor</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
