============ Additional Images Uploader for Zen Cart - Version: 1.2 ============

This module is an Beginner installation for Zen Cart 1.5.5f, although it may work on other 1.5.X versions. This module was tested on PHP 7.2.11 and MySQL MySQL 5.7.24-cll.

=============== Description ===============

This module allows you to search for a product by name, model and ID for a product that you wish to add additional images to. Then you select the product from the right hand side results list to add images to.

Now the browse button appears. Browse, select your image and click the upload button. The interface is ajax powered so you can upload many images, very quickly.

The module correctly names the images in the required Zen Cart naming fashion, so that your images display in your template properly.

All of this is done with ZERO template changes, ZERO overwritten files and ZERO headache of the current available modules.

There is instructions below to add an icon in the admin product index lists to shortcut the functionality, optionally, as well.

=============== Installation Instructions ===============

1. BACKUP your files and database.
2. If in doubt verify step 1.
3. Copy Files from YOUR_ADMIN into your own admin directory, there are no overwrites.
4. Load or reload your Zen Cart admin and module will self install.

============= OPTIONAL Core Modification =============

This modification allows access via the admin product listing page.

Open your YOUR_ADMIN/includes/modules/category_product_listing.php 

FIND
```php
<?php echo '<a href="' . zen_href_link($type_handler, 'cPath=' . $cPath . '&product_type=' . $products->fields['products_type'] . '&pID=' . $products->fields['products_id']  . '&action=new_product' . (isset($_GET['search']) ? '&search=' . $_GET['search'] : '')) . '">' . zen_image(DIR_WS_IMAGES . 'icon_edit.gif', ICON_EDIT) . '</a>'; ?>
```

ADD AFTER

```php
<?php echo '<a href="' . zen_href_link(FILENAME_ADDITIONAL_IMAGES_UPLOADER, 'product_id=' . $products->fields['products_id'] ) . '"><i class="fa fa-upload"></i></a>'; ?>
```

=============== Usage ===============

1. Go to Tools->Upload Additional Images
2. Search for the products_id, products_name (or portion of it) or products_model.
3. Click on the correct choice to the right in the search results.
4. Add Image area should appear below click browse to choose file.
5. Click Upload.
Repeat Steps 4 & 5 for all images, there is no need to re-search each time. 

=============== Support ===============

Please direct support questions here
.... ZC Forum Thread to be added .....

The module's master page is here
https://www.zen-cart.com/downloads.php?do=file&id=2188

=============== Un-installation Instructions ===============

- Backup your Files and Database.
- Remove the files installed by the module.
- Run the included uninstall.sql in Admin >> Tools -> Sql Patches

===============Version History===============

02/20/2018 1.0 PRO-Webs.net - Initial Release
02/11/2018 1.2 Zen4All.nl - Major overhaul

===============Legal===============

By downloading this software you agree to the license included in this package.
PRO-Webs, Inc. declares no responsibility for the use of this module and provides no warranty, promise, nor other expectations. Install modules in your Zen Cart software at your own risk.
