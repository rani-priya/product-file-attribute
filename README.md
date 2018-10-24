# Magento2 Webkul Product File Attribute Module

Magento2 Webkul Product File Attribute Module - allow to add your own custom product file type fields.

How to Install the module 
--------------------------
copy and paste the downloaded folder & file to app/code/Webkul/ProductFileAttribute

Run Following Command via terminal
-----------------------------------
php bin/magento setup:upgrade

Install the module via composer
--------------------------
Run the following commands in terminal-

composer config repositories.product-file-attribute vcs https://github.com/rani-webkul/product-file-attribute.git

composer require webkul/product-file-attribute dev-master

php bin/magento setup:upgrade

now module is properly installed

How to test the module
--------------------------
Follow the blog link https://webkul.com/blog/create-and-manage-product-file-type-attribute-in-magento-2