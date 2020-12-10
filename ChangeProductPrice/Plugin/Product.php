<?php
/*
 * MageRakesh
 * Copyright (C) 2020 MageRakesh <rakeshroy78000@gmail.com>
 *
 * @package MageRakesh_ChangeProductPrice
 * @copyright Copyright (c) 2020 MageRakesh_Customer (https://github.com/MageRakesh)
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author MageRakesh <rakeshroy78000@gmail.com>
 */
namespace MageRakesh\ChangeProductPrice\Plugin;

class Product
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result + 100;
        return $result;
    }
}
