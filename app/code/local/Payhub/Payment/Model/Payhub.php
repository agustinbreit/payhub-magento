<?php

/////////////////////////////////////////////////////////////////////////////////////////////////////

class Payhub_Payment_Model_Payhub extends Payhub_Payment_Model_Abstract 
{
    /////////////////////////////////////////////////////////////////////////////////////////////////////

    public $payhub;

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    public function __construct() { 
        parent::__construct();
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////

    public function sale($data, $options = null) { 
        $this->payhub = $this->helper->getLib('payhub', $this->config->api);

        $response = $this->payhub->sale($data, $options);

        return $response;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    public function void($transaction_id, $options = null) { 
        $this->payhub = $this->helper->getLib('payhub', $this->config->api);

        $response = $this->payhub->void($transaction_id, $options);

        return $response;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    public function refund($transaction_id, $options = null) { 
        $this->payhub = $this->helper->getLib('payhub', $this->config->api);

        $response = $this->payhub->refund($transaction_id, $options);

        return $response;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    public function info($data, $options = null) { 
        $this->payhub = $this->helper->getLib('payhub', $this->config->api);

        $response = $this->payhub->info($data, $options);

        return $response;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////

}

///////////////////////////////////////////////////////////////////////////////////////////////////

