@extends('portfolio.layouts.main')
@section('secondaryHeaderDiv')
    @include('portfolio.layouts.secondaryHeaderContainer')
@endsection
@section('navbar')
    @include('portfolio.layouts.navbar')
@endsection
@section('mainBody')
    <div data-spy="scroll" data-taFrget=".navbar" data-offset="40" id="home" style="width: 100%;">
        <!-- <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a> -->
        <div class="container-fluid" style="background-color: whitesmoke;">
            <div id="about" class="row about-section">
                <div class="col-lg-4 about-card">
                    <h3 class="font-weight-light">Who am I ?</h3>
                    <span class="line mb-5"></span>
                    <h5 class="mb-3">Tech-Savvy Problem Solver 🔧| 💻 Web Developer | 🔐 Cybersecurity Professional</h5>
                    <p><b style="font-size: 20px;">Hey, I'm Ozaswei!</b> I’m a multi-skilled tech enthusiast based in
                        Toronto with proven experience across cybersecurity, technical support, and full-stack web
                        development. With hands-on roles securing web systems, developing complex applications, and
                        supporting users through technical challenges, I bring a holistic understanding of digital
                        operations.</p>

                    <p>From designing ATS platforms and payroll systems to conducting penetration tests and managing
                        helpdesk tickets, my skillset bridges the gap between innovation and security. I’m certified in
                        CompTIA Security+ and the Google Cybersecurity Certificate, equipped with the tools and mindset to
                        tackle real-world threats and business needs alike.</p>

                    <p>Let’s collaborate if you're looking for someone who can develop robust systems, secure them, and
                        support users with clarity. 🤝💡</p>

                    <!-- <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</button> -->
                    <a class="btn btn-outline-danger" href="{{ asset('/frontPage/files/resume.pdf') }}" download
                        target="_blank"><i class="icon-down-circled2 "></i>Download My CV</a>
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
                        <div class="col-1 text-danger pt-1"><i class="ti-shield icon-lg"></i></div>
                        <div class="col-10 ml-auto mr-3">
                            <h6>Cybersecurity</h6>
                            <p class="subtitle">Risk assessments, security audits, Metasploit testing, and Python automation
                                for threat detection. Email & network security implementation reducing threats by 40%.</p>
                            <hr>
                        </div>

                        <div class="col-1 text-danger pt-1"><i class="ti-headphone-alt icon-lg"></i></div>
                        <div class="col-10 ml-auto mr-3">
                            <h6>Technical Support</h6>
                            <p class="subtitle">End-user support, system setup, AD management, ticketing tools (JIRA,
                                ServiceNow), and troubleshooting in Windows/Linux environments.</p>
                            <hr>
                        </div>

                        <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                        <div class="col-10 ml-auto mr-3">
                            <h6>Web Development</h6>
                            <p class="subtitle">Developed secure apps using Laravel, PHP, and JavaScript. Built ATS, HR, and
                                Payroll systems used by 100+ organizations. Specialized in backend and full-stack dev.</p>
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
                    <!-- Experience -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card" style="background-color: #2f3542; color: whitesmoke;">
                            <div class="card-header">
                                <div class="mt-2">
                                    <h4>Experience</h4>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="card-body" style="color: whitesmoke;">
                                <h6 class="title text-danger">Nov 2019 - Jan 2023</h6>
                                <P style="padding-bottom: 0; margin-bottom:0; font-weight: bold;color: white;">Cybersecurity
                                    & Web Developer</P>
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
                                    Operations & Incident Response (Physical-Cyber Hybrid)</P>
                                <p style="margin-bottom: 7px;color: white;">Canadian National Exhibition Casino, 1 Ontario
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
                                <P style="padding-bottom: 0; margin-bottom:0; font-weight: bold; color: white;">Customer
                                    Experience & Technical Operations Support (Retail IT exposure)</P>
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
                    <!-- Education -->
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
                    <!-- Skills -->
                    <div class="col-lg-4">
                        <div class="card" style="background-color: #B53471;">
                            <div class="card-header">
                                <div class="pull-left">
                                    <h4 class="mt-2 text-light">Skills</h4>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="card-body pb-2 text-light">

                                <!-- CYBERSECURITY SKILLS -->
                                <h5 class="text-warning mb-3">Cybersecurity</h5>

                                <h6>Risk Assessment & Security Audits</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 90%"></div>
                                </div>

                                <h6>SIEM (Splunk, Elastic)</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                                </div>

                                <h6>Metasploit & Wireshark</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 80%"></div>
                                </div>

                                <h6>Email & Network Security</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 85%"></div>
                                </div>

                                <h6>Python Automation for Security</h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" style="width: 80%"></div>
                                </div>

                                <!-- WEB DEVELOPMENT SKILLS -->
                                <h5 class="text-warning mt-4 mb-3">Web Development</h5>

                                <h6>Laravel</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 90%"></div>
                                </div>

                                <h6>PHP / Python / JavaScript</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 90%"></div>
                                </div>

                                <h6>HTML / CSS / Bootstrap</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 95%"></div>
                                </div>

                                <h6>jQuery / AJAX</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 85%"></div>
                                </div>

                                <h6>MySQL / PostgreSQL</h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" style="width: 90%"></div>
                                </div>

                                <!-- TECHNICAL SUPPORT SKILLS -->
                                <h5 class="text-warning mt-4 mb-3">Technical Support</h5>

                                <h6>Windows / Linux Admin</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 90%"></div>
                                </div>

                                <h6>Active Directory & O365</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 80%"></div>
                                </div>

                                <h6>Ticketing Systems (JIRA, ServiceNow, Zendesk)</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 85%"></div>
                                </div>

                                <h6>VPN / Remote Desktop / Printer Support</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 80%"></div>
                                </div>

                                <h6>Customer-Facing Troubleshooting</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" style="width: 95%"></div>
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
                                        style="width: 95%;background-color: royalblue;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6>Newari</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 90%;background-color: royalblue;" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6>Hindi</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 90%;background-color: royalblue;" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                        <img src="{{ asset('/frontPage/images/comptia-security-ce-certification.png') }}"
                            alt="Comptia Security Plus Badge" width="20%">
                    </a>
                    <a href="https://www.credly.com/badges/226b15a3-aa1d-4d19-8707-e83f76f23915/linked_in_profile"
                        target="_blank">
                        <img src="{{ asset('/frontPage/images/google.png') }}"
                            alt="Google Cybersecurity Professional Badge" width="30%">
                    </a>
                </div>
            </div>
        </section>

        <!-- Projects -->
        <section class="projects-section" id="Projects">
            <div class="bubble-wrapper">
                <canvas id="bubbleCanvas"></canvas>
            </div>
            <div class="container">
                <h1 class="section-title">My <span>Projects</span></h1>
                <div class="project-grid">
                    <!-- Cards (unchanged, omitted for brevity) -->
                    <div class="project-card">
                        <h3>Job Portal with ATS Integration</h3>
                        <p class="tech">Laravel, PHP, JavaScript, MySQL</p>
                        <p class="desc">Developed a job portal used by 100+ companies with resume parsing and secure
                            authentication.</p>
                    </div>
                    <!-- Add remaining cards here -->
                    <div class="project-card">
                        <h3>Payroll Management System</h3>
                        <p class="tech">Laravel, JavaScript, MySQL</p>
                        <p class="desc">Automated salary computation and report generation with validations and audit
                            logging.</p>
                    </div>
                    <div class="project-card">
                        <h3>HR Management System</h3>
                        <p class="tech">Laravel, JavaScript, AJAX, MySQL</p>
                        <p class="desc">Built for employee tracking with access controls, real-time updates, and
                            onboarding tools.</p>
                    </div>
                    <div class="project-card">
                        <h3>Salary Survey System</h3>
                        <p class="tech">Laravel, JavaScript, jQuery</p>
                        <p class="desc">Search system showing salary ranges by job title and country using web scraping
                            logic.</p>
                    </div>
                    <div class="project-card">
                        <h3>Single-Page Website Generator</h3>
                        <p class="tech">HTML, Bootstrap, JavaScript</p>
                        <p class="desc">Web template system for small businesses, SEO optimized and mobile-friendly.</p>
                    </div>
                    <div class="project-card">
                        <h3>Email Security Gateway</h3>
                        <p class="tech">Linux, Email Protocols</p>
                        <p class="desc">Reduced phishing by 40% using email filtering and secure email gateway
                            configuration.</p>
                    </div>
                    <div class="project-card">
                        <h3>Cyber6 Endpoint Security</h3>
                        <p class="tech">Xcitium Platform</p>
                        <p class="desc">Built multi-layered endpoint defense system with scalable deployment for
                            enterprises.</p>
                    </div>
                    <div class="project-card">
                        <h3>IT Support Lab Simulations</h3>
                        <p class="tech">Wireshark, RDP, VPN</p>
                        <p class="desc">Created simulated support environments for hands-on troubleshooting and
                            diagnostics.</p>
                    </div>
                    <div class="project-card">
                        <h3>Personal Portfolio Website</h3>
                        <p class="tech">Laravel, Docker, AWS</p>
                        <p class="desc">Deployed personal portfolio using Docker, SSL, Apache, Cloudflare, and CI/CD
                            pipeline.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" style="padding: 40px 0; background-color: #f9f9f9;">
            <div class="container">
                <div class="masonry" style="column-count: 3; column-gap: 1rem;">
                    @for ($i = 1; $i <= 14; $i++)
                        <div
                            style="break-inside: avoid; margin-bottom: 1rem; overflow: hidden; border-radius: 8px; transition: transform 0.3s ease-in-out;">
                            <img src="/frontPage/images/{{ $i }}.jpg" class="img-fluid w-100"
                                alt="Portfolio image {{ $i }}" style="transition: transform 0.3s ease-in-out;">
                        </div>
                    @endfor
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
                                    <a class="social-link text-dark ml-4" href="https://github.com/ozaswei"
                                        target="_blank">
                                        <i class="fab fa-github" aria-hidden="true" style="font-size: 50px;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animationDiv">
                <img class="walkingMan" src="{{ asset('/frontPage/images/walking.gif') }}">
                <img class="walkingDog" src="{{ asset('/frontPage/images/walkingDog.gif') }}">
                <img class="walkingCat" src="{{ asset('/frontPage/images/walkingCat.gif') }}">
            </div>
        </div>
        <!-- End of contact me  -->
        <!-- For Google Map -->
        <!-- <div id="map" style="height: 400px; width: 100%;"></div> -->
    </div>
@endsection
