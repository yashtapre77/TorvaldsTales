@extends('sections.main')

@section('mainSection')
<html lang="en">

<head>
    <title>Document</title>
    <style>
        .sub-heads {
            width: 100%;
            margin-bottom: 25px;
            margin-right: auto;
            margin-left: auto;
            text-align: center;
            font-weight: 600;
            font-family: serif;
            font-size: 28px;
        }

        .history-secs {
            width: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        .history-secs-p {
            line-height: 1.5;
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
            width: 55%;
            float: left;
            margin: 20px;
            margin-right: 30px;
            margin-top: 100px;
        }

        .history-sec-img {
            border-radius: 30px;
            width: 350px;
            height: 450px;
            margin: 20px;
            margin-left: 30px;
        }

        .history-p {
            line-height: 1.5;
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
            width: 60%;
            margin: 20px;
            padding-right: 20%;
            padding-left: 20%;
            text-align: justify;

        }
    </style>
</head>

<body>
    <h2 class="sub-heads">Early Years</h2>
    <div class="history-secs">
        <p class="history-secs-p">Torvalds was born in Helsinki, Finland, the son of journalists Anna and Nils Torvalds,
            the grandson of
            statistician Leo Törnqvist and of poet Ole Torvalds, and the great-grandson of journalist and soldier Toivo
            Karanko. His parents were campus radicals at the University of Helsinki in the 1960s. His family belongs to
            the Swedish-speaking minority in Finland. He was named after Linus Pauling, the Nobel Prize-winning American
            chemist, although in the book Rebel Code: Linux and the Open Source Revolution, he is quoted as saying, "I
            think I was named equally for Linus the Peanuts cartoon character", noting that this made him "half Nobel
            Prize-winning chemist and half blanket-carrying cartoon character".
        </p>
        <img src="/images/history1.jpg" alt="" class="history-sec-img">
    </div>
    <p class="history-p">
        Torvalds attended the University of Helsinki from 1988 to 1996, graduating with a master's degree in computer
        science from the NODES research group. His academic career was interrupted after his first year of study when he
        joined the Finnish Navy Nyland Brigade in the summer of 1989, selecting the 11-month officer training program to
        fulfill the mandatory military service of Finland. He gained the rank of second lieutenant, with the role of an
        artillery observer. He bought computer science professor Andrew Tanenbaum's book Operating Systems: Design and
        Implementation, in which Tanenbaum describes MINIX, an educational stripped-down version of Unix. In 1990,
        Torvalds resumed his university studies, and was exposed to Unix for the first time in the form of a DEC
        MicroVAX running ULTRIX. His MSc thesis was titled Linux: A Portable Operating System.
    </p>
    <p class="history-p">
        His interest in computers began with a VIC-20 at the age of 11 in 1981. He started programming for it in BASIC,
        then later by directly accessing the 6502 CPU in machine code (he did not utilize assembly language). He then
        purchased a Sinclair QL, which he modified extensively, especially its operating system. "Because it was so hard
        to get software for it in Finland", he wrote his own assembler and editor "(in addition to Pac-Man graphics
        libraries)" for the QL, and a few games. He wrote a Pac-Man clone, Cool Man. On 5 January 1991 he purchased an
        Intel 80386-based clone of IBM PC before receiving his MINIX copy, which in turn enabled him to begin work on
        Linux.
    </p>
</body>

</html>
@endsection
