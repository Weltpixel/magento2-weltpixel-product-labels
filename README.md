# magento2-weltpixel-product-labels

### Installation

Dependencies:
- magento2-weltpixel-backend (see https://github.com/Weltpixel/magento2-weltpixel-backend)

With composer:

```sh
$ composer config repositories.weltpixel-magento2-weltpixel-backend git https://github.com/Weltpixel/magento2-weltpixel-backend.git
$ composer require weltpixel/magento2-weltpixel-backend:dev-master

$ composer config repositories.weltpixel-magento2-weltpixel-product-labels git https://github.com/Weltpixel/magento2-weltpixel-product-labels.git
$ composer require weltpixel/magento2-weltpixel-product-labels:dev-master
```
Note: Composer installation only available for WeltPixel internal use for the moment as the repositos are not public. However, there is a work around that will allow you to install the product via composer, described in the article below:
https://support.weltpixel.com/hc/en-us/articles/115000216654-How-to-use-composer-and-install-Pearl-Theme-or-other-WeltPixel-extensions 


Manually:

Important: Ensure you also install the shared Backend module. If it's already installed, you can skip this. Details in the repo at https://github.com/Weltpixel/magento2-weltpixel-backend.

Copy the zip into app/code/WeltPixel/ProductLabels directory


#### After installation by either means, enable the extension by running following commands:

```sh
$ php bin/magento module:enable WeltPixel_ProductLabels --clear-static-content
$ php bin/magento setup:upgrade
```

### Documentation

For detailed documentation, please visit: https://weltpixel.com/resources/ModuleDoc/Magento2/ProductLabels/User-Guide-WeltPixel-Product-Labels-Magento2.html

