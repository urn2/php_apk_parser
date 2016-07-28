php_apk_parser
==============

Android APK XML File Decompress Class For PHP

fork [https://github.com/iwinmin/php_apk_parser](/iwinmin/php_apk_parser)

#Example

```php
<?php
$p = new \Apk\Parser('android_app.apk');
echo $p->Manifest()->getXML();
?>
```