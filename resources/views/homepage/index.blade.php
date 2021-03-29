<!doctype html>
<html lang="en">

<head>
    <title>Iris World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=K2D:400,700|Niramit:300,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .brands {
            width: 100%;
            padding-top: 90px;
            padding-bottom: 90px
        }

        .brands_slider_container {
            height: 130px;
            /* border: solid 1px #e8e8e8; */
            /* box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1); */
            padding-left: 97px;
            padding-right: 97px;
            /* background: #fff */
        }

        .brands_slider {
            height: 100%;
            margin-top: 30px
        }

        .brands_item {
            height: 100%
        }

        .brands_item img {
            max-width: 100%
        }

        .brands_nav {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            padding: 5px;
            cursor: pointer
        }

        .brands_nav i {
            /* color: #e5e5e5; */
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease
        }

        /* .brands_nav:hover i {
    color: #676767
} */

        body {
            overflow-x: hidden;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 100vh;
            background-image: url(nothing);
        }

        .sidebar-form {
            position: fixed;
            top: 50%;
            right: -350px;
            width: 350px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
            border-radius: 8px 0 0 8px;
            background-color: white;
            padding: 20px;
            transform: translatey(-50%);
            transition: right .4s linear;
            z-index: 1000;

        }

        .sidebar-form.show {
            right: 0;
        }

        .sidebar-form .call-action {
            position: absolute;
            background-color: var(--blue);
            /* font-family: 'Courier New', Courier, monospace; */
            font-weight: bold;
            letter-spacing: 1px;
            color: white;
            width: 150px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
            left: -95px;
            top: 50%;
            transform: translateY(-50%) rotate(-90deg);
            border-radius: 10px;
        }

        .sidebar-form h3 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: 700px;
            text-transform: uppercase;
            font-size: 20px;
            margin-bottom: 15px;
            text-align: center;
            color: blue;

        }

        .sidebar-form .form-group {
            margin-bottom: 10px;

        }

        .sidebar-form .form-group label {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 500;
            font-size: 15px;
            margin-bottom: 2px;
            color: grey;
        }

        .sidebar-form #submit-button {
            width: 100%;
            border: none;
            margin-top: 8px;
            background-color: var(--purple);
            color: var(--white);
            padding: 7px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 400;
            cursor: pointer;

        }

    </style>




</head>

