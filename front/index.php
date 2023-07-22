<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branja Technologies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <header class="header">

        <div class="menu container">
            <img src="./img/logoBranja.png" alt=""class="logo">
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="./img/menu.png" class="menu-icono" alt="menu" >
            </label>
            <nav class="navbar">
                <ul>
                    <li><a class="categorys"  href="#">Inicio</a></li>
                    <li><a class="categorys"  href="#">Nosotros</a></li>
                    <li><a class="categorys"  href="#">Servicios</a></li>
                    <li><a class="categorys"  href="#">Contacto</a></li>
                    <li><a class="categorys"  href="../backend/index.php">Plataforma</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Branja Technologies</h1>
                <p>
                    Branja Technologies es una empresa líder en el apasionante mundo de la tecnología y el desarrollo, dedicada a ofrecer
                    soluciones innovadoras y personalizadas para sus clientes. Con un enfoque en la vanguardia tecnológica, Branja
                    Technologies se ha destacado como una referencia en el mercado, gracias a su equipo altamente capacitado de expertos
                    en ingeniería, diseño y desarrollo de software. Nuestra empresa se enorgullece de ofrecer una amplia gama de
                    productos tecnológicos de primera calidad, desde dispositivos electrónicos hasta soluciones de software avanzadas.
                    Asimismo, nuestros servicios de desarrollo se adaptan a las necesidades únicas de cada cliente, garantizando la
                    entrega de productos finales que superan las expectativas y alcanzan el más alto nivel de calidad y funcionalidad.
                    En Branja Technologies, nuestro compromiso es impulsar el progreso tecnológico y proporcionar soluciones que
                    transformen la forma en que las personas interactúan con el mundo digital.
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>

            <div class="header-img">
                <img src="./img/solucionesTecnologicas.jpg" alt="">
            </div>
        </div>

    </header>

    <section class="about container">

        <div class="about-img">
            <img src="./img/proyectos.jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Nosotros en Branja Technologies:
                Somos una empresa dedicada a impulsar el futuro a través de la tecnología. Desde nuestra fundación, hemos estado
                comprometidos con la excelencia y la innovación, ofreciendo soluciones tecnológicas de vanguardia para satisfacer las
                necesidades cambiantes del mundo digital.
            </p>
            <br>
            <p>
                En Branja Technologies, creemos que nuestra dedicación a la innovación y la excelencia nos distingue en el mercado.
                Nuestro equipo altamente capacitado y comprometido se esfuerza por ofrecer resultados excepcionales en cada proyecto.
                Además, nuestra pasión por la tecnología nos impulsa a estar siempre a la vanguardia y ofrecer soluciones que anticipen
                las tendencias del futuro.
                
                Si buscas una empresa confiable y con visión de futuro para cubrir tus necesidades tecnológicas, te invitamos a unirte a
                nosotros en esta emocionante travesía hacia el progreso digital.
            </p>
        </div>
    </section>

    <main class="services">
        <h2>Servicios</h2>
        <div class="services-content container">
            
            <div class="services-1">
                <i class="fa-regular fa-file-code"></i>
                <h3>Desarrollo</h3>
            </div>

            <div class="services-1">    
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Mantenimiento de Equipos</h3>
            </div>

            <div class="services-1">
                <i class="fa-solid fa-diagram-project"></i>
                <h3>Proyectos y automatizaciones</h3>
            </div>

            <div class="services-1">
                <i class="fa-solid fa-person-chalkboard"></i>
                <h3>Capacitaciones</h3>
            </div>
        </div>

    </main>

    <section class="form container">

        <form method="post" autocomplete="off" >

            <h2>Contactenos</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="mensagge" placeholder="Comentario o  Inquietudes"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onClick="myFuction()">
            </div>

        </form>
     </section>

     <footer class="footer">

            <div class="footer-content container">

                <div class="link">
                    <a href="#" class="logo"></a>
                </div>

                <div class="link">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Servicio</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>

                <div class="partFooter">

                    <div class="social-media">
                        <a href="./" class="social-media-icon">
                            <img src="img/bxl-facebook.svg" alt="" class="icon-redsocial">
                        </a>
                        <a href="./" class="social-media-icon">
                            <img src="img/bxl-instagram.svg" alt="" class="icon-redsocial">
                        </a>
                        <a href="./" class="social-media-icon">
                            <img src="img/bxl-twitter.svg" alt="" class="icon-redsocial">
                        </a>
                    </div>

            </div>
     </footer>

     <?php
        include("send.php");
     ?>
     
     <script>
        function myFuction(){
            window.location.href="http://localhost/ProyectoBackEnd/front"
        }
     </script>

    

</body>
</html>