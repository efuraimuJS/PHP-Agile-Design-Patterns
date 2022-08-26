<?php


class Processing implements DeliveryState
{


    /**
     * @param Delivery $delivery
     * @return mixed
     */
    public function goNext(Delivery $delivery)
    {
        // TODO: Implement goNext() method.
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return 'Warehouse';
    }
}