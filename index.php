<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title class="lang" key="title">Lycoon | Official website</title>
    <link rel="icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="bootstrap.css" media="screen">
    <script src="includes/utils.js"></script>
    <script src="includes/lang.js"></script>
</head>

<body>
    <!-- Top menu -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand pl-4" href="../">lycoon.net</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-menu"
            aria-controls="top-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="top-menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link lang" href="#projects" key="projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang" href="#faq" key="faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang" href="#contact" key="contact">Contact</a>
                </li>
            </ul>
            <li class="nav-item dropdown form-inline">
            <a class="nav-link dropdown-toggle lang" key="language" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:white">Language</a>
                <div class="dropdown-menu" style="">
                    <a class="dropdown-item translate" id="en">English</a>
                    <a class="dropdown-item translate" id="fr">French</a>
                </div>
            </li>
        </div>
    </nav>

    <!-- Intro text -->
    <div class="jumbotron-intro shadow">
        <div class="container-fluid my-5">
            <h1 class="text-center animate__animated animate__fadeInDown lang" key="welcome">Welcome</h1>
            <div class="d-flex justify-content-center">
                <div class="p-4 lead animate__animated animate__fadeInLeft lang" key="movie">Movie enthusiast</div>
                <div class="p-4 lead animate__animated animate__fadeInUp lang" key="programmer">Computer engineering student</div>
                <div class="p-4 lead animate__animated animate__fadeInRight lang" key="jack-trades">Jack-of-all-trades</div>
            </div>
        </div>
    </div>

    <!-- Projects -->
    <a class="anchor" id="projects"></a>
    <div class="jumbotron jumbotron-shadow">
        <h1 class="display-5 text-center mb-5 lang" key="projects">Projects</h1>

        <!-- Video projects -->
        <div class="container project">
            <div class="row">
                <div class="pr-4 col-4 project-pictures">
                <i class="fas fa-video fa-3x project-icon" style="position: absolute;"></i>
                    <img class="project-preview" src="assets/video-preview.png" alt="Code projects preview">
                </div>
                <div class="p-1 col-8">
                    <h2 class="lang" key="videos">Videos</h2>
                    <p class="text-justify lang" key="video-desc">I love cinema, and that's why I love even more directing my own movies. Because of the budget a real shooting takes, I do them on Minecraft. That's called a machinima, a video made within a game.</p>
                    <button type="button" class="btn bg-dark text-white lang" key="btn-videos">See my videos</button>
                </div>
            </div>
        </div>

        <!-- Code projects -->
        <div class="container project">
            <div class="row">
                <div class="pr-4 col-4 project-pictures">
                <i class="fas fa-code fa-3x project-icon" style="position: absolute;"></i>
                    <img class="project-preview" src="assets/code-preview.png" alt="Code projects preview">
                </div>
                <div class="p-1 col-8">
                    <h2 class="lang" key="code">Code</h2>
                    <p class="text-justify lang" key="code-desc">As any form of art, programming is no exception. Being able to give life to something with a few lines of code is very exciting. It's not for nothing that I decided to make a career out of it.</p>
                    <button type="button" class="btn bg-dark text-white lang" key="btn-code">See my code projects</button>
                </div>
            </div>
        </div>

        <!-- Minecraft map projects -->
        <div class="container project">
        <div class="row">
                <div class="pr-4 col-4 project-pictures">
                <i class="fas fa-hammer fa-3x project-icon" style="position: absolute;"></i>
                    <img class="project-preview" src="assets/minecraftmap-preview.png" alt="Code projects preview">
                </div>
                <div class="p-1 col-8">
                    <h2 class="lang" key="maps">Minecraft maps</h2>
                    <p class="text-justify lang" key="maps-desc">Minecraft is my favorite game. It's the game I've ever dreamt of. Nearly everything can be made possible thanks to it. That's why besides making movies and coding mods out of it, I build maps.</p>
                    <button type="button" class="btn bg-dark text-white lang" key="btn-maps">See my Minecraft maps</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <a class="anchor" id="faq"></a>
    <div class="jumbotron jumbotron-shadow">
        <h1 class="display-5 text-center mb-5">FAQ</h1>
        <div class="row">
            <div class="col-md-8 container">
                <h4 class="lang" key="faq-q1">How old are you?</h4>
                <p class="lead text-justify mb-5 lang" key="faq-r1">I am <span id="age"></span> years old.</p>
                <script>document.getElementById("age").innerHTML = diffYears;</script>

                <h4 class="lang" key="faq-q2">Where are you from?</h4>
                <p class="lead text-justify mb-5 lang" key="faq-r2">I was born in Nancy, a beautiful city in the East of France.
                    Nowadays, I live
                    and study in Paris.</p>

                <h4 class="lang" key="faq-q3">What do you use to code?</h4>
                <p class="lead text-justify mb-5 lang" key="faq-r3">I enjoy a lot VSCode, which keeps everything simple and fast, and
                    which allows you to custom nearly everthing. For Java though, I still like using Eclipse (maybe
                    because I've always used it).
                </p>

                <h4 class="lang" key="faq-q4">What languages do you speak?</h4>
                <p class="lead text-justify mb-5 lang" key="faq-r4">I speak French, Polish, English and Spanish. But also Python, Java,
                    C#, OCaml, Rust, and C. I'm okay at web development with HTML, CSS and Javascript.
                </p>

                <h4 class="lang" key="faq-q5">What's your favorite programming language?</h4>
                <p class="lead text-justify mb-5 lang" key="faq-r5"><a href="https://www.rust-lang.org/" target="_blank">Rust</a>. It
                    is a promising language, very comfy
                    to use. I really appreciate it as I feel like coding with a high-level language, for low-level
                    programming. I guess this makes of Rust my favorite language as its syntax and features are close to
                    perfection.
                </p>

                <h4 class="lang" key="faq-q6">How did you make this website?</h4>
                <p class="lead text-justify lang" key="faq-r6">I use <a href="https://getbootstrap.com/"
                        target="_blank">Bootstrap</a> and the theme <a href="https://bootswatch.com/lux/"
                        target="_blank">Lux</a>. There is also some custom code I
                    made in Javascript, CSS and PHP.
                </p>
            </div>
        </div>
    </div>

    <!-- Contact form -->
    <a class="anchor" id="contact"></a>
    <div class="col-md-5 container">
        <h1 class="display-5 text-center lang" key="contact">Contact</h1>
        <div class="mt-5">
        <?php if(isset($_SESSION['isSent']) && $_SESSION['isSent'] == "ok")
        { ?>
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close lang" key="contact-success" data-dismiss="alert">&times;</button>
                Your message has been sent successfully.
            </div>
            <?php
          $_SESSION['isSent'] = "no";
        }
        ?>
        <form method="post" name="contact-form" action="includes/contact-form.php">
            <fieldset>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label form="contact-form lang" key="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="example@email.com">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label form="contact-form" class="lang" key="name">Name</label>
                            <input type="name" class="form-control" name="name" placeholder="John Smith">
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label form="contact-form" class="lang" key="reason">Reason</label>
                    <select class="form-control" name="reason">
                        <option class="lang" key="question">Question</option>
                        <option class="lang" key="partnership">Partnership</option>
                        <option class="lang" key="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label form="contact-form" class="lang" key="message">Message</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                    <small class="form-text text-muted lang" key="message-notice">If you want your request to be processed faster, be as
                        concise as possible.</small>
                </div>

                <button type="submit" name="submit" class="btn btn-primary lang" key="send">Send</button>
            </fieldset>
        </form>
        </div>
    </div>

    <!-- Social media -->
    <div class="footer">
        <div class="content">
            <p>Made with ❤️ in France</p>
            <a target="_blank" href="https://github.com/lycoon"><i class="fab fa-github fa-2x"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UChNpY7j4d7ywGZb_GGHvsqg"><i
                    class="fab fa-youtube fa-2x"></i></a>
            <a target="_blank" href="https://twitter.com/LycoonMC"><i class="fab fa-twitter fa-2x"></i></a>
        </div>
    </div>

    <!-- Scripts loading -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/47192a96c3.js" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170092036-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-170092036-1');
        
    $(function()
    {
        $('.translate').click(function() 
        {
            var lang = $(this).attr('id');

            $('.lang').each(function(index, item) {
            $(this).text(arrLang[lang][$(this).attr('key')]);
            });
        });
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
            });
        });
    });
    </script>
</body>

</html>