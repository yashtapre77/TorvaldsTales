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

        .about-p {
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
    <h1>About Page</h1>
    <h2 class="sub-heads">Personel Life</h2>
    <p class="about-p">
        Torvalds is married to Tove Torvalds (née Monni), a six-time Finnish national karate champion, whom he met in
        late 1993. He was running introductory computer laboratory exercises for students and instructed the course
        attendees to send him an e-mail as a test, to which Tove responded with an e-mail asking for a date. They were
        later married and have three daughters, two of whom were born in the United States. The Linux kernel's reboot
        system call accepts their dates of birth (written in hexadecimal) as magic values.
    </p>
    <p class="about-p">
        Torvalds has described himself as "completely a-religious—atheist", adding, "I find that people seem to think
        religion brings morals and appreciation of nature. I actually think it detracts from both. It gives people the
        excuse to say, 'Oh, nature was just created,' and so the act of creation is seen to be something miraculous. I
        appreciate the fact that, 'Wow, it's incredible that something like this could have happened in the first
        place.'" He later added that while in Europe religion is mostly a personal issue, in the United States it has
        become very politicized. When discussing the issue of church and state separation, he said, "Yeah, it's kind of
        ironic that in many European countries, there is actually a kind of legal binding between the state and the
        state religion." In "Linus the Liberator", a story about the March LinuxWorld Conference, Torvalds says: "There
        are like two golden rules in life. One is 'Do unto others as you would want them to do unto you.' For some
        reason, people associate this with Christianity. I'm not a Christian. I'm agnostic. The other rule is 'Be proud
        of what you do.'"
    </p>
    <p class="about-p">
        In 2004, Torvalds moved with his family from Silicon Valley to Portland, Oregon.
        In 2010, Torvalds became a United States citizen and registered to vote in the United States. As of that year,
        he was unaffiliated with any U.S. political party, saying, "I have way too much personal pride to want to be
        associated with any of them, quite frankly."
        Linus developed an interest in scuba diving in the early 2000s and has achieved numerous certifications, leading
        him to create the Subsurface project
    </p>
</body>

</html>
@endsection
