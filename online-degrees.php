<?php include ('header.php'); ?>

    <section class="course-banner">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Online Degrees</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="course-info">
                        <h1>Online Degree Programs at SAGE</h1> 
                        <p class="tagline">Learn. Succeed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-form">
                        <h3 class="form-title">Get Started Today</h3>
                        <form id="enquiryForm">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Full Name *" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email Address *" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Phone Number *" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" required>
                                    <option value="">Program Type *</option>
                                    <option value="online" selected>Online Degree</option>
                                    <option value="internship">Degree with Internship</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-submit w-100">Submit Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sticky-menu d-none">
        <div class="container-fluid">
            <div class="menu-scroll">
                <a href="#overview" class="menu-btn">Overview</a>
                <a href="#highlights" class="menu-btn">Highlights</a>
                <a href="#course-structure" class="menu-btn">Course Structure</a>
                <a href="#fee-structure" class="menu-btn">Fee Structure</a>
                <a href="#why-choose" class="menu-btn">Why Choose</a>
                <a href="#admission-process" class="menu-btn">Admission Process</a>
                <a href="#career-opportunity" class="menu-btn">Career Opportunity</a>
            </div>
        </div>
    </div>

    <section id="overview" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-title mb-4 d-none"><span class="title-highlight">Learn.</span> Succeed</h2>
                    <p style="font-size: 16px; line-height: 1.8; text-align: justify;">Pursue recognized degrees through
                        modern online education. With expertly designed content, accessible learning tools, and flexible
                        scheduling, our online programs fit seamlessly into your lifestyle without sacrificing academic
                        quality or career potential.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="eligibility-card">
                        <h3>Features:</h3>
                        <ul>
                            <li><b>Digital learning material</b> created by experts</li>
                            <li><b>24/7 online portal</b> with complete materials</li>
                            <li><b>Affordable fees</b> with easy EMI options</li>
                            <li><b>Faculty</b> guidance and support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="classic-service-section section">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="text-div">
                        <h2>Online = <br> Campus Degree</h2>
                        <p>UGC regulations confirm online degrees from recognized universities equal traditional degrees
                            in every respect: employment, further education, and professional opportunities.</p>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="main-div">
                        <div class="img-div">
                            <img src="public/Certificate-11.png" alt="Online Degree Certificate">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="programs-section py-5" id="online-degrees" style="background: var(--light-bg);">
        <div class="container">
            <h2 class="section-title text-center mb-5"><span class="title-highlight">Online</span> Degrees</h2>
            <div class="position-relative">
                <div id="onlineCarousel" class="carousel slide program-carousel" data-bs-ride="carousel"
                    data-bs-interval="4000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6">
                                    <div class="program-card">
                                        <div class="program-image">
                                            <img src="images.pexels.com/photos/1181675/pexels-photo-1181675e7fe.jpg?auto=compress&amp;cs=tinysrgb&amp;w=600"
                                                alt="BCA Honours">
                                        </div>
                                        <div class="program-content">
                                            <h3>BCA Honours</h3>
                                            <div class="program-buttons">
                                                <a href="bca-honours.php" class="btn btn-outline-primary">View
                                                    Details</a>
                                                <a href="#apply" class="btn btn-primary-custom">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-none d-md-block">
                                    <div class="program-card">
                                        <div class="program-image">
                                            <img src="images.pexels.com/photos/1181244/pexels-photo-1181244e7fe.jpg?auto=compress&amp;cs=tinysrgb&amp;w=600"
                                                alt="MCA">
                                        </div>
                                        <div class="program-content">
                                            <h3>MCA</h3>
                                            <div class="program-buttons">
                                                <a href="mca.php" class="btn btn-outline-primary">View Details</a>
                                                <a href="#apply" class="btn btn-primary-custom">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-none d-lg-block">
                                    <div class="program-card">
                                        <div class="program-image">
                                            <img src="images.pexels.com/photos/3184291/pexels-photo-3184291e7fe.jpg?auto=compress&amp;cs=tinysrgb&amp;w=600"
                                                alt="MBA">
                                        </div>
                                        <div class="program-content">
                                            <h3>MBA</h3>
                                            <div class="program-buttons">
                                                <a href="mba.php" class="btn btn-outline-primary">View Details</a>
                                                <a href="#apply" class="btn btn-primary-custom">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6">
                                    <div class="program-card">
                                        <div class="program-image">
                                            <img src="images.pexels.com/photos/6694543/pexels-photo-6694543e7fe.jpg?auto=compress&amp;cs=tinysrgb&amp;w=600"
                                                alt="MBA Banking & Finance">
                                        </div>
                                        <div class="program-content">
                                            <h3>MBA Banking & Finance</h3>
                                            <div class="program-buttons">
                                                <a href="mba-banking.php" class="btn btn-outline-primary">View
                                                    Details</a>
                                                <a href="#apply" class="btn btn-primary-custom">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-none d-md-block">
                                    <div class="program-card">
                                        <div class="program-image">
                                            <img src="images.pexels.com/photos/6289065/pexels-photo-6289065e7fe.jpg?auto=compress&amp;cs=tinysrgb&amp;w=600"
                                                alt="M.Com">
                                        </div>
                                        <div class="program-content">
                                            <h3>M.Com</h3>
                                            <div class="program-buttons">
                                                <a href="mcom.php" class="btn btn-outline-primary">View Details</a>
                                                <a href="#apply" class="btn btn-primary-custom">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-none d-lg-block">
                                    <div class="program-card">
                                        <div class="program-image">
                                            <img src="images.pexels.com/photos/3184357/pexels-photo-3184357e7fe.jpg?auto=compress&amp;cs=tinysrgb&amp;w=600"
                                                alt="MA Journalism">
                                        </div>
                                        <div class="program-content">
                                            <h3>MA in Journalism and Mass Communication</h3>
                                            <div class="program-buttons">
                                                <a href="ma-journalism-and-mass-communication.php"
                                                    class="btn btn-outline-primary">View Details</a>
                                                <a href="#apply" class="btn btn-primary-custom">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6">
                                    <div class="program-card">
                                        <div class="program-image">
                                            <img src="images.pexels.com/photos/3825517/pexels-photo-3825517e7fe.jpg?auto=compress&amp;cs=tinysrgb&amp;w=600"
                                                alt="M.Sc Maths">
                                        </div>
                                        <div class="program-content">
                                            <h3>M.Sc in Mathematics</h3>
                                            <div class="program-buttons">
                                                <a href="msc-mathematics.php" class="btn btn-outline-primary">View
                                                    Details</a>
                                                <a href="#apply" class="btn btn-primary-custom">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#onlineCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#onlineCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5"><span class="title-highlight">Frequently Asked</span> Questions
            </h2>

            <div class="accordion" id="faqAccordion">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Q1. What online programs are available?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. Seven programs: BCA (Hons.), MCA, MBA, MBA in Banking & Finance, M.Com, MA in Journalism
                            and Mass Communication, and M.Sc in Mathematics.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            Q2. Is SAGE's online education legitimate?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. Yes. SAGE has UGC recognition, NAAC A+ accreditation, and AICTE approval. Degrees have
                            complete validity.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            Q3. Who fits these programs best?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. Working professionals, entrepreneurs, homemakers, anyone needing flexible education that
                            adapts to their schedule.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4">
                            Q4. How does admission work?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. The steps are as follows: Apply online → Upload documents → University review → Pay fees
                            → Start learning.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq5">
                            Q5. What teaching methods do you use?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. Digital study materials, video lectures, live faculty sessions, online LMS access and
                            regular academic support.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq6">
                            Q6. How are exams conducted?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. Exams are conducted through secure online proctored examination systems as per UGC
                            regulations.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq7">
                            Q7. Can I advance my career with an online degree?
                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. Definitely. SAGE's UGC-recognized online degrees qualify for higher education,
                            competitive tests, and all employment sectors.
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>

   
<?php include ('footer.php'); ?>