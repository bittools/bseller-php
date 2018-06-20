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

namespace BSeller\Api\Translation;

trait Translatable
{
    protected $defaultLocale = 'en_us';

    public function translate($text, $params = null)
    {
        $handle = fopen(__DIR__ . '/locale/' . $this->defaultLocale . '.csv', "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                if (ltrim(explode('","', $line)[0], '"') === $text) {
                    return vsprintf(rtrim(explode('","', $line)[1], "\"\n"), $params);
                }
            }
        }
        return $text;
    }

    public function setDefaultLocale($localeFormat)
    {
        $this->defaultLocale = $localeFormat;
    }

    protected function translateArrayKeys($arrayToTranslate)
    {
        foreach ($arrayToTranslate as $key => $item) {
            $keyTranslated = $this->translate($key);
            if (is_array($item)) {
                $tmpValue = $this->translateArrayKeys($item);
            } else {
                $tmpValue = $item;
            }
            unset($arrayToTranslate[$key]);
            $arrayToTranslate[$keyTranslated] = $tmpValue;
        }
        return $arrayToTranslate;
    }
}