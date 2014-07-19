<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
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
      <?php print render($page['highlighted']); ?>
      <div id="content-center">
    <div id="content-node-55" class="column" role="main" >


      <a id="main-content"></a>

      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>



      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>




    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>
    </div>
      </div>
  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
