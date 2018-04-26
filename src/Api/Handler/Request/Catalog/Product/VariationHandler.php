<?php

namespace BSeller\Api\Handler\Request\Catalog\Product;

use BSeller\Api\DataTransformer\Catalog\Product\Variation\Create;
use BSeller\Api\DataTransformer\Catalog\Product\Variation\Update;
use BSeller\Api\EntityInterface\Catalog\Product\Variation;
use BSeller\Api\Handler\Request\HandlerAbstract;
use BSeller\Api\Handler\Response\HandlerInterface;

/**
 * BIT Tools Platform | B2W - Companhia Digital
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  BSeller
 * @package   BSeller
 *
 * @copyright Copyright (c) 2018 B2W Digital - BIT Tools Platform. .
 *
 * @author    Julio Reis <julio.reis@b2wdigital.com>
 */
class VariationHandler extends HandlerAbstract
{
    /** @var string */
    protected $baseUrlPath = '/api/itens/variacoes';

    /**
     * @param $idTipoVariacao
     * @param $idVariacao
     * @return HandlerInterface
     */
    public function delete($idTipoVariacao, $idVariacao)
    {
        /** @var HandlerInterface $responseHandler */
        $responseHandler = $this->service()->delete($this->baseUrlPath("{$idTipoVariacao}/{$idVariacao}"));
        return $responseHandler;
    }

    /**
     * @param string $nome
     * @param array  $specifications
     *
     * @return \BSeller\Api\Handler\Response\HandlerInterface
     */
    public function create(
        $nome,
        $id,
        $specifications = []
    )
    {
        $transformer = new Create(
            $nome,
            $id,
            $specifications
        );

        $body = $transformer->output();

        /** @var \BSeller\Api\Handler\Response\HandlerInterface $responseHandler */
        $responseHandler = $this->service()->put($this->baseUrlPath(), $body);
        return $responseHandler;
    }

    /**
     * @param string $nome
     * @param array $specifications
     *
     * @return \BSeller\Api\Handler\Response\HandlerInterface
     */
    public function update(
        $nome,
        $id,
        $specifications = []
    )
    {
        $transformer = new Update(
            $nome,
            $id,
            $specifications
        );

        $body = $transformer->output();

        /** @var \BSeller\Api\Handler\Response\HandlerInterface $responseHandler */
        $responseHandler = $this->service()->put($this->baseUrlPath(), $body);
        return $responseHandler;
    }

    /**
     * @return \BSeller\Api\Handler\Response\HandlerInterface
     */
    public function variations()
    {
        $responseHandler = $this->service()->get($this->baseUrlPath());
        return $responseHandler;
    }

    /**
     * @return Variation
     */
    public function entityInterface()
    {
        return new Variation($this);
    }
}