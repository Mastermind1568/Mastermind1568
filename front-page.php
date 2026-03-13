<?php
/**
 * Template Name: Homepage
 * The front page template
 *
 * @package Asabis
 */

get_header();
?>

<!-- ============ HERO SECTION ============ -->
<section class="hero" role="banner">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-award"></i>
                    Trusted Accounting Professionals
                </div>
                <h1>
                    Your Trusted Partner in <span>Accounting</span> &amp; Financial Excellence
                </h1>
                <p class="hero-text">
                    At Asabis, we pride ourselves in providing hands-on training to individuals seeking to enhance their skills and competence, thus improving their employability and to business owners who wish to take control of their day to day operations with quality. Our staff is also equipped to take over all your Bookkeeping, Accounting, and Tax compliance needs so that you can concentrate on what you do best.
                </p>
                <div class="hero-buttons">
                    <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="btn btn-secondary btn-lg">
                        Our Services <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-outline btn-lg">
                        Contact Us
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Clients Served</span>
                    </div>
                    <div class="hero-stat">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="hero-stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Client Focused</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-cards">
                    <div class="hero-card hero-card-1">
                        <div class="hero-card-icon blue">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h4>Hands-On Training</h4>
                        <p>Practical bookkeeping &amp; accounting skills for career advancement</p>
                    </div>
                    <div class="hero-card hero-card-2">
                        <div class="hero-card-icon gold">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h4>Tax &amp; Compliance</h4>
                        <p>Professional tax filing and full compliance services</p>
                    </div>
                    <div class="hero-card hero-card-3">
                        <div class="hero-card-icon green">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Business Advisory</h4>
                        <p>Customized solutions for business growth and financial recovery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ SERVICES SECTION ============ -->
<section class="services section-padding" id="services">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-label">What We Do</span>
            <h2>Our Core Services</h2>
            <p>We deliver comprehensive accounting solutions tailored to individuals and businesses across Canada.</p>
        </div>

        <div class="services-grid">
            <div class="service-card fade-up">
                <div class="service-icon icon-blue">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Bookkeeping / Accounting Training</h3>
                <p>We are all about solving the employee/employer dilemma. Employees are always motivated when they know exactly how to perform the tasks assigned to them, or to take on more challenging tasks.</p>
                <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="service-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="service-card fade-up">
                <div class="service-icon icon-gold">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h3>Bookkeeping / Accounting / Tax Services</h3>
                <p>We employ a highly experienced and qualified staff to look after your bookkeeping, Accounting, payroll and Tax needs whether you are an individual, a small or a mid-sized business, we will like to hear from you.</p>
                <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="service-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="service-card fade-up">
                <div class="service-icon icon-navy">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Advisory Services</h3>
                <p>We value your input because we understand that every business is unique. At Asabis Consulting Services, we specialize in crafting tailor-made solutions designed to meet your specific goals.</p>
                <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="service-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============ OFFERINGS SECTION ============ -->
<section class="offerings section-padding">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-label">Comprehensive Solutions</span>
            <h2>Everything You Need to Succeed</h2>
            <p>Focus on what you do best while we handle the rest.</p>
        </div>

        <div class="offerings-grid">
            <div class="offerings-block fade-up">
                <h3>Accounting Services</h3>
                <p class="offerings-subtitle">Empower Your Business with Our Comprehensive Accounting Service</p>
                <ul class="offerings-list">
                    <li><i class="fas fa-check-circle"></i> Payroll Services</li>
                    <li><i class="fas fa-check-circle"></i> Bookkeeping Services</li>
                    <li><i class="fas fa-check-circle"></i> Tax Filing Services</li>
                    <li><i class="fas fa-check-circle"></i> Consulting Services</li>
                </ul>
            </div>

            <div class="offerings-block fade-up">
                <h3>Training Programs</h3>
                <p class="offerings-subtitle">Elevate Your Skills with Our Professional Training Programs</p>
                <ul class="offerings-list">
                    <li><i class="fas fa-check-circle"></i> Hands-on Training in Bookkeeping &amp; Full Cycle Accounting</li>
                    <li><i class="fas fa-check-circle"></i> Job Readiness Training</li>
                    <li><i class="fas fa-check-circle"></i> Training for Business Owners</li>
                    <li><i class="fas fa-check-circle"></i> Practical Training in Excel and PowerPoint</li>
                    <li><i class="fas fa-check-circle"></i> Sage 50 Accounting Training (All Modules)</li>
                    <li><i class="fas fa-check-circle"></i> Sage Payroll Training</li>
                    <li><i class="fas fa-check-circle"></i> Caseware Essentials Training (Entry Level)</li>
                    <li><i class="fas fa-check-circle"></i> Practical Training Using Specialized Software Applications</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ ABOUT / PROMISE SECTION ============ -->
