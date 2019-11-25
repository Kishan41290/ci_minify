</div>
    </div>
    <script src="<?=SITE_URL?>assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?=SITE_URL?>assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- <script src="<?=SITE_URL?>assets/js/shared/off-canvas.js"></script> -->
    <!-- <script src="<?=SITE_URL?>assets/js/shared/misc.js"></script> -->
    <!-- <script src="<?=SITE_URL?>assets/js/demo_1/dashboard.js"></script> -->
    <?php
      $this->minify->js(array('js/shared/off-canvas.js'));
      echo $this->minify->deploy_js(TRUE, 'custom.min.js');

      $this->minify->js(array(
            // 'js/shared/off-canvas.js',
            'js/shared/misc.js',
            'js/demo_1/dashboard.js'
        ));
      echo $this->minify->deploy_js();
    ?>
  </body>
</html>