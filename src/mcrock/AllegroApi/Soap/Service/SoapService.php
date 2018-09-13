<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 17:30
 */

namespace mcrock\AllegroApi\Soap\Service;


use mcrock\AllegroApi\Soap\Exception\SoapServiceException;
use mcrock\AllegroApi\Soap\Wsdl\ServiceService;

class SoapService extends ServiceService
{
    public function __construct(array $options = [])
    {
        $options['trace'] = true;
        $options['keep_alive'] = false;
//        $options['classmap']['ArrayOfLong'] = ArrayOfLong::class;

        parent::__construct($options);
    }

    public function __soapCall($function_name, $arguments, $options = null, $input_headers = null, &$output_headers = null)
    {
        try {
            $response = parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
            return $response;
        } catch (\SoapFault $soapFault) {
            throw new SoapServiceException($this, $soapFault, isset($arguments[0]) ? $arguments[0] : null);
        }
    }
}