<section class="about-section section-padding" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-content fade-up">
                <span class="section-label">Our Promise</span>
                <h2>Innovation &amp; Quality Every Step of the Way</h2>
                <p>Whether you need a business plan, financial reconstruction (corporate recovery), or if you want to embark on a plan to grow your business (business growth). At Asabis, we employ innovation and quality every step of the way.</p>
                <p>If you are looking for help to harmonize your existing/international Accounting skills with the Canadian procedures, then you are at the right place.</p>

                <div class="about-features">
                    <div class="about-feature">
                        <div class="about-feature-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div>
                            <h4>Tailored Solutions</h4>
                            <p>Custom approaches for every unique business</p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="about-feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h4>Expert Team</h4>
                            <p>Experienced professionals dedicated to your success</p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="about-feature-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div>
                            <h4>Modern Technology</h4>
                            <p>Advanced tools and virtual training options</p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="about-feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div>
                            <h4>Client Focused</h4>
                            <p>Your goals are our top priority</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-visual fade-up">
                <div class="about-stat-card">
                    <div class="stat-icon"><i class="fas fa-graduation-cap"></i></div>
                    <div>
                        <h4>Professional Training</h4>
                        <p>Hands-on guided mentoring with real-world applications</p>
                    </div>
                </div>
                <div class="about-stat-card">
                    <div class="stat-icon"><i class="fas fa-briefcase"></i></div>
                    <div>
                        <h4>Career Advancement</h4>
                        <p>Helping individuals secure roles at top companies</p>
                    </div>
                </div>
                <div class="about-stat-card">
                    <div class="stat-icon"><i class="fas fa-shield-alt"></i></div>
                    <div>
                        <h4>Full Compliance</h4>
                        <p>Ensuring your financials meet all Canadian requirements</p>
                    </div>
                </div>
                <div class="about-stat-card">
                    <div class="stat-icon"><i class="fas fa-globe-americas"></i></div>
                    <div>
                        <h4>International Skills</h4>
                        <p>Harmonize global accounting skills with Canadian procedures</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ TESTIMONIALS SECTION ============ -->
<section class="testimonials section-padding" id="testimonials">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-label">Client Stories</span>
            <h2>What Our Clients Say</h2>
            <p>Real stories from real people whose lives and careers we've helped transform.</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card fade-up">
                <div class="testimonial-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="testimonial-quote-icon">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="testimonial-text">I came to Canada from Sweden with a Master's degree in Finance with no work experience ever. Emmanuel put me through some hands-on guided training/mentoring and I had my first job ever in Iqaluit making a six figure salary. This was just a miracle to me.</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">TG</div>
                    <div class="testimonial-author-info">
                        <h4>Therese G.</h4>
                        <span>Training Client</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card fade-up">
                <div class="testimonial-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="testimonial-quote-icon">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="testimonial-text">After arriving in Canada in June 2022 with an international accounting degree and limited English proficiency, I enhanced my language skills at MacEwan University. Emmanuel from Asabis Consulting Services provided training in Canadian accounting practices and assisted in refining my resume and interview techniques. Within two months of completing this training, I secured my current role as an Accounts Payable Coordinator at General Motors.</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">RN</div>
                    <div class="testimonial-author-info">
                        <h4>Rosy N.</h4>
                        <span>Accounts Payable Coordinator, General Motors</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card fade-up">
                <div class="testimonial-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="testimonial-quote-icon">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="testimonial-text">I was late in filing my personal taxes for two years (2022 and 2023). When I came across Emmanuel on the last filing date April 30, he helped me file it and I got the best return ever.</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">M</div>
                    <div class="testimonial-author-info">
                        <h4>Marinoel</h4>
                        <span>Tax Filing Client</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ CTA SECTION ============ -->
<section class="cta-section">
    <div class="container">
        <h2 class="fade-up">Ready to Take the Next Step?</h2>
        <p class="fade-up">Whether you need professional accounting services or hands-on training to advance your career, we're here to help you succeed.</p>
        <div class="cta-buttons fade-up">
            <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-secondary btn-lg">
                Get Started Today <i class="fas fa-arrow-right"></i>
            </a>
            <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="btn btn-outline btn-lg">
                View Our Services
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
