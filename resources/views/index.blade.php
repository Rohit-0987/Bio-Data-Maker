<!DOCTYPE html>
<html lang="en">

<head>
    @include('links')
</head>

<body id="bg">

    <div id="loading-area"></div>
    <div class="page-wraper">
        <!-- header -->
        <header class="site-header header-transparent mo-left">
            <!-- main header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container-fluid clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion">
                            <a class="header-logo1" href="index.html"><img src="images/logo-white-1.png"
                                    alt=""></a>
                            <a class="header-logo2" href="index.html"><img src="images/logo-black-1.png"
                                    alt=""></a>
                        </div>
                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- extra nav -->
                        <div class="extra-nav">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    <a href="{{ url('/view_bio_data') }}"
                                    class="btn purple gradient radius-sm m-l10">Download BioData</a>
                                        <a href="{{ url('/logout') }}"
                                            class="btn purple gradient radius-sm m-l10">Logout</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn Green gradient radius-sm m-l10">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="btn purple gradient radius-sm m-l10">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif

                        </div>
                        <!-- main nav -->

                    </div>
                </div>
            </div>
            <!-- main header END -->
        </header>
        <!-- header END -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Section Banner -->
            <div class="dlab-bnr-inr text-center home-banner dlab-bnr-inr-sm overlay-black-dark" id="app-banner"
                style="">
                <div class="container">
                    <div class="dlab-bnr-inr-entry align-m">
                        <div class="bnr-content">
                            <div class="icon-bx">
                                <img src="images/icon/icon3/icon1.png" alt="">
                            </div>
                            <h2 class="title">Your Free Bio Data Maker</h2>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/create_bio_data') }}" class="btn btn-md gradient radius-xl"><img
                                            src="images/icon/icon3/icon2.png" class="m-r5" alt=""> Make you Bio
                                        Data</a>
                                @else
                                    <a href="{{ route('register') }}" class="btn btn-md gradient radius-xl"><img
                                            src="images/icon/icon3/icon2.png" class="m-r5" alt=""> Make you Bio
                                        Data</a>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Banner END -->
            <!-- Manager Tools -->
            <div class="section-full bg-gray content-inner"
                style="">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="box-title text-italic">How your marriage biodata will look</h2>
                    </div>
                    {{-- <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.2s">
                            <div class="planning-tools style1 text-center m-b30">
                                <div class="icon-bx">
                                    <img alt="" src="images/icon/icon2/icon3.png">
                                </div>
                                <div class="content-bx">
                                    <h5 class="title text-black">Guestlists</h5>
                                    <p>Easily track invitations, RSVPs, and guest info all in one place.</p>
                                    <a href="planner-guest-list.html" class="btn gradient radius-xl">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.4s">
                            <div class="planning-tools style1 text-center m-b30">
                                <div class="icon-bx">
                                    <img alt="" src="images/icon/icon2/icon4.png">
                                </div>
                                <div class="content-bx">
                                    <h5 class="title text-black">Checklist</h5>
                                    <p>Easily track invitations, RSVPs, and guest info all in one place.</p>
                                    <a href="planner-checklist-select-date.html" class="btn gradient radius-xl">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.6s">
                            <div class="planning-tools style1 text-center m-b30">
                                <div class="icon-bx">
                                    <img alt="" src="images/icon/icon2/icon5.png">
                                </div>
                                <div class="content-bx">
                                    <h5 class="title text-black">Budget</h5>
                                    <p>Easily track invitations, RSVPs, and guest info all in one place.</p>
                                    <a href="planner-budget-select.html" class="btn gradient radius-xl">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.8s">
                            <div class="planning-tools style1 text-center m-b30">
                                <div class="icon-bx">
                                    <img alt="" src="images/icon/icon2/icon6.png">
                                </div>
                                <div class="content-bx">
                                    <h5 class="title text-black">Shortlist</h5>
                                    <p>Easily track invitations, RSVPs, and guest info all in one place.</p>
                                    <a href="planner-shortlist.html" class="btn gradient radius-xl">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @include('slider')
                </div>
            </div>
            <!-- Manager Tools End -->
            <!-- Venue Search Box -->
            {{-- <div class="section-full bg-gray content-inner overlay-black-dark wow fadeIn" id="app-search"
                data-wow-duration="2s" data-wow-delay="0.3s"
                style="background-image: url(images/background/bg4.jpg); background-size: cover; background-position: right bottom;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-head venue-search-title text-center">
                                <h2 class="box-title text-italic">Search the UK`s favourite wedding suppliers by
                                    category, location or name</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <!-- Search Filter -->
                            <div class="search-filter style1">
                                <div class="container">
                                    <form class="filter-form" action="wedding-venues-search.html">
                                        <div class="row sp10">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <input type="text" class="form-control"
                                                    placeholder="We’re looking for">
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <input type="text" class="form-control" placeholder="Near">
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <input type="text" class="form-control" placeholder="Or Called">
                                            </div>
                                            <div class="col-lg-2 col-md-6 col-sm-6 d-flex">
                                                <button class="btn btn-block radius-xl text-uppercase"> Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Search Filter END -->
                        </div>
                    </div>
                    <div class="section-head venue-search-list-title text-center">
                        <div class="separate gradient"></div>
                        <h2 class="box-title text-gradient">Popular venue searches</h2>
                    </div>
                    <div class="row venue-search-list">
                        <div class="col-lg-3 col-md-3 col-6">
                            <ul>
                                <li><a href="wedding-venues-search.html">Essex</a></li>
                                <li><a href="wedding-venues-search.html">Kent</a></li>
                                <li><a href="wedding-venues-search.html">Surrey</a></li>
                                <li><a href="wedding-venues-search.html">Hampshire</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <ul>
                                <li><a href="wedding-venues-search.html">Hertfordshire</a></li>
                                <li><a href="wedding-venues-search.html">Yorkshire</a></li>
                                <li><a href="wedding-venues-search.html">Buckinghamshire</a></li>
                                <li><a href="wedding-venues-search.html">Lancashire</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <ul>
                                <li><a href="wedding-venues-search.html">West Midlands</a></li>
                                <li><a href="wedding-venues-search.html">Leicestershire</a></li>
                                <li><a href="wedding-venues-search.html">Northamtonshire</a></li>
                                <li><a href="wedding-venues-search.html">Oxfordshire</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <ul>
                                <li><a href="wedding-venues-search.html">London</a></li>
                                <li><a href="wedding-venues-search.html">Scotland</a></li>
                                <li><a href="wedding-venues-search.html">Northern Ireland</a></li>
                                <li><a href="wedding-venues-search.html">Wales</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Venue Search End -->
            <!-- Testimonials Box -->
            <div class="section-full bg-gray content-inner-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s"
                style="background-color:rgb(250, 242, 228); padding-bottom:0%; background-size: cover; background-position: right bottom;  font-family:Lato,sans-serif; color:gray;">
                <div class="container-fluid testimonials-section">
                    <div class="parent-div" style="padding-left:187px; padding-right:187px; padding-bottom:0%; padding-top:0%">
                        <div class="child-container">
                            <div class="child-div">
                                <div>
                                    <div class="seo-txt w-richtext">
                                        <h1>Marriage Biodata</h1>
                                        <p>One of the first steps that people take before choosing a compatible life
                                            partner for themselves is to make an attractive and honest marriage biodata.
                                            It helps you find your soulmate in a way you cannot imagine. If you make the
                                            right biodata for your marriage, you are automatically increasing your
                                            chances of meeting your compatible life partner. That’s why we should know
                                            everything related to the marriage biodata. First things first, biodata
                                            stands for biographical data which is a detailed description of a person
                                            looking to find his/her life partner. You should also know the different
                                            types of marriage biodata formats before making one so that you can choose
                                            the one accordingly. Let’s understand the same, key <a
                                                href="https://www.betterhalf.ai/tips/how-to-make-biodata-for-marriage"
                                                target="_blank">tips to make a perfect biodata for marriage</a> and
                                            things that you should keep in mind while making a biodata for
                                            marriage.&nbsp;</p>
                                        <h2>Tips to Make a Perfect Marriage Biodata</h2>
                                        <p>Marriage biodata is a kind of matrimonial resume. Like an employer looks at
                                            your work resume before offering you a job, your potential life partner
                                            looks at your marriage biodata to decide whether s/he finds you compatible
                                            or not. When you are going to search for your life partner, it is important
                                            to choose the right kind of marriage biodata format otherwise you will not
                                            be able to convey what you are in real life through your biodata. One of the
                                            common problems that people face is that they don’t know how to make a
                                            perfect marriage biodata. That’s why we are giving you some key tips below
                                            that can help you in choosing the right kind of biodata format for marriage.
                                            Have a look!</p>
                                        <ul role="list">
                                            <li>In any marriage biodata format, the first thing that goes right at the
                                                start is your personal information which includes your full name,
                                                contact information, education, physical appearance, marital status,
                                                professional details, etc.&nbsp;</li>
                                            <li>Once you are done with the personal information, put all your family
                                                details as your potential partner will also be interested in having
                                                adequate information about your family. Under this section, mention
                                                details like your father’s &amp; mother’s names, their professions,
                                                family structure, etc.&nbsp;</li>
                                            <li>One of the crucial things that you should add to your marriage biodata
                                                is 4-to 5 latest pictures of yourself so that your potential soulmate
                                                can have a brief look before meeting you.&nbsp;</li>
                                            <li>You should also add your partner's expectations in your biodata for
                                                marriage as it will send a clear signal to the person who is going to
                                                spend the rest of their life with you. When they know what kind of
                                                partner you’re looking for, they will be able to make a better decision
                                                about whether they want to go ahead or not.&nbsp;</li>
                                            <li>Nowadays, in all kinds of biodata format for marriage, people add
                                                different aspects of their personality so that an individual can
                                                understand their overall personality. Under this section, you can
                                                mention your hobbies, likes, dislikes, eating &amp; drinking
                                                preferences, beliefs, activities you want to try, and other
                                                things.&nbsp;</li>
                                        </ul>
                                        <h2>Different Types of Marriage Biodata Formats</h2>
                                        <p>We all know the importance of marriage biodata when searching for your life
                                            partner. Almost everyone makes a biodata before making that big decision of
                                            marriage. And different types of marriage biodata formats are popular among
                                            people. You can have a look at some of them below.&nbsp;</p>
                                        <ol role="list">
                                            <li>Hindu marriage biodata format</li>
                                            <li>Muslim marriage biodata format</li>
                                            <li>One-page/Two-page marriage biodata format</li>
                                            <li>Jain marriage biodata format</li>
                                            <li>Community-based marriage biodata format</li>
                                            <li>Christian/Sikh/Sindhi marriage biodata format</li>
                                        </ol>
                                        <p>In the two-page marriage biodata format, you get one separate page where you
                                            can add extra details about the family background and other things you want
                                            to mention. The aforementioned formats are some of the most popular ones
                                            among the people who are starting their life partner search process.&nbsp;
                                        </p>
                                        <h2>Things to Keep in Mind While Making Your Marriage Biodata</h2>
                                        <p>When you are making your marriage biodata, you should keep the following
                                            things in mind so that you can convey exactly what you want through
                                            this.&nbsp;</p>
                                        <ul role="list">
                                            <li>Do not confuse your <a href="https://www.betterhalf.ai/"
                                                    target="_blank">marriage</a> biodata with your work resume. We
                                                understand that their names are similar. But here, you are not creating
                                                your biodata to get a job. In this scenario, it’s about finding your
                                                life partner. Always remember that while you can polish your work
                                                resume, again and again, you get only one chance to make the right
                                                biodata for marriage.&nbsp;</li>
                                            <li>There are several biodata format for marriage available from which you
                                                can choose accordingly. However, if you don’t want to stick to any
                                                prescribed format, you are free to do so. You can coherently present all
                                                the information.&nbsp;</li>
                                            <li>If you can, be creative while making your marriage biodata because it’s
                                                all about showing your personality to someone else. And if you can do
                                                so, don't be afraid of being creative or adding some humour to your
                                                biodata.&nbsp;</li>
                                            <li>In the photo section of your biodata for marriage, never use group
                                                photos or blurred ones. Try to add those photos of yours that are
                                                high-resolution and most importantly, clear.&nbsp;</li>
                                            <li>One of the most important things that you never forget while making your
                                                marriage biodata is that you have to be honest while giving details
                                                about yourself. You’re finding your life partner here and you cannot
                                                manage to not be honest and transparent about yourself.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- Content END-->
    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="widget widget-list">
                            <h5 class="widget-title">About Us</h5>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="pressandmedia.html">Press And Media</a></li>
                                <li><a href="javascript:void(0);">info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="widget widget-list">
                            <h5 class="widget-title">For Couples</h5>
                            <ul>
                                <li><a href="wedding-planning-tools.html">Manager Tools</a></li>
                                <li><a href="wedding-suppliers.html">Wedding Suppliers</a></li>
                                <li><a href="wedding-ideas-inspiration.html">Ideas Inspiration</a></li>
                                <li><a href="wedding-gift-lists.html">Wedding Gift Lists</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  col-6">
                        <div class="widget widget-list">
                            <h5 class="widget-title">For Business</h5>
                            <ul>
                                <li><a href="index-business.html">Business</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="widget widget-app">
                            <h5 class="widget-title">GET THE APP</h5>
                            <img src="images/app1.jpg" alt="">
                            <img src="images/app2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="copyright"> © Copyright 2020 Bio Data Maker</span>
                    </div>
                    <div class="col-lg-6">
                        <ul class="footer-list">
                            <li><a href="cookie-policy.html">Cookie Policy</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="terms.html">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up"></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    @include('links')

</body>

</html>
