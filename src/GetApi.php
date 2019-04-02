<?php


namespace ApiClient;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class GetApi
{
    /**
     * @var ClientInterface
     */
    private $client;

    protected $config;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function setConfig($config)
    {
        $this->config = $config;
    }

    public function get_endpoints()
    {
        $response = $this->client->get($this->config['endpoints_uri']);
        $j = $response->getBody()->getContents();
        $r = json_decode($j, true);

        if ($r['status'] = false) {
            throw new \RuntimeException('Failed.');
        }

        foreach ($r['endpoint'] as $key => $value) {
            $this->$config[$key] = $vaule;
        }

        return 200 == $response->getStatusCode();
    }

    public function findCustomer(string $customerId): Customer
    {
        $response = $this->client->get($this->config['customer'] . '/' . $customer_id);
        $customerConfig = json_decode($response->getBody()->getContents(), true);

        $customer = new Customer();
        $customer->id = $customer['id'];
        $customer->name = $customer['name'];
        $customer->dateOfBirth = new \DateTime($customer['id']);

        return $customer;
    }
}
