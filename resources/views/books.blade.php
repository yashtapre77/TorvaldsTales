@extends('sections.main')

@section('mainSection')
<html lang="en">

<head>
    <title>Document</title>
    <script src="https://cdn.taillwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
    <style>
        .book-images {
            width: 200px;
            height: 300px;
            margin: 5px;
            border-radius: 10px;
        }

        #book-table {
            background-color: white;
            margin-left: auto;
            margin-right: auto;
            padding: 2em;
            width: 60%;
            border-radius: 30px;
            box-shadow: -6px -6px 10px rgba(94, 104, 121, 0.3), 6px 6px 10px rgba(94, 104, 121, 0.3);
        }

        #table-books {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            text-justify: inter-cluster;
        }

        .books-table-row {
            margin: 15px;
        }

        td,
        th {
            padding: 20px 30px;
        }

        .sub-heads {
            width: 100%;
            margin-bottom: 25px;
            margin-right: auto;
            margin-left: auto;
            text-align: center;
            font-weight: 600;
            font-family: serif;
        }

        .books-info{
            line-height: 1.4;
            text-align: justify;
        }
    </style>

</head>

<body>
    <h1 class="sub-heads text-4xl font-extrabold dark:text-white">Books Contributed by Linus</h1>
    <div id="book-table">
        <table id="table-books">
            <tr class="books-table-row">
                <td>
                    <div class="books-img">
                        <img src="/images/jus-for-fun.jpg" alt="" class="book-images">
                    </div>
                </td>
                <td>
                    <div class="books-info">
                        <p class="text-1xl ">
                            Once upon a time Linus Torvalds was a skinny unknown, just another nerdy Helsinki techie who
                            had been fooling around with computers since childhood. Then he wrote a groundbreaking
                            operating system and distributed it via the Internet -- for free. Today Torvalds is an
                            international folk hero. And his creation LINUX is used by over 12 million people as well as
                            by companies such as IBM.
                        </p>
                        <p>
                            Now, in a narrative that zips along with the speed of e-mail, Torvalds gives a history of
                            his renegade software while candidly revealing the quirky mind of a genius. The result is an
                            engrossing portrayal of a man with a revolutionary vision, who challenges our values and may
                            change our world.
                        </p>
                    </div>
                </td>
            </tr>

            <tr class="books-table-row">
                <td>
                    <div class="books-img">
                        <img src="/images/openSoureces.jpeg" alt="" class="book-images">
                    </div>
                </td>
                <td>
                    <div class="books-info">
                        <p>
                            Freely available source code, with contributions from thousands of programmers around the
                            world: this is the spirit of the software revolution known as Open Source. Open Source has
                            grabbed the computer industry's attention. Netscape has opened the source code to Mozilla;
                            IBM supports Apache; major database vendors haved ported their products to Linux. As
                            enterprises realize the power of the open-source development model, Open Source is becoming
                            a viable mainstream alternative to commercial software.Now in Open Sources, leaders of Open
                            Source come together for the first time to discuss the new vision of the software industry
                            they have created. The essays in this volume offer insight into how the Open Source movement
                            works, why it succeeds, and where it is going.For programmers who have labored on
                            open-source projects, Open Sources is the new gospel: a powerful vision from the movement's
                            spiritual leaders. For businesses integrating open-source software into their enterprise,
                            Open Sources reveals the mysteries of how open development builds better software, and how
                            businesses can leverage freely available software for a competitive business advantage.
                        </p>
                    </div>
                </td>
            </tr>

            <tr class="books-table-row">
                <td>
                    <div class="books-img">
                        <img src="/images/hacker-ethic.jpg" alt="" class="book-images">
                    </div>
                </td>
                <td>
                    <div class="books-info">
                        <p>
                            The Hacker Ethic and the Spirit of the Information Age is a book released in 2001, and
                            written by Pekka Himanen, with prologue written by Linus Torvalds and the epilogue written
                            by Manuel Castells.
                        </p>
                        <p>
                            You may be a hacker and not even know it. Being a hacker has nothing to do with
                            cyberterrorism, and it doesn’t even necessarily relate to the open-source movement. Being a
                            hacker has more to do with your underlying assumptions about stress, time management, work,
                            and play. It’s about harmonizing the rhythms of your creative work with the rhythms of the
                            rest of your life so that they amplify each other. It is a fundamentally new work ethic that
                            is revolutionizing the way business is being done around the world.
                        </p>
                        <p>
                            Without hackers there would be no universal access to e-mail, no Internet, no World Wide
                            Web, but the hacker ethic has spread far beyond the world of computers. It is a mind-set, a
                            philosophy, based on the values of play, passion, sharing, and creativity, that has the
                            potential to enhance every individual’s and company’s productivity and competitiveness. Now
                            there is a greater need than ever for entrepreneurial versatility of the sort that has made
                            hackers the most important innovators of our day. Pekka Himanen shows how we all can make
                            use of this ongoing transformation in the way we approach our working lives.
                        </p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="height: 100px;"></div>
</body>

</html>
@endsection
