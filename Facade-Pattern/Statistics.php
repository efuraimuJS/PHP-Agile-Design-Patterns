<?php


class Statistics
{
    private $clientData;
    private ClientFacade $facade;

    public function __construct(ClientFacade $facade)
    {
        $this->clientData = new ClientData();
        $this->facade = new ClientFacade();;
    }

    function loadAllClientStatistics($clientId)
    {


        $allClientDataArray = $this->facade->getAllClientData($clientId);
        $this->clientData->id = $allClientDataArray[0];
        $this->clientData->address = $allClientDataArray[1];
        $this->clientData->mostPayedFor = $allClientDataArray[2];
        $this->clientData->userHistory = $allClientDataArray[3];


    }
}