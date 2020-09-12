<?php
/*
 * Template Name: Website Design Portfolio
 *
 * */
get_header();
?>

    <?php
    chdir('../../'); // очень важно!!!
    $s = "/home/success1/public_html/php-bin/engine.inc.php";
    include_once($s);
    ?>

    <!-- main section
	================================================== -->
    <div id="top"></div>
    <section id="standartpage" class="bg1">
        <div class="grey-wrap">
            <div class="container">
                <div class="row">
                    <h1>Website Design Portfolio</h1>
                </div>
            </div>
        </div>
        <div class="container main-content">
            <div class="row">
                <div class="col-md-8">
                    <?php eng_call(GET_WDP_LIST_CONTENT) ?>
                </div>
                <div class="col-md-3 col-md-offset-1 sidebar-right" style="">
                    <?php eng_call(GET_WDP_MENU_CONTENT) ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /main -->
    <div class="greybar"></div>

<?php
get_footer();
