</main>

<footer class="revealed" style="z-index: -1;">
    <div class="footer_bg">
        <div class="gradient_over"></div>
        <div class="background-image" data-background="url(img/rooms/3.jpg)"></div>
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
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('about_us_frontend') }}">About Us</a></li>
                        <li><a href="{{ route('all_rooms') }}">Rooms &amp; Suites</a></li>
                        <li><a href="#">News &amp; Events</a></li>
                        <li><a href="{{ route('contact_us') }}">Contacts</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div id="newsletter">
                    <h5>Newsletter</h5>
                    <div id="message-newsletter"></div>
                    <form method="post" action="#" name="newsletter_form" id="newsletter_form">
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
<script src="{{ ('../frontend/js/common_scripts.js') }}"></script>
<script src="{{ ('../frontend/js/common_functions.js') }}"></script>
<script src="{{ ('../frontend/js/datepicker_inline.js') }}"></script>
<script src="{{ ('../frontend/js/slider.js') }}"></script>



<script type="text/javascript">
    $('.jarallax').jarallax({
        videoLoop: true,
        videoPlayOnlyVisible: false,
        videoLazyLoading: false
    });
</script>

<script>
    let rooms = document.getElementById('rooms')

    let sideBar = document.getElementById('side_bar')

    let openBtn = document.getElementById('open')

    let all_rooms = document.getElementById('all_rooms')

    let menu = document.getElementById('menu')


    rooms.addEventListener('click', function() {

        all_rooms.classList.toggle('dropdown_ative')

        sideBar.classList.remove('side__bar__active')

        document.getElementById('angle').classList.toggle('rotate')
    })


    openBtn.addEventListener('click', function() {
        // console.log(sideBar)

        sideBar.classList.toggle('side__bar__active')

        all_rooms.classList.remove('dropdown_ative')
    })

    menu.addEventListener('click', function(){
        sideBar.classList.remove('side__bar__active')
        all_rooms.classList.remove('dropdown_ative')
    })

</script>

</body>


</html>
