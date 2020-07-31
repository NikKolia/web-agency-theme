<!-- footer
================================================== -->
<footer>
	<div class="container-fluid">
		<div class="row">
            <div class="col-4">
                <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-left' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-4">
                <?php if ( is_active_sidebar( 'footer-center' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-center' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-4">
                <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-right' ); ?>
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