<footer class="rel z-1 mt-100">
    <div class="container">
        <div class="footer-newsletter text-white"
            style="padding: 40px 60px;
        border-radius: 15px;
        margin-bottom: -195px;
        background: #0096d8;
        position: relative; z-index: 5'">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="logo-part aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="logo mb-10">
                            <a href="{{ route('homePage') }}"><img width="100px" src="https://i.ibb.co/BNBTVN4/logo.png"
                                    alt="Logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="form-part aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5>Subscribe Our Newsletter</h5>
                        <form class="newsletter-form mt-15" action="#">
                            <input type="email" placeholder="Email Address" required="">
                            <button type="submit">Sign Up <i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: black; padding-top: 10rem">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-widget widget-about aos-init" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h6 class="footer-title text-white">About Company</h6>
                        <p class="text-muted">Connect with us and stay updated on the latest news, offers, and updates.
                        </p>
                        <div class="social-style-one">
                            <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 order-xl-2">
                    <div class="footer-widget widget-contact aos-init" data-aos="fade-up" data-aos-delay="400"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h6 class="footer-title text-white">Contact</h6>
                        <ul>
                            <li><i class="fa fa-map-marker-alt"></i> 55 Main Street, 2nd block Melbourne, Australia
                            </li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:support@gmail.com">support@goqr.mail.com</a>
                            </li>
                            <li><i class="fa fa-phone"></i> <a href="callto:+0001234455">+000 (123) 44 55</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div class="footer-widget widget-links aos-init" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="footer-title text-white">Resources</h6>
                                <ul>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="footer-widget widget-links aos-init" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="footer-title text-white">Quick Link</h6>
                                <ul>
                                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                    <li><a href="{{ route('qrCode') }}">QR Code</a></li>
                                    <li><a href="{{ route('nfcCard') }}">Business Card</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="footer-widget widget-links aos-init" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="footer-title text-white">Condition</h6>
                                <ul>
                                    <li><a href="{{ route('terms') }}">Terms</a></li>
                                    <li><a href="{{ route('policy') }}">Policy</a></li>
                                    <li><a href="{{ route('faq') }}">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt-30 py-15">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-6">
                        <div class="copyright-text pt-10 text-lg-start text-center aos-init" data-aos="fade-left"
                            data-aos-duration="1000" data-aos-offset="50">
                            <p>Copyright @2024, <a href="{{ route('homePage') }}">Go QR </a> All Rights Reserved</p>
                        </div>
                    </div>
                </div>
                <!-- Scroll Top Button -->
                <button class="scroll-top scroll-to-target me-3" data-target="html"
                    style="display: inline-block;"><span class="fas fa-angle-double-up"></span></button>
            </div>
        </div>
    </div>
</footer>
