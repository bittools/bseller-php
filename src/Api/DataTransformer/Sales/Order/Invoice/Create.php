<?php
/**
 * B2W Digital - Companhia Digital
 *
 * Do not edit this file if you want to update this SDK for future new versions.
 * For support please contact the e-mail bellow:
 *
 * sdk@e-smart.com.br
 *
 * @category  BSeller
 * @package   BSeller
 *
 * @copyright Copyright (c) 2018 B2W Digital - BIT Tools Platform. .
 *
 * @author    Julio Reis <julio.reis@b2wdigital.com>
 */

namespace BSeller\Api\DataTransformer\Sales\Order\Invoice;

use BSeller\Api\DataTransformer\Builders;
use BSeller\Api\DataTransformer\DataTransformerAbstract;
use BSeller\Api\Translation\Translatable;

class Create extends DataTransformerAbstract
{
    use Builders;
    use Translatable;

    public function __construct(
        $orderId,
        $transactionDate,
        $bankCode,
        $agencyCode,
        $accountNumber,
        $acquirer,
        $returningCode,
        $authorizationId,
        $authorizingNsu,
        $ctfNsu,
        $interestValue
    )
    {
        $paymentApproval = [
            'idPedido' => $orderId,
            'dataTransacao' => $transactionDate,
            'codigoBanco' => $bankCode,
            'codigoAgencia' => $agencyCode,
            'numeroConta' => $accountNumber,
            'adquirente' => $acquirer,
            'codigoRetorno' => $returningCode,
            'idAutorizacao' => $authorizationId,
            'nsuAutorizadora' => $authorizingNsu,
            'nsuCtf' => $ctfNsu,
            'sequencial' => 0,
            'valorJuros' => $interestValue
        ];

        $this->setOutputData($paymentApproval);
        parent::__construct();
    }
}