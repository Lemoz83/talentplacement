<!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.ajaxchimp.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.easypiechart.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/isotope.min.js"></script>
<!-- <script src="https://kit.fontawesome.com/00b7bb0fde.js" crossorigin="anonymous"></script> -->
<script src="js/custom.js"></script>
<script>
    $(document).ready(function () {
        $('#showMoreBtn').on('click', function () {
            $('.tag-hidden').toggle();
            var isVisible = $('.tag-hidden').is(':visible');

            if (isVisible) {
                $(this).text('Show Less ▲');
            } else {
                $(this).text('Show More ▼');
            }
        });
    });
</script>

</body>

</html>