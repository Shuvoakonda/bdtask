<?php
$servername = "localhost";
$root = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $root, $password);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mid Term</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/veno box/venobox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <header class="container-fluid">


        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light px-3 ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">Skills</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group dropstart">
                            <button class="btn dropdown-toggle" aria-haspopup="true" type="" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="image-fluid rounded-circle" style="height:52px;width:52px;" src="assets/images/my-photo/my  (4).jpg" alt="">
                            </button>
                            <ul class="dropdown-menu container-fluid" style="margin-top: 70px; ">
                                <li><button class="dropdown-item" type="button">Md.Shuvo Akando</button></li>
                                <li><button class="dropdown-item" type="button">Web Developer</button></li>
                                <li><button class="dropdown-item" type="button">01303550622</button></li>
                                <li><button id="button-design" class="dropdown-item" type="button"><a href="login.php">Log Out</a></button></li>
                            </ul>
                        </div>
                    </li>




                </ul>

            </div>
        </nav>


    </header>
    <main>

        <section id="hero" class="container-fluid mb-5" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="500">
            <div class="d-flex flex-column justify-content-center align-items-center box">
                <h1>
                    Hey,I am Shuvo.
                </h1>
                <hr class="underline">
                <ul class="d-flex flex-wrap justify-content-center align-items-center gap-3 list-none ">
                    <li>
                        Frontend Designer
                    </li>
                    <li>
                        Photographer
                    </li>
                    <li>
                        Graphic Designer
                    </li>
                </ul>
            </div>

        </section>

        <section id="about" class="container my-5" data-aos="fade-left" data-aos-delay="100" data-aos-duration="500">
            <div class="box">
                <div class=" row row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 ">
                    <div class="col">
                        <h1>
                            About Me
                        </h1>
                        <article class="text-justify mt-5">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ex laboriosam
                                reprehenderit veritatis sint fugiat eligendi magnam sequi ab quaerat similique,
                                assumenda dolorem velit a corrupti porro quam officiis consequuntur ratione incidunt
                                amet natus esse quos. Quod ab earum sit. Provident reiciendis assumenda labore! Sed
                                asperiores quidem facere incidunt quaerat!
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque repellat enim iure
                                pariatur praesentium deserunt dolorem suscipit voluptates aliquam quis consectetur
                                assumenda aliquid, nobis, incidunt consequuntur accusamus nam reprehenderit odit
                                similique odio magni? Voluptate reprehenderit incidunt error ducimus nihil veniam, aut
                                laborum itaque quae ab quis eos illum nemo magni nostrum, dolorum a, praesentium beatae
                                laudantium commodi quod odio adipisci. Esse fugit voluptas nobis, cum nulla id doloribus
                                laboriosam illo deserunt aspernatur tempore eaque fugiat quod vitae eveniet ullam dicta.
                                Assumenda deleniti atque facilis debitis fuga iure similique consectetur reiciendis?
                            </p>
                        </article>

                        <div class="d-grid ">
                            <a target="_blank" href="https://www.wikipedia.org/" class="btn btn-primary text-white">
                                Read More
                            </a>
                        </div>

                        <div class="d-flex justify-content-center my-4 gap-5">
                            <button class="btn rounded  btn-outline-primary">
                                <a href="https://www.facebook.com"><i class="fab fa-facebook" aria-hidden="true"></i></a>

                            </button>
                            <button class="btn rounded   btn-outline-primary">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </button>
                            <button class="btn rounded   btn-outline-primary">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </button>
                            <button class="btn rounded   btn-outline-primary">
                                <i class="fab fa-linkedin" aria-hidden="true"></i>
                            </button>
                        </div>

                    </div>
                    <div class="col" data-aos="fade-down" data-aos-delay="170" data-aos-duration="500">
                        <div class="d-flex justify-content-center">
                            <img style="height: 600px; width: 500px;" src="assets/images/my-photo/my  (6).jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="skill" class="container-fluid my-5 py-5" data-aos="fade-right" data-aos-delay="150" data-aos-duration="500">
            <div class="box d-flex flex-column justify-content-center align-items-center text-white gap-2">
                <h1>
                    My Skills
                </h1>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, accusantium.
                </p>
                <hr class="underline">
                <div class="d-flex justify-content-center align-items-center flex-wrap gap-5">
                    <div class="d-flex justify-content-center align-items-center flex-column gap-3" data-aos="flip-right">
                        <img src="assets/images/percent.png" class="image-fluid" alt="">
                        <h4>
                            Photography
                        </h4>
                    </div>

                    <div class="d-flex justify-content-center align-items-center flex-column gap-3" data-aos="flip-right">
                        <img src="assets/images/percent.png" class="image-fluid" alt="">
                        <h4>
                            Graphic Design
                        </h4>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-column gap-3" data-aos="flip-left">
                        <img src="assets/images/percent.png" class="image-fluid" alt="">
                        <h4>
                            Frontend Design
                        </h4>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-column gap-3" data-aos="flip-left">
                        <img src="assets/images/percent.png" class="image-fluid" alt="">
                        <h4>
                            Logo Design
                        </h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="container my-5 " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <div class="box d-flex justify-content-center align-items-center flex-column">
                <h1>
                    Services
                </h1>
                <p class="text-center mt-3 mb-5 ">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit numquam et repellendus, <br>
                    harum inventore quia tempore voluptas tempora quidem perferendis?
                </p>

                <div class="card-deck row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-3 ">
                    <div class="single-card col">
                        <div class="single-card-body text-center bg-transparent ">

                            <i class="fa fa-paint-brush text-warning fa-3x border border-warning rounded-circle p-3" aria-hidden="true"></i>
                            <h3 class="my-2">
                                Branding
                            </h3>
                            <p class="my-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, architecto? Nobis
                                libero quod laudantium blanditiis, sunt consectetur alias corrupti, temporibus
                                consequuntur numquam labore a nisi adipisci tempore asperiores harum quidem.
                            </p>
                            <a target="blank" href="https://www.wikipedia.org/" class="btn btn-warning text-white">
                                Read More
                            </a>


                        </div>
                    </div>
                    <div class="single-card col">
                        <div class="single-card-body text-center bg-transparent ">

                            <i class="fa fa-camera text-warning fa-3x border border-warning rounded-circle p-3" aria-hidden="true"></i>
                            <h3 class="my-2">
                                Design
                            </h3>
                            <p class="my-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, architecto? Nobis
                                libero quod laudantium blanditiis, sunt consectetur alias corrupti, temporibus
                                consequuntur numquam labore a nisi adipisci tempore asperiores harum quidem.
                            </p>

                            <a target="blank" href="https://www.wikipedia.org/" class="btn btn-warning text-white">
                                Read More
                            </a>

                        </div>
                    </div>
                    <div class="single-card col">
                        <div class="single-card-body text-center bg-transparent ">

                            <i class="fa fa-address-card text-warning fa-3x border border-warning rounded-circle p-3" aria-hidden="true"></i>
                            <h3 class="my-2">
                                Development
                            </h3>
                            <p class="my-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, architecto? Nobis
                                libero quod laudantium blanditiis, sunt consectetur alias corrupti, temporibus
                                consequuntur numquam labore a nisi adipisci tempore asperiores harum quidem.
                            </p>
                            <a target="blank" href="https://www.wikipedia.org/" class="btn btn-warning text-white">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="portfolio" class="container-fluid my-5 py-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="box  ">
                <h1 class="text-center">
                    Portfolio
                </h1>
                <p class="text-center mb-5">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo fugiat necessitatibus deserunt
                    quisquam libero et amet itaque iure earum quos!
                </p>
                <ul class="d-flex flex-wrap justify-content-center gap-3 list-none mt-3">

                    <li><a href="#">Photography</a></li>
                    <li><a href="#">Logo Design</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
                <div class="d-flex flex-wrap gap-3 justify-content-center align-items center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <a class="my-image-links" data-gall="gallery01" href="assets/images/portfolio/1.png">
                        <img src="assets/images/portfolio/1.png">
                    </a>
                    <a class="my-image-links" data-gall="gallery01" href="assets/images/portfolio/2.png">
                        <img src="assets/images/portfolio/2.png" class="image-fluid" alt="">
                    </a>
                    <a class="my-image-links" data-gall="gallery01" href="assets/images/portfolio/3.png">
                        <img src="assets/images/portfolio/3.png" class="image-fluid" alt="">
                    </a>
                    <a class="my-image-links" data-gall="gallery01" href="assets/images/portfolio/4.png">
                        <img src="assets/images/portfolio/4.png" class="image-fluid" alt="">
                    </a>
                    <a class="my-image-links" data-gall="gallery01" href="assets/images/portfolio/5.png">
                        <img src="assets/images/portfolio/5.png" class="image-fluid" alt="">
                    </a>
                    <a class="my-image-links" data-gall="gallery01" href="assets/images/portfolio/6.png">
                        <img src="assets/images/portfolio/6.png" class="image-fluid" alt="">
                    </a>
                    <a class="my-image-links" data-gall="gallery01" href="assets/images/portfolio/7.png">
                        <img src="assets/images/portfolio/7.png" class="image-fluid" alt="">
                    </a>
                    <a class="my-image-links" data-gall="gallery01" href="assets/images/portfolio/8.png">
                        <img src="assets/images/portfolio/8.png" class="image-fluid" alt="">
                    </a>

                </div>
            </div>
        </section>
        <section id="blog" class="container my-5">
            <h1 class=" text-center my-5">
                Blog
            </h1>

            <div class="blogs row row-col-1 row-col-md-2 container-fluid">
                <article class="col my-3">
                    <figure class="text-center">
                        <img src="assets/images/blog/1.png" class="image-fluid" alt="">
                        <figcaption class="mt-2">
                            By <a href="" class="text-info">Author</a>. August, 23, 2015. <a href="" class="text-info">1
                                comment</a>
                        </figcaption>
                    </figure>
                    <h3 class="text-center">
                        Lorem ipsum dolor sit amet consectetur.
                    </h3>
                    <br>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ducimus aspernatur reprehenderit
                        soluta aperiam blanditiis perferendis consequuntur suscipit omnis ut fuga repellendus molestias
                        in, provident optio assumenda voluptas, expedita beatae amet explicabo mollitia labore
                        voluptates est! Distinctio vero explicabo pariatur quidem, laudantium cumque enim. Sit tempore
                        libero amet aliquam eligendi.
                    </p>
                    <div class="d-grid ">
                        <a target="blank" href="https://www.wikipedia.org/" class="btn btn-warning text-white">
                            Read More
                        </a>
                    </div>
                </article>

                <article class="col my-3">
                    <figure class="text-center">
                        <img src="assets/images/blog/2.png" class="image-fluid" alt="">
                        <figcaption class="mt-2">
                            By <a href="" class="text-info">Author</a>. August, 23, 2015. <a href="" class="text-info">1
                                comment</a>
                        </figcaption>
                    </figure>
                    <h3 class="text-center">
                        Lorem ipsum dolor sit amet consectetur.
                    </h3>
                    <br>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ducimus aspernatur reprehenderit
                        soluta aperiam blanditiis perferendis consequuntur suscipit omnis ut fuga repellendus molestias
                        in, provident optio assumenda voluptas, expedita beatae amet explicabo mollitia labore
                        voluptates est! Distinctio vero explicabo pariatur quidem, laudantium cumque enim. Sit tempore
                        libero amet aliquam eligendi.
                    </p>
                    <div class="d-grid ">
                        <a target="blank" href="https://www.wikipedia.org/" class="btn btn-warning text-white">
                            Read More
                        </a>
                    </div>
                </article>
            </div>
            <div class="d-grid mt-4">
                <button class="btn btn-outline-info ">
                    Older Posts
                </button>
            </div>
        </section>
        <section id="contact" class="container-fluid mt-5 py-5">
            <h1 class="text-center mt-5 mb-3">
                Contact
            </h1>
            <div class="row row-cols-1 row-cols-md-2 container-fluid">
                <div class="col my-3 px-5">
                    <h2>
                        Office Address
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quis dignissimos harum eius
                        possimus, eaque incidunt veritatis architecto. Dolorem ullam deleniti dolorum corporis
                        praesentium est ad impedit itaque ut quo.
                    </p>
                    <br>
                    <div class="address d-flex gap-3">
                        <div class="">
                            <i class="fa fa-home text-light fa-2x border border-light rounded-circle p-2 " aria-hidden="true"></i>
                        </div>
                        <div class="address">
                            <address>
                                Written by <a href="https://www.facebook.com/mohammad.ali017" target="_blank">Shuvo</a><br>
                                Visit us at:<br>
                                http://localhost/bdtask/index.php<br>

                            </address>
                        </div>



                    </div>
                </div>
                <div class="col my-3 contain-fluid">
                    <form action="">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control text-white" id="floatingName" placeholder="">
                            <label for="floatingName">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control text-white" id="floatingEmail" placeholder="">
                            <label for="floatingEmail">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control text-white" id="floatingSubject" placeholder="">
                            <label for="floatingSubject">Subject</label>
                        </div>
                        <div class="form-group mb-3">

                            <textarea class="form-control bg-transparent text-white" placeholder="Description" rows="10" cols="10" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Description</label>

                        </div>
                        <div class="d-grid ">
                            <button class="btn btn-outline-light">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="map-section" ata-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1149229.527050826!2d90.08680781223434!3d24.403865669573232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1644138540605!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

    </main>
    <footer class="container-fluid  text-white bg-warning">
        <div class="box d-flex justify-content-center align-items-center">

            <p><i class="fa fa-copyright"></i> 2021 Shuvo Akonda. All Right Reserved</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets/veno box/venobox.min.js"></script>
    <script>
        new VenoBox({
            selector: '.my-image-links',
            numeration: true,
            infinigall: true,
            share: true,
            spinner: 'rotating-plane'
        });
    </script>
</body>

</html>