# This is a simple SDK for the eBay APIs: trading, shopping, finding 

`src_findinng` and `src_trading` and `src_shopping` have been created with https://github.com/WsdlToPhp/PackageGenerator
the rest are wrappers to make this auto-generated stuff working.

To generate the Classes for the Shopping API:

```
# this is a linux alias
ebayShoppingwsdl2php() {
        docker run --rm -it -v $HOME/.ssh:/root/.ssh \
        -v /etc/localtime:/etc/localtime:ro \
        -v /tmp:/tmp \
        -v $HOME/.composer:/root/.composer \
        -v $HOME/ebaysdk/shopping:/var/www \
        --name ebayShoppingwsdl2php \
        -w /app \
        mikaelcom/wsdltophp:latest \
        generate:package \
        --urlorpath="/var/www/shoppingservice.wsdl" \
        --destination="/var/www/" \
        --gathermethods=none \
        --composer-name="macropage/php-ebay-sdk" \
        --namespace "macropage\\ebaysdk\\shopping" \
        $@
}
```
run with: `ebayShoppingwsdl2php --force`

*notice:* you have to manually download the `shoppingservice.wsdl` and remove some `<xs:appinfo>` tags, you will see the errors if you try it the first time without any modifications.

To generate the classes for the Trading API:

```
# this is a linux alias
ebayTradingwsdl2php() {
        docker run --rm -it -v $HOME/.ssh:/root/.ssh \
        -v /etc/localtime:/etc/localtime:ro \
        -v /tmp:/tmp \
        -v $HOME/.composer:/root/.composer \
        -v $HOME/ebaysdk/trading:/var/www \
        --name ebayTradingwsdl2php \
        -w /app \
        mikaelcom/wsdltophp:latest \
        generate:package \
        --urlorpath="http://developer.ebay.com/webservices/latest/ebaysvc.wsdl" \
        --destination="/var/www/" \
        --gathermethods=none \
        --composer-name="macropage/php-ebay-sdk" \
        --namespace "macropage\\ebaysdk\\trading" \
        $@
}
```
run with: `ebayTradingwsdl2php --force`

to get an idea, how it´s working, take look into `test.php`.
``

|API|Version|
|----|----|
|Trading|1203|
|Shopping|1199|
|Finding|1.13.0|


