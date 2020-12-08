# How to change product price with Plugin in Magento 2

Using a plugin to change the product price in Magento 2 is one of the great alternative choices when you start with Magento 2 store, and have a tendency to change something like product price.

# Module Features

Using a plugin to change the product price in Magento 2 is one of the great alternative choices when you start with Magento 2 store, and have a tendency to change something like product price. As normally, there are many ways to modify the product price, maybe you know that you will use the Event - Observe or “Rewrite” if the “Event” is not supported at that time. However, the rewrite doesn’t accept the customization from two modules in the same file, that will make the conflict and you can’t change anything.


# Installation Instruction

* Copy the content of the repo to the Magento 2 app/code/MageRakesh/ChangeProductPrice
* Run command:
<b>php bin/magento setup:upgrade</b>
* Run Command:
<b>php bin/magento setup:static-content:deploy</b>
* Now Flush Cache: <b>php bin/magento cache:flush</b>

