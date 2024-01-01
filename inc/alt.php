<!-- Footer Area Starts -->
<footer class="footer-area">
    <div class="footer-copyright">
        <div class="container" style="padding: 20px">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <span>
                        Copyright &copy;
                        <script>document.write(" " + new Date().getFullYear());</script>
                        Kdz. Ereğli Şifa Sağlık Kabini
                        <br> Desing: <a href="https://wa.me/+905356405103" target="_blank">ÇARDAKSOFT</a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="social-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100052856080952&mibextid=LQQJ4d"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://instagram.com/kdz.eregli_sifa_saglik?igshid=MmJiY2I4NDBkZg=="><i
                                        class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->


<style>
    .up {
        position: fixed;
        bottom: 30px;
        right: 25px;
        padding: 10px 15px;
        background: #458bd7;
        color: white;
        cursor: pointer;
        z-index: 999999999;
    }
</style>

<span class="up" id="up">
    <i class="fa fa-arrow-up"></i>
</span>

<!-- Javascript -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/vendor/owl-carousel.min.js"></script>
<script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
<script src="assets/js/vendor/jquery.nice-select.min.js"></script>
<script src="assets/js/vendor/superfish.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#up').fadeIn();
            } else {
                $('#up').fadeOut();
            }
        });

        $('#up').click(function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });
    });
</script>
</body>
</html>