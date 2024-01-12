<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/callie/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2023 14:54:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Callie HTML Template</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


<body>

    <header id="header">

        <div id="nav">

            <div id="nav-top">
                <div class="container">

                    <ul class="nav-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>


                    <div class="nav-logo">
                        <a href="index-2.html" class="logo"><img src="{{ asset('assets/img/logo.png') }}" alt></a>
                    </div>


                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div id="nav-search">
                            <form>
                                <input class="input" name="search" placeholder="Enter your search...">
                            </form>
                            <button class="nav-close search-close">
                                <span></span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>


            <div id="nav-bottom">
                <div class="container">

                    <ul class="nav-menu">
                        <li class="has-dropdown">
                            <a href="index-2.html">Home</a>
                            <div class="dropdown">
                                <div class="dropdown-body">
                                    <ul class="dropdown-list">
                                        <li><a href="category.html">Category page</a></li>
                                        <li><a href="blog-post.html">Post page</a></li>
                                        <li><a href="author.html">Author page</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contacts</a></li>
                                        <li><a href="blank.html">Regular</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @foreach ($categories as $category)
                            <li><a href="">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>


            <div id="nav-aside">
                <ul class="nav-aside-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="has-dropdown"><a>Categories</a>
                        <ul class="dropdown">
                            @foreach ($categories as $category)
                                <li><a href="">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contacts</a></li>
                    <li><a href="#">Advertise</a></li>
                </ul>
                <button class="nav-close nav-aside-close"><span></span></button>
            </div>

        </div>


        <div id="post-header" class="page-header">
            <div class="page-header-bg" style="background-image: url('{{ $post->image }}');"
                data-stellar-background-ratio="0.5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="post-category">
                            <a href="category.html">Lifestyle</a>
                        </div>
                        <h1>{{ $post->title }}</h1>
                        <ul class="post-meta">
                            <li><a href="author.html">{{ $user->name }}</a></li>
                            <li>20 April 2018</li>
                            <li><i class="fa fa-comments"></i> 3</li>
                            <li><i class="fa fa-eye"></i> {{ $post->views }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-8">

                    <div class="section-row">
                        <div class="post-share">
                            <a href="#" class="social-facebook"><i
                                    class="fa fa-facebook"></i><span>Share</span></a>
                            <a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                            <a href="#" class="social-pinterest"><i
                                    class="fa fa-pinterest"></i><span>Pin</span></a>
                            <a href="#"><i class="fa fa-envelope"></i><span>Email</span></a>
                        </div>
                    </div>


                    {{ $post->content }}

                    <div class="section-row">
                        <div class="post-tags">
                            <ul>
                                <li>TAGS:</li>
                                @foreach ($tags as $tag)
                                    <li><a href="#">{{ $tag->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    <div class="section-row">
                        <div class="post-nav">
                            <div class="prev-post">
                                <a class="post-img" href="blog-post.html"><img src="img/widget-8.jpg" alt></a>
                                <h3 class="post-title"><a href="#">Sed ut perspiciatis, unde omnis iste natus
                                        error sit</a></h3>
                                <span>Previous post</span>
                            </div>
                            <div class="next-post">
                                <a class="post-img" href="blog-post.html"><img src="img/widget-10.jpg" alt></a>
                                <h3 class="post-title"><a href="#">Postea senserit id eos, vivendo periculis ei
                                        qui</a></h3>
                                <span>Next post</span>
                            </div>
                        </div>
                    </div>


                    <div class="section-row">
                        <div class="section-title">
                            <h3 class="title">About <a href="author.html">John Doe</a></h3>
                        </div>
                        <div class="author media">
                            <div class="media-left">
                                <a href="author.html">
                                    <img class="author-img media-object" src="img/avatar-1.jpg" alt>
                                </a>
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <ul class="author-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="section-title">
                            <h3 class="title">Related Posts</h3>
                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="blog-post.html"><img src="img/post-4.jpg" alt></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">Health</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="blog-post.html">Postea senserit id
                                                eos, vivendo periculis ei qui</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="author.html">John Doe</a></li>
                                            <li>20 April 2018</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="blog-post.html"><img src="img/post-6.jpg" alt></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">Fashion</a>
                                            <a href="category.html">Lifestyle</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus
                                                suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="author.html">John Doe</a></li>
                                            <li>20 April 2018</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="blog-post.html"><img src="img/post-7.jpg" alt></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">Health</a>
                                            <a href="category.html">Lifestyle</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="blog-post.html">Ne bonorum praesent
                                                cum, labitur persequeris definitionem quo cu?</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="author.html">John Doe</a></li>
                                            <li>20 April 2018</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="img/ad-3.jpg" alt>
                        </a>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Social Media</h2>
                        </div>
                        <div class="social-widget">
                            <ul>
                                <li>
                                    <a href="#" class="social-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <span>21.2K<br>Followers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <span>10.2K<br>Followers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-google-plus">
                                        <i class="fa fa-google-plus"></i>
                                        <span>5K<br>Followers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Categories</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                                <li><a href="#">Lifestyle <span>451</span></a></li>
                                <li><a href="#">Fashion <span>230</span></a></li>
                                <li><a href="#">Technology <span>40</span></a></li>
                                <li><a href="#">Travel <span>38</span></a></li>
                                <li><a href="#">Health <span>24</span></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Newsletter</h2>
                        </div>
                        <div class="newsletter-widget">
                            <form>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                                <input class="input" placeholder="Enter Your Email">
                                <button class="primary-button">Subscribe</button>
                            </form>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Popular Posts</h2>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="img/widget-3.jpg" alt></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Lifestyle</a>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur
                                        persequeris definitionem quo cu?</a></h3>
                            </div>
                        </div>


                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="img/widget-2.jpg" alt></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Technology</a>
                                    <a href="category.html">Lifestyle</a>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum
                                        id ullum laboramus persequeris.</a></h3>
                            </div>
                        </div>


                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="img/widget-4.jpg" alt></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Health</a>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo
                                        periculis ei qui</a></h3>
                            </div>
                        </div>


                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="img/widget-5.jpg" alt></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Health</a>
                                    <a href="category.html">Lifestyle</a>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste
                                        natus error sit</a></h3>
                            </div>
                        </div>

                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Instagram</h2>
                        </div>
                        <div class="galery-widget">
                            <ul>
                                <li><a href="#"><img src="img/galery-1.jpg" alt></a></li>
                                <li><a href="#"><img src="img/galery-2.jpg" alt></a></li>
                                <li><a href="#"><img src="img/galery-3.jpg" alt></a></li>
                                <li><a href="#"><img src="img/galery-4.jpg" alt></a></li>
                                <li><a href="#"><img src="img/galery-5.jpg" alt></a></li>
                                <li><a href="#"><img src="img/galery-6.jpg" alt></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="img/ad-1.jpg" alt>
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <footer id="footer">

        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index-2.html" class="logo"><img src="img/logo-alt.png" alt></a>
                        </div>
                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed.
                            Nunc non blandit massa enim nec.</p>
                        <ul class="contact-social">
                            <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Categories</h3>
                        <div class="category-widget">
                            <ul>
                                <li><a href="#">Lifestyle <span>451</span></a></li>
                                <li><a href="#">Fashion <span>230</span></a></li>
                                <li><a href="#">Technology <span>40</span></a></li>
                                <li><a href="#">Travel <span>38</span></a></li>
                                <li><a href="#">Health <span>24</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Tags</h3>
                        <div class="tags-widget">
                            <ul>
                                <li><a href="#">Social</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Life</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Magazine</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Health</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Newsletter</h3>
                        <div class="newsletter-widget">
                            <form>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                                <input class="input" name="newsletter" placeholder="Enter Your Email">
                                <button class="primary-button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-bottom row">
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contacts</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">

                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/"
                            target="_blank">Colorlib</a>

                    </div>
                </div>
            </div>

        </div>

    </footer>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</html>
