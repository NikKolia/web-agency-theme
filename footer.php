<!-- footer
================================================== -->
<footer>
	<div class="container-fluid">
		<div class="row">
            <div class="col-3">
                <?php if ( is_active_sidebar( 'footer-first' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-first' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-3">
                <?php if ( is_active_sidebar( 'footer-second' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-second' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-3">
                <?php if ( is_active_sidebar( 'footer-third' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-third' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-3">
                <?php if ( is_active_sidebar( 'footer-fourth' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-fourth' ); ?>
                <?php endif; ?>
            </div>
		</div>
		<!-- /row -->

        <?php if ( is_active_sidebar( 'footer-bottom' ) ) : ?>
            <div class="soc text-center">
                <?php dynamic_sidebar( 'footer-bottom' ); ?>
            </div>
        <?php endif; ?>
		<!-- /row -->

        <?php if ( is_active_sidebar( 'footer-copyright' ) ) : ?>
            <div class="copyright">
                <?php dynamic_sidebar( 'footer-copyright' ); ?>
            </div>
        <?php endif; ?>
		<!-- /copyright -->
		<div id="go-top" style="display: block;">
			<a class="smoothscroll" href="#top" title="Наверх"><span class="icon flaticon-upload-1"></span></a>
		</div>
		<!-- /go-top -->
	</div>
</footer>

<!-- java script
================================================== -->
<?php wp_footer() ?>

</body>
</html>