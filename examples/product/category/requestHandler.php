<?php
/**
 * BIT Tools Platform | B2W - Companhia Digital
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  BSeller
 * @package   BSeller
 *
 * @copyright Copyright (c) 2018 B2W Digital - BIT Tools Platform.
 *
 * @author    Julio Reis <julio.reis@b2wdigital.com>
 */

include __DIR__ . '/../../api.php';

/** @var BSeller\Api\Handler\Request\Catalog\Product\CategoryHandler $requestHandler */
$requestHandler = $api->productCategory();

/**
 * LIST PRODUCT CATEGORIES
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $requestHandler->categories();
$list = $response->toArray();

var_dump($list);
