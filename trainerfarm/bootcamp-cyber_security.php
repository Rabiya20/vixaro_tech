<?php include('includes/header.php'); ?>
<style>
    .img img{
    height: 100% !important;
    width: 100% !important;
    border-radius: 0% !important;
    }
    .payment-list{
        padding: 20px !important;
    }
    .payment-list li{
        list-style: none !important;
        color: #fff !important;
    }
    .payment-list h2{
        color: var(--white-primary) !important;
    }
    .payment-list p, #how_to_enroll h2, #how_to_enroll a,
    #weekly_activities h4{
        color: var(--orange-primary) !important;
    }
    @media screen and (max-width: 767px) {
        .img img{
            height: 200px !important;
            width: 100% !important;
            border-radius: 0% !important;
        }
    }
    #how_to_enroll h2{
        border-bottom: 2px solid var(--blue-primary);
        width: 50%;
    }
</style>
<br><br><br><br>
    <div class="page-content">

        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/bootcamps/cyber-cover.jpg);">
            <div class="container mt-5">
                <div class="row align-items-center">
                    <div class="col-md-8 col-sm-12">
                        <div class="text-light">
                            <br><br>
                            <h3 class="text-light">ONLINE / PART-TIME</h3>
                            <br>
                            <h1 class="text-light">Cybersecurity Bootcamp Online Part-Time</h1>
                            <br>
                            <a href="apply.php" target="_blank" class="btn radius-xl btn_hvr">Enroll Today</a>
                            <br><br>
                            <ul style="padding-left: 10px;">
                                <li><span>Part-Time</span> | <span>24 Weeks</span> | <span>25 hours/wk</span></li>
                                <li>Online Attendance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-3">
                        <img src="assets/images/bootcamps/cyber-cover.jpg" style="border-radius: 20px;" alt="" data-toggle="modal" data-target="#video_modal" data-video-link="" width="500" height="400" >
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="next-program-div">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h3>NEXT PROGRAM DATES</h3>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <h5>17<sup>th</sup> July 2023</h5>
                        <a href="apply.php" target="_blank" rel="noopener noreferrer">Apply Now</a>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <h5>21<sup>st</sup> August 2023</h5>
                        <a href="apply.php" target="_blank" rel="noopener noreferrer">Apply Now</a>
                    </div><div class="col-md-4 col-sm-6">
                        <h5>18<sup>th</sup> September 2023</h5>
                        <a href="apply.php" target="_blank" rel="noopener noreferrer">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>

        <section id="overview" class="mb-5">
            <div class="container">
                <span class="section_title">OVERVIEW</span>
                <h3 class="text-primary">Cybersecurity is an In-Demand field</h3>
                <p>At TrainerFarm, we offer a Cyber security certification program that can equip you with the skills needed to identify, assess, report, and mitigate technology and information security risks. Our program prepares you to tackle the challenges of this field and makes you a valuable asset to potential employers.</p>
                <p>According to the U.S. Bureau of Labor Statistics, employment in cyber security and information security is predicted to grow by 351% between 2021 and 2029*. This demonstrates the high demand for skilled professionals in this field and highlights the job security that comes with a cyber-security certification.</p>
                <p>Enrolling in a cyber-security boot camp is an opportune time to start your journey towards a secure and rewarding career. Contact TrainerFarm today to learn more about our Cyber security certification program and how it can benefit you.</p>
                <p class="disclaimer">*Bureau of Labor Statistics, U.S. Department of Labor, Occupational Outlook Handbook, Information Security Analysts, at <a href="https://www.bls.gov/ooh/computer-and-information-technology/information-security-analysts.htm" target="_blank">https://www.bls.gov/ooh/computer-and-information-technology/information-security-analysts.htm</a> (visited February 7, 2023). This data represents national figures and is not based on school-specific information. Conditions in your area may vary.</p>
                <div class="row" style="background-image: url('assets/images/bootcamps/cyber-cover.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="col-4">
                    </div>
                    <div class="col-8" style="background-color: var(--blue-primary);">
                        <div class="section-list">
                            <ul>
                                <li>Gain hands-on experience with a host of popular tools such as Wireshark, Kali Linux, Metasploit, and more within a sandbox environment.</li>
                                <li>Learn skills applicable to certifications such as the CompTIA Security+, CySA+ , Network+, Linux+, Server+, Cloud+, and certified Ethical Hacker (CEH).</li>
                                <li>Benefit from a comprehensive set of career services to help equip you for success as you work to change career paths or advance in your current position.</li>
                                <li>Cover the latest real-world deployment of cybersecurity management practices, including defensive and offensive tactics, NIST Cybersecurity Framework, and event &amp; incident management.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="explore_bootcamp" class="mb-5">
            <div class="container">
                <span class="section_title">EXPLORE BOOTCAMP</span>
                <h3 class="text-primary">Questions? Get Answers</h3>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-3">
                                <img src="https://static.vecteezy.com/system/resources/previews/014/441/078/original/phone-call-icon-design-in-blue-circle-png.png" alt="">
                            </div>
                            <div class="col-9">
                                <h3>Contact Admission Consultant</h3>
                                <p>1-on-1 call for quick answers about bootcamp</p>
                                <a href="#" class="btn explore" data-toggle="modal" data-target="#schedule_modal"><b>Schedule The Call</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="why_us" class="mb-5">
            <div class="container">
                <span class="section_title">WHY US?</span>
                <h3 class="text-primary">The TrainerFarm Difference</h3>
                <p>By completing TrainerFarm's Cybersecurity program, you'll stand out from other bootcamp graduates and be mission-ready for a challenging and rewarding career path from day one.</p>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h5 style="color: var(--blue-primary);">Gain a tactical advantage by preparing for the CySA+ certification exam.</h5>
                        <p>Cybersecurity is a highly standardized field with a range of skills certifications. CompTIA Security+ is the bootcamp standard, but we take you further - adding material to help you prepare for the CySA+ certification.</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h5 style="color: var(--blue-primary);">No professional experience requirements</h5>
                        <p>Unlike other bootcamps that require work experience in IT or related field or a 4-year degree, we recognize that many Cyber professionals are self-taught.</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h5 style="color: var(--blue-primary);">Extensive hands-on training</h5>
                        <p>Our Cybersecurity bootcamp features extensive offensive and defensive experience within our sandbox. Near the end of course, up to 75% of your time is spent in labs, attacking and defending against each other in Capture the Flag and other exercises. Graduates are mission-ready with an informed perspective on cybersecurity and be ready to hit the ground running.</p>
                    </div>
                </div>
                <p class="disclaimer">*TrainerFarm cannot guarantee that graduates of this program will be eligible to take third party certification examinations. Certification requirements for taking and passing these exams are controlled by outside entities and are subject to change without notice to TrainerFarm.</p></div><div class="carousel-item"><span>No professional experience requirements</span></div>
        </section>

        <section id="curriculum" class="mb-5">
            <div class="container">
                <span class="section_title">CURRICULUM</span>
                <h3 class="text-primary">Curriculum Overview</h3>
                <p>Our Cyber security program equips students with essential skills necessary for identifying, assessing, reporting, and mitigating technology and information security risks, enabling them to study and prepare for certifications like CompTIA Security+ and CySA+. This comprehensive program focuses on providing information, strategies, and tactics to manage information system vulnerabilities, create effective defenses and preventative measures, and deploy countermeasures against attackers, empowering students to take a professional-grade approach to cyber security.</p>
                <div class="container">
                    <div class="tabs">
                        <div class="tabby-tab">
                            <input type="radio" id="tab-1" name="tabby-tabs" checked>
                            <label for="tab-1">PRECOURSE: (Weeks -2-0)</label>
                            <div class="tabby-content">
                                <p>The recourse will include information on the program's schedule, expected technology stack, certification process, and graduation requirements. Additionally, you will be introduced to fundamental cyber security resources and will be required to complete reading and assignments aimed at familiarizing you with the framework and foundations of cyber security. Lastly, you will set up your virtual machine (VM) to get started.</p>
                            </div>
                        </div>

                        <div class="tabby-tab">
                            <input type="radio" id="tab-2" name="tabby-tabs">
                            <label for="tab-2">TRACK 1: CORE (Weeks 1-8)</label>
                            <div class="tabby-content">
                                <p>The Core track focuses on building a strong foundation in various areas of cyber security. This track encompasses both hardware and software components, teaching you how to configure multiple operating systems, comprehend network architecture, and identify vulnerabilities and risks using basic principles.</p>
                                <p><b>What you'll learn:</b><br>
                                The fundamentals of cyber security cover various topics, such as controls, frameworks, benchmarks, virtual machines, threats, vulnerabilities, defenses, secure software, testing, and cryptography. As you learn about networking and data security, you can also build a Kali Linux machine, explore network configurations, firewall setup, and access control. Additionally, you can delve into viruses and ransom ware, intrusion detection, useful tools, introduction to embedded (control) systems, secure shell, mobile and endpoint security, virtual machines, malicious code, disaster recovery, and PowerShell. Incident identification and response, as well as technical and legal aspects of forensics, are also covered. By understanding resiliency, automation, and backups, you can gain essential and fundamental protection skills. Lastly, this learning experience will provide you with insight into what a career in cyber security looks like.</p>
                            </div>
                        </div>

                        <div class="tabby-tab">
                            <input type="radio" id="tab-3" name="tabby-tabs">
                            <label for="tab-3">Track 2: INTERMEDIATE (Weeks 9-16)</label>
                            <div class="tabby-content">
                                <p>Upon finishing this track, individuals will have the ability to showcase fundamental security competencies essential for setting up and adjusting systems to safeguard applications, networks, and devices. They will also possess the skills to conduct threat analysis and respond with appropriate mitigation techniques, take part in risk mitigation activities, and operate with an understanding of pertinent policies and regulations, which can be demonstrated to potential employers.</p>
                                <p><b>What you'll learn:</b><br>
                                You'll gain knowledge about security controls, attack tools, threats, indicators of compromise, and roles and responsibilities. Monitor networks, analyze various services for any signs of compromise, run scripts, use SIEM (Security Information and Event Management), and protect networks. Learn about forensic tools and techniques, understand detection and containment, examine indicators of compromise, collect digital evidence, and explore attacker lateral movement and pivoting. Develop intermediate incident response skills and effective recovery techniques. Understand how to conduct risk analysis and vulnerability assessment, and comprehend cyber security regulations. Learn about technical and non-technical controls, security and privacy relationships, and configuring and analyzing share permissions. Finally, explore cloud technologies and learn how to secure your cloud-based solutions with OWASP.</p>
                            </div>
                        </div>

                        <div class="tabby-tab">
                            <input type="radio" id="tab-4" name="tabby-tabs">
                            <label for="tab-4">Track 3: PROFESSIONAL (Weeks 17-24)</label>
                            <div class="tabby-content">
                                <p>By the end of the program, students will have the skills to configure and implement threat intelligence, perform vulnerability assessments and mitigation, analyze data for continuous security monitoring, investigate possible indicators of compromise, utilize incident response protocols to mitigate risks, and conduct fundamental threat hunting. The program culminates with a second belt exam, and students will receive vouchers for the CompTIA Security+ and CySA+ exams.</p>
                                <p><b>What you'll learn:</b> <br>
                                In this track, you will acquire knowledge about ethical hacking, which includes penetration testing using tools such as Metasploitable2 and Eternal Blue. You will gain an understanding of the inner workings of search engines, WHOIS, DNS, nmap, dirbuster, gobuster, nikto, social engineering, specialized scanners, and SNB enumeration. Additionally, you will learn about proactive threat hunting and how to perform Local File Inclusion and Remote File Inclusion, SQL injection techniques and defenses, and how to hack and test mobile devices. You will also learn about countermeasures and how to create a buffer overflow attack, as well as how to enhance your knowledge of malware by using advanced techniques and tools. Finally, you will learn how to elevate privilege to fully exploit platforms, monitor the network, or access other systems during an attack, as well as how to use various sources for exploits, including password attacks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="weekly_activities" class="mb-5">
            <div class="container" class="mb-5">
                <span class="section_title">TYPICAL WEEK</span>
                <h3 class="text-primary">Our Part-Time Format</h3>
                <div class="owl-carousel owl-1 mb-3">

                    <div class="media-29101 d-md-flex w-100" id="second_tab">
                        <div class="img">
                            <img src="assets/images/banner/banner1.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h4>Beginning the Program</h4>
                            <ul>
                                <li>Meet your Mentor</li>
                                <li>Set your Career Goals</li>
                                <li>Start a Target List</li>
                            </ul>
                        </div>
                    </div>

                    <div class="media-29101 d-md-flex w-100" id="first_tab">
                        <div class="img">
                            <img src="assets/images/banner/bg1.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h4>During the Program</h4>
                            <ul>
                                <li>Build your Brand</li>
                                <li>One on One Mentorship</li>
                                <li>Resume Development</li>
                                <li>Networking Strategy</li>
                            </ul>
                        </div>
                    </div>

                    <div class="media-29101 d-md-flex w-100" id="third_tab">
                        <div class="img">
                            <img src="assets/images/banner/banner2.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h4>Ending the Program</h4>
                            <ul>
                                <li>Job Search Strategy</li>
                                <li>Alumni Network Access</li>
                                <li>Mock Interview Practice</li>
                                <li>Contract Negotiation</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="media-29101 d-md-flex w-100" id="fourth_tab">
                        <div class="img">
                            <img src="assets/images/banner/banner3.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h4>After the Program</h4>
                            <ul>
                                <li>Lifetime Community Support</li>
                                <li>Mentor Check Ins</li>
                                <li>Salary Negotiation</li>
                                <li>Contract Negotiation</li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        <section id="what_are_you_waiting_for" class="mb-5 pt-5 pb-5"  style="padding:20px; text-align: center; background-image: url('https://images.pexels.com/photos/238118/pexels-photo-238118.jpeg?cs=srgb&dl=pexels-j%C3%A9shoots-238118.jpg&fm=jpg'); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
            <div class="container">
                <h1 class="text-primary">What are you waiting for?</h1>
                <p>Let's get started.</p>
                <div style="background-color: var(--blue-primary); color:var(--white-primary); border-radius: 20px; padding: 20px;">
                    <p>Part-Time Remote Cybersecurity Bootcamp <span>(24 Weeks)</span></p>
                    <a href="apply.php" class="btn btn-primary" target="_blank">Enroll Now</a>
                </div>
            </div>
        </section>

        <section id="payment" class="mb-4">
            <div class="container">
                <span class="section_title">CAREER</span>
                <h3 class="text-primary">Career after this Bootcamp</h3>
                <div class="row" style="background-image: url('assets/images/bootcamps/cyber-cover.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="col-8" style="background-color: var(--blue-primary);">
                        <div class="payment-list">
                            <ul>
                                <li>
                                    <h2>Data Security Analyst</h2>
                                    <p>$114k-$160k per annum</p>
                                </li>
                                <hr>
                                <li>
                                    <h2>Systems Security Administrator</h2>
                                    <p>$106k-$150k per annum</p>
                                </li>
                                <hr>
                                <li>
                                    <h2>Network Security Administrator</h2>
                                    <p>$103k-$147k per annum</p>
                                </li>
                                <hr>
                                <li>
                                    <h2>Network Security Engineer</h2>
                                    <p>$110k-$153k per annum</p>
                                </li>
                                <hr>
                                <li>
                                    <h2>Information Systems Security Manager</h2>
                                    <p>$130k-$182k per annum</p>
                                </li>
                                <hr>
                                <li>
                                    <h2>Chief Security Officer</h2>
                                    <p>$140k-$223k per annum</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </section>

        <section id="apply">
            <div class="container text-center">
                <a href="apply.php" class="btn btn-primary">Ernoll Now</a>
            </div>
        </section>
    </div>
<br>
 <!-- Modal -->
    <div class="modal fade schedule_modal" id="schedule_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <br><br><br>
        <div class="modal-dialog" role="document">
            <div class="container" style="padding: 30px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Schedule a Call</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="search" method="post" class="mb-3">
                            <input name="fullname" class="form-control" placeholder="First name" type="text"><br>
                            <input name="phone" class="form-control" placeholder="Phone Number" type="tel"><br>
                            <input name="email" class="form-control" placeholder="Email" type="email"><br>
                            <br>
                            <button type="submit" class="btn btn-block btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js2/jquery-3.3.1.min.js"></script>
<script src="js2/popper.min.js"></script>
<script src="js2/bootstrap.min.js"></script>
<script src="js2/owl.carousel.min.js"></script>
<script src="js2/main.js"></script>
<?php include('includes/footer.php'); ?>