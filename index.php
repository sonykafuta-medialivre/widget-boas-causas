<?php
// -----------------------------------------------------------------------------
//  File: INDEX
//  Edited: 3L, 17-MAR-2022
// -----------------------------------------------------------------------------

// -- Block: STARTER
require_once('edits/starter.php');
?>

<!DOCTYPE html>
<html>

<?php
// -- Block: HEAD
require_once('includes/head.php');
?>

<body>

  <section id="cbs-widget" class="<?php echo SITE_COFINA_SLUG; ?> <?php echo $widget_type; ?>">

    <div class="widgetTop">
      <?php
      // -- Block: WIDGET HEADER
      require_once('edits/widget-header.php');
      ?>
    </div>

    <?php
    if ($widget_type == 'wide'):
    ?>
    <div class="widgetCenter" style="background: <?php echo SITE_CONTENT_BACKGROUND; ?>;">
    <?php
    endif;
    ?>
      <div class="widgetContent" style="background: <?php echo SITE_CONTENT_BACKGROUND; ?>;"></div>
      <div class="widgetBottom">
        <?php
        // -- Block: WIDGET FOOTER
        require_once('edits/widget-footer.php');
        ?>
      </div>
    <?php
    if ($widget_type == 'wide'):
    ?>
    </div>
    <?php
    endif;
    ?>
  </section>

  <section id="cbs-exports">
    <br/>
    <hr/>

    <?php
    // -- OUTPUT: Styles and Markup
    echo '<h2>Title</h2>'."\n";
    $site_title  = SITE_TITLE;
    $site_title .= (!empty(SITE_CLIENT_NAME)) ? ' by '.SITE_CLIENT_NAME : null;
    echo '<textarea cols="100" rows="1">'.$site_title.'</textarea>'."\n";

    echo '<h2>Widget Header</h2>'."\n";
    echo '<textarea cols="100" rows="12">'."\n";
      // -- Styles (BASE)
      include('edits/styles-base.php');

      // -- Styles (SPECIFIC)
      include('edits/styles-'.$widget_size.'.php');

      // -- WIDGET HEADER
      include('edits/widget-header.php');
    echo '</textarea>'."\n\n";

    echo '<h2>Widget Footer</h2>'."\n";
    echo '<textarea cols="100" rows="12">'."\n";
      // -- WIDGET FOOTER
      include('edits/widget-footer.php');
    echo '</textarea>'."\n";

    echo '<h2>Content Color</h2>'."\n";
    echo '<textarea cols="100" rows="1">'.SITE_CONTENT_BACKGROUND.'</textarea>'."\n";
    ?>

    <br/><br/>
    <hr/>
    <p>Version: <strong><?php echo VERSION; ?></strong> | Updated: <strong><?php echo DATE_UPDATE; ?></strong></p>
  </section>

</body>
</html>
