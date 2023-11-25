<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #fe4c1c;
            padding: 15px 0;
            text-align: center;
            width: 1000px;
            border-radius: 35px;
            margin-top: 25px;
            height: 37px;
            float: right;
            margin-right: 100px;

        }

        .navba {
            text-decoration: none;
            color: #ecf0f1;
            margin: 0 15px;
            padding: 5px 15px;
            font-size: 18px;
            display: inline-block;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            font-weight: 900;
        }

        nav a:hover {
            background-color: #ebf0dc;
            color: black;
            font-size: 25px;
            padding: 2px 15px;
        }

        .heade {
            width: 100%;
            height: 17%;
            top: 50%;
            margin-top: 25px;
            /* border: 1px solid black; */
        }

        p {
            color: #91887c;
        }

        h1 {
            position: relative;
            padding: 0;
            margin: 0;
            font-family: "Raleway", sans-serif;
            font-weight: 300;
            font-size: 40px;
            color: #080808;
            -webkit-transition: all 0.4s ease 0s;
            -o-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
        }

        h1 span {
            display: block;
            font-size: 0.5em;
            line-height: 1.3;
        }

        .nine h1 {
            text-align: center;
            font-size: 50px;
            text-transform: uppercase;
            color: #222;
            letter-spacing: 1px;
            font-family: "Playfair Display", serif;
            font-weight: 600;
        }

        .nine h1 span {
            margin-top: 5px;
            font-size: 15px;
            color: #444;
            word-spacing: 1px;
            font-weight: 400;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-family: "Raleway", sans-serif;
            font-weight: 500;

            display: grid;
            grid-template-columns: 1fr max-content 1fr;
            grid-template-rows: 27px 0;
            grid-gap: 20px;
            align-items: center;
        }

        .nine h1 span:after,
        .nine h1 span:before {
            content: " ";
            display: block;
            border-bottom: 1px solid #ccc;
            border-top: 1px solid #ccc;
            height: 5px;
            background-color: #f8f8f8;
        }

        #header-heading{
            width : 40%;
            float: left;
            margin-top: 15px
        }
    </style>
</head>

<body>
    <div class="heade">
        <div id="header-heading">
            <div class="nine">
                <h1>TorvaldsTales<span>Story of Linus Torvalds</span></h1>
            </div>
        </div>
        <center>
            <nav class="verticalCenter">
                <a href="/home" class="navba">Home</a>
                <a href="/about" class="navba">About</a>
                <a href="/work" class="navba">Work</a>
                <a href="/history" class="navba">History </a>
                <a href="/achievements" class="navba">Achievements</a>
                <a href="/books" class="navba">Books</a>
            </nav>
        </center>
    </div>
</body>
