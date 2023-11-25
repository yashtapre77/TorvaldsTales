<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #footer-page{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #cfd2d6;
        }

        footer {
            position: relative;
            bottom: 0;
            background: #fe4c1c;
            height: 10%;
            width: 100%;
            padding: 40px 0 0 0;
        }

        /*content*/
        .footer {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            background-color: #fe4c1c;
        }

        .footer p {
            margin: 10px;
            line-height: 10px;
            font-size: 14px;
            color: #000;
            margin-left: 45px;
        }

        /*social -media*/
        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
        }
        .socials li {
            margin: 0 10px;
        }

        .socials a {
            text-decoration: none;
            color: #fff;
            border: 1.1px solid white;
            padding: 5px;
            border-radius: 50%;
        }

        .socials a i {
            font-size: 1.2rem;
            width: 20px;
            transition: color .4s ease;
        }

        .socials a:hover i {
            color: #000;
            border: #000;
        }

        .footer-copyright {
            background: #fe4c1c;
            width: 100%;
            /* padding: 10px; */
        }

        .footer-copyright p {
            font-size: 17px;
            word-spacing: 2px;
            align-items: center;
            justify-content: center;
            color: #000;
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <footer id="footer-page">
        <div class="footer">
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://github.com/yashtapre77"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <div class="footer-copyright">
                <p>copyright &copy;2023 </p>
            </div>
            <p>All rights reserved</p>
        </div>
    </footer>
</body>
