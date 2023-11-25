@extends('sections.main')

@section('mainSection')
<html lang="en">

<head>
    <title>Document</title>

    <style>
        .mySlides {
            position: relative;
            display: inline-block;
        }

        .slider-imgs {
            width: 94%;
            height: 75%;
            margin-right: 3%;
            margin-left: 3%;
            border-radius: 5px;
            opacity: 0.7;
            box-shadow: 20px 0 200px rgba(0, 0, 0, 2.9) inset;
        }

        #linus-img1 {
            width: 600px;
            height: 400px;
            border-radius: 30px;
            float: left;
            margin: 30px;
        }

        #linus-img2 {
            width: 450px;
            height: 500px;
            border-radius: 30px;
            float: right;
            margin: 10px;
            margin-right: 100px;
        }

        .right-block {
            height: 400px;
            margin-right: 100px;
            align-items: center;
            text-align: right;
            line-height: 1.6;
            display: flex;
            align-items: center;
            margin-left: 80px;
        }

        .left-block {
            height: 400px;
            margin-right: 20px;
            align-items: center;
            text-align: left;
            line-height: 1.6;
            display: flex;
            align-items: center;
            margin-left: 80px;
            width: 50%;
            float: left;
            margin-top: 30px;
        }

        .info-section {
            width: 70%;
            margin-right: auto;
            margin-left: auto;
            margin-top: 50px;
        }

        /* Slideshow container */
        .slideshow-container {
            position: relative;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }


        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        /* .fade { */
        /* animation-name: fade; */
        /* animation-duration: 1.5s; */
        /* } */

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }

        /* .home-title { */
        /* float: left; */
        /* height: 70%; */
        /* font-family: 'Helvetica Neue', sans-serif; */
        /* z-index: 5; */
        /* transform: translate(25%, -120%); */
        /* color: #fff; */
        /* font-size: 130px; */
        /* font-weight: 900; */
        /* line-height: 1.5; */
        /* text-shadow: 4px 4px 6px #000000; */
        /* border: 10px solid black; */
        /* } */
    </style>


</head>

<body>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img class="slider-imgs" src="/images/slider1.jpg">
            {{-- <h1 class="home-title">Story <br> of Linus <br> Torvalds</h1> --}}
        </div>

        <div class="mySlides fade">
            <img src="/images/slider2.webp" class="slider-imgs">
            {{-- <h1 class="home-title">Story <br> of Linus <br> Torvalds</h1> --}}
        </div>

        <div class="mySlides fade">
            <img src="/images/slider3.jpg" class="slider-imgs">
            {{-- <h1 class="home-title">Story <br> of Linus <br> Torvalds</h1> --}}
        </div>

        <div class="mySlides fade">
            <img src="/images/slider4.jpg" class="slider-imgs">
            {{-- <h1 class="home-title">Story <br> of Linus <br> Torvalds</h1> --}}
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
    <br><br>
    <h1>Home Page</h1>
    <div class="info-section">
        <img src="/images/Linus.jpeg" alt="no image" id="linus-img1">
        <div class="right-block">
            <p> Linus Torvalds, creator of the Linux Operating System, was born December 28, 1969 in Helsinki, Finland.
                His grandfather had a Commodore VIC-20 that he had the opportunity to work with; by age ten he was
                already dabbling in programming. He enrolled at the University of Helsinki in 1989, and in 1990 he took
                his first C programming class. In 1991, Torvalds decided that his new MS-DOS-driven PC needed an
                alternative operating system. He had enough programming know-how under his belt to assume that he could
                achieve this himself. His goal was to create a UNIX-like operating system he could use at home. Using
                the Marice J. Bach book “Design of the Unix Operating System” as a guide, he set out to create the
                system, working long, hard hours until, at age 22, he completed a rough version. He called his system
                “Linux,” a combination of UNIX and his name, and posted the source code free on the Internet.
            </p>
        </div>
    </div>

    <div class="info-section">
        <img src="/images/linus2.jpg" alt="no image" id="linus-img2">
        <div>
            <p class="left-block">
                Torvalds’ philosophy was that if he made the software available for free downloading, including the
                source code, anyone with knowledge of and interest in computer programming could modify the system and
                ultimately make it better or modify it for their own specific purposes. Licensed under a GNU General Public License, the system is available free to anyone who can get, use, modify, distribute and copy it. By 1999, an estimated seven million computers were running on Linux. Linux gained popularity in the consumer PC market as well. Torvalds made his personal mascot a penguin named “Tux,” which became a recognizable symbol for Linux around the world. Torvalds spent 1988-1997 at the University of Helsinki, coordinating development of the Linux kernel and furthering his studies. He moved to the United States in 1997 to begin working for Transmeta, where he helped to design the Transmeta Crusoe Processor, a power-saving CPU. In 2003, Torvalds left Transmeta to focus on the Linux kernel through the Open Source Development Labs (OSDL). The OSDL’s purpose was to pro Linux development.
            </p>
        </div>
    </div>
</body>

</html>
@endsection
