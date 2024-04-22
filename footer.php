</section>
<footer class="general-footer">
    <div class="icons-menu">
        <div class="icons-menu__skeleton">
            <h3 class="icons-menu__title"><?php set_pll_e('Take part in informing and evaluating') ?></h3>
            <nav class="icons-menu__block">
                <ul>
                    <?php Pupuga\Core\Load\Menu::app()->menuStandard('Icons ' . LANG_CODE)->action() ?>
                </ul>
            </nav>
        </div>
    </div>
    <div class="general-footer__bottom">
        <div class="three-columns">
            <div class="three-columns__left">
                <div class="site-descriptions">
                    <div class="site-descriptions__flag">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/logo-eu_' . LANG_CODE ?>.jpg" title="">
                    </div>
                </div>
            </div>
            <div class="three-columns__center">
                <div class="site-copy">
                    <p><?php echo Pupuga\Libs\Data\Html::replaceTemplates('MediaData {{year}}') ?></p>
                </div>
            </div>
            <div class="three-columns__right">
                <nav class="column-nav">
                    <ul class="column-menu">
                        <?php Pupuga\Core\Load\Menu::app()->menuStandard('Help ' . LANG_CODE)->action() ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
<div class="veil display-none"><div class="veil__loader"></div></div>
</body>
</html>