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

/** @var \BSeller\Api\EntityInterface\Catalog\Product\Variation $entityInterface */
$entityInterface = $api->productVariations()
    ->entityInterface();

$entityInterface->setNome('Cor')
    ->setId(1)
    ->addSpecification(1, 'Azul')
    ->addSpecification(2, 'Amarelo')
    ->addSpecification(3, 'Vermelho')
    ->addSpecification(4, 'Rosa')
    ->addSpecification(5, 'Branco');

/**
 * CREATE A PRODUCT VARIATION
 *
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $entityInterface->create();

/**
 * UPDATE A PRODUCT VARIATION
 */
$response = $entityInterface->update();

/**
 * DELETE A PRODUCT VARIATION
 *
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$idTipoVariacao = 1;
$idVariacao = 10;
$response = $entityInterface->delete($idTipoVariacao, $idVariacao);

/*
 * LISTING PRODUCT VARIATIONS
 * @var BSeller\Api\Handler\Response\HandlerInterface $response
 */
$response = $entityInterface->variations();
$variations = $response->toArray();