<style>
  @charset "UTF-8";

  :root {
    --bg-header: #E6E6E6;
    --bg-footer: hsl(97, 49%, 51%);
    --txt-color: hsl(97, 49%, 51%);
    --txt-color-invert: hsl(0, 0%, 98%);
    --clr-red: hsl(356.9, 86.1%, 48%);
    --clr-red-light: hsl(0.9, 82.9%, 54.1%);
  }

  .cbs-widget-grid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }

  .cbs-widget-col-expand {
    box-sizing: border-box;
    width: 100%;
    max-width: 100%;
    flex: 1;
    min-width: 1px;
  }

  .cbs-widget-col-auto {
    box-sizing: border-box;
    width: auto;
    max-width: 100%;
  }

  .cbs-widget-button {
    padding: 12px 24px;
    text-decoration: none;
    text-transform: uppercase;
    display: inline-block;
    background-color: #fff;
    color: var(--txt-color);
    border: 2px solid var(--txt-color);
  }

  .cbs-widget-button:hover {
    background-color: var(--txt-color);
    color: var(--txt-color-invert);
    text-decoration: none;
  }

  #cbs-widget-header {
    background-color: var(--bg-header);
    box-sizing: border-box;
    overflow: hidden;
  }

  #cbs-widget-header img {
    max-width: 100%;
  }

  #cbs-widget-header .logo-mobile {
    display: none;
  }

  #cbs-widget-header a {
    display: inline-block;
    max-width: 100%;
  }

  #cbs-widget-footer {
    background-color: var(--bg-footer);
    text-align: right;
    box-sizing: border-box;
    overflow: hidden;
  }

  #cbs-widget-footer img {
    max-width: 100%;
  }

  #cbs-widget-footer a {
    display: inline-block;
  }

  #cbs-widget-footer p {
    margin: 0px 5px 0px 0px;
    color: var(--txt-color-invert);
    text-align: left;
  }

  @media only screen and (max-width: 40em) {
    .cbs-widget-col-auto {
      width: 100%;
      margin-top: 20px;
    }

    #cbs-widget-header {
      text-align: center;
    }

    #cbs-widget-header .logo-desktop {
      display: none;
    }

    #cbs-widget-header .logo-mobile {
      display: inline;
    }

    #cbs-widget-footer {
      text-align: center;
    }
  }
</style>