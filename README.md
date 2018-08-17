<h3> Adding cryptocurrencies to Magento 2.x </h3>

Adding Etherium, Bitcoin, Litecoin, Bitcoin Cash, DASH and Eth. Classic to Magento 2.x allowed currencies.

<h3> Install ready-to-paste package </h3>
 
 1. Download the latest version of the integration: https://github.com/ihor-s-whidegroup/cryptocurrency/releases/download/v1.0.0/paybear-cryptocurrency.zip
 2. Extract the package and connect to your server using SFTP Clients. Then upload the app folder to Magento 2 root folder.
 3. To complete the installation process you need to run following commands: <br>
    php bin/magento setup:upgrade <br>
    php bin/magento cache:clean
 4. Log in to your Magento Administration page as administrator 
 5. Go to Stores → Configuration → Advanced → System → Currency and select cryptocurrencies. Then go to Stores → Configuration → General → Currency Setup and add new currencies to Allowed currencies list.