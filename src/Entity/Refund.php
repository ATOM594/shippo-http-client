<?php

namespace ShippoClient\Entity;

class Refund extends RootEntity
{
    /**
     * Indicates the status of the Refund.
     *  - PENDING
     *  - SUCCESS
     *  - ERROR
     *
     * @return string
     */
    public function getObjectStatus()
    {
        return $this->attributes->mayHave('object_status')->asString();
    }

    public function getTransaction()
    {
        return $this->attributes->mayHave('transaction')->asString();
    }

    public function toArray()
    {
        return [
            'object_created' => $this->getObjectCreated(),
            'object_updated' => $this->getObjectUpdated(),
            'object_id'      => $this->getObjectId(),
            'object_owner'   => $this->getObjectOwner(),
            'object_status'  => $this->getObjectStatus(),
            'transaction'    => $this->getTransaction(),
        ];
    }
}
