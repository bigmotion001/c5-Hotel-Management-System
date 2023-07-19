</main>

<footer class="revealed">
    <div class="footer_bg">
        <div class="gradient_over"></div>
        <div class="background-image" data-background="url(frontend/img/rooms/3.jpg)"></div>
    </div>
    <div class="container">
        <div class="row move_content">
            <div class="col-lg-4 col-md-12">
                <h5>Contacts</h5>
                <ul>
                    <li>Baker Street 567, Los Angeles 11023<br>California - US<br><br></li>
                    <li><strong><a href="#0">info@C5hotel.com</a></strong></li>
                    <li><strong><a href="#0">+434 43242232</a></strong></li>
                </ul>
                <div class="social">
                    <ul>
                        <li><a href="#0"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#0"><i class="bi bi-whatsapp"></i></a></li>
                        <li><a href="#0"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#0"><i class="bi bi-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ms-lg-auto">
                <h5>Explore</h5>
                <div class="footer_links">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="room-list-1.html">Rooms &amp; Suites</a></li>
                        <li><a href="news-1.html">News &amp; Events</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="about.html">Terms and Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div id="newsletter">
                    <h5>Newsletter</h5>
                    <div id="message-newsletter"></div>
                    <form method="post" action="https://ansonika.com/paradise/phpmailer/newsletter_template_email.php" name="newsletter_form" id="newsletter_form">
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                            <button type="submit" id="submit-newsletter"><i class="bi bi-send"></i></button>
                        </div>
                    </form>
                    <p>Receive latest offers and promos without spam. You can cancel anytime.</p>
                </div>
            </div>
        </div>
        <!--/row-->
    </div>
    <!--/container-->
    <div class="copy">
        <div class="container">
            © C5 HOTEL - <a href="#">2023</a>
        </div>
    </div>
</footer>
<!-- /footer -->

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- /back to top -->

<!-- COMMON SCRIPTS -->
<script src="{{ ('frontend/js/common_scripts.js') }}"></script>
<script src="{{ ('frontend/js/common_functions.js') }}"></script>
<script src="{{ ('frontend/js/datepicker_inline.js') }}"></script>
<script src="{{ ('frontend/js/slider.js') }}"></script>



<script type="text/javascript">
    $('.jarallax').jarallax({
        videoLoop: true,
        videoPlayOnlyVisible: false,
        videoLazyLoading: false
    });
</script>

<script>
    let rooms = document.getElementById('rooms')

    rooms.addEventListener('click', function() {

        let all_rooms = document.getElementById('all_rooms')

        // console.log(all_rooms)

        all_rooms.classList.toggle('dropdown_ative')

        document.getElementById('angle').classList.toggle('rotate')
    })
</script>

</body>


</html>