<style>
  :root {
    --bg-content: <?php echo SITE_CONTENT_BACKGROUND; ?>;
  }

  html { font-family: sans-serif; color: var(--txt-color); font-weight: 500; }
  body { margin: 20px; }
  textarea { box-sizing: border-box; }

  #cbs-widget.cm { width: <?php echo $widget_size; ?>px; max-width: 100%; }
  #cbs-widget.negocios { width: <?php echo $widget_size; ?>px; max-width: 100%; }
  #cbs-widget.sabado { width: <?php echo $widget_size; ?>px; max-width: 100%; }

  #cbs-widget .widgetContent { min-height: 240px; width: auto; }

  #cbs-widget.wide { display: flex; box-sizing: border-box; }
  #cbs-widget.wide .widgetTop { -webkit-box-flex: 0; -ms-flex: 0 0 30%; flex: 0 0 30%; max-width: 30%; box-sizing: border-box; }
  #cbs-widget.wide .widgetCenter { -webkit-box-flex: 0; -ms-flex: 0 0 70%; flex: 0 0 70%; max-width: 70%; box-sizing: border-box; }

  @media only screen and (max-width: 40em) {
    textarea { width: 100%; }
    #cbs-widget { flex-wrap: wrap; }
    #cbs-widget.wide .widgetTop { -webkit-box-flex: 0; -ms-flex: 0 0 100%; flex: 0 0 100%; max-width: 100%; }
    #cbs-widget.wide .widgetCenter { -webkit-box-flex: 0; -ms-flex: 0 0 100%; flex: 0 0 100%; max-width: 100%; }
  }
</style>
