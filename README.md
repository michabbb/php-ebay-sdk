# this project is not tested, it only exists to test how well wsdltophp works

`src_findinng` and `src_trading` and `src_shopping` have been created with https://github.com/WsdlToPhp/PackageGenerator 

`./wsdltophp-php5.phar generate:package --urlorpath="http://developer.ebay.com/webservices/latest/ebaysvc.wsdl" --destination="/app/MySdk" --composer-name="myproject/mysdk" --force`

the rest are wrappers to make this auto-generated stuff working.  
this is only for testing!

see `test.php` for examples.
