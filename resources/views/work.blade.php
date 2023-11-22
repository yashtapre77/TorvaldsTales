@extends('sections.main')

@section('mainSection')
<html lang="en">
<head>
    <title>Document</title>
    <style>
        #linux-img{
            width: 400px;
            height: 300px;
        }

        #git-img{
            width: 600px;
            height: 300px;
        }
    </style>
</head>
<body>
    <h1>Work Page</h1>
    <div id="work-linux">
        <h2>LINUX</h2>
        <img src="/images/linux.jpg" alt="" id="linux-img">
        <p class="work-para">
            Linus Torvalds, a Finnish software engineer, is renowned as the creator of the Linux operating system. The development of Linux began in 1991 when Torvalds, then a student at the University of Helsinki, sought to create a free and open-source alternative to the Unix operating system.
        </p>
        <p class="work-para">
            In the early 1990s, Torvalds was using a Unix-like operating system called Minix, which was designed for educational purposes by Andrew S. Tanenbaum. However, Torvalds found Minix lacking in certain aspects and decided to embark on a personal project to create his own operating system. His motivation was not just to have an operating system for personal use but also to make it freely available to the public, allowing others to contribute to its development. This ethos of collaboration and openness laid the foundation for the Linux project.
        </p>
        <p class="work-para">
            Torvalds initially started working on the kernel, the core component of the operating system that manages system resources and serves as an interface between software and hardware. He used the Intel 80386 processor and wrote the initial version of the kernel in assembly language. Torvalds made the first version of his project public on the Usenet newsgroup comp.os.minix on August 25, 1991, with a modest announcement stating, "I'm doing a (free) operating system (just a hobby, won't be big and professional like gnu)"
        </p>
        <p class="work-para">
            The decision to make Linux open source was crucial to its success. Torvalds adopted the GNU General Public License (GPL), a license developed by the Free Software Foundation, which ensures that the source code of the software is freely available, and anyone can view, modify, and distribute it. This open-source approach attracted a community of developers who began contributing to the project, enhancing its features, fixing bugs, and expanding compatibility with various hardware.
        </p>
        <p class="work-para">
            As the community grew, so did the capabilities of Linux. Torvalds played a pivotal role in guiding the development process, merging code contributions, and maintaining the overall coherence of the project. The collaborative nature of Linux development allowed it to evolve rapidly, and it soon became a robust and reliable operating system.
        </p>
        <p class="work-para">
            The "why" behind Torvalds' decision to develop Linux was rooted in his dissatisfaction with existing operating systems and a desire to create something that could be freely shared and improved upon by a community of like-minded individuals. He was not driven by commercial motives but rather by a passion for programming and a belief in the power of collaborative, open development.
        </p>
        <p class="work-para">
            Over the years, Linux has grown beyond Torvalds' initial expectations. It has become the foundation for a multitude of distributions, powering servers, embedded systems, and even mobile devices (Android is built on a Linux kernel). Linux has also become the preferred choice for many in the software development community and has achieved widespread adoption in enterprise environments.
        </p>
        <p class="work-para">
            In summary, Linus Torvalds developed the Linux operating system as a personal project to address the shortcomings he perceived in existing operating systems like Minix. His decision to make it open source and his commitment to a collaborative development model laid the groundwork for Linux's success. Today, Linux stands as a testament to the power of community-driven, open-source development.
        </p>
    </div>

    <div id="work-git">
        <h2>Git</h2>
        <img src="/images/Git-logo.png" alt="" id="git-img">
        <p class="work-para">
            Git, the distributed version control system that revolutionized the way software developers manage and track changes in their code, was also created by Linus Torvalds. The story of Git's development is a fascinating journey that addresses the challenges Torvalds faced and the innovative solutions he devised to overcome them.
        </p>
        <p class="work-para">
            In 2005, Torvalds found himself in need of a new version control system for managing the source code of the Linux kernel. At the time, the Linux kernel team was using a proprietary version control system called BitKeeper, which was provided to the Linux community for free but later revoked. This decision left Torvalds and other kernel developers without a suitable tool for managing their codebase.
        </p>
        <p class="work-para">
            Faced with this challenge, Torvalds decided to create his own version control system. He aimed to develop a system that would be fast, efficient, and capable of handling the large and complex codebase of the Linux kernel. Torvalds also wanted a distributed system, allowing multiple developers to work on the same project independently and merge their changes seamlessly.
        </p>
        <p class="work-para">
            Git was officially announced by Torvalds in April 2005, and its development was characterized by its simplicity and speed. The design principles of Git emphasized performance and the ability to handle large projects with speed and efficiency. One key innovation was the use of a distributed architecture, where each developer could have a complete copy of the repository, including the entire history of changes. This approach provided developers with the flexibility to work offline and collaborate seamlessly.
        </p>
        <p class="work-para">
            The development of Git also demonstrated Torvalds' pragmatic approach to problem-solving. He focused on creating a tool that addressed the specific needs of the Linux kernel development community but made it general enough to be used for a wide range of projects. This flexibility contributed to Git's widespread adoption beyond the Linux kernel community.
        </p>
        <p class="work-para">
            Similar to Linux, Git was released as an open-source project under the GNU General Public License. This licensing choice ensured that Git would be freely available, and anyone could inspect, modify, and distribute the source code. The open nature of Git encouraged a diverse community of developers to contribute to its development, resulting in a robust and feature-rich version control system.
        </p>
        <p class="work-para">
            Git quickly gained popularity and became the de facto standard for version control in the software development industry. Its success can be attributed not only to its technical merits but also to the collaborative and open-source development model that Torvalds championed.
        </p>
        <p class="work-para">
            In summary, Linus Torvalds created Git in response to the need for a new version control system for the Linux kernel after the discontinuation of BitKeeper. His pragmatic approach, emphasis on performance, and focus on a distributed architecture led to the development of Git. Like Linux, Git's open-source nature and collaborative development model have contributed to its widespread adoption and its status as an essential tool in the software development ecosystem.
        </p>
    </div>

    <div id="work-subsurface">
        <h2>Subsurface</h2>
        <img src="/images/Subsurface.jpg" alt="" id="subsurface-img">
        <p class="work-para">
            Subsurface, a project initiated by Linus Torvalds, is a dive log software application designed to track and manage information about scuba diving. Torvalds, an avid scuba diver himself, felt the existing dive log software options were insufficient for his needs, prompting him to create Subsurface.
        </p>
        <p class="work-para">
            The development of Subsurface began around 2011, driven by Torvalds' desire for a comprehensive and user-friendly tool to log and analyze dive data. He collaborated with other developers to build a platform that catered not only to his personal requirements but also to the broader scuba diving community.
        </p>
        <p class="work-para">
            Subsurface allows divers to log details about their dives, including dive times, depths, and underwater conditions. What sets Subsurface apart is its focus on providing in-depth dive analysis, allowing users to visualize and interpret their dive profiles. The software supports a wide range of dive computers, enabling compatibility with various devices used by the diving community.
        </p>
        <p class="work-para">
            As with Torvalds' other projects, Subsurface follows an open-source model, making its source code freely available for modification and distribution. The collaborative development approach has enabled the software to evolve based on user feedback and contributions from the diving community. In essence, Subsurface reflects Torvalds' commitment to creating tools that address specific needs while fostering collaboration and openness in their development.
        </p>
    </div>
</body>
</html>
@endsection
