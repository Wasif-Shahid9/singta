<?php
$pageTitle = "Singta Resources - Contact";
include 'includes/navbar.php';
?>
<main>

    <!-- Contact Hero Section Start -->
    <section class="contact-banner-section p-relative">
        <div class="contact-banner-bg-thumb" data-background="assets/images/services/services-thumb-15.png"></div>
        <div class="contact-banner-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-9 col-lg-9 mx-auto">
                    <div class="contact-banner-wrapper">
                        <div class="contact-banner-content">
                            <h1 class="contact-banner-title wow fadeInUp text-center" data-wow-delay=".3s"
                                data-wow-duration=".7s">
                                Get in Touch
                            </h1>
                            <div class="contact-banner-descrip wow fadeInUp text-center" data-wow-delay=".5s"
                                data-wow-duration=".9s">
                                <p>Connect with our investor relations and corporate development team</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-banner-accent-line"></div>
    </section>
    <!-- Contact Hero Section End -->

    <!-- Contact Information & Form Section Start -->
    <section class="contact-main-section section-space">
        <div class="container">
            <div class="row g-5">

                <!-- Left Column - Contact Information -->
                <div class="col-xl-5 col-lg-5">
                    <div class="contact-info-wrapper">
                        <!-- Investor Relations -->
                        <div class="contact-info-item mb-50">
                            <div class="contact-info-header">
                                <div class="contact-info-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </div>
                                <h4 class="contact-info-title">Investor Relations</h4>
                            </div>
                            <div class="contact-info-content">
                                <p class="contact-info-label">Email us at:</p>
                                <a href="mailto:info@singtaresources.com" class="contact-info-link">info@singtaresources.com</a>
                            </div>
                        </div>

                        <!-- Corporate Headquarters -->
                        <div class="contact-info-item mb-40">
                            <div class="contact-info-header">
                                <div class="contact-info-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                                <h4 class="contact-info-title">Corporate Headquarters</h4>
                            </div>
                            <div class="contact-info-content">
                                <p class="contact-info-address">
                                    200 West St.<br>
                                    New York, NY 10282<br>
                                    United States
                                </p>
                            </div>
                        </div>

                        <!-- Google Map Embed -->
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.9528194999846!2d-74.01530068459422!3d40.71277997933084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a165bedccab%3A0x2cb2ddf003b5ae01!2s200%20West%20St%2C%20New%20York%2C%20NY%2010282%2C%20USA!5e0!3m2!1sen!2s!4v1644499676144!5m2!1sen!2s"
                                width="100%" height="280" class="contact-map-iframe" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="col-xl-7 col-lg-7">
                    <div class="contact-form-wrapper">
                        <h3 class="contact-form-title">Send us a Message</h3>
                        <p class="contact-form-subtitle">Fill out the form below and our team will get back to you within 24 hours.</p>

                        <form id="contact-form" action="assets/mailer.php" method="POST">
                            <div class="row g-4">
                                <!-- Full Name -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Full Name <span class="form-required">*</span></label>
                                        <input type="text" id="name" name="name" required placeholder="Enter your full name" class="form-input">
                                    </div>
                                </div>

                                <!-- Email Address -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email Address <span class="form-required">*</span></label>
                                        <input type="email" id="email" name="email" required placeholder="your.email@example.com" class="form-input">
                                    </div>
                                </div>

                                <!-- Phone Number -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000" class="form-input">
                                    </div>
                                </div>

                                <!-- Company/Organization -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Company/Organization</label>
                                        <input type="text" id="company" name="company" placeholder="Your company name" class="form-input">
                                    </div>
                                </div>

                                <!-- Inquiry Type -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Inquiry Type <span class="form-required">*</span></label>
                                        <select id="inquiry_type" name="inquiry_type" required class="form-select">
                                            <option value="">Select inquiry type</option>
                                            <option value="investor_relations">Investor Relations</option>
                                            <option value="partnership">Partnership Opportunity</option>
                                            <option value="media">Media Inquiry</option>
                                            <option value="general">General Inquiry</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Message <span class="form-required">*</span></label>
                                        <textarea id="message" name="message" required rows="5" placeholder="Tell us more about your inquiry..." class="form-textarea"></textarea>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-md-12">
                                    <button type="submit" class="rs-btn contact-submit-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                        <div id="form-messages" class="form-messages"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Information & Form Section End -->


</main>
<!-- Body main wrapper end -->

<div class="rs-footer-bg-thumb-wrapper has-theme-orange">
    <div class="rs-footer-bg-thumb" data-background="assets/images/bg/footer-bg-02.png"></div>




    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/footerlinks.php'; ?>