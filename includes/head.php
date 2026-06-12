<?php
// -----------------------------------------------------------------------------
//  Block: HEAD
//  Edited: 3L, 27-JAN-2022
// -----------------------------------------------------------------------------
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo SITE_TITLE; ?><?php if (!empty(SITE_CLIENT_NAME)): ?> | <?php echo SITE_CLIENT_NAME; ?><?php endif; ?> | <?php echo SITE_COFINA_BRAND; ?></title>

  <?php
  // -- Styles (BASE)
  require_once('edits/styles-base.php');
  ?>

  <?php
  // -- Styles (SPECIFIC)
  require_once('edits/styles-'.$widget_size.'.php');
  ?>

  <?php
  // -- Styles (for PREVIEW)
  require_once('includes/styles-for-preview.php');
  ?>
</head>