<body>
    <!-- side enquiry form -->

    <div class="sidebar-form">
        <div class="call-action">
            <!-- <i class="fa fa-user"></i> -->
            <span style="font-size: 18px;">ENQUIRY FORM</span>
        </div>
        <h3>enquiry form</h3>
        <form action="">
            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="info" id row="3" placeholder="write"></textarea>
            </div>
            <input type="submit" value="send enquiry" id="submit-btn">

        </form>
    </div>

    <!-- ends here enquiry -->


    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand position-absolute" href="#"><img src="{{ asset('assets/img/IRIS World.png') }}"
                        style="height:45px;width: 150px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse position-relative" id="navbarsExample05">
                    <ul class="navbar-nav mx-auto pl-lg-5 pl-0 d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">About US</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="#">At a Glance</a>
                                <a class="dropdown-item" href="#">Leadership</a>
                                <a class="dropdown-item" href="#">Awards</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="works.html">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Media Centre</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="pr.html">PR</a>
                                <a class="dropdown-item" href="blog.html">Blog</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="partner.html">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->


    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/ski/ski.slider/=edit -->
    <script src="{{ asset('assets/js/jssor.slider-28.1.0.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
                [{
                    b: 0,
                    d: 600,
                    o: 0.8
                }],
                [{
                    b: 300,
                    d: 600,
                    o: 0.8
                }],
                [{
                    b: 600,
                    d: 600,
                    o: 0.8
                }],
                [{
                    b: -1,
                    d: 1,
                    da: [0, 700]
                }, {
                    b: 500,
                    d: 3500,
                    da: [623, 700],
                    e: {
                        da: 1
                    }
                }],
                [{
                    b: 1000,
                    d: 500,
                    o: 1
                }],
                [{
                    b: 1000,
                    d: 500,
                    o: 1
                }],
                [{
                    b: -1,
                    d: 1,
                    y: 30
                }, {
                    b: 1000,
                    d: 500,
                    y: 0,
                    o: 1,
                    e: {
                        y: 27
                    }
                }],
                [{
                    b: 1700,
                    d: 500,
                    o: 1
                }],
                [{
                    b: 1700,
                    d: 500,
                    o: 1
                }],
                [{
                    b: -1,
                    d: 1,
                    y: 30
                }, {
                    b: 1700,
                    d: 500,
                    y: 0,
                    o: 1,
                    e: {
                        y: 27
                    }
                }],
                [{
                    b: 2300,
                    d: 500,
                    o: 1
                }],
                [{
                    b: 2300,
                    d: 500,
                    o: 1
                }],
                [{
                    b: -1,
                    d: 1,
                    y: 30
                }, {
                    b: 2300,
                    d: 500,
                    y: 0,
                    o: 1,
                    e: {
                        y: 27
                    }
                }],
                [{
                    b: 2900,
                    d: 500,
                    o: 1
                }],
                [{
                    b: 2900,
                    d: 500,
                    o: 1
                }],
                [{
                    b: -1,
                    d: 1,
                    y: 30
                }, {
                    b: 2900,
                    d: 500,
                    y: 0,
                    o: 1,
                    e: {
                        y: 27
                    }
                }],
                [{
                    b: 0,
                    d: 600,
                    x: 208,
                    y: 44,
                    e: {
                        x: 27,
                        y: 27
                    }
                }],
                [{
                    b: 300,
                    d: 600,
                    x: 145,
                    y: 22,
                    e: {
                        x: 27,
                        y: 27
                    }
                }],
                [{
                    b: 100,
                    d: 600,
                    x: 177,
                    y: 31,
                    e: {
                        x: 27,
                        y: 27
                    }
                }],
                [{
                    b: 200,
                    d: 600,
                    x: 177,
                    y: 31,
                    e: {
                        x: 27,
                        y: 27
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    x: -80,
                    y: -370,
                    r: -60,
                    rY: 30,
                    sY: 1.5,
                    p: {
                        x: {
                            d: 1,
                            dO: 68
                        },
                        y: {
                            d: 1,
                            dO: 68
                        },
                        r: {
                            d: 1,
                            dO: 68
                        }
                    }
                }, {
                    b: 300,
                    d: 1500,
                    x: 0,
                    y: 0,
                    o: 1,
                    r: 0,
                    kX: -15,
                    e: {
                        x: 27,
                        y: 27,
                        o: 1,
                        r: 27,
                        kX: 27
                    },
                    p: {
                        x: {
                            dl: 0.02,
                            o: 68
                        },
                        y: {
                            dl: 0.02,
                            o: 68
                        },
                        o: {
                            dl: 0.2,
                            o: 68
                        },
                        r: {
                            dl: 0.02,
                            o: 68
                        },
                        kX: {
                            dl: 0.02,
                            o: 68
                        }
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    x: -80,
                    y: -370,
                    r: -60,
                    sY: 1.5,
                    p: {
                        x: {
                            d: 1,
                            dO: 68
                        },
                        y: {
                            d: 1,
                            dO: 68
                        },
                        r: {
                            d: 1,
                            dO: 68
                        }
                    }
                }, {
                    b: 300,
                    d: 1500,
                    x: 0,
                    y: 0,
                    o: 1,
                    r: 0,
                    kX: -15,
                    e: {
                        x: 27,
                        y: 27,
                        o: 1,
                        r: 27,
                        kX: 27
                    },
                    p: {
                        x: {
                            dl: 0.02,
                            o: 68
                        },
                        y: {
                            dl: 0.02,
                            o: 68
                        },
                        o: {
                            dl: 0.2,
                            o: 68
                        },
                        r: {
                            dl: 0.02,
                            o: 68
                        },
                        kX: {
                            dl: 0.02,
                            o: 68
                        }
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    sX: 1.2,
                    kX: -15
                }, {
                    b: 0,
                    d: 600,
                    o: 0.06
                }],
                [{
                    b: -1,
                    d: 1,
                    x: -30,
                    sY: 1.3,
                    p: {
                        x: {
                            o: 32,
                            r: 0.5
                        }
                    }
                }, {
                    b: 600,
                    d: 600,
                    x: 0,
                    o: 1,
                    e: {
                        x: 36,
                        o: 1
                    },
                    p: {
                        x: {
                            dl: 0.1,
                            o: 32,
                            rd: 2
                        },
                        o: {
                            dl: 0.1,
                            o: 32,
                            rd: 2
                        }
                    }
                }],
                [{
                    b: 600,
                    d: 600,
                    x: 300,
                    e: {
                        x: 7
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    x: -30,
                    sY: 1.3,
                    p: {
                        x: {
                            o: 32,
                            r: 0.5
                        }
                    }
                }, {
                    b: 900,
                    d: 600,
                    x: 0,
                    o: 1,
                    e: {
                        x: 36,
                        o: 1
                    },
                    p: {
                        x: {
                            dl: 0.1,
                            o: 32,
                            rd: 2
                        },
                        o: {
                            dl: 0.1,
                            o: 32,
                            rd: 2
                        }
                    }
                }],
                [{
                    b: 900,
                    d: 600,
                    x: 97,
                    e: {
                        x: 7
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    x: -30,
                    sY: 1.3,
                    p: {
                        x: {
                            o: 32,
                            r: 0.5
                        }
                    }
                }, {
                    b: 1200,
                    d: 600,
                    x: 0,
                    o: 1,
                    e: {
                        x: 36,
                        o: 1
                    },
                    p: {
                        x: {
                            dl: 0.1,
                            o: 32,
                            rd: 2
                        },
                        o: {
                            dl: 0.1,
                            o: 32,
                            rd: 2
                        }
                    }
                }],
                [{
                    b: 1200,
                    d: 600,
                    x: 260,
                    e: {
                        x: 7
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    x: -30,
                    sY: 1.3,
                    p: {
                        x: {
                            o: 32,
                            r: 0.5
                        }
                    }
                }, {
                    b: 1500,
                    d: 1000,
                    x: 0,
                    o: 1,
                    e: {
                        x: 36,
                        o: 1
                    },
                    p: {
                        x: {
                            dl: 0.1,
                            o: 32,
                            rd: 2
                        },
                        o: {
                            dl: 0.1,
                            o: 32,
                            rd: 2
                        }
                    }
                }],
                [{
                    b: 1500,
                    d: 1000,
                    x: 112,
                    e: {
                        x: 7
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    x: -30,
                    sY: 1.3,
                    p: {
                        x: {
                            o: 32,
                            r: 0.5
                        }
                    }
                }, {
                    b: 2000,
                    d: 1000,
                    x: 0,
                    o: 1,
                    e: {
                        x: 36,
                        o: 1
                    },
                    p: {
                        x: {
                            dl: 0.1,
                            o: 32,
                            rd: 2
                        },
                        o: {
                            dl: 0.1,
                            o: 32,
                            rd: 2
                        }
                    }
                }],
                [{
                    b: 2000,
                    d: 1000,
                    x: 105,
                    e: {
                        x: 7
                    }
                }]
            ];

            var jssor_1_options = {
                $AutoPlay: 1,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $SpacingX: 16,
                    $SpacingY: 16
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };

    </script>
    <style>
        /*jssor slider loading skin double-tail-spin css*/
        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /*jssor slider bullet skin 102 css*/
        .jssorb102 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb102 .i .ci {
            fill: #fff;
        }

        .jssorb102 .i .co {
            fill: #000;
            opacity: .2;
        }

        .jssorb102 .i:hover .co {
            fill: #ff9933;
            opacity: 1;
        }

        .jssorb101 .i:hover .ci {
            fill: #000;
        }

        .jssorb102 .iav .ci {
            fill: #000;
            stroke-width: 0;
        }

        .jssorb102 .iav .co {
            fill: #ffba04;
            opacity: 1;
        }

        .jssorb102 .i.idn {
            opacity: .3;
        }

        /*jssor slider arrow skin 051 css*/
        .jssora051 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora051 .a {
            fill: none;
            stroke: #fff;
            stroke-width: 360;
            stroke-miterlimit: 10;
        }

        .jssora051:hover {
            opacity: .8;
        }

        .jssora051.jssora051dn {
            opacity: .5;
        }

        .jssora051.jssora051ds {
            opacity: .3;
            pointer-events: none;
        }

    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <filter id="jssor_1_flt_2" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <filter id="jssor_1_flt_3" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <filter id="jssor_1_flt_4" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <filter id="jssor_1_flt_5" x="-50%" y="-50%" width="200%" height="200%">
                <feImage x="0" y="0" width="980" height="380" data-load="href" result="r1" href="img/ski.jpg"></feImage>
                <feDisplacementMap in="SourceGraphic" in2="r1" scale="4" xchannelselector="R" ychannelselector="G"
                    result="r3"></feDisplacementMap>
                <feColorMatrix in="r1" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 -0.4 -0.4 -0.4 1.4 0"
                    result="r2"></feColorMatrix>
                <feComposite operator="in" in="r3" in2="r2" result="r4"></feComposite>
            </filter>
        </defs>
    </svg>
    <div id="jssor_1"
        style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin"
            style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                src="img/double-tail-spin.svg" />
        </div>
        <div data-u="slides"
            style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="680">
                <img data-u="image" src="{{ asset('assets/img/1.jpg') }}" />
                <svg viewbox="0 0 75 75" width="75" height="75" data-t="0"
                    style="left:92px;top:160px;display:block;position:absolute;opacity:0;mix-blend-mode:color-dodge;overflow:visible;">
                    <path fill="#b81b3c"
                        d="M0,37.5C0,16.78932 16.78932,0 37.5,0C58.21068,0 75,16.78932 75,37.5C75,58.21068 58.21068,75 37.5,75C16.78932,75 0,58.21068 0,37.5Z">
                    </path>
                </svg>
                <svg viewbox="0 0 200 200" width="200" height="200" data-t="1"
                    style="left:440px;top:72px;display:block;position:absolute;opacity:0;mix-blend-mode:color-dodge;overflow:visible;">
                    <path fill="#b81b3c"
                        d="M0,100C0,44.77152 44.77152,0 100,0C155.22848,0 200,44.77152 200,100C200,155.22848 155.22848,200 100,200C44.77152,200 0,155.22848 0,100Z">
                    </path>
                </svg>
                <svg viewbox="0 0 95 95" width="95" height="95" data-t="2"
                    style="left:550px;top:180px;display:block;position:absolute;opacity:0;mix-blend-mode:color-dodge;overflow:visible;">
                    <path fill="#b81b3c"
                        d="M0,47.5C0,21.26647 21.26647,0 47.5,0C73.73353,0 95,21.26647 95,47.5C95,73.73353 73.73353,95 47.5,95C21.26647,95 0,73.73353 0,47.5Z">
                    </path>
                </svg>
                <div data-ts="preserve-3d" style="left:420px;top:45px;width:478px;height:295px;position:absolute;">
                    <svg viewbox="0 0 478 294" width="478" height="294"
                        style="left:0px;top:0px;display:block;position:absolute;overflow:visible;">
                        <path stroke-dasharray="0,700" fill="none" stroke="#ffffff" stroke-width="1.2"
                            stroke-linecap="round"
                            d="M0,295C0,295 39.4,245.1 71,236.2C102.6,227.3 153,256.1 157.8,205.6C164,139.9 177.9,136 200.9,132.5C225.9,128.8 270.4,147.8 306.5,91.6C342.6,35.4 393,47.4 420.1,43.8C465,38.5 478,1 478,1"
                            data-t="3"></path>
                    </svg>
                    <div data-ts="preserve-3d" style="left:36px;top:239px;width:100px;height:30px;position:absolute;">
                        <svg viewbox="0 0 20 20" width="20" height="20" data-t="4"
                            style="left:0px;top:0px;display:block;position:absolute;opacity:0;overflow:visible;">
                            <path filter="url(#jssor_1_flt_1)" fill="#5078fd"
                                d="M0,10C0,4.47715 4.47715,0 10,0C15.52285,0 20,4.47715 20,10C20,15.52285 15.52285,20 10,20C4.47715,20 0,15.52285 0,10Z">
                            </path>
                        </svg>
                        <svg viewbox="0 0 8 8" width="8" height="8" data-t="5"
                            style="left:6px;top:6px;display:block;position:absolute;opacity:0;overflow:visible;">
                            <path fill="#ffffff"
                                d="M0,4C0,1.79086 1.79086,0 4,0C6.20914,0 8,1.79086 8,4C8,6.20914 6.20914,8 4,8C1.79086,8 0,6.20914 0,4Z">
                            </path>
                        </svg>
                        <div data-to="50% 50%" data-ts="preserve-3d" data-arr="6"
                            style="left:38px;top:10px;width:40px;height:14px;position:absolute;opacity:0;color:#000000;font-size:12px;font-weight:700;line-height:1.2;">
                            2000</div>
                    </div>
                    <div data-ts="preserve-3d" style="left:151px;top:173px;width:100px;height:30px;position:absolute;">
                        <svg viewbox="0 0 20 20" width="20" height="20" data-t="7"
                            style="left:0px;top:0px;display:block;position:absolute;opacity:0;overflow:visible;">
                            <path filter="url(#jssor_1_flt_2)" fill="#5078fd"
                                d="M0,10C0,4.47715 4.47715,0 10,0C15.52285,0 20,4.47715 20,10C20,15.52285 15.52285,20 10,20C4.47715,20 0,15.52285 0,10Z">
                            </path>
                        </svg>
                        <svg viewbox="0 0 8 8" width="8" height="8" data-t="8"
                            style="left:6px;top:6px;display:block;position:absolute;opacity:0;overflow:visible;">
                            <path fill="#ffffff"
                                d="M0,4C0,1.79086 1.79086,0 4,0C6.20914,0 8,1.79086 8,4C8,6.20914 6.20914,8 4,8C1.79086,8 0,6.20914 0,4Z">
                            </path>
                        </svg>
                        <div data-to="50% 50%" data-ts="preserve-3d" data-arr="9"
                            style="left:38px;top:10px;width:40px;height:14px;position:absolute;opacity:0;color:#000000;font-size:12px;font-weight:700;line-height:1.2;">
                            3000</div>
                    </div>
                    <div data-ts="preserve-3d" style="left:276px;top:104px;width:100px;height:30px;position:absolute;">
                        <svg viewbox="0 0 20 20" width="20" height="20" data-t="10"
                            style="left:0px;top:0px;display:block;position:absolute;opacity:0;overflow:visible;">
                            <path filter="url(#jssor_1_flt_3)" fill="#5078fd"
                                d="M0,10C0,4.47715 4.47715,0 10,0C15.52285,0 20,4.47715 20,10C20,15.52285 15.52285,20 10,20C4.47715,20 0,15.52285 0,10Z">
                            </path>
                        </svg>
                        <svg viewbox="0 0 8 8" width="8" height="8" data-t="11"
                            style="left:6px;top:6px;display:block;position:absolute;opacity:0;overflow:visible;">
                            <path fill="#ffffff"
                                d="M0,4C0,1.79086 1.79086,0 4,0C6.20914,0 8,1.79086 8,4C8,6.20914 6.20914,8 4,8C1.79086,8 0,6.20914 0,4Z">
                            </path>
                        </svg>
                        <div data-to="50% 50%" data-ts="preserve-3d" data-arr="12"
                            style="left:38px;top:10px;width:40px;height:14px;position:absolute;opacity:0;color:#000000;font-size:12px;font-weight:700;line-height:1.2;">
                            4000</div>
                    </div>
                    <div data-ts="preserve-3d" style="left:405px;top:34px;width:100px;height:30px;position:absolute;">
                        <svg viewbox="0 0 20 20" width="20" height="20" data-t="13"
                            style="left:0px;top:0px;display:block;position:absolute;opacity:0;overflow:visible;">
                            <path filter="url(#jssor_1_flt_4)" fill="#5078fd"
                                d="M0,10C0,4.47715 4.47715,0 10,0C15.52285,0 20,4.47715 20,10C20,15.52285 15.52285,20 10,20C4.47715,20 0,15.52285 0,10Z">
                            </path>
                        </svg>
                        <svg viewbox="0 0 8 8" width="8" height="8" data-t="14"
                            style="left:6px;top:6px;display:block;position:absolute;opacity:0;overflow:visible;">
                            <path fill="#ffffff"
                                d="M0,4C0,1.79086 1.79086,0 4,0C6.20914,0 8,1.79086 8,4C8,6.20914 6.20914,8 4,8C1.79086,8 0,6.20914 0,4Z">
                            </path>
                        </svg>
                        <div data-to="50% 50%" data-ts="preserve-3d" data-arr="15"
                            style="left:38px;top:10px;width:40px;height:14px;position:absolute;opacity:0;color:#000000;font-size:12px;font-weight:700;line-height:1.2;">
                            5000</div>
                    </div>
                </div>
            </div>
            <div data-p="680">
                <img data-u="image" src="{{ asset('assets/img/6.jpg') }}" />
                {{-- <img data-to="50% 50%" data-t="16"
                    style="left:128px;top:-326px;width:477px;height:320px;position:absolute;opacity:0.6;max-width:477px;mix-blend-mode:soft-light;"
                    src="img/ski-person.png" />
                <img data-to="50% 50%" data-t="17"
                    style="left:65px;top:-348px;width:477px;height:320px;position:absolute;opacity:0.6;max-width:477px;mix-blend-mode:soft-light;"
                    src="img/ski-person.png" />
                <img data-to="50% 50%" data-t="18"
                    style="left:97px;top:-339px;width:477px;height:320px;position:absolute;opacity:0.8;max-width:477px;mix-blend-mode:soft-light;"
                    src="img/ski-person.png" />
                <img data-to="50% 50%" data-t="19"
                    style="left:97px;top:-339px;width:477px;height:320px;position:absolute;opacity:0.7;max-width:477px;mix-blend-mode:overlay;"
                    src="" /> --}}
                <div data-ts="preserve-3d"
                    style="filter:url('#jssor_1_flt_5');left:0px;top:0px;width:980px;height:380px;position:absolute;">
                    <div data-to="0% 100%" data-ts="preserve-3d" data-arr="20"
                        style="left:520px;top:165px;width:400px;height:80px;position:absolute;opacity:0;color:#e17400;font-family:'Lucida Sans Unicode','Lucida Grande',sans-serif;font-size:64px;font-weight:900;line-height:1.2;">
                        JOIN US</div>
                    <div data-to="0% 100%" data-ts="preserve-3d" data-arr="21"
                        style="left:612px;top:253px;width:600px;height:56px;position:absolute;opacity:0;color:#616c85;font-size:30px;font-weight:700;line-height:1.2;letter-spacing:0.1em;">
                        LET'S GO </div>
                </div>
            </div>
            <div>
                <img data-u="image" src="{{ asset('assets/img/3.jpg') }}" />
                <div data-ts="flat" data-p="340" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-arr="22"
                        style="left:47px;top:9px;width:415px;height:160px;position:absolute;opacity:0;color:#ffffff;font-size:135px;font-weight:700;line-height:1.2;letter-spacing:0.11em;text-shadow:2px 2px #ffffff;">
                        2020</div>
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="24" data-arr="23"
                        style="left:240px;top:60px;width:318px;height:72px;position:absolute;opacity:0;color:#ffbe31;font-size:45px;font-weight:900;font-style:italic;line-height:1.2;letter-spacing:0.05em;">
                        <span style="font-size:1.3em;">
                    </div>
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="26" data-arr="25"
                        style="left:57px;top:81px;width:600px;height:40px;position:absolute;opacity:0;color:#ffffff;font-size:35px;font-weight:900;font-style:italic;line-height:1.2;letter-spacing:0.05em;text-shadow:1px 1.5px #001826;">
                        Being Excellent </div>
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="28" data-arr="27"
                        style="left:220px;top:132px;width:458px;height:40px;position:absolute;opacity:0;color:#ffffff;font-size:35px;font-weight:900;font-style:italic;line-height:1.2;letter-spacing:0.05em;text-shadow:1px 1.5px #001826;">
                        is not an act, It’s our habit</div>
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="30" data-arr="29"
                        style="left:72px;top:150px;width:200px;height:24px;position:absolute;opacity:0;color:#0ea5ff;font-size:20px;font-style:italic;line-height:1.2;letter-spacing:0.05em;">
                    </div>
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="32" data-arr="31"
                        style="left:65px;top:190px;width:411px;height:24px;position:absolute;opacity:0;color:#0ea5ff;font-size:20px;font-style:italic;line-height:1.2;letter-spacing:0.05em;">
                    </div>
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">html slider</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb102" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1"
            data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="co" cx="8000" cy="8000" r="5000"></circle>
                    <circle class="ci" cx="8000" cy="8000" r="3000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2"
            data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;"
            data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">
        jssor_1_slider_init();

    </script>
    <!-- #endregion Jssor Slider End -->
    <!-- END slider -->

    <!-- iris global services & iris waves -->

    <div class="container py-5">
        <div class="row">

            <div class="col-md-2"></div>


            <div class="col-md-8" style="margin-top: -150px; z-index: 5000 !important;">
                <a href="https://confianzamedia.com/iriswaves_new/index.html" target="_blank">
                    <div class="card-deck">
                        <!-- <a href="#"> -->
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/img/IRIS Waves.png') }}"
                                alt="Card image cap">
                            <div class="card-body" style="background-color:#3495FF;">
                                <h5 class="card-title text-center text-light"
                                    style="font-family: 'Times New Roman', Times, serif;">IRIS WAVES</h5>
                                <p class="card-text text-justify text-light">Services oriented systems & technology
                                    integration company with a strong focus on internet facing & mobile businesses...
                                </p>

                            </div>
                        </div>
                        <!-- </a> -->

                        <!-- <a href="#"> -->
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/img/IRIS GLOBAL.png') }}"
                                alt="Card image cap">
                            <div class="card-body" style="background-color: #3495FF">
                                <h5 class="card-title text-center text-light"
                                    style="font-family: 'Times New Roman', Times, serif;">IRIS GLOBAL</h5>
                                <p class="card-text text-justify text-light">Provide optimum value to our clients by
                                    offering the best talent and processes which is driven by cutting edge technology...
                                </p>

                            </div>
                        </div>

                    </div>
                </a>
            </div>

            <div class="col-md-2"></div>

        </div>
    </div>

    <!-- iris global services & iris waves ends here-->




    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-lg-5 mb-5 mb-md-0  element-animate">
                    <div class="pr-lg-5">
                        <h2 class="text-uppercase heading border-bottom mb-4 text-left">About Us</h2>
                        <p>Established in 1996 by Mr. Sanjiv Krishen, IRIS Group is one of the Most Trusted Indian
                            companies in IT product distribution and services. The company was started with the aim to
                            provide cost-effective products and solutions in all areas of IT.</p>
                        <p>Unwavering commitment to customer satisfaction, unbridled passion to excel, </p>
                        <a href="About.html">
                            <p class="btn btn-primary">Read More</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6  element-animate">
                    <video width="520" height="440" controls>
                        <source src="{{ URL::asset('assets/video/irisvideo.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
            </div>
        </div>
    </section>

    <section class="section border-t">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class="text-uppercase heading border-bottom mb-4">Our Gallery</h2>
                    <p class="mb-3 lead">Highly trusted IT distributor with years of delivering excellence and strong
                        partnership with leading OEMs. From servers to laptops, from power conditiong to networking,
                        Iris Computers has It all covered for you.</p>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-4 element-animate m-0">
                    <a href="#" class="link-thumbnail">
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('assets/img/itw1.jpg') }}" alt="Image placeholder"
                            class="img-fluid img-thumbnail">
                    </a>
                </div>
                <div class="col-md-4 element-animate m-0">
                    <a href="#" class="link-thumbnail">
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('assets/img/itw2.jpg') }}" alt="Image placeholder"
                            class="img-fluid img-thumbnail">
                    </a>
                </div>
                <div class="col-md-4 element-animate m-0">
                    <a href="#" class="link-thumbnail">
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('assets/img/itw3.jpg') }}" alt="Image placeholder"
                            class="img-fluid img-thumbnail">
                    </a>
                </div>

                <div class="col-md-4 element-animate m-0">
                    <a href="#" class="link-thumbnail">
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('assets/img/itw4.jpg') }}" alt="Image placeholder"
                            class="img-fluid img-thumbnail">
                    </a>
                </div>
                <div class="col-md-4 element-animate m-0">
                    <a href="#" class="link-thumbnail">
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('assets/img/itw5.jfif') }}" alt="Image placeholder"
                            class="img-fluid img-thumbnail">
                    </a>
                </div>
                <div class="col-md-4 element-animate m-0">
                    <a href="#" class="link-thumbnail">
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('assets/img/itw6.jpg') }}" alt="Image placeholder"
                            class="img-fluid img-thumbnail">
                    </a>
                </div>


            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="section">
        <div class="container">

            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class="text-uppercase heading border-bottom mb-4">What our vendors think about us</h2>
                    <p class="mb-3 lead">"Companies around the globe have worked with Iris Computers stronger
                        relationships with their customers and change the way they do business”.</p>
                </div>
            </div>

            <div class="row mb-5">

                <div class="col-lg-6 col-md-6 col-12 mb-3 element-animate">
                    <div class="media d-block media-feature text-center">
                        <img src="{{ asset('assets/img/apc.png') }}" style="width:100px; height:100px;">
                        <div class="media-body">
                            <h2>Mr Venkatraman Swaminathan </h2>
                            <h3 class="mt-0 text-black">VP, Secure Power Division</h3>
                            <p>"We value our long-standing partnership with Iris Computers who helped us to serve IT
                                Channel ecosystem and grow APC brand multifold in the industry. Iris’s unique approach
                                towards understanding partner needs, distribution landscape, innovation and
                                technology-based value addition are unmatched in the industry. Iris reflects the true
                                essence of Value Added Distribution and compliments our focus in the market with its
                                strategic & solution centric approach."</p>

                        </div>
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 col-12 mb-3 element-animate">
                    <div class="media d-block media-feature text-center">
                        <img src="{{ asset('assets/img/bpe.png') }}" style="width:100px; height:100px;">
                        <div class="media-body">
                            <h2>Mr. Amitansu</h2>
                            <h3 class="mt-0 text-black">Chairman</h3>
                            <p>is is instrumental in BPE growth, we are associated with Iris for the past `9 years. We
                                and IRIS is like one family, and we like their fast response, and accessibility to reach
                                seniors, at neck of the time, is the key of our mutual growth. We are really proud of
                                our association, and we will continuing grow together, with shoulder to shoulder, to
                                next level. We look forward to working closely with them in the years to come.</p>

                        </div>
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 col-12 mb-3 element-animate">
                    <div class="media d-block media-feature text-center">
                        <img src="{{ asset('assets/img/Commscop-ruckus.png') }}" style="width:100px; height:100px;">
                        <div class="media-body">
                            <h2>Mr. SRIKANTH NATARAJAN</h2>
                            <h3 class="mt-0 text-black">Ruckus</h3>
                            <p>The relationship with Iris Computers has been a very special one both professionally as
                                well as personally for me. The Iris Family has been selling Brocade products in the past
                                and are now a part of the Commscope Ruckus family; A true value added distributor with
                                strong pre-sales, sales and logistics support, Iris has been an extension of our sales
                                arm. A pan India presence makes them a national distributor who has the right mix of
                                business and technology to drive our business. Iris Computers has solid relationships
                                with other OEM’s and offer an end to end solution to our partners</p>

                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-12 mb-3 element-animate">
                    <div class="media d-block media-feature text-center">
                        <img src="{{ asset('assets/img/wacom.png') }}" style="width:100px; height:100px;">
                        <div class="media-body">
                            <h2>Mr. Jitender Sharma</h2>
                            <h3 class="mt-0 text-black"> Director Sales- Wacom Business Solutions</h3>
                            <p>Our Exclusive distribution partner Addressing Regional distributors with faster
                                availability and reliable support. The efforts of Iris have resulted in delivering
                                business growth, technical and supply chain leadership with an excellent expertise
                                across the Acer portfolio. Iris has demonstrated their strength in the execution of
                                large orders and constant connection with the partners to help successfully navigate
                                through the high credit risk involved. We look forward to working closely with them in
                                the years to come.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->




    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center mb-5">
                    <h2 class="text-uppercase heading border-bottom mb-4">Our Product Offerings</h2>
                    <p class="mb-0 lead">Comprehensive IT Solutions for diverse business sectors</p>
                </div>
            </div>
            <div class="row element-animate">
                <div class="major-caousel js-carousel-1 owl-carousel">
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('assets/img/ic1.png') }}" alt="Image Placeholder"
                                class="img-fluid rounded mx-auto d-block" style="width: 100px;height: 100px;">
                            <div class="media-body">

                                <h3 class="mt-0 text-black text-center"><a href="#" class="text-black">Data Signage</a>
                                </h3>
                                <p>Used to store, access, secure and manage digital data, files and services. Server is
                                    used for storing and accessing small to large amount of data over a shared network
                                    or through the Internet.</p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('assets/img/ic2.png') }}" alt="Image Placeholder"
                                class="img-fluid rounded mx-auto d-block" style="width: 100px;height: 100px;">
                            <div class="media-body">

                                <h3 class="mt-0 text-black text-center"><a href="#" class="text-black">Video
                                        Survelliance</a></h3>
                                <p>Closed-circuit television, also known as video surveillance, is the use of video
                                    cameras to transmit a signal to a specific place, on a limited set of monitors,
                                    signal to a specific place.</p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('assets/img/ic3.png') }}" alt="Image Placeholder"
                                class="img-fluid rounded mx-auto d-block" style="width: 100px;height: 100px;">
                            <div class="media-body">

                                <h3 class="mt-0 text-black text-center"><a href="#" class="text-black">Irir Care</a>
                                </h3>
                                <p>HP care packs, IBM, Dell & AMC Contracts,files and services. Server is used for
                                    storing and accessing small to large amount of data over a shared network or through
                                    the Internet..</p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('assets/img/ic4.png') }}" alt="Image Placeholder"
                                class="img-fluid rounded mx-auto d-block" style="width: 100px;height: 100px;">
                            <div class="media-body">

                                <h3 class="mt-0 text-black text-center"><a href="#" class="text-black">Server &
                                        Srorage</a></h3>
                                <p>Used to store, access, secure and manage digital data, files and services. Server is
                                    used for storing and accessing small to large amount of data over a shared network
                                    or through the Internet.</p>

                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('assets/img/ic5.png') }}" alt="Image Placeholder"
                                class="img-fluid rounded mx-auto d-block" style="width: 100px;height: 100px;">
                            <div class="media-body">

                                <h3 class="mt-0 text-black text-center"><a href="#" class="text-black">Backup</a></h3>
                                <p>In information technology, a backup, or data backup, or the process of backing up,
                                    refers to the copying into an archive file of computer data that is already in
                                    secondary storage</p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('assets/img/ic6.png') }}" alt="Image Placeholder"
                                class="img-fluid rounded mx-auto d-block" style="width: 100px;height: 100px;">
                            <div class="media-body">

                                <h3 class="mt-0 text-black text-center"><a href="#" class="text-black">
                                        Networking / Wireless / WIFI</a></h3>
                                <p>A wireless network is a computer network that uses wireless data connections between
                                    network nodes. Examples of wireless networks include cell phone networks, WLANs,
                                    etc.</p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('assets/img/ic7.png') }}" alt="Image Placeholder"
                                class="img-fluid rounded mx-auto d-block" style="width: 100px;height: 100px;">
                            <div class="media-body">

                                <h3 class="mt-0 text-black text-center"><a href="#" class="text-black">Computing
                                        System</a></h3>
                                <p>A system of interconnected computers that share a central storage system and various
                                    peripheral devices such as printers, scanners, or routers ,storage system and
                                    various peripheral devices .</p>

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('assets/img/ic8.png') }}" alt="Image Placeholder"
                                class="img-fluid rounded mx-auto d-block" style="width: 100px;height: 100px;">
                            <div class="media-body">

                                <h3 class="mt-0 text-black text-center text-center"><a href="#" class="text-black">
                                        Power Solutions</a></h3>
                                <p>Power Solutions carry and stock a complete line of UPS Systems from all the leading
                                    manufacturers, with one of the most comprehensive product offerings, a complete line
                                    of UPS Systems .</p>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- END slider -->
            </div>
        </div>
    </section>
    <!-- END section -->


    <!-- our valued oem section slider -->



    <div class="col mt-5">
        <h2 class="text-center">OUR Valued OEM</h2>
        <p class="text-center">“A satisfied customer is the best business strategy of all”<br>
            The international OEMs who trust us</p>
        <div class="brands_slider_container bg-white">
            <div class="owl-carousel owl-theme brands_slider">
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/dell-2.png') }}" style="width:150px;height:75px;" alt=""></div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/delta.png') }}" style="width:150px;height:75px;" alt=""></div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/dt-logo.png') }}" style="width:150px;height:75px;" alt="">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/LG-logo.png') }}" style="width:150px;height:75px;" alt="">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/hp.png') }}" style="width:150px;height:75px;" alt=""></div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/numeric.png') }}" style="width:150px;height:75px;" alt="">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/wacom.png') }}" style="width:150px;height:75px;" alt=""></div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/samsung logo.png') }}" style="width:150px;height:75px;" alt="">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/sangoma_1.png') }}" style="width:150px;height:75px;" alt="">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/engenius.png') }}" style="width:150px;height:75px;" alt="">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/acer.png') }}" style="width:150px;height:75px;" alt=""></div>
                </div>
                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/apc.png') }}" style="width:150px;height:75px;" alt=""></div>
                </div>
            </div>
        </div>
    </div>





    <div class="col my-5">
        <h2 class="text-center">OUR TECHNOLOGY PARTNERS</h2>
        <!-- <p class="text-center">“A satisfied customer is the best business strategy of all”<br>
       The international OEMs who trust us</p> -->
        <div class="brands_slider_container">
            <div class="owl-carousel owl-theme brands_slider">

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t1.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t2.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t3.png') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t4.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t5.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/6.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t7.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t8.png') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t9.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t10.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t11.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t12.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>




                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t15.png') }}" style="width:150px;height:75px;" alt=""></div>
                </div>





                <div class="owl-item">
                    <div class="brands_item d-flex flex-column justify-content-center"><img
                            src="{{ asset('assets/img/t29.jpg') }}" style="width:150px;height:75px;" alt=""></div>
                </div>

            </div>
        </div>
    </div>





    <!-- oem slider ends here -->


    <!-- overlap section  -->

    <section class="container cta-overlap">
        <div class="text d-flex">
            <h2 class="h3"> For Enquiry Contact Us at</h2>
            <div class="ml-auto btn-wrap" style="margin-top: -5px;">
                <a href="#" class="btn-cta btn btn-outline-white" style="font-size: 25px;">
                    011- 26782505
                </a>
            </div>
            <div class="ml-auto btn-wrap">
                <a href="#" class="btn-cta btn btn-outline-white" style="font-size: 12px;">9am-9pm</a>
            </div>
        </div>
    </section>

    <!-- overlap ends here -->


    <footer class="site-footer bg-dark" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('assets/img/IRIS World.png') }}" style="width: 150px;height: 45px;">
                    <p style="font-size: 20px;">© Iris Computers.. 2019 All rights reserved</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white">About Us</h3>
                    <ul class="list-unstyled footer-ink" style="font-size: 20px;">
                        <li><a href="Leadership.html">Leadership Team</a></li>
                        <li><a href="#">Achievements</a></li>
                        <li><a href="#">Case Studies</a></li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white">Help ?</h3>
                    <ul class="list-unstyled footer-link" style="font-size: 20px;">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white">Follow US On</h3>
                    <ul class="list-unstyled footer-link d-flex footer-social">
                        <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->



    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <script>
        $(document).ready(function() {

            if ($('.brands_slider').length) {
                var brandsSlider = $('.brands_slider');

                brandsSlider.owlCarousel({
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    nav: false,
                    dots: false,
                    autoWidth: true,
                    items: 6,
                    margin: 42
                });

                if ($('.brands_prev').length) {
                    var prev = $('.brands_prev');
                    prev.on('click', function() {
                        brandsSlider.trigger('prev.owl.carousel');
                    });
                }

                if ($('.brands_next').length) {
                    var next = $('.brands_next');
                    next.on('click', function() {
                        brandsSlider.trigger('next.owl.carousel');
                    });
                }
            }
        });

    </script>


    <script>
        $(document).ready(function() {
            $(".sidebar-form .call-action").click(function() {
                $(this).parents(".sidebar-form").toggleClass("show")
            })
        })

    </script>


</body>

</html>
