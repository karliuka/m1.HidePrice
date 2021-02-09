# Magento Hide Price

Since, many store owners looking to hide price in Magento, that's why we have created 
an Hide Price extension which perfectly let you configure your selling strategy the way you want.

## Compatibility

Magento CE(EE) 1.6.x, 1.7.x, 1.8.x, 1.9.x

OpenMage LTS 19.x

[Product Available from Magento2](https://github.com/karliuka/m2.ProductAvailable)

## Install

Warning, before installing the HidePrice module, you need to install the [HideAddToCart](https://github.com/karliuka/m1.HideAddToCart) module.

#### Install via Composer

1. Go to installation folder

2. Enter following commands to install module:

    ```bash
    composer require faonni/magento-hide-price
    ```
   Wait while dependencies are updated.

#### Manual Installation

1. Download the corresponding [latest version](https://github.com/karliuka/m1.HidePrice/archive/1.2.0.zip)

2. Copy the unzip content to the {Magento root} folder

## Usage

### Configuration

*System -> Configuration -> Catalog -> Catalog -> Access Option*

<img alt="Magento Hide Add To Cart" src="https://karliuka.github.io/m1/hideprice/config.png" style="width:100%"/>

### Frontend
#### Hidden add to cart button and price
<img alt="Magento Hide Add To Cart" src="https://karliuka.github.io/m1/hideprice/hidepariceandaddtocart.png" style="width:100%"/>

## Uninstall

Pleace, create backup so you can recover the data at a later time.

#### Uninstall via Composer

1. Go to installation folder

2. Enter following commands to remove:

    ```bash
    composer remove faonni/magento-hide-price
    ```
#### Manual Uninstall

1. Remove the folder {Magento root}/app/code/community/Faonni/HidePrice
2. Remove the file {Magento root}/app/etc/modules/Faonni_HidePrice.xml
