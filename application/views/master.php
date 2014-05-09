<!DOCTYPE HTML>
<html>
    <head>
        <title>Kanan</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/skel.min.js"></script>
        <script src="<?php echo base_url(); ?>js/init.js"></script>
        <noscript>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/skel-noscript.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style-desktop.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/noscript.css" />
        </noscript>
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
    </head>
    <body class="homepage">
        <!-- Wrapper-->
        <div id="wrapper">

            <!-- Nav -->
            <nav id="nav">
                <a href="<?php echo base_url(); ?>" class="fa fa-home active"><span>Home</span></a>
                <a href="#work" class="fa fa-folder"><span>Work</span></a>
                <a href="#email" class="fa fa-envelope"><span>Email Me</span></a>
                <a href="https://twitter.com/kanan_mahmud" class="fa fa-twitter"><span>Twitter</span></a>
            </nav>
            <!-- Main -->
            <div id="main">

                <!-- Me -->
                <article id="me" class="panel">
                    <header>
                        <h1>Kanan Mahmud</h1>
                        <span class="byline">PHP And Codeigniter Developer</span>
                    </header>
                    <a href="#work" class="jumplink pic">
                        <span class="jumplink arrow fa fa-chevron-right"><span>See my work</span></span>
                        <img src="<?php echo base_url(); ?>images/me.jpg" alt="" />
                    </a>
                </article>

                <!-- Work --> 
                <article id="work" class="panel">
                    <header>
                        <h2>Work</h2>
                    </header>
                    <p>
                        Phasellus enim sapien, blandit ullamcorper elementum eu, condimentum eu elit. 
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia 
                        luctus elit eget interdum.
                    </p>
                    <section class="is-gallery">
                        <div class="row half">
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/1.jpg" alt=""></a>
                            </div>
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/2.jpg" alt=""></a>
                            </div>
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/3.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="row half">
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/4.jpg" alt=""></a>
                            </div>
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/5.jpg" alt=""></a>
                            </div>
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/6.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="row half">
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/7.jpg" alt=""></a>
                            </div>
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/8.jpg" alt=""></a>
                            </div>
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/9.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="row half">
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/10.jpg" alt=""></a>
                            </div>
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/11.jpg" alt=""></a>
                            </div>
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/12.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="row half">
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/13.jpg" alt=""></a>
                            </div>
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/14.jpg" alt=""></a>
                            </div>
                            <div class="4u">
                                <a href="#" class="image image-full"><img src="<?php echo base_url(); ?>images/15.jpg" alt=""></a>
                            </div>
                        </div>
                    </section>
                </article>

                <!-- Email -->
                <article id="email" class="panel">
                    <header>
                        <h2>Email Me</h2>
                    </header>
                    <form action="#" method="post">
                        <div>
                            <div class="row half">
                                <div class="6u">
                                    <input type="text" class="text" name="name" placeholder="Name" />
                                </div>
                                <div class="6u">
                                    <input type="text" class="text" name="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="row half">
                                <div class="12u">
                                    <input type="text" class="text" name="subject" placeholder="Subject" />
                                </div>
                            </div>
                            <div class="row half">
                                <div class="12u">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="12u">
                                    <input type="submit" class="button" value="Send Message" />
                                </div>
                            </div>
                        </div>
                    </form>
                </article>
            </div>

            <!-- Footer -->
            <div id="footer">
                <ul class="links">
                    <li>&copy; Kanan</li>
                </ul>
            </div>
        </div>
    </body>
</html>