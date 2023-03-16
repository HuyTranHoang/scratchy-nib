<footer class="text-center text-lg-start bg-secondary-color text-muted text-primary-color">
    <div class="container text-center text-md-start">
        <div class="tab-content accordion row bg-secondary-color" id="footerContent">
            <div class="col-md-4 col-lg-4 pt-3">
                <h4 class="text-uppercas footer-text-color">
                    Content Disclaimer
                </h4>
                <p class="fw-lighter text-primary-color" style="font-size: 0.8rem;">You are welcome to link to our content using one picture and sharing a link back to the original source, always
                    <a class="text-decoration-none" href="#">giving proper credit</a>.
                    You may NOT use any of my projects to create items for sale without a&nbsp;<a class="text-decoration-none" href="#">commercial license</a>.
                </p>
                <ul class="footer-icon">
                    <li><a href="#">
                            <i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#">
                            <i class="fab fa-twitter"></i></a></li>
                    <li><a href="#">
                            <i class="fab fa-google"></i></a></li>
                    <li><a href="#">
                            <i class="fab fa-instagram"></i></a></li>
                    <li><a href="#">
                            <i class="fab fa-github"></i></a></li>
                </ul>
            </div>

            <x-home.footer-accordion-list title="Navigate" id="footer_navigate">
                <ul class="list-unstyled mt-3 mt-md-0">
                    <li>
                        <a href="/about" class="link-secondary text-decoration-none">
                            About</a>
                    </li>
                    <li>
                        <a href="/contact" class="link-secondary text-decoration-none">
                            Contact Us</a>
                    </li>
                    <li>
                        <a href="#" class="link-secondary text-decoration-none">
                            FAQ</a>
                    </li>
                    <li>
                        <a href="#" class="link-secondary text-decoration-none">
                            License</a>
                    </li>
                    <li>
                        <a href="#" class="link-secondary text-decoration-none">
                            Privacy Policy</a>
                    </li>
                </ul>
            </x-home.footer-accordion-list>

            <x-home.footer-accordion-list title="Contact" id="footer_contact">
                <ul class="list-unstyled mt-3 mt-md-3">
                    <li class="text-primary-color">HO CHI MINH, ZIP 70000, VN</li>
                    <li><a class="link-secondary text-decoration-none" href = "mailto: scratchynib@gmail.com">scratchynib@gmail.com</a></li>
                    <li><a class="link-secondary text-decoration-none" href="tel:+8499999999">+84 999 999 99</a></li>
                    <li><a class="link-secondary text-decoration-none" href="tel:+8488888888">+84 888 888 88</a></li>
                    <li><hr></li>
                    <li style="font-size: 0.8rem">Visitors counter: {{$visitorCount}} </li>
                </ul>
            </x-home.footer-accordion-list>

            <div class="text-center p-4">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <span class="ticker-text p-0">Current time and location:</span>
                        <div class="position-relative" style="width: 375px;">
                            <div class="ticker-text p-0">
                                <p class="msg"><span class="ticker"></span></p>
                                <p class="msg msg--two"><span class="ticker"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none" href="{{ route('home.sitemap') }}">Sitemap</a> | ©2023 Scratchy Nib | All rights reserved.
            </div>

        </div>
    </div>
</footer>
