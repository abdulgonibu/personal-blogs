<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from integrothemes.com/beny2/index-particle.html?fbclid=IwAR319T5jb2HYeXwhBnWBiFKRGZsh6zPIopAiPW8chImTKrG8BQeTlWTI1OU by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 17:51:11 GMT -->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="Name of your web site">
    <meta name="author" content="marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>@yield('title')</title>

    <!-- STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,700,700i,800&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/plugins.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style5.css')}}" />
<!--[if lt IE 9]> <script type="text/javascript" src="{{ asset('assets/frontend/js/modernizr.custom.js')}}"></script> <![endif]-->
    <!-- /STYLES -->

</head>

<body>

<!-- PRELOADER -->
<div class="beny_tm_preloader">
    <div class="spinner_wrap">
        <div class="spinner"></div>
    </div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER ALL -->
<div class="beny_tm_all_wrap">
    <div class="wrapper_inner">
        @includeIf('site.components.menu')

        @includeIf('site.components.pages.about')
        <!-- services -->
            <div class="beny_tm_section">
                <div class="beny_tm_personal_services">
                    <div class="container">
                        <div class="beny_tm_title_holder_personal">
                            <h3><span>Services</span></h3>
                        </div>
                        <div class="service_list">
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="0.8s">
                                    <div class="inner">
                                        <img class="svg" src="{{ asset('assets/frontend/img/svg/source.svg')}}" alt="" />
                                        <div class="title">
                                            <h3>Web Development</h3>
                                        </div>
                                        <div class="text">
                                            <p>Be a yardstick of quality. Some people aren’t used to an environment...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="inner">
                                        <img class="svg" src="{{ asset('assets/frontend/img/svg/line-chart.svg')}}" alt="" />
                                        <div class="title">
                                            <h3>Web Design</h3>
                                        </div>
                                        <div class="text">
                                            <p>Be a yardstick of quality. Some people aren’t used to an environment...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                    <div class="inner">
                                        <img class="svg" src="{{ asset('assets/frontend/img/svg/light-bulb.svg')}}" alt="" />
                                        <div class="title">
                                            <h3>Creative Design</h3>
                                        </div>
                                        <div class="text">
                                            <p>Be a yardstick of quality. Some people aren’t used to an environment...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                    <div class="inner">
                                        <img class="svg" src="{{ asset('assets/frontend/img/svg/adobe-photoshop.svg')}}" alt="" />
                                        <div class="title">
                                            <h3>Facebook Marketing</h3>
                                        </div>
                                        <div class="text">
                                            <p>Be a yardstick of quality. Some people aren’t used to an environment...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                                    <div class="inner">
                                        <img class="svg" src="{{ asset('assets/frontend/img/svg/twitter-1.svg')}}" alt="" />
                                        <div class="title">
                                            <h3>Software Devolopment </h3>
                                        </div>
                                        <div class="text">
                                            <p>Be a yardstick of quality. Some people aren’t used to an environment...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
                                    <div class="inner">
                                        <img class="svg" src="{{ asset('assets/frontend/img/svg/adobe-illustrator.svg')}}" alt="" />
                                        <div class="title">
                                            <h3>Computer Hardware</h3>
                                        </div>
                                        <div class="text">
                                            <p>Be a yardstick of quality. Some people aren’t used to an environment...</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="beny_tm_skills">
                            <div class="skills_inner">
                                <div class="left">
                                    <div class="beny_progress">
                                        <div class="progress_inner" data-value="95" data-color="#FF5E5F">
                                            <span><span class="label">Web Development</span><span class="number">95%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="80" data-color="#FF5E5F">
                                            <span><span class="label">Brand Identity</span><span class="number">80%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="90" data-color="#FF5E5F">
                                            <span><span class="label">Javascript</span><span class="number">90%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="85" data-color="#FF5E5F">
                                            <span><span class="label">WordPress</span><span class="number">85%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="beny_progress">
                                        <div class="progress_inner" data-value="90" data-color="#FF5E5F">
                                            <span><span class="label">English</span><span class="number">90%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="95" data-color="#FF5E5F">
                                            <span><span class="label">Spanish</span><span class="number">95%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="80" data-color="#FF5E5F">
                                            <span><span class="label">Russian</span><span class="number">80%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="85" data-color="#FF5E5F">
                                            <span><span class="label">Chinese</span><span class="number">85%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /services -->
        @includeIf('site.components.pages.portfolio')
        <!-- TIMELINE -->
            <div class="beny_tm_section">
                <div class="beny_tm_timeline_portfolio">
                    <div class="container">
                        <div class="beny_tm_title_holder_personal">
                            <h3><span>Timeline</span></h3>
                        </div>
                        <div class="timeline_inner">
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="0.8s">
                                    <div class="inner">
                                        <div class="short">
                                            <p>2016 - Current</p>
                                            <h3>Lead Designer</h3>

                                        </div>
                                        <div class="text">
                                            <p>We are a leading web development and digital Marketing company, delivering...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="inner">
                                        <div class="short">
                                            <p>2012 - 2016</p>
                                            <h3>Senior Designer</h3>

                                        </div>
                                        <div class="text">
                                            <p>We are a leading web development and digital Marketing company, delivering...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                    <div class="inner">
                                        <div class="short">
                                            <p>2010 - 2012</p>
                                            <h3>Junior Designer</h3>

                                        </div>
                                        <div class="text">
                                            <p>We are a leading web development and digital Marketing company, delivering...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                    <div class="inner">
                                        <div class="short">
                                            <p>2009 - 2010</p>
                                            <h3>Mobile App Developer</h3>

                                        </div>
                                        <div class="text">
                                            <p>We are a leading web development and digital Marketing company, delivering...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                                    <div class="inner">
                                        <div class="short">
                                            <p>2006 - 2009</p>
                                            <h3>Frontend Developer</h3>

                                        </div>
                                        <div class="text">
                                            <p>We are a leading web development and digital Marketing company, delivering...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
                                    <div class="inner">
                                        <div class="short">
                                            <p>2005 - 2006</p>
                                            <h3>Graphic Designer</h3>

                                        </div>
                                        <div class="text">
                                            <p>We are a leading web development and digital Marketing company, delivering...</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /TIMELINE -->

            @includeIf('site.components.pages.team')
        @includeIf('site.components.pages.news')
        <!-- CALL ACTION -->
            <div class="beny_tm_section">
                <div class="beny_tm_call_action">
                    <div class="action_inner">
                        <h3 class="wow fadeInUp" data-wow-duration="0.8s">Let's work together</h3>
                        <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Out believe has request not how comfort evident. Up delight cousins we feeling minutes. Genius has looked end piqued spring.</p>
                        <div class="beny_tm_first_button wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <a href="#"><span>Send Message</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /CALL ACTION -->















        @includeIf('site.components.pages.contact')

        @includeIf('site.components.footer')
    </div>
</div>
<!-- / WRAPPER ALL -->

<!-- SCRIPTS -->
<script src="{{ asset('assets/frontend/js/jquery.js')}}"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="{{ asset('assets/frontend/js/ie8.js')}}"></script> <![endif]-->
<script src="{{ asset('assets/frontend/js/plugins.js')}}"></script>
<script src="{{ asset('assets/frontend/js/init.js')}}"></script>
<!-- /SCRIPTS -->

</body>

<!-- Mirrored from integrothemes.com/beny2/index-particle.html?fbclid=IwAR319T5jb2HYeXwhBnWBiFKRGZsh6zPIopAiPW8chImTKrG8BQeTlWTI1OU by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 17:52:15 GMT -->
</html>
