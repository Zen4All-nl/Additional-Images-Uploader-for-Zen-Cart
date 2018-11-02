<?php
/**
 *  additional_images_uploader.php
 *
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version Author: bislewl  2/19/2018 12:18 PM Modified in zencart_additional_images_uploader
 *
 */
include('includes/application_top.php');
?>
<!doctype html>
<html <?php echo HTML_PARAMS; ?>>
  <head>
    <meta charset="<?php echo CHARSET; ?>">
    <title><?php echo HEADING_TITLE; ?></title>
    <link rel="stylesheet" href="includes/stylesheet.css">
    <link rel="stylesheet" href="includes/cssjsmenuhover.css" media="all" id="hoverJS">
    <link rel="stylesheet" href="includes/css/additional_images_uploader.css">
    <script src="includes/menu.js"></script>
    <script src="includes/general.js"></script>
    <script type="text/javascript">
      function init() {
          cssjsmenu('navbar');
          if (document.getElementById) {
              var kill = document.getElementById('hoverJS');
              kill.disabled = true;
          }
      }
    </script>
  </head>
  <body onLoad="init()">
    <!-- header //-->
    <?php require(DIR_WS_INCLUDES . 'header.php'); ?>
    <!-- header_eof //-->

    <script src="includes/javascript/additional_images_uploader.js"></script>

    <div class="container-fluid" id="additionalImageUploader">
      <h1><?php echo HEADING_TITLE; ?></h1>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <ol>
          <li><?php echo TEXT_AIU_INSTRUCTIONS_STEP_ONE; ?></li>
          <li><?php echo TEXT_AIU_INSTRUCTIONS_STEP_TWO; ?></li>
          <li><?php echo TEXT_AIU_INSTRUCTIONS_STEP_THREE; ?></li>
          <li><?php echo TEXT_AIU_INSTRUCTIONS_STEP_FOUR; ?></li>
          <li><?php echo TEXT_AIU_INSTRUCTIONS_STEP_FIVE; ?></li>
        </ol>
      </div>
      <div id="additionalImagesProductSearch">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" id="additionalImagesSearchProductForm">
            <?php echo zen_draw_form('search_for_product', FILENAME_ADDITIONAL_IMAGES_UPLOADER); ?>
          <div class="form-group">
            <div class="col-sm-10">
              <?php echo zen_draw_input_field('search', '', 'class="form-control" id="search" placeholder="Search"'); ?>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-primary"><?php echo TEXT_AIU_SEARCH; ?></button>
            </div>
          </div>
          <?php echo '</form>'; ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
          <ul id="additionalImagesProductSearchResults">

          </ul>
        </div>
      </div>
      <div id="additionalImagesProductSelected">
        <div class="row">
          <h2 id="additionalImageProductName"></h2>
        </div>
      </div>
      <div id="additionalImagesUploaderForm">
        <div class="row">
            <?php echo zen_draw_form('additional_image_upload', FILENAME_ADDITIONAL_IMAGES_UPLOADER, 'process=uploadAdditionalImage', 'POST', ' id="additional_image_upload" enctype="multipart/form-data" class="form-horizontal"'); ?>
            <?php echo zen_draw_hidden_field('image_target', 'images'); ?>
            <?php echo zen_draw_hidden_field('product_id', (int)zen_db_prepare_input($_GET['product_id']), 'id="product_id_input"'); ?>
          <legend><?php echo TEXT_AIU_ADD_IMAGE; ?></legend>
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <div class="form-group">
                <?php echo zen_draw_label(TEXT_AIU_ADDITIONAL_FILE_IMAGE, 'additional_image_file', 'class="control-label col-sm-3"'); ?>
              <div class="col-sm-9 col-md-6">
                  <?php echo zen_draw_file_field('additional_image_file'); ?>
              </div>
              <?php echo zen_draw_hidden_field('new_filename', '', 'id="new_filename"'); ?>
              <?php echo zen_draw_hidden_field('destination', '', 'id="destination"'); ?>
            </div>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <button type="submit" class="btn btn-primary"><?php echo TEXT_AIU_UPLOAD; ?></button>
          </div>
          <?php
          echo '</form>';
          ?>

        </div>
      </div>
      <div class="panel panel-primary" id="additionalImagesUploaderImagesBox">
        <div class="panel-heading">
          <h3><?php echo TEXT_AIU_CURRENT_IMAGES; ?></h3>
        </div>
        <div class="panel-body" id="additionalImagesUploaderImages">

        </div>
      </div>
      <div class="row">
        © Copyright Pro-Webs.net 2017-<?php echo date("Y"); ?> & &COPY; Copyright Zen4All 2018-<?php echo date("Y"); ?>
      </div>
    </div>
    <!-- body_eof //-->
    <div class="bottom">
      <!-- footer //-->
      <?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
      <!-- footer_eof //-->
    </div>
  </body>
</html>
<?php
require(DIR_WS_INCLUDES . 'application_bottom.php');