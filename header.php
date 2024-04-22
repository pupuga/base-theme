<?php global $post; ?>
<!doctype html>
<html lang="<?php //echo LANG_LOCALE ?>">
<head>
    <?php Pupuga\Libs\Files\Files::getTemplate(DIR_TEMPLATES . 'meta', true) ?>
    <?php wp_head() ?>
    <?php //Pupuga\Libs\Files\Files::getCss(DIR_ASSETS . 'skeleton.css', true) ?>
    <script>let globalData = <?php echo Pupuga\Core\Base\Common::app()->getJs() ?></script>
    <script>const languages = <?php echo json_encode(pll_languages_list(array('fields' => 'slug'))) ?> </script>
</head>
<body <?php body_class(Pupuga\Core\Load\Classes::app()->get()) ?>>
<header class="general-header">
    <div class="skeleton general-header__skeleton">
        <div class="general-header__skeleton-block">
            <?php Pupuga\Libs\Files\Files::getTemplate(DIR_TEMPLATES . 'logo', true, array('class' => 'general-logo')) ?>
        </div>
        <div class="general-header__skeleton-blocks">
            <nav class="general-nav under-line under-line--gradient">
                <ul class="general-menu general-menu--small general-menu--lang">
                    <li>
                        <?php echo Pupuga\Custom\Lang\Languages::app()->getList((get_post_type() == 'media-data') ? 'build' : 'select') ?>
                    </li>
                </ul>
                <ul class="general-menu general-menu--small general-menu--second">
                    <?php Pupuga\Core\Load\Menu::app()->menuStandard('Second ' . LANG_CODE)->action() ?>
                </ul>
            </nav>
            <nav class="general-nav">
                <ul class="general-menu general-menu--big general-menu--main">
                    <?php Pupuga\Core\Load\Menu::app()->menuStandard('Main ' . LANG_CODE)->action() ?>
                </ul>
            </nav>
            <?php Pupuga\Libs\Files\Files::getTemplate(DIR_TEMPLATES . 'responsive', true) ?>
        </div>
    </div>
    <div class="general-header__bottom">
        <nav class="general-mobile-menu"></nav>
    </div>
</header>
<section class="general-section">