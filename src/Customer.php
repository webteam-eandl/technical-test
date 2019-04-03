<?php

namespace ApiClient;

class Customer
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var \DateTime
     */
    public $dateOfBirth;

    public static function createFromArray(array $config)
    {
        $customer = new Customer();
        $customer->id = $config['id'];
        $customer->name = $config['name'];
        $customer->dateOfBirth = new \DateTimeImmutable($config['dob']);
        return $customer;
    }
}
