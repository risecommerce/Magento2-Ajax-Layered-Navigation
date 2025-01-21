# Risecommerce Ajax Layered Navigation Extension

This [Magento 2 Ajax Catalog Infinite Scroll](https://risecommerce.com/https-risecommerce-com-magento2-ajax-catalog-infinite-scroll-html.html) extension extends the Magento 2 layered navigation by allowing your customers to filter, sort and paginate your product catalog with AJAX technology without page refresh.

For more details about this extension, visit the [Magento 2 Ajax Catalog Infinite Scroll](https://risecommerce.com/https-risecommerce-com-magento2-ajax-catalog-infinite-scroll-html.html).

If you're looking to enhance your Magento store further, consider hiring a [dedicated Magento developer](https://risecommerce.com/hire-dedicated-magento-developer.html).

For support or inquiries, please visit our [contact page](https://risecommerce.com/contact).

## Support: 
version - 2.3.x, 2.4.x

## How to install Extension

Method I)

1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/Risecommerce/AjaxLayeredNavigation
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/AjaxLayeredNavigation'

Method II)

Using Composer 

composer require risecommerce/magento-2-ajax-layered-navigation-extension:1.0.1

### Enable Extension:
- php bin/magento module:enable Risecommerce_AjaxLayeredNavigation
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush

### Disable Extension:
- php bin/magento module:disable Risecommerce_AjaxLayeredNavigation
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush
