## Quantity Increment Buttons
A Magento 2 module that adds increment/decrement buttons to the product page details.
### Requirements
- PHP >= 7.1.0
- Magento 2.3
### Installation  
- Create a directory with the name `PinpointDesigns/QtyIncrementButtons` under `app/code` in your Magento installation directory.
- Run the following commands respectively:
    - `$ php bin/magento setup:upgrade`.
    - `$ php bin/magento setup:di:compile`.
    - `$ php bin/magento cache:clean`.
### Usage  
- Add one product at least, navigate to it in your storefront. You should see plus and minus buttons besides the qty input. 
