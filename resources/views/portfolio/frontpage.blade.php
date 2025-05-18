@extends('portfolio.layouts.main')
@section('header')
@endsection
@section('mainBody')
<div data-spy="scroll" data-taFrget=".navbar" data-offset="40" id="home" style="width: 100%;">
    <!-- <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a> -->
    <div class="container-fluid" style="background-color: whitesmoke;">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Who am I ?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3"> 🔐 Cyber Security Specialist and Web Developer Located In Our Lovely Earth 🚀</h5>
                <p><b style="font-size: 20px;">Hi there!</b> I’m Ozaswei Bahadur Tamrakar, a dedicated cybersecurity and web development professional from
                    Toronto, Canada, with over six years of experience. 🛡️💻 Certified in Google Cybersecurity and
                    CompTIA Security+, I excel in creating secure digital spaces, conducting rigorous risk assessments,
                    and implementing strategic security measures that fortify systems against cyber threats. 🔍🔐</p>

                <p>In the realm of web development, I have spearheaded projects that developed critical applications
                    like Applicant Tracking Systems and Payroll Systems, significantly streamlining business operations
                    and boosting efficiencies. 🌍🚀 My career highlights include dramatically reducing phishing
                    incidents by 40% and cutting system downtime by 15% through innovative security solutions and
                    advanced email security strategies. 📉📬</p>

                <p>Committed to lifelong learning and professional growth, I actively participate in industry conferences and workshops to keep abreast of the latest technological advances. </p>
                <p>📚🌱 If you're keen on enhancing your organization's cybersecurity measures or pushing the envelope in web development, let’s connect and make impactful strides together! 🤝🔗🚀</p>
                <!-- <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</button> -->
                <a class="btn btn-outline-danger" href="{{asset('/frontPage/files/resume.pdf')}}" download target="_blank"><i
                        class="icon-down-circled2 "></i>Download My CV</a>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Birthdate</span> : 03/08/1995</li>
                    <li><span>Email</span> : ozaswei@gmail.com</li>
                    <li><span>Phone</span> : +1 (647) 894-9673</li>
                </ul>
                <div>
                    <a class="social-link text-dark"
                        href="https://www.linkedin.com/in/ozaswei-bahadur-tamrakar-11a60a168/" target="_blank">
                        <i class="fab fa-linkedin text-primary" aria-hidden="true" style="font-size: 30px;"></i>
                    </a>
                    <a class="social-link text-dark ml-2" href="https://github.com/ozaswei" target="_blank">
                        <i class="fab fa-github text-primary" aria-hidden="true" style="font-size: 30px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Web Development</h6>
                        <p class="subtitle"> Worked as a front-end and back-end developer using PHP, Python and Laravel
                            Framework in the backend and
                            JavaScript, jQuery, Bootstrap, CSS, and HTML in frontend.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-shield icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Security Guard</h6>
                        <p class="subtitle">Patrolling the exhibition grounds to ensure guests, exhibitors, and staff
                            safety and security.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-shopping-cart icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Cashier Assistant</h6>
                        <p class="subtitle">Enhance customer experience by efficiently assisting cashiers, resulting in
                            increased transaction speed and reduced wait times.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Resume Section-->
    <section class="section myresume" id="resume">
        <div class="container">
            <h2 class="mb-5" style="color: white;"><span class="text-danger">My</span> Resume</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card" style="background-color: #2f3542; color: whitesmoke;">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4>Expertise</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body" style="color: whitesmoke;">

                            <h6 class="title text-danger">Nov 2019 - Jan 2023</h6>
                            <P style="padding-bottom: 0; margin-bottom:0; font-weight: bold;color: white;">Web Developer
                            </P>
                            <p style="margin-bottom: 7px;color: white;">Talent Connects, Lalitpur, Nepal</p>
                            <ul style="padding-left: 10px;">
                                <li>Designed and secured web applications, ensuring compliance with cybersecurity best
                                    practices.</li>
                                <li>Improved email security through anti-phishing and anti-spam measures, reducing
                                    phishing incidents by 40%.</li>
                                <li>Conducted security audits, identifying vulnerabilities and implementing measures
                                    that reduced system downtime by 15%.</li>
                                <li>Created a Job portal website using Laravel Framework with Applicant Tracking System
                                    features for Job posting, hiring,
                                    and managing job seekers through the Jobseeker Pipelining System which 100+
                                    companies use.</li>
                                <li>Designed a Salary Survey and Leave Management System using JavaScript and jQuery
                                    that calculates the average
                                    salary of Jobs and their highest and lowest salary.</li>
                                <li>Designed and developed a Payroll Calculation System using Laravel and JavaScript for
                                    employees according to their
                                    leave and attendance data which can be downloaded as a report in Excel or CSV
                                    format.</li>
                            </ul>
                            <hr>
                            <h6 class="title text-danger">Jun 2023 - Sept 2023</h6>
                            <P style="padding-bottom: 0; margin-bottom:0; font-weight: bold;color: white;">Security
                                Guard</P>
                            <p style="margin-bottom: 7px;color: white;">Canadian National Exhibition (CNE), 1 Ontario
                                Drive, Toronto,
                                Canada</p>
                            <ul style="padding-left: 10px;">
                                <li>Patrolling the exhibition grounds to ensure guests, exhibitors, and staff safety and
                                    security.</li>
                                <li>Enforcing security regulations and responding to security incidents as needed.</li>
                                <li>Collaborating with other security personnel and liaising with CNE management.</li>
                                <li>Ensured the safety of guests and staff by enforcing security protocols and
                                    conducting regular patrols, resulting in a 98% incident-free event.</li>
                            </ul>
                            <hr>
                            <h6 class="title text-danger">Jul 2023 - Present</h6>
                            <P style="padding-bottom: 0; margin-bottom:0; font-weight: bold; color: white;">Cashier
                                Assistant</P>
                            <p style="margin-bottom: 7px;color: white;">Costco, 100 Billy Bishop Way, Toronto, Canada
                            </p>
                            <ul style="padding-left: 10px;">
                                <li>Enhanced customer satisfaction by streamlining cashier operations, leading to a 20%
                                    reduction in checkout times.</li>
                                <li>Contribute to loss prevention efforts by maintaining vigilance during checkout
                                    processes and throughout the store.</li>
                                <li>Participated in inventory bin tagging to maintain accurate stock records and assist
                                    in efficient restocking processes, enhancing inventory management.</li>
                                <li>Demonstrate product knowledge to help customers make informed purchasing decisions,
                                    potentially increasing basket size.</li>
                                <li>Promoted membership sales, contributing to a 15% increase in new sign-ups.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card" style="background-color: #40407a; color: whitesmoke;">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4>Education</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2023 - 2024</h6>
                            <P style="font-weight: bold;color: whitesmoke;">Ontario College Graduate Certificate in
                                Cyber Security</P>
                            <P class="subtitle" style="margin-bottom: 0;color: whitesmoke;">Loyalist College</P>
                            <p style="color: whitesmoke;">Toronto, Canada</p>
                            <hr>
                            <h6 class="title text-danger">2013 - 2017</h6>
                            <P style="font-weight: bold;color: whitesmoke;">B.E in Computer Engineering</P>
                            <P class="subtitle" style="margin-bottom: 0;color: whitesmoke;">Kathmandu Engineering
                                College</P>
                            <p style="color: whitesmoke;">Kathmandu, Nepal</p>
                            <hr>
                            <h6 class="title text-danger">2011 - 2013</h6>
                            <P style="font-weight: bold;color: whitesmoke;">High School</P>
                            <P class="subtitle" style="margin-bottom: 0;color: whitesmoke;">D.A.V. College</P>
                            <p style="color: whitesmoke;">Lalitpur, Nepal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="background-color: #B53471;">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2 text-light">Skills</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2 text-light">
                            <h6>Linux</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Laravel</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>PHP</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Python</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>JQuery</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <h6>JavaScript</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <h6>SQL</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>GitHub</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Bootstrap</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>FileZilla</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Html5 &amp; CSS</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 97%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Language Card-->
                    <div class="card" style="background-color: #1e3799;">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2 text-light">Languages</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2 text-light">
                            <h6>English</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 95%; background-color: royalblue;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Nepali</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 95%;background-color: royalblue;" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <h6>Newari</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 90%;background-color: royalblue;" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <h6>Hindi</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 90%;background-color: royalblue;" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end of Language Card-->
                </div>
            </div>
        </div>
    </section>

    <!-- Certificates -->
    <section class="section" style="background-color: #273c75;">
        <div class="container">
            <h1 class="mb-5 text-light text-center"><span class="text-danger">My</span> Certifications</h1>
            <div class="text-center">
                <a href="https://www.credly.com/earner/earned/badge/5223bfe5-e043-4da1-a083-056f3f748bd5"
                    target="_blank" class="mr-5">
                    <img src="{{asset('/frontPage/images/comptia-security-ce-certification.png')}}" alt="Comptia Security Plus Badge"
                        width="20%">
                </a>
                <a href="https://www.credly.com/badges/226b15a3-aa1d-4d19-8707-e83f76f23915/linked_in_profile"
                    target="_blank">
                    <img src="{{asset('/frontPage/images/google.png')}}" alt="Google Cybersecurity Professional Badge" width="30%">
                </a>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section class="section" id="Projects" style="background-color: whitesmoke;">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Projects</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-header project1">
                        Cyber6
                    </div>
                    <div class="card-body">
                        Cyber6's Endpoint Security and Monitoring System, built on Xcitium's open-source platform,
                        represents a
                        cutting-edge solution in the rapidly evolving landscape of cybersecurity. Our system is
                        meticulously
                        designed to provide comprehensive protection against a wide spectrum of cyber threats, from
                        common
                        malware to sophisticated zero-day attacks. By leveraging advanced technologies and adhering to
                        best
                        practices in cybersecurity, we offer a robust, scalable, and user-friendly solution that
                        addresses the complex
                        challenges faced by modern organizations. At the core of our system is a multi-layered security
                        approach
                        that integrates several key features.
                        <p class="mt-2"><a href="https://cyber6ix.github.io/" target="_blank">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset('/frontPage/images/cyber6.jpg')}}" alt="cyber6">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <!-- <h1 class="mb-5 text-light"><span class="text-danger">My</span> Portfolio</h1> -->
            <div class="portfolio">
                <!-- <div class="filters">
                    <a href="#" data-filter=".new" class="active">
                        New
                    </a>
                    <a href="#" data-filter=".advertising">
                        Advertising
                    </a>
                    <a href="#" data-filter=".branding">
                        Branding
                    </a>
                    <a href="#" data-filter=".web">
                        Web
                    </a>
                </div> -->
                <div class="portfolio-container">
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/images/1.jpg')}}" class="img-fluid" alt="1">
                            <!-- <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>    -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/images/2.jpg')}}" class="img-fluid" alt="2">
                            <!-- <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>  -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/images/3.jpg')}}" class="img-fluid" alt="3">
                            <!-- <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>     -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/assets/imgs/web-4.jpg')}}" class="img-fluid" alt="4">
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('/frontPage/assets/imgs/web-4.jpg')}}"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 advertising">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/assets/imgs/advertising-1.jpg')}}" class="img-fluid" alt="6">
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('/frontPage/assets/imgs/advertising-1.jpg')}}"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/images/5.jpg')}}" class="img-fluid" alt="5">
                            <!-- <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/images/4.png')}}" class="img-fluid" alt="4">
                            <!-- <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/images/8.jpg')}}" class="img-fluid" alt="8">
                            <!-- <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> -->
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/images/6.jpg')}}" class="img-fluid" alt="6">
                            <!-- <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>  -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/assets/imgs/branding-2.jpg')}}" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('/frontPage/assets/imgs/branding-2.jpg')}}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/images/7.jpg')}}" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <!-- <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="{{asset('/frontPage/assets/imgs/branding-4.jpg')}}" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('/frontPage/assets/imgs/branding-4.jpg')}}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="{{asset('frontPage/assets/imgs/branding-5.jpg')}}" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{url('/frontPage/assets/imgs/branding-5.jpg')}}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of portfolio section -->

    <!-- contact me -->
    <div class="section contact getintouch pb-0" id="contact">
        <div class="container">
            <div class="card" style="background-color: transparent; box-shadow: none; border: none; opacity: 0.9;">
                <div class="card-body">
                    <div class="get-in-touch-container">
                        <h2>Get in Touch</h2>
                        <p>Connect with me to explore opportunities, share ideas, or discuss how we can collaborate!
                        </p>
                        <div class="contact-methods">
                            <div class="contact-item">
                                <i class="fas fa-envelope text-danger"></i>
                                <span>ozaswei@gmail.com</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>+1 (647) 894-9673</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt text-success"></i>
                                <span>Toronto, Canada</span>
                            </div>
                            <div style="text-align: center; width: 100%;">
                                <a class="social-link text-dark"
                                    href="https://www.linkedin.com/in/ozaswei-bahadur-tamrakar-11a60a168/"
                                    target="_blank">
                                    <i class="fab fa-linkedin" aria-hidden="true"
                                        style="font-size: 50px; color: royalblue;"></i>
                                </a>
                                <a class="social-link text-dark ml-4" href="https://github.com/ozaswei" target="_blank">
                                    <i class="fab fa-github" aria-hidden="true" style="font-size: 50px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animationDiv">
            <img class="walkingMan" src="{{asset('/frontPage/images/walking.gif')}}">
            <img class="walkingDog" src="{{asset('/frontPage/images/walkingDog.gif')}}">
            <img class="walkingCat" src="{{asset('/frontPage/images/walkingCat.gif')}}">
        </div>
    </div>
    <!-- End of contact me  -->
</div>
@endsection
@section('footer')
@endsection