@extends('sections.main')

@section('mainSection')
<html lang="en">

<head>
    <title>Document</title>
    <style>
        th,
        td {
            padding: 20px 25px;
        }
        tr:nth-child(even) {
            background-color: rgb(229, 235, 229);
        }
        th {
            font-size: 25px;
        }
        #ach-table {
            margin: auto;
            border-collapse: collapse;
            align-content: center;
            text-align: center;
            align-items: center;
            line-height: 1.5;
            width: 80%
        }
        .c-block {
            background-color: white;
            margin-left: auto;
            margin-right: auto;
            padding: 2em;
            width: 60%;
            border-radius: 30px;
            box-shadow: -6px -6px 10px rgba(94, 104, 121, 0.3), 6px 6px 10px rgba(94, 104, 121, 0.3);
        }
        td{
            color: #91887c;
        }

        .sub-heads{
            width: 100%;
            margin-bottom: 25px;
            margin-right: auto;
            margin-left: auto;
            text-align: center;
            font-weight: 600;
            font-family: serif;
        }
    </style>
</head>

<body>
    <h1 class="sub-heads">Awards and Achievements</h1>
    <div class="c-block">
        <table id="ach-table" class="table table-striped">
            <tr>
                <th>Notes</th>
                <th>Year</th>
                <th>Award</th>
            </tr>
            <tr>
                <div>
                    <td>2018</td>
                    <td>IEEE Masaru Ibuka Consumer Electronics Award</td>
                    <td>
                        <p>IEEE Masaru Ibuka Consumer Electronics Award is conferred by the Institute of Electrical and
                            Electronics Engineers for outstanding contributions to consumer electronics technology has
                            been
                            named in honor of the co-founder and honorary chairman of Sony Corporation, Masaru Ibuka.
                            2018
                            Ibuka award was conferred to Linus Torvalds "For his leadership of the development and
                            proliferation of Linux."</p>
                    </td>
                </div>

            </tr>
            <tr>
                <div>
                    <td>2014</td>
                    <td>IEEE Computer Pioneer Award</td>
                    <td>
                        <p>
                            On 23 April 2014, the Institute of Electrical and Electronics Engineers named Torvalds as
                            the
                            2014 recipient of the IEEE Computer Society's Computer Pioneer Award. The Computer Pioneer
                            Award
                            was established in 1981 by the IEEE Computer Society Board of Governors to recognize and
                            honor
                            the vision of those whose efforts resulted in the creation and continued vitality of the
                            computer industry. The award is presented to outstanding individuals whose main contribution
                            to
                            the concepts and development of the computer field was made at least 15 years earlier.
                        </p>
                    </td>
                </div>
            </tr>
            <tr>
                <div>
                    <td>2012</td>
                    <td>Internet Hall of Fame</td>
                    <td>
                        <p>
                            On 23 April 2012, at Internet Society's Global INET conference in Geneva, Switzerland,
                            Torvalds
                            was one of the inaugural inductees into the Internet Hall of Fame, one of ten in the
                            Innovators
                            category and thirty-three overall inductees.
                        </p>
                    </td>
                </div>
            </tr>

            <tr>
                <div>
                    <td>2012</td>
                    <td>Millennium Technology Prize</td>
                    <td>
                        <p>
                            On 20 April 2012, Torvalds was declared one of two winners of that year's Millennium
                            Technology
                            Prize,[64] along with Shinya Yamanaka.[65] The honor is widely described as technology's
                            equivalent of the Nobel Prize.
                        </p>
                    </td>
                </div>
            </tr>

            <tr>
                <div>
                    <td>2010</td>
                    <td>C&C Prize</td>
                    <td>
                        <p>
                            He was awarded the C&C Prize by the NEC Corporation in 2010 for "contributions to the
                            advancement of the information technology industry, education, research, and the improvement
                            of
                            our lives".
                        </p>
                    </td>
                </div>
            </tr>

            <tr>
                <div>
                    <td>2008</td>
                    <td>Hall of Fellows</td>
                    <td>
                        <p>
                            In 2008, he was inducted into the Hall of Fellows of the Computer History Museum in Mountain
                            View, California, "for the creation of the Linux kernel and the management of open source
                            development of the widely used Linux operating system."
                        </p>
                    </td>
                </div>
            </tr>

            <tr>
                <div>
                    <td>2005</td>
                    <td>Vollum Award</td>
                    <td>
                        <p>
                            In August 2005, Torvalds received the Vollum Award from Reed College
                        </p>
                    </td>
                </div>
            </tr>

            <tr>
                <div>
                    <td>2003</td>
                    <td>Linus (Moon)</td>
                    <td>
                        <p>
                            In 2003, the naming of the asteroid moon Linus was motivated in part by the fact that the
                            discoverer was an enthusiastic Linux user. Although the naming proposal referred to the
                            mythological Linus, son of the muse Calliope and the inventor of melody and rhythm, the name
                            was
                            also meant to honor Linus Torvalds, and Linus van Pelt, a character in the Peanuts comic
                            strip.
                        </p>
                    </td>
                </div>
            </tr>

            <tr>
                <div>
                    <td>2001</td>
                    <td>Takeda Award</td>
                    <td>
                        <p>
                            In 2001, he shared the Takeda Award for Social/Economic Well-Being with Richard Stallman and
                            Ken
                            Sakamura.
                        </p>
                    </td>
                </div>
            </tr>

            <tr>
                <div>
                    <td>2000</td>
                    <td>Lovelace Medal</td>
                    <td>
                        <p>
                            In 2000, he was awarded the Lovelace Medal from the British Computer Society.
                        </p>
                    </td>
                </div>
            </tr>

            <tr>
                <div>
                    <td>1998</td>
                    <td>EFF Pioneer Award</td>
                    <td>
                        <p>
                            In 1998, Torvalds received an EFF Pioneer Award
                        </p>
                    </td>
                </div>
            </tr>

            <tr>
                <div>
                    <td>1997</td>
                    <td>Academic Honors</td>
                    <td>
                        <p>
                            In 1997, Torvalds received his master's degree (Laudatur Grade) from the Department of
                            Computer
                            Science at the University of Helsinki. Two years later he received honorary doctor status at
                            Stockholm University, and in 2000, he received the same honor from his alma mater.University
                            of
                            Helsinki has named an auditorium after Torvalds and his computer is on display at the
                            Department
                            of Computer Science.
                        </p>
                    </td>
                </div>
            </tr>

            <tr>
                <div>
                    <td>1996</td>
                    <td>9793 Torvalds (Asteroid)</td>
                    <td>
                        <p>
                            In 1996, the asteroid 9793 Torvalds was named after him
                        </p>
                    </td>
                </div>
            </tr>
        </table>
    </div>
    <div style="height: 100px;"></div>
</body>

</html>
@endsection
