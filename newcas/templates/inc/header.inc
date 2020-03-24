<div id="header" class="bg-bright header pb-2 pb-md-0 pt-2 pt-md-0 shadow position-relative z-1" role="header">
  <div class="container">
    <div class="row">
      <div class="col-5 col-md-2 align-self-center">
        <a href="<?php print $front_page; ?>" title="<?php print t($site_name); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t($site_name); ?>" class="img-fluid" />
        </a>
      </div>
      <div class="col-auto flex-grow-1 text-right align-self-center">
        <div class="d-none d-md-block font-weight-bold">
          <div class="nav-menu">
            <?php print $nav_menu; ?>
          </div>
        </div>
        <div class="d-md-none">
          <span id="m_menu_trigger" class="color-main font-lg font-weight-light icon-menu2 line-height-1"></span>
        </div>
      </div>
    </div>
  </div>
  <div class="m-menu position-absolute bg-white font-s text-uppercase d-block d-md-none">
    <div class="nav-menu">
      <?php print $nav_menu; ?>
    </div>
  </div>
</div>
