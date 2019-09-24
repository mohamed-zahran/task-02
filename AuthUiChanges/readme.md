## Auth UI Changes
A Magento 2 module that changes the background of the search input to orange if the customer is logged in.
### Requirements
- PHP >= 7.1.0
- Magento 2.3
### Installation  
- Create a directory with the name `PinpointDesigns/AuthUiChanges` under `app/code` in your Magento installation directory.
- Run the following commands respectively:
    - `$ php bin/magento setup:upgrade`.  
    - `$ php bin/magento setup:di:compile`.  
    - `$ php bin/magento cache:clean`.
### Usage  
- Create a customer account, then login. You should see the search input's background color changed to orange.
