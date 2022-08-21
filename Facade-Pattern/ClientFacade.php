<?php


class ClientFacade
{
    function getAllClientData($clientId){
        return array(
          $clientId,
          $this->clientAddress($clientId),
          $this->getMostPayedFor($clientId),
          $this->getPaymentHistory($clientId)
        );
    }

    private function clientAddress($clientId)
    {
        $clientShippingAddress = '';

        $clientPersonalData = new ClientPersonalData($clientId);
        $clientShippingAddress = $clientPersonalData->getStreetAddress();
        $clientShippingAddress .= ',' . $clientPersonalData->getCountry();
        $clientShippingAddress .= ',' . $clientPersonalData->getCountry();
        return $clientShippingAddress;

    }

    private function getMostPayedFor($clientId)
    {
        $topPayments = new TopPayments();
        return $topPayments->findMaxForClientWithId($clientId);
    }

    private function getPaymentHistory($clientId)
    {
        $paymentHistory = new PaymentHistory();
        return $paymentHistory->findPaymentForClient($clientId);
    }
}