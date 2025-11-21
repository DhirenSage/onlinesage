<?php include ('header.php'); ?>

    <section class="course-banner">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="online-degrees.php">Online Degrees</a></li>
                    <li class="breadcrumb-item active" aria-current="page">BCA Honours</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="course-info">
                        <h1>Bachelor of Computer Application (Hons.)</h1>
                        <div class="course-meta">
                            <div class="meta-item">
                                <i class="fas fa-clock"></i>
                                <span><strong>Duration:</strong> 4 Years (8 Semesters including Honours)</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-laptop"></i>
                                <span><strong>Mode:</strong> Online Learning</span>
                            </div>
                        </div>
                        <a href="#" class="btn-download">
                            <i class="fas fa-download me-2"></i>Download Brochure
                        </a>
                        <ul class="course-highlights">
                            <li>Solid grounding in programming and software fundamentals</li>
                            <li>Emerging tech coverage: AI, Machine Learning, Data Science</li>
                            <li>Current industry-aligned content</li>
                            <li>Flexible online delivery with recorded and live sessions</li>
                        </ul>
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

    <div class="sticky-menu">
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
                <div class="col-lg-8">
                    <h2 class="section-title mb-4"><span class="title-highlight">Program</span> Overview</h2>
                    <p style="font-size: 16px; line-height: 1.8; text-align: justify;">The online BCA (Hons.) program at
                        SAGE builds solid foundations in computing, programming, application development, and research
                        practices. Delivered completely online, this program gives learners the freedom to balance
                        education with work and personal commitments while developing technical mastery.</p>
                </div>
                <div class="col-lg-4">
                    <div class="eligibility-card">
                        <h3>Eligibility</h3>
                        <ul>
                            <li>10+2 or equivalent from a recognized board</li>
                            <li>Minimum 50% aggregate marks</li>
                            <li>Mathematics as a subject in 10+2</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="highlights" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5"><span class="title-highlight">Program</span> Highlights</h2>
            <div class="highlight-grid">
                <div class="highlight-item">
                    <i class="fas fa-code"></i>
                    <h4>Solid grounding in programming and software fundamentals</h4>
                </div>
                <div class="highlight-item">
                    <i class="fas fa-brain"></i>
                    <h4>Emerging tech coverage: AI, Machine Learning, Data Science</h4>
                </div>
                <div class="highlight-item">
                    <i class="fas fa-industry"></i>
                    <h4>Current industry-aligned content</h4>
                </div>
                <div class="highlight-item">
                    <i class="fas fa-video"></i>
                    <h4>Flexible online delivery with recorded and live sessions</h4>
                </div>
                <div class="highlight-item">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>Specialized electives in advanced domains</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="course-structure" class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4"><span class="title-highlight">Course</span> Structure</h2>
            <div class="curriculum-wrapper">

                <div class="accordion-grid">
                    <!-- LEFT COLUMN : 4 ACCORDIONS -->
                    <div class="accordion-column">
                        <!-- Semester I -->
                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester I</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th class="d-none">Subjec</th>
                                                <th>Subject Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none">CAPMCNPC101T</td>
                                                <td>Programming in C</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNPC101P</td>
                                                <td>Programming in C Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNDC102T</td>
                                                <td>Digital Logic and Computer Fundamentals</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMINFW103T</td>
                                                <td>Fundamentals of Web Development</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMINFW103P</td>
                                                <td>Fundamentals of Web Development Lab</td>
                                            </tr>
                                            <tr>
                                                <td>MD I</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">TRNSENPD105T</td>
                                                <td>Professional Development – I (T)</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">TRNSENPD105P</td>
                                                <td>Professional Development – I (P)</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">AECAENEL106T</td>
                                                <td>English Language</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">VACVCNIK107N</td>
                                                <td>Introduction to Indian Knowledge System</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Semester II -->
                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester II</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th class="d-none">Subjec</th>
                                                <th>Subject Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none">CAPMCNCN201T</td>
                                                <td>Computer Networks</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNDS202T</td>
                                                <td>Data Structures using C</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNDS202P</td>
                                                <td>Data Structures using C Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNOS203T</td>
                                                <td>Operating System</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNOS203P</td>
                                                <td>Operating System Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">SCIMDSTT204T</td>
                                                <td>OOPs with Java</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">TRNSENWS205T</td>
                                                <td>OOPs with Java Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">AECAENEL206T</td>
                                                <td>Professional Development – II</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">VACVCNIK207N</td>
                                                <td>Universal Human Values & Professional Ethics</td>
                                            </tr>
                                            <tr>
                                                <td>Micro Project Work</td>
                                            </tr>
                                            <tr>
                                                <td>Health, Yoga and Meditation</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Semester III -->
                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester III</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th class="d-none">Subjec</th>
                                                <th>Subject Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none">CAPMCNDM301T</td>
                                                <td>Database Management Systems</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNDM301P</td>
                                                <td>Database Management Systems Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNAD302T</td>
                                                <td>Analysis and Design of Algorithms</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNJP303T</td>
                                                <td>Analysis and Design of Algorithms Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNJP303P</td>
                                                <td>Refer Table 1</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">SCIMDLIN304T</td>
                                                <td>Refer Table 1 </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">SCIMDCF305T</td>
                                                <td>Refer Table 2</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPDPCBP306N</td>
                                                <td>Refer Table 2 </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">VACVCNIK307N</td>
                                                <td>MD II</td>
                                            </tr>
                                            <tr>
                                                <td>Professional Development – III</td>
                                            </tr>
                                            <tr>
                                                <td>Financial Literacy</td>
                                            </tr>
                                            <tr>
                                                <td>Environmental Studies & Disaster Management</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester III - Specialization</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th rowspan="3">Specialization</th>
                                                <th>Table - 1</th>
                                                <th>Table - 2</th>
                                            </tr>
                                            <tr>
                                                <td>Subject Name</td>
                                                <td>Subject Name</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Process Automation and Artificial Intelligence</td>
                                                <td>Digital Electronics</td>
                                                <td>Fundamentals of Artificial Intelligence</td>
                                            </tr>
                                            <tr>
                                                <td>Data Science</td>
                                                <td>Mathematics for Data Science</td>
                                                <td>Data Wrangling Techniques</td>
                                            </tr>
                                            <tr>
                                                <td>Cloud Technology and Information Security</td>
                                                <td>Cloud Computing</td>
                                                <td>Fundamentals of Information Security</td>
                                            </tr>
                                            <tr>
                                                <td>Full Stack Developer</td>
                                                <td>Advance Java Script</td>
                                                <td>UI/UX DESIGN</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4">Full Stack Development</td>
                                            </tr>
                                            <tr>
                                                <td>Backend Development with Node.js</td>
                                                <td>Git & Version Control</td>
                                            </tr>
                                            <tr>
                                                <td>Frontend Frameworks with React</td>
                                                <td>DevOps and CI/CD Basics</td>
                                            </tr>
                                            <tr>
                                                <td>RESTful API Design & Development</td>
                                                <td>Introduction to Web Hosting</td>
                                            </tr>
                                            <tr>
                                                <td>AI/ML</td>
                                                <td>Introduction to Machine Learning with Scikit-learn & Pandas</td>
                                                <td>Deep Learning with TensorFlow & Keras</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Semester IV -->
                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester IV</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th class="d-none">Subjec</th>
                                                <th>Subject Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none">CAPMCNDS401T</td>
                                                <td>Software Engineering</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNDS401P</td>
                                                <td>Computer Architecture and Organization</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNSP402T</td>
                                                <td>Advance Java Script</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNNP403T</td>
                                                <td>Advance Java Script Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNNP403P</td>
                                                <td>Refer Table 3</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNPR404T</td>
                                                <td>Refer Table 3 </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNPR404P</td>
                                                <td>Refer Table 4</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">SCIMDLCE405T</td>
                                                <td>Refer Table 4 </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">VACVCNIK406N</td>
                                                <td>Professional Development – IV</td>
                                            </tr>
                                            <tr>
                                                <td>Digital and Technological Solutions</td>
                                            </tr>
                                            <tr>
                                                <td>Micro Project</td>
                                            </tr>
                                            <tr>
                                                <td>Community Development</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester IV - Specialization</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th rowspan="3">Specialization</th>
                                                <th>Table - 3</th>
                                                <th>Table - 4</th>
                                            </tr>
                                            <tr>
                                                <td>Subject Name</td>
                                                <td>Subject Name</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Process Automation and Artificial Intelligence</td>
                                                <td>Robotics and Process Automation</td>
                                                <td>Introduction of Machine Learning</td>
                                            </tr>
                                            <tr>
                                                <td>Data Science</td>
                                                <td>Numerical Methods and Optimization Techniques</td>
                                                <td>Fundametlas of Machine Learning</td>
                                            </tr>
                                            <tr>
                                                <td>Cloud Technology and Information Security</td>
                                                <td>Principles of Virtualization</td>
                                                <td>Cryptography and Network Security</td>
                                            </tr>
                                            <tr>
                                                <td>Full Stack Developer</td>
                                                <td>Front End Development</td>
                                                <td>DevOps</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4">Full Stack Development</td>
                                            </tr>
                                            <tr>
                                                <td>Express.js & MongoDB</td>
                                                <td>Cloud Deployment with Heroku & Vercel</td>
                                            </tr>
                                            <tr>
                                                <td>TypeScript for Web Development</td>
                                                <td>Docker for Developers</td>
                                            </tr>
                                            <tr>
                                                <td>Responsive UI with Tailwind</td>
                                                <td>GitHub Collaboration</td>
                                            </tr>
                                            <tr>
                                                <td>Data Engg.</td>
                                                <td>Big Data & Spark (PySpark-based pipelines)</td>
                                                <td>Data Warehousing & ETL with Apache Airflow</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT COLUMN : 5 ACCORDIONS -->
                    <div class="accordion-column">
                        <!-- Semester V -->
                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester V</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th class="d-none">Subjec</th>
                                                <th>Subject Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none">CAPMCNIN501T</td>
                                                <td>Agile Trechnology</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNIN501P</td>
                                                <td>Data Visualiazation Techniques</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNML502T</td>
                                                <td>Data Visualiazation Techniques Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNML502P</td>
                                                <td>Machine Learning Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNBD503T</td>
                                                <td>Refer Table 5</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNBD503P</td>
                                                <td>Refer Table 5 </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNIP504T</td>
                                                <td>Refer Table 6</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNIP504P</td>
                                                <td>Refer Table 6</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPDPCBP505N</td>
                                                <td>MD III</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">VACVCNIK506N</td>
                                                <td>Professional Skills Development I</td>
                                            </tr>
                                            <tr>
                                                <td>Summer Internship</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester V - Specialization</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th rowspan="3">Specialization</th>
                                                <th>Table - 5</th>
                                                <th>Table - 6</th>
                                            </tr>
                                            <tr>
                                                <td>Subject Name</td>
                                                <td>Subject Name</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Process Automation and Artificial Intelligence</td>
                                                <td>Fundamentals of Computer Vision</td>
                                                <td>Model Validation Techniques</td>
                                            </tr>
                                            <tr>
                                                <td>Data Science</td>
                                                <td>Data Warehouse and Business Intelligence</td>
                                                <td>NoSQL Data Base</td>
                                            </tr>
                                            <tr>
                                                <td>Cloud Technology and Information Security</td>
                                                <td>Fundamentals of Storage and Datacenter</td>
                                                <td>Ethical Hacking</td>
                                            </tr>
                                            <tr>
                                                <td>Full Stack Developer</td>
                                                <td>"Back End Development</td>
                                                <td>Introduction to data Science</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4">Full Stack Development</td>
                                            </tr>
                                            <tr>
                                                <td>Firebase Authentication & Firestore</td>
                                                <td>Automated Testing (Jest/Cypress)</td>
                                            </tr>
                                            <tr>
                                                <td>Redux & State Management</td>
                                                <td>WebSockets & Real-time Apps</td>
                                            </tr>
                                            <tr>
                                                <td>PostgreSQL & Prisma ORM</td>
                                                <td>Secure Coding & OWASP</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile Dev</td>
                                                <td>Flutter for Cross-Platform Mobile App Development</td>
                                                <td>React Native: Cross-Platform Mobile Apps</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Semester VI -->
                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester VI</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th class="d-none">Subjec</th>
                                                <th>Subject Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none">CAPMCNCC601T</td>
                                                <td>Refer Table 7</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNCC601P</td>
                                                <td>Refer Table 7</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNBL602T</td>
                                                <td>Refer Table 8</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNBL602P</td>
                                                <td>Refer Table 8</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNAI603T</td>
                                                <td>Refer Table 9</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNAI603P</td>
                                                <td>Refer Table 9 Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPDPNMP607N</td>
                                                <td>Professional Skills Development II</td>
                                            </tr>
                                            <tr>
                                                <td>Major Projcet</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester VI - Specialization</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th rowspan="3">Specialization</th>
                                                <th>Table - 7</th>
                                                <th>Table - 8</th>
                                                <th>Table - 9</th>
                                            </tr>
                                            <tr>
                                                <td>Subject Name</td>
                                                <td>Subject Name</td>
                                                <td>Subject Name</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Process Automation and Artificial Intelligence</td>
                                                <td>Predictive Analytics</td>
                                                <td>Introduction to Natural Language Processing</td>
                                                <td>Internet of Things for Mechatronics</td>
                                            </tr>
                                            <tr>
                                                <td>Data Science</td>
                                                <td>Big Data Technologies</td>
                                                <td>Natural Language Processing</td>
                                                <td>Exploratory Data Analysis</td>
                                            </tr>
                                            <tr>
                                                <td>Cloud Technology and Information Security</td>
                                                <td>Cloud Web Services</td>
                                                <td>Security and Risk Management</td>
                                                <td>Secure Coding</td>
                                            </tr>
                                            <tr>
                                                <td>Full Stack Developer</td>
                                                <td>Cloud Essentials</td>
                                                <td>Cyber Forensics</td>
                                                <td>Applied Modern Technologies</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4">Full Stack Development</td>
                                            </tr>
                                            <tr>
                                                <td>Microservices with Node.js & Docker</td>
                                                <td>CI/CD with Jenkins & GitHub Actions</td>
                                                <td>API Rate Limiting & Throttling</td>
                                            </tr>
                                            <tr>
                                                <td>Serverless Backend on AWS Lambda</td>
                                                <td>Kubernetes Essentials</td>
                                                <td>Load Testing with JMeter</td>
                                            </tr>
                                            <tr>
                                                <td>GraphQL with Apollo & Express</td>
                                                <td>Logging & Monitoring (ELK/Grafana)</td>
                                                <td>NGINX as Reverse Proxy</td>
                                            </tr>
                                            <tr>
                                                <td>Blockchain</td>
                                                <td>Smart Contract Development with Solidity</td>
                                                <td>DApp Integration with Web3.js & MetaMask</td>
                                                <td>Blockchain Architecture & Consensus Mechanisms</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Semester VII -->
                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester VII</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th class="d-none">Subjec</th>
                                                <th>Subject Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none">CAPMCNAW701T</td>
                                                <td>Advanced Web Technologies</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNAW701P</td>
                                                <td>Advanced Web Technologies Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNGG702T</td>
                                                <td>Git and Git hub</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNGG702P</td>
                                                <td>Git and Git hub Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNRM703T</td>
                                                <td>Research Methodology</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMCNRM703T</td>
                                                <td>Research Methodology Lab</td>
                                            </tr>
                                            <tr>
                                                <td>Data Analysis using R</td>
                                            </tr>
                                            <tr>
                                                <td>Data Analysis using R Lab</td>
                                            </tr>
                                            <tr>
                                                <td>Table-11</td>
                                            </tr>
                                            <tr>
                                                <td>Table-11 Lab</td>
                                            </tr>
                                            <tr>
                                                <td>Refer Table-10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester VII - Specialization</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th rowspan="3">Specialization</th>
                                                <th>Table - 10</th>
                                                <th>Table - 11</th> 
                                            </tr>
                                            <tr>
                                                <td>Subject Name</td>
                                                <td>Subject Name</td> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Process Automation and Artificial Intelligence</td>
                                                <td>Cyber-Physical Systems</td>
                                                <td>Introduction to Deep Learning</td> 
                                            </tr>
                                            <tr>
                                                <td>Data Science</td>
                                                <td>Time Series Analysis and Forcasing</td>
                                                <td>Fundamntals of Deep Learning</td>
                                            </tr>
                                            <tr>
                                                <td>Cloud Technology and Information Security</td>
                                                <td>Cyber Forensic and Investagation</td>
                                                <td>Cloud Application Deployment</td>
                                            </tr>
                                            <tr>
                                                <td>Full Stack Developer</td>
                                                <td>Cloud Architecture, Services and Storage</td>
                                                <td>Introduction Deep Learning</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4">Full Stack Development</td>
                                            </tr>
                                            <tr>
                                                <td>Full Stack App Security & JWT</td>
                                                <td>System Design & Architecture</td>
                                            </tr>
                                            <tr>
                                                <td>Performance Optimization in Web Apps</td>
                                                <td>DevOps with Terraform & AWS</td>
                                            </tr>
                                            <tr>
                                                <td>Real-Time Communication using Socket.IO</td>
                                                <td>CI/CD Enterprise Practices</td>
                                            </tr>
                                            <tr>
                                                <td>Cybersecurity</td>
                                                <td>Ethical Hacking & Penetration Testing</td>
                                                <td>WebXR + Unity Fundamentals</td>
                                            </tr>
                                            <tr>
                                                <td>AR/VR</td>
                                                <td></td>
                                                <td>WebXR + Unity Fundamentals</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Semester VIII (Regular) -->
                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester VIII (Research)</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th class="d-none">Subjec</th>
                                                <th>Subject Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none">CAPMINTB801T</td>
                                                <td>Table-12</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMINTB801P</td>
                                                <td>Table-12 Lab</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPDPNRP802N</td>
                                                <td>Research Project Phase</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester VIII (Research) - Specialization</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Specialization</th>
                                                <th>Table - 12</th> 
                                            </tr>
                                            <tr>
                                                <td>Subject Name</td> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Process Automation and Artificial Intelligence</td>
                                                <td>Explainable AI (EX-AI)</td> 
                                            </tr>
                                            <tr>
                                                <td>Data Science</td>
                                                <td>Enterprise Big Data Lake</td>
                                            </tr>
                                            <tr>
                                                <td>Cloud Technology and Information Security</td>
                                                <td>DevSecOps</td>
                                            </tr>
                                            <tr>
                                                <td>Full Stack Developer</td>
                                                <td>Internet of Things</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4">Full Stack Development</td>
                                            </tr>
                                            <tr>
                                                <td>Scalable Database Design</td>
                                            </tr>
                                            <tr>
                                                <td>Advanced GraphQL & Federation</td>
                                            </tr>
                                            <tr>
                                                <td>Observability in Production</td>
                                            </tr>
                                            <tr>
                                                <td>AR/VR</td>
                                                <td>3D Interaction Design with A-Frame & Blender</td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Semester VIII (Honours / Extra) -->
                        <div class="accordion-item-csr">
                            <button class="accordion-header-csr">
                                <span class="accordion-title">Semester VIII (Honours)</span>
                                <span class="accordion-icon">+</span>
                            </button>
                            <div class="accordion-body-csr">
                                <div class="table-responsive">
                                    <table class="subject-table">
                                        <thead>
                                            <tr>
                                                <th class="d-none">Subjec</th>
                                                <th>Subject Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none">CAPMENBD801T</td>
                                                <td>Enterprise Big Data Lake</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMENSM802T</td>
                                                <td>Sampling Methods</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMENCV803T</td>
                                                <td>Computer Vision</td>
                                            </tr>
                                            <tr>
                                                <td class="d-none">CAPMINAI804T</td>
                                                <td>Generative AI and its Applications</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fee-structure" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-4"><span class="title-highlight">Fee</span> Structure</h2>
            <p class="text-center text-muted">Contact our admissions team for detailed fee structure and payment plans
            </p>
        </div>
    </section>

    <section id="why-choose" class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4"><span class="title-highlight">Why</span> Choose Us</h2>
            <p class="text-center text-muted">Excellence in education, flexibility in learning, and career advancement
                opportunities</p>
        </div>
    </section>

    <section id="admission-process" class="admission-process">
        <div class="container">
            <h2 class="section-title text-center mb-4"><span class="title-highlight">Admission</span> Process</h2>
            <div class="process-container">
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-edit"></i>
                        <div class="step-number">1</div>
                    </div>
                    <h4>Apply Online</h4>
                </div>
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-file-alt"></i>
                        <div class="step-number">2</div>
                    </div>
                    <h4>Submit Documents</h4>
                </div>
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-search"></i>
                        <div class="step-number">3</div>
                    </div>
                    <h4>Application Review</h4>
                </div>
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-credit-card"></i>
                        <div class="step-number">4</div>
                    </div>
                    <h4>Fee Payment</h4>
                </div>
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-graduation-cap"></i>
                        <div class="step-number">5</div>
                    </div>
                    <h4>Start Learning</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="career-opportunity" class="career-section">
        <div class="container">
            <h2 class="section-title">Career Opportunities</h2>
            <div class="career-grid">
                <div class="career-card">
                    <i class="fas fa-code"></i>
                    <h3>Software Developer</h3>
                </div>
                <div class="career-card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Web Developer</h3>
                </div>
                <div class="career-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>App Developer</h3>
                </div>
                <div class="career-card">
                    <i class="fas fa-database"></i>
                    <h3>Database Administrator</h3>
                </div>
                <div class="career-card">
                    <i class="fas fa-project-diagram"></i>
                    <h3>Systems Analyst</h3>
                </div>
                <div class="career-card">
                    <i class="fas fa-user-tie"></i>
                    <h3>IT Consultant</h3>
                </div>
                <div class="career-card">
                    <i class="fas fa-flask"></i>
                    <h3>Research Associate</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="advisor-section">
        <div class="container">
            <div class="advisor-content">
                <div class="advisor-image">
                    <img src="images.pexels.com/photos/5428836/pexels-photo-5428836a1a8.jpg?auto=compress&amp;cs=tinysrgb&amp;w=800"
                        alt="Academic Advisor">
                </div>
                <div class="advisor-text">
                    <h2>Connect with Our Academic Advisor</h2>
                    <p>Have questions about admissions or program details? Our counsellors provide accurate information
                        and personalized guidance to help you make informed decisions about your education and career.
                    </p>
                    <a href="#apply" class="btn-enquire">Enquire Now</a>
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
                            Q1. What's unique about this online BCA course (Honours with Research)?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. This program combines core computing with research methodology, enabling students to
                            develop both
                            technical skills and research capabilities.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            Q2. Is this valid for postgraduate studies?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. Yes. SAGE University Online BCA Honours is UGC-recognized and accepted for MCA, M.Sc
                            programs, and
                            other advanced studies.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            Q3. Can working people pursue this?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. Absolutely. Online delivery is designed for working professionals and others needing
                            scheduling
                            flexibility.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4">
                            Q4. What are some BCA course details & BCA subjects?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. Programming in C, Digital Logic and Computer Fundamentals, Computer Networks, Data
                            Structures using C,
                            OOPs with Java, Database Management Systems, Advanced JavaScript, Computer Architecture and
                            Organization,
                            Data Visualization Techniques, and more.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq5">
                            Q5. Which programming languages are taught?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A. C, C++, Java, Python, web technologies, database systems, and more.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php include ('footer.php'); ?>