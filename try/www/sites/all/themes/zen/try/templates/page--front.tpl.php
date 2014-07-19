<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
global $base_url;
?>

<div id="page">

  <header class="header" id="header" role="banner">
    <div class="content-header">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>




<div class="menu">
    <?php print render($page['header']); ?>
      <?php if ($main_menu): ?>
          <nav id="main-menu" role="navigation" tabindex="-1">
              <?php
              // This code snippet is hard to modify. We recommend turning off the
              // "Main menu" on your sub-theme's settings form, deleting this PHP
              // code block, and, instead, using the "Menu block" module.
              // @see https://drupal.org/project/menu_block
              print theme('links__system_main_menu', array(
                  'links' => $main_menu,
                  'attributes' => array(
                      'class' => array('links', 'inline', 'clearfix'),
                  ),
                  'heading' => array(
                      'text' => t('Main menu'),
                      'level' => 'h2',
                      'class' => array('element-invisible'),
                  ),
              )); ?>
          </nav>
      <?php endif; ?>
</div>

        <div id="lang">
            <div class="lang">
                <select>
                    <option>EN</option>
                    <option>RU</option>
                </select>
            </div>
        </div>
    </div>
      <?php if ($secondary_menu): ?>
          <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
              <?php print theme('links__system_secondary_menu', array(
                  'links' => $secondary_menu,
                  'attributes' => array(
                      'class' => array('links', 'inline', 'clearfix'),
                  ),
                  'heading' => array(
                      'text' => $secondary_menu_heading,
                      'level' => 'h2',
                      'class' => array('element-invisible'),
                  ),
              )); ?>
          </nav>
      <?php endif; ?>


  </header>




  <div id="main">

    <div id="content" class="column" role="main" style="width: 100%">
    


      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
        <div id="rooms">
        <div class="rooms">
        <?php print render($page['content']); ?>
        </div>
        </div>

    </div>





  </div>
<div id="footer-content">
  <?php print render($page['footer']); ?>
</div>
</div>

<?php print render($page['bottom']); ?>





