<?php
if (isset($_POST['name']) && $_POST['name'] != '') {
    if (isset($_POST['subject']) && $_POST['subject'] != '')
        if (isset($_POST['Email']) && $_POST['Email'] != '' && filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
            if (isset($_POST['message']) && $_POST['message'] != '') {
                $fullName = $_POST['name'];
                $email = $_POST['Email'];
                $intro = $_POST['message'];
                $sub = $_POST['subject'];

                $to = 'tyler.simmonds254@gmail.com';
                $subject = 'Contact-Form';

                $body = '';
                $body .= "Name: " . $fullName . "\r\n";
                $body .= "Email: " . $email . "\r\n";
                $body .= "Subject: " . $sub . "\r\n";
                $body .= "Message: " . $intro . "\r\n";


                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                $headers .= 'From: <tyler.simmondsYTT@gmail.com>' . "\r\n";
                $message = nl2br($body);
                if (mail($to, $subject, $message, $headers)) {
                    $message_sent = true;
                }
            }
        }
}


?>
<html lang="en">

<head>
    <title>Your Talent Team</title>
    <link rel='icon' type='image/x-icon' href='imgs/image.png'>
    <link rel="stylesheet" href="css/style.css" />
    <link href="//fonts.cdnfonts.com/css/kollektif" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='jquery.visible.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id='body'>
    <nav class="navbar navbar-expand-sm shadow-lg fixed-top" id="YTT-nav">
        <a id='nav-photo' href='index.php'>
            <img src="imgs/white_logo1-.png" id="nav-photo" />
        </a>

        <ul class="navbar-nav ml-auto">
            <div class="navbar">
                <li class="active hide-icons hide">
                    <a class="nav-link nav-item" href="#top">Home</a>
                </li>
                <li class="hide-icons hide">
                    <a class="nav-link nav-item" href="#about-us">About Us</a>
                </li>
                <li class="hide-icons hide">
                    <a class="nav-link nav-item" href="#classes">Classes</a>
                </li>
                <li class="hide-icons hide">
                    <a class="nav-link nav-item" href="#event-div">Events</a>
                </li>
                <li class="hide-icons hide">
                    <a class="nav-link nav-item" href="#contact-us-div">Contact Us</a>
                </li>
                <li id="show-hamburger" class="navbar-brand" style="cursor: pointer" onclick="openNav()">
                    <div class="hamburger"></div>
                    <div class="hamburger"></div>
                    <div class="hamburger"></div>
                </li>
            </div>
        </ul>
    </nav>
    <div id="progress-bar" class="fixed-top"></div>
    <section>
        <div id="title-div" class="container shadow-lg">
            <div class="title-text-div">
                <div class="title-text title-entrance">Your Talent Team</div>
                <h1 class="sub-text title-entrance">Performance Academy</h1>
                <a href='#enrol-div' class="btn shadow-lg title-entrance" id='enrol-btn' style='border: 1px solid transparent;'>Enrol Now!</a>
            </div>
        </div>
        <br /><br /><br /><br />
    </section>

    <section>
        <div class="container-fluid d-flex" id="about-us">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8" id="about">
                    <img class="shadow-lg module" src="imgs/about-1.jpg" width="100%" style="border-radius: 20px" />
                </div>
                <div class="col-lg-7 align-self-center" id="about-text">
                    <br />
                    <h1 id="about-title" class='module'>About Us</h1>
                    <p id="about-paragraph" class='module'>
                        Your Talent Team is a family-oriented dance company that provides
                        the foundation for aspiring dancers to develop their skills in a
                        loving and encouraging environment. It is here where students are
                        able to create life-long friendships with peers and teachers,
                        whilst also achieving their most ambitious goals. Furthermore,
                        through our dedicated team, students are provided with a platform
                        to develop supplementary life-skills such as discipline, teamwork,
                        and responsibility in a nurturing environment, free of
                        consequences.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="#top" onclick="closeNav()">Home</a>
            <a href="#about-us" onclick="closeNav()">About Us</a>
            <a href="#class-carousel" onclick="closeNav()">Classes</a>
            <a href="#event-div" onclick="closeNav()">Events</a>
            <a href="#contact-us-div" onclick="closeNav()">Contact Us</a>
        </div>
    </div>
    <section>
        <div id="svg-class">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="visual" viewBox="0 0 1400 200" version="1.1">
                <path d="M0 61L23.3 62.7C46.7 64.3 93.3 67.7 140 64.2C186.7 60.7 233.3 50.3 280 57.8C326.7 65.3 373.3 90.7 420 95.3C466.7 100 513.3 84 560 74.8C606.7 65.7 653.3 63.3 700 60.3C746.7 57.3 793.3 53.7 840 57.3C886.7 61 933.3 72 980 73.3C1026.7 74.7 1073.3 66.3 1120 68.2C1166.7 70 1213.3 82 1260 84.2C1306.7 86.3 1353.3 78.7 1376.7 74.8L1400 71L1400 201L1376.7 201C1353.3 201 1306.7 201 1260 201C1213.3 201 1166.7 201 1120 201C1073.3 201 1026.7 201 980 201C933.3 201 886.7 201 840 201C793.3 201 746.7 201 700 201C653.3 201 606.7 201 560 201C513.3 201 466.7 201 420 201C373.3 201 326.7 201 280 201C233.3 201 186.7 201 140 201C93.3 201 46.7 201 23.3 201L0 201Z" fill="#72c2ef" />
                <path d="M0 87L23.3 86.2C46.7 85.3 93.3 83.7 140 84.3C186.7 85 233.3 88 280 90.8C326.7 93.7 373.3 96.3 420 102.5C466.7 108.7 513.3 118.3 560 117.5C606.7 116.7 653.3 105.3 700 101.3C746.7 97.3 793.3 100.7 840 98.2C886.7 95.7 933.3 87.3 980 90.8C1026.7 94.3 1073.3 109.7 1120 112.7C1166.7 115.7 1213.3 106.3 1260 102C1306.7 97.7 1353.3 98.3 1376.7 98.7L1400 99L1400 201L1376.7 201C1353.3 201 1306.7 201 1260 201C1213.3 201 1166.7 201 1120 201C1073.3 201 1026.7 201 980 201C933.3 201 886.7 201 840 201C793.3 201 746.7 201 700 201C653.3 201 606.7 201 560 201C513.3 201 466.7 201 420 201C373.3 201 326.7 201 280 201C233.3 201 186.7 201 140 201C93.3 201 46.7 201 23.3 201L0 201Z" fill="#57b9df" />
                <path d="M0 147L23.3 145.5C46.7 144 93.3 141 140 135.3C186.7 129.7 233.3 121.3 280 121.5C326.7 121.7 373.3 130.3 420 132.3C466.7 134.3 513.3 129.7 560 134C606.7 138.3 653.3 151.7 700 152.3C746.7 153 793.3 141 840 132C886.7 123 933.3 117 980 116.7C1026.7 116.3 1073.3 121.7 1120 127C1166.7 132.3 1213.3 137.7 1260 136.7C1306.7 135.7 1353.3 128.3 1376.7 124.7L1400 121L1400 201L1376.7 201C1353.3 201 1306.7 201 1260 201C1213.3 201 1166.7 201 1120 201C1073.3 201 1026.7 201 980 201C933.3 201 886.7 201 840 201C793.3 201 746.7 201 700 201C653.3 201 606.7 201 560 201C513.3 201 466.7 201 420 201C373.3 201 326.7 201 280 201C233.3 201 186.7 201 140 201C93.3 201 46.7 201 23.3 201L0 201Z" fill="#3bafce" />
                <path d="M0 162L23.3 165.5C46.7 169 93.3 176 140 176.7C186.7 177.3 233.3 171.7 280 170C326.7 168.3 373.3 170.7 420 172.7C466.7 174.7 513.3 176.3 560 174.8C606.7 173.3 653.3 168.7 700 172C746.7 175.3 793.3 186.7 840 182.7C886.7 178.7 933.3 159.3 980 154.5C1026.7 149.7 1073.3 159.3 1120 162.2C1166.7 165 1213.3 161 1260 162.2C1306.7 163.3 1353.3 169.7 1376.7 172.8L1400 176L1400 201L1376.7 201C1353.3 201 1306.7 201 1260 201C1213.3 201 1166.7 201 1120 201C1073.3 201 1026.7 201 980 201C933.3 201 886.7 201 840 201C793.3 201 746.7 201 700 201C653.3 201 606.7 201 560 201C513.3 201 466.7 201 420 201C373.3 201 326.7 201 280 201C233.3 201 186.7 201 140 201C93.3 201 46.7 201 23.3 201L0 201Z" fill="#18a5bc" />
            </svg>
        </div>
        <div class='class-div'>
            <div class="classes-div shadow-lg ">
                <h1 id="classes-title" class='module'>Classes</h1>
                <br />
                <div class='container-fluid'>
                    <div class='row align-self-center'>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#ballet-dancing-class-page'>
                            <img src="imgs/email/IMG-3759.jpg" class='class-img' />
                            <div>
                                Ballet
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#jazz-dancing-class-page'>
                            <img src="imgs/email/IMG-3769.jpg" class='class-img' />
                            <div>
                                Jazz
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#contemporary-dancing-class-page'>
                            <img src="imgs/email/IMG-3779.jpg" class='class-img' />
                            <div>
                                Contemporary
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#hiphop-dancing-class-page'>
                            <img src="imgs/email/IMG-3786.jpg" class='class-img' />
                            <div>
                                Hip-Hop
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#lyrical-dancing-class-page'>
                            <img src="imgs/email/IMG-3782.jpg" class='class-img' />
                            <div>
                                Lyrical
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#acro-dancing-class-page'>
                            <img src="imgs/email/IMG-3771.jpg" class='class-img' />
                            <div>
                                Acro
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#line-dancing-class-page'>
                            <img src="imgs/email/IMG-3761.jpg" class='class-img' />
                            <div>
                                Line
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#tap-dancing-class-page'>
                            <img src="imgs/email/IMG-3777.jpg" class='class-img' />
                            <div>
                                Tap
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#break-dancing-class-page'>
                            <img src="imgs/email/IMG-3773.jpg" class='class-img' />
                            <div>
                                Break
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#Pre-schoolers-class-page'>
                            <img src="imgs/email/IMG-3751.jpg" class='class-img' />
                            <div>
                                Toddlers
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#adult-dancing-class-page'>
                            <img src="imgs/email/IMG-3783.jpg" class='class-img' />
                            <div>
                                Adult
                            </div>
                        </a>
                        <a class='col-lg-2 col-md-3 col-sm-4 col-6 class-info module' href='classes.html#boy-dancing-class-page'>
                            <img src="imgs/email/IMG-3774.jpg" class='class-img' />
                            <div>
                                Boy
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="class-bottom-svg">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="visual" viewBox="0 0 1400 200" version="1.1">
                <path d="M0 137L23.3 135.3C46.7 133.7 93.3 130.3 140 133.8C186.7 137.3 233.3 147.7 280 140.2C326.7 132.7 373.3 107.3 420 102.7C466.7 98 513.3 114 560 123.2C606.7 132.3 653.3 134.7 700 137.7C746.7 140.7 793.3 144.3 840 140.7C886.7 137 933.3 126 980 124.7C1026.7 123.3 1073.3 131.7 1120 129.8C1166.7 128 1213.3 116 1260 113.8C1306.7 111.7 1353.3 119.3 1376.7 123.2L1400 127L1400 0L1376.7 0C1353.3 0 1306.7 0 1260 0C1213.3 0 1166.7 0 1120 0C1073.3 0 1026.7 0 980 0C933.3 0 886.7 0 840 0C793.3 0 746.7 0 700 0C653.3 0 606.7 0 560 0C513.3 0 466.7 0 420 0C373.3 0 326.7 0 280 0C233.3 0 186.7 0 140 0C93.3 0 46.7 0 23.3 0L0 0Z" fill="#72c2ef" />
                <path d="M0 111L23.3 111.8C46.7 112.7 93.3 114.3 140 113.7C186.7 113 233.3 110 280 107.2C326.7 104.3 373.3 101.7 420 95.5C466.7 89.3 513.3 79.7 560 80.5C606.7 81.3 653.3 92.7 700 96.7C746.7 100.7 793.3 97.3 840 99.8C886.7 102.3 933.3 110.7 980 107.2C1026.7 103.7 1073.3 88.3 1120 85.3C1166.7 82.3 1213.3 91.7 1260 96C1306.7 100.3 1353.3 99.7 1376.7 99.3L1400 99L1400 0L1376.7 0C1353.3 0 1306.7 0 1260 0C1213.3 0 1166.7 0 1120 0C1073.3 0 1026.7 0 980 0C933.3 0 886.7 0 840 0C793.3 0 746.7 0 700 0C653.3 0 606.7 0 560 0C513.3 0 466.7 0 420 0C373.3 0 326.7 0 280 0C233.3 0 186.7 0 140 0C93.3 0 46.7 0 23.3 0L0 0Z" fill="#57b9df" />
                <path d="M0 51L23.3 52.5C46.7 54 93.3 57 140 62.7C186.7 68.3 233.3 76.7 280 76.5C326.7 76.3 373.3 67.7 420 65.7C466.7 63.7 513.3 68.3 560 64C606.7 59.7 653.3 46.3 700 45.7C746.7 45 793.3 57 840 66C886.7 75 933.3 81 980 81.3C1026.7 81.7 1073.3 76.3 1120 71C1166.7 65.7 1213.3 60.3 1260 61.3C1306.7 62.3 1353.3 69.7 1376.7 73.3L1400 77L1400 0L1376.7 0C1353.3 0 1306.7 0 1260 0C1213.3 0 1166.7 0 1120 0C1073.3 0 1026.7 0 980 0C933.3 0 886.7 0 840 0C793.3 0 746.7 0 700 0C653.3 0 606.7 0 560 0C513.3 0 466.7 0 420 0C373.3 0 326.7 0 280 0C233.3 0 186.7 0 140 0C93.3 0 46.7 0 23.3 0L0 0Z" fill="#3bafce" />
                <path d="M0 36L23.3 32.5C46.7 29 93.3 22 140 21.3C186.7 20.7 233.3 26.3 280 28C326.7 29.7 373.3 27.3 420 25.3C466.7 23.3 513.3 21.7 560 23.2C606.7 24.7 653.3 29.3 700 26C746.7 22.7 793.3 11.3 840 15.3C886.7 19.3 933.3 38.7 980 43.5C1026.7 48.3 1073.3 38.7 1120 35.8C1166.7 33 1213.3 37 1260 35.8C1306.7 34.7 1353.3 28.3 1376.7 25.2L1400 22L1400 0L1376.7 0C1353.3 0 1306.7 0 1260 0C1213.3 0 1166.7 0 1120 0C1073.3 0 1026.7 0 980 0C933.3 0 886.7 0 840 0C793.3 0 746.7 0 700 0C653.3 0 606.7 0 560 0C513.3 0 466.7 0 420 0C373.3 0 326.7 0 280 0C233.3 0 186.7 0 140 0C93.3 0 46.7 0 23.3 0L0 0Z" fill="#18a5bc" />
            </svg>
        </div>
        <br />
    </section>

    <section>
        <div id="event-div" class="shadow-md">
            <div id='event-div-wo-car'>
                <h1 id="event-title" class='module'>Events</h1>
                <div class="row mx-auto justify-content-center container-fluid d-flex">
                    <div class="card col-md-3 col-xs-8 col-sm-8 event-card shadow-lg flip-box module" style='margin-top:10px'>
                        <div class="flip-box-inner" id="toggle-me-2-c">
                            <div class="flip-box-front" id="event-card-1">
                                <img class="card-img-bottom event-photo" src="imgs/Events/event1.png" alt="Holiday Clinics" />
                                <div class="card-body">
                                    <span class="card-front-title">Birthday Parties</span>
                                    <p class='card-front-title-text'>A special event thoughtfully planned for your little one.</p>
                                    <a class="btn btn-primary find-out-more shadow-lg" id="toggle-card-2-c">Learn
                                        More</a>
                                    <br />
                                </div>
                            </div>
                            <div class="flip-box-back">
                                <br />
                                <p class="event-title-text">Birthday Parties</p>
                                <p class="event-text">
                                    The Birthday packages at YTT are offered to provide a simple
                                    yet special day for your child and their friends
                                </p>
                                <p class="event-text">
                                    Each party is uniquely planned by us, allowing you to offload
                                    all of the planning stress
                                </p>
                                <p class="event-text">
                                    Running for 2 hours, all of our packages include a safe party
                                    venue, entertainment and a party host. If you would like to
                                    extend on this, we have add-on's such as game supplies and
                                    theme appropriate decorations.
                                </p>
                                <p class="event-text">
                                    By purchasing one of our birthday packages, your child will
                                    have the special day they deserve.
                                </p>

                                <a class="btn btn-primary find-out-more flip-button shadow-lg" id="return-card-2-c">Return</a>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="card col-md-3 col-xs-8 col-sm-8 event-card shadow-lg flip-box module" style='margin-top:10px'>
                        <div class="flip-box-inner" id="toggle-me-c">
                            <div class="flip-box-front" id="event-card-2">
                                <img class="card-img-bottom event-photo" src="imgs/Events/event2.png" alt="Holiday Clinics" />
                                <div class="card-body">
                                    <span class="card-front-title">Holiday Clinics</span>
                                    <p class='card-front-title-text'>Family Friendly day out filled with hours of fun for all ages.</p>
                                    <a class="btn btn-primary find-out-more shadow-lg" id="toggle-card-c">Learn More</a>
                                </div>
                            </div>
                            <div class="flip-box-back">
                                <br />
                                <p class="event-title-text">Holiday Clinics</p>
                                <p class="event-text">
                                    Holiday clinics are solely organised to give children of the
                                    Shoalhaven something to look forward to during their time off
                                    school.
                                </p>
                                <p class="event-text">
                                    These clinics are uniquely themed by staff at YTT and do no
                                    require any dance experience.
                                </p>
                                <p class="event-text">
                                    Running from 9am-3pm, the kids will be involved in countless
                                    activities that will ensure a great day outside of the house.
                                </p>
                                <p class="event-text">
                                    By signing your child up to one of these clinics, they will be
                                    able to connect with several children their age and provide
                                    you with a massive break.
                                </p>

                                <a class="btn btn-primary find-out-more flip-button shadow-lg" id="return-card-c">Return</a>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="card col-md-3 col-xs-8 col-sm-8 event-card shadow-lg flip-box module" style='margin-top:10px'>
                        <div class="flip-box-inner" id="toggle-me-3-c">
                            <div class="flip-box-front" id="event-card-3">
                                <img class="card-img-bottom event-photo" src="imgs/Events/event3.png" alt="Holiday Clinics" />
                                <div class="card-body">
                                    <span class="card-front-title">Studio Rental</span>
                                    <p class='card-front-title-text'>In need of space for dance practice, a party, or a meeting?</p>
                                    <a class="btn btn-primary find-out-more shadow-lg" id="toggle-card-3-c">Learn
                                        More</a>
                                </div>
                            </div>
                            <div class="flip-box-back">
                                <br />
                                <p class="event-title-text">Studio Rental</p>
                                <p class="event-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Eveniet a, quasi obcaecati sapiente tempore labore!
                                </p>
                                <p class="event-text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Aliquam perferendis tenetur modi quo, autem labore magnam
                                    eaque quasi odio qui.
                                </p>
                                <p class="event-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. At
                                    ipsam fugit accusamus a. Architecto, voluptatum?
                                </p>
                                <p class="event-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Libero distinctio odit fuga, sit quidem magni id voluptatibus
                                    vero sapiente nisi!.
                                </p>

                                <a class="btn btn-primary find-out-more flip-button shadow-lg" id="return-card-3-c">Return</a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>

            </div>
            <div id='event-carousel'>
                <h1 id="event-title" class='module'>Events</h1>
                <div id="eventCarousel" class="carousel slide max-auto" data-ride="carousel" data-interval='false' style="width: 80%;margin-left: auto;margin-right: auto;">
                    <ol class="carousel-indicators event-carousel-indicator  hidden">
                        <li data-bs-target="#event-carousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#event-carousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#event-carousel" data-bs-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner mx-auto" style='overflow:visible;'>
                        <div class="carousel-item active module" style='overflow:visible;'>
                            <div class="card event-card flip-box flip-box-2 shadow-lg">
                                <div class="flip-box-inner" id="toggle-me-2">
                                    <div class="flip-box-front" id="event-card-car-1">
                                        <img class="card-img-bottom event-photo" src="imgs/Events/event1.png" style='margin-top: 5%;width: 90%;border-radius: 20px;' alt="Holiday Clinics" />
                                        <div class="card-body">
                                            <p class="card-front-title">Birthday Parties</p>
                                            <p class='card-front-title-text'>A special event thoughtfully planned for your little one.</p>
                                            <a class="btn btn-primary find-out-more shadow-lg" id="toggle-card-2">Learn
                                                More</a>
                                        </div>
                                    </div>
                                    <div class="flip-box-back flip-box-back-2">
                                        <br />
                                        <p class="event-title-text">Birthday Parties</p>
                                        <p class="event-text">
                                            The Birthday packages at YTT are offered to provide a simple
                                            yet special day for your child and their friends
                                        </p>
                                        <p class="event-text">
                                            Each party is uniquely planned by us, allowing you to offload
                                            all of the planning stress
                                        </p>
                                        <p class="event-text">
                                            Running for 2 hours, all of our packages include a safe party
                                            venue, entertainment and a party host. If you would like to
                                            extend on this, we have add-on's such as game supplies and
                                            theme appropriate decorations.
                                        </p>
                                        <p class="event-text">
                                            By purchasing one of our birthday packages, your child will
                                            have the special day they deserve.
                                        </p>

                                        <a class="btn btn-primary find-out-more flip-button shadow-lg" id="return-card-2">Return</a>
                                    </div>
                                </div>
                            </div>
                            <br /><br />
                        </div>
                        <div class="carousel-item module">
                            <div class="card event-card flip-box flip-box-2 shadow-lg" id="testHeight2">
                                <div class="flip-box-inner" id="toggle-me">
                                    <div class="flip-box-front" id="event-card-car-2">
                                        <img class="card-img-bottom event-photo" src="imgs/Events/event2.png" alt="Holiday Clinics" style='margin-top: 5%;width: 90%;border-radius: 20px;' />
                                        <div class="card-body">
                                            <p class="card-front-title">Holiday Clinics</p>
                                            <p class='card-front-title-text'>Family Friendly day out filled with hours of fun for all ages.</p>
                                            <a class="btn btn-primary find-out-more shadow-lg" id="toggle-card">Learn
                                                More</a>
                                        </div>
                                    </div>
                                    <div class="flip-box-back flip-box-back-2">
                                        <br />
                                        <p class="event-title-text">Holiday Clinics</p>
                                        <p class="event-text">
                                            Holiday clinics are solely organised to give children of the
                                            Shoalhaven something to look forward to during their time off
                                            school.
                                        </p>
                                        <p class="event-text">
                                            These clinics are uniquely themed by staff at YTT and do no
                                            require any dance experience.
                                        </p>
                                        <p class="event-text">
                                            Running from 9am-3pm, the kids will be involved in countless
                                            activities that will ensure a great day outside of the house.
                                        </p>
                                        <p class="event-text">
                                            By signing your child up to one of these clinics, they will be
                                            able to connect with several children their age and provide
                                            you with a massive break.
                                        </p>

                                        <a class="btn btn-primary find-out-more flip-button shadow-lg" id="return-card">Return</a>
                                    </div>
                                </div>
                            </div>
                            <br /><br />
                        </div>
                        <div class="carousel-item module">
                            <div class="card event-card flip-box flip-box-2 shadow-lg">
                                <div class="flip-box-inner" id="toggle-me-3">
                                    <div class="flip-box-front" id="event-card-car-3">
                                        <img class="card-img-bottom event-photo" src="imgs/Events/event3.png" alt="Holiday Clinics" style='margin-top: 5%;width: 90%;border-radius: 20px;' />
                                        <div class="card-body">
                                            <p class="card-front-title">Studio Rental</p>
                                            <p class='card-front-title-text'>In need of space for dance practice, a party, or a meeting?</p>
                                            <a class="btn btn-primary find-out-more shadow-lg" id="toggle-card-3">Learn
                                                More</a>
                                        </div>
                                    </div>
                                    <div class="flip-box-back flip-box-back-2">
                                        <br />
                                        <p class="event-title-text">Studio Rental</p>
                                        <p class="event-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Eveniet a, quasi obcaecati sapiente tempore labore!
                                        </p>
                                        <p class="event-text">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Aliquam perferendis tenetur modi quo, autem labore magnam
                                            eaque quasi odio qui.
                                        </p>
                                        <p class="event-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At
                                            ipsam fugit accusamus a. Architecto, voluptatum?
                                        </p>
                                        <p class="event-text">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                            Libero distinctio odit fuga, sit quidem magni id voluptatibus
                                            vero sapiente nisi!.
                                        </p>

                                        <a class="btn btn-primary find-out-more flip-button shadow-lg" id="return-card-3">Return</a>
                                    </div>
                                </div>
                            </div>
                            <br /><br />
                        </div>
                    </div>
                    <a class="carousel-control-prev hidden" href="#eventCarousel" role="button" data-slide="prev" style='margin-left:-10vw;'>
                        <span class="carousel-control-prev-icon event-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next hidden" href="#eventCarousel" role="button" style='margin-right: -10vw;' data-slide="next">
                        <span class="carousel-control-next-icon event-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <br />
            <div class='container'>
                <span style='font-size:30px;'>What is included?</span></span><a href='#more-info' data-toggle='collapse' style='font-size:30px;color:black !important;'>&#43;</a>
                <div id='more-info' class='collapse'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </div>

    </section>
    <br /><br />
    <section class='module'>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="visual" style='z-index:2;position:absolute;' viewBox="0 0 1400 300" width='100%' version="1.1">
            <path xmlns="http://www.w3.org/2000/svg" d="M0 37L33.3 35.8C66.7 34.7 133.3 32.3 200 33.2C266.7 34 333.3 38 400 40.2C466.7 42.3 533.3 42.7 600 41.5C666.7 40.3 733.3 37.7 800 37.2C866.7 36.7 933.3 38.3 1000 37.8C1066.7 37.3 1133.3 34.7 1200 35.5C1266.7 36.3 1333.3 40.7 1366.7 42.8L1400 45L1400 0L1366.7 0C1333.3 0 1266.7 0 1200 0C1133.3 0 1066.7 0 1000 0C933.3 0 866.7 0 800 0C733.3 0 666.7 0 600 0C533.3 0 466.7 0 400 0C333.3 0 266.7 0 200 0C133.3 0 66.7 0 33.3 0L0 0Z" fill="#ffffffbf" />
            <path xmlns="http://www.w3.org/2000/svg" d="M0 20L33.3 19.8C66.7 19.7 133.3 19.3 200 20.3C266.7 21.3 333.3 23.7 400 22.7C466.7 21.7 533.3 17.3 600 15C666.7 12.7 733.3 12.3 800 14.2C866.7 16 933.3 20 1000 21.2C1066.7 22.3 1133.3 20.7 1200 21C1266.7 21.3 1333.3 23.7 1366.7 24.8L1400 26L1400 0L1366.7 0C1333.3 0 1266.7 0 1200 0C1133.3 0 1066.7 0 1000 0C933.3 0 866.7 0 800 0C733.3 0 666.7 0 600 0C533.3 0 466.7 0 400 0C333.3 0 266.7 0 200 0C133.3 0 66.7 0 33.3 0L0 0Z" fill="#ffffff" />
        </svg>
        <div id="testimonial" class="justify-content-center align-self-center d-flex" style='z-index:1;position: relative;'>
            <div id='testCarousel' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>
                    <div id='test-background'>
                        <div class='carousel-item active'>
                            <div class='test-carousel-text'>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos voluptatem aliquam ut
                                dignissimos quos, facere incidunt dolor inventore amet, commodi sint rerum magni libero
                                debitis voluptates? Eum eligendi corporis velit possimus placeat porro voluptatum! Ipsam
                                sint corrupti maiores nisi assumenda magni et facilis tempore ipsum ad consequatur
                                voluptatum beatae doloremque, reiciendis eos illo aliquid qui deserunt. Incidunt dolor
                                debitis sunt similique itaque ea ab impedit quam, est natus. Deserunt, quibusdam at.
                                Nulla aperiam omnis reprehenderit commodi consectetur dolorem. Saepe cum blanditiis
                                reiciendis. Excepturi, dolorem labore, similique ex alias expedita minus quasi at quos
                                molestias ipsum rerum tenetur cumque magnam beatae.
                                <p>-Tyler Simmonds</p>
                            </div>
                        </div>
                        <div class='carousel-item'>
                            <div class='test-carousel-text'>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos voluptatem aliquam ut
                                dignissimos quos, facere incidunt dolor inventore amet, commodi sint rerum magni libero
                                debitis voluptates? Eum eligendi corporis velit possimus placeat porro voluptatum! Ipsam
                                sint corrupti maiores nisi assumenda magni et facilis tempore ipsum ad consequatur
                                voluptatum beatae doloremque, reiciendis eos illo aliquid qui deserunt. Incidunt dolor
                                debitis sunt similique itaque ea ab impedit quam, est natus. Deserunt, quibusdam at.
                                Nulla aperiam omnis reprehenderit commodi consectetur dolorem. Saepe cum blanditiis
                                reiciendis. Excepturi, dolorem labore, similique ex alias expedita minus quasi at quos
                                molestias ipsum rerum tenetur cumque magnam beatae.
                                <p>-Kye Jones</p>
                            </div>
                        </div>
                        <div class='carousel-item'>
                            <div class='test-carousel-text'>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos voluptatem aliquam ut
                                dignissimos quos, facere incidunt dolor inventore amet, commodi sint rerum magni libero
                                debitis voluptates? Eum eligendi corporis velit possimus placeat porro voluptatum! Ipsam
                                sint corrupti maiores nisi assumenda magni et facilis tempore ipsum ad consequatur
                                voluptatum beatae doloremque, reiciendis eos illo aliquid qui deserunt. Incidunt dolor
                                debitis sunt similique itaque ea ab impedit quam, est natus. Deserunt, quibusdam at.
                                Nulla aperiam omnis reprehenderit commodi consectetur dolorem. Saepe cum blanditiis
                                reiciendis. Excepturi, dolorem labore, similique ex alias expedita minus quasi at quos
                                molestias ipsum rerum tenetur cumque magnam beatae.
                                <p>-Joshua Haughton</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="visual" viewBox="0 0 1400 300" width="100%" style='z-index:2;position:absolute;bottom: -5px;' version="1.1">
                <path d="M0 261L33.3 262.2C66.7 263.3 133.3 265.7 200 264.8C266.7 264 333.3 260 400 257.8C466.7 255.7 533.3 255.3 600 256.5C666.7 257.7 733.3 260.3 800 260.8C866.7 261.3 933.3 259.7 1000 260.2C1066.7 260.7 1133.3 263.3 1200 262.5C1266.7 261.7 1333.3 257.3 1366.7 255.2L1400 253L1400 301L1366.7 301C1333.3 301 1266.7 301 1200 301C1133.3 301 1066.7 301 1000 301C933.3 301 866.7 301 800 301C733.3 301 666.7 301 600 301C533.3 301 466.7 301 400 301C333.3 301 266.7 301 200 301C133.3 301 66.7 301 33.3 301L0 301Z" fill="#ffffffbf" />
                <path d="M0 278L33.3 278.2C66.7 278.3 133.3 278.7 200 277.7C266.7 276.7 333.3 274.3 400 275.3C466.7 276.3 533.3 280.7 600 283C666.7 285.3 733.3 285.7 800 283.8C866.7 282 933.3 278 1000 276.8C1066.7 275.7 1133.3 277.3 1200 277C1266.7 276.7 1333.3 274.3 1366.7 273.2L1400 272L1400 301L1366.7 301C1333.3 301 1266.7 301 1200 301C1133.3 301 1066.7 301 1000 301C933.3 301 866.7 301 800 301C733.3 301 666.7 301 600 301C533.3 301 466.7 301 400 301C333.3 301 266.7 301 200 301C133.3 301 66.7 301 33.3 301L0 301Z" fill="#ffffff" />
            </svg>
        </div>

    </section>
    <section>
        <br /><br />
        <div class='justify-content-center container' id='contact-us-div'>
            <h1 id="enrol-title" class='module'>Contact Us!</h1>
            <form method="POST" id='form1' class='module'>
                <div class='mb-3 row justify-content-center'>
                    <label for='fname' class='col-form-label col-sm-4' id='fname'>Name:</label>
                    <div class='col-sm-6 col-lg-4'>
                        <input type='text' class='form-control shadow-lg' name='name' id='name' placeholder="Enter Full Name">
                    </div>
                </div>

                <div class='mb-3 row justify-content-center'>
                    <label for='email' class='col-form-label col-sm-4' id='mail'>Email:</label>
                    <div class='col-sm-6 col-lg-4'>
                        <input type='email' id='email' name='Email' class='form-control shadow-lg' placeholder="Enter Email">
                    </div>
                </div>

                <div class='mb-3 row justify-content-center'>
                    <label for='subject' class='col-form-label col-sm-4' id='sub'>Subject</label>
                    <div class='col-sm-6 col-lg-4'>
                        <input type='text' class='form-control shadow-lg' name='subject' id='subject' placeholder="Enter Subject">
                    </div>
                </div>
                <div class='mb-3 row justify-content-center'>
                    <label for='message' class='col-form-label col-sm-4' id='body'>Body:</label>
                    <div class='col-sm-6 col-lg-4' id='yourself-div'>
                        <textarea class='form-control shadow-lg' id='message' name='message' placeholder="Type your message here..." rows='4'></textarea>
                    </div>
                </div>
                <div class='mb-3 row justify-content-center'>
                    <div class='col-sm-4'></div>
                    <div class='col-sm-6 col-lg-4'>
                        <button type='button'style='border: 1px solid transparent;margin:0 auto;display:block;' onclick='validate(event)' class='btn btn-primary' >Submit</button>
                    </div>

                </div>
            </form>
            <div class='modal fade' id='myModal'>
                <div class='modal-dialog modal-dialog-centered'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h2 class='modal-title' style="text-align:center;">Thank you for contacting us!</h2>
                        </div>
                        <div class='modal-body' style='text-align:center;'>
                            Our staff at YTT will be in contact with you within the following days. For urgent enquires please contact us on 0434 437 071
                            <br />
                            <button type='button' style='border: 1px solid transparent;' class='btn btn-primary' data-bs-dismiss='modal'>Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="contact-svg">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="visual" viewBox="0 0 1440 200" version="1.1">
                <path d="M0 165L45.7 163C91.3 161 182.7 157 274.2 155C365.7 153 457.3 153 548.8 154C640.3 155 731.7 157 823 157.3C914.3 157.7 1005.7 156.3 1097 159C1188.3 161.7 1279.7 168.3 1371.2 170.7C1462.7 173 1554.3 171 1645.8 168.3C1737.3 165.7 1828.7 162.3 1874.3 160.7L1920 159L1920 201L1874.3 201C1828.7 201 1737.3 201 1645.8 201C1554.3 201 1462.7 201 1371.2 201C1279.7 201 1188.3 201 1097 201C1005.7 201 914.3 201 823 201C731.7 201 640.3 201 548.8 201C457.3 201 365.7 201 274.2 201C182.7 201 91.3 201 45.7 201L0 201Z" fill="#72c2ef" />
                <path d="M0 180L45.7 178.5C91.3 177 182.7 174 274.2 175.3C365.7 176.7 457.3 182.3 548.8 184.8C640.3 187.3 731.7 186.7 823 184.2C914.3 181.7 1005.7 177.3 1097 176.7C1188.3 176 1279.7 179 1371.2 179.7C1462.7 180.3 1554.3 178.7 1645.8 179.3C1737.3 180 1828.7 183 1874.3 184.5L1920 186L1920 201L1874.3 201C1828.7 201 1737.3 201 1645.8 201C1554.3 201 1462.7 201 1371.2 201C1279.7 201 1188.3 201 1097 201C1005.7 201 914.3 201 823 201C731.7 201 640.3 201 548.8 201C457.3 201 365.7 201 274.2 201C182.7 201 91.3 201 45.7 201L0 201Z" fill="#18a5bc" />
            </svg>
        </div>
    </section>
    <section>
        <div id='socials-div' class='container-fluid justify-content-center'>
            <div class='module'>
                <br />
                <img src='imgs/white-logo.PNG' id='footer-logo' />
                <br />
                <span class='icon'>
                    <a href='https://www.facebook.com/yourtalentteam' target='_blank' class='fa fa-facebook'></a>
                </span>
                <span id='insta-back' class='icon'>
                    <a href='https://www.instagram.com/your.talent.team/' target='_blank' class='fa fa-instagram' id='insta'></a>
                </span>
                <span class='icon'>
                    <a href='tel:0434437071' target='_blank' class='fa fa-phone'></a>
                </span>
                <span class='icon'>
                    <a href='https://www.google.com/maps/place/Your+Talent+Team/@-34.8664687,150.6017053,17z/data=!3m1!4b1!4m5!3m4!1s0x6b137fc17771ea7d:0xbd3fed8c67dd6c7!8m2!3d-34.8664686!4d150.6038946' target='_blank' class='fa fa-map-marker'></a>
                </span>
                <span class='icon'>
                    <a href='mailto:missstephperry@gmail.com' class='fa fa-envelope'></a>
                </span>
                <div style='color:white'>
                    <div>
                        <ul class='list'>
                            <li>Phone Number:0434 437 071</li>
                            <li>Email: MissStephPerry@gmail.com</li>
                            <li>Location: 3 Hawthron Ave Nowra, NSW, Australia</li>
                            <br />
                            <li>Trading Hours</li>
                            <li>Monday:15:30-20:30</li>
                            <li>Tuesday:15:30-20:30</li>
                            <li>Wednesday:15:30-20:30</li>
                            <li>Thursday:15:30-20:30</li>
                            <li>Friday:15:30-19:00</li>
                            <li>Weekends:CLOSED</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <img src='imgs/vouch.png' height='150px'>
                </div>
            </div>

            <br />
        </div>
    </section>
    <section>
        <div id="footer" class="justify-content-center d-flex">
            <p>© 2021 YourSite.com - All Rights Reserved.</p>
        </div>
    </section>
</body>
<script src="script.js"></script>

</html>