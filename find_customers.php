<?php

use ApiClient\GetApiFactory;

$api = GetApiFactory::createGetApi();
$api->get_endpoints();
$api->setConfig(['endpoints_uri' => 'https://example.blah']);

try {
    $customer = $api->findCustomer('12983272');
} catch (\InvalidArgumentException $exception) {
    echo 'Failed to find customer';
}

?>
<h1>Customer: #<?php echo $customer->id ?></h1>
<dl>
    <dt>ID</dt>
    <dd>#<?php echo $customer->id ?></dd>
    <dt>Name</dt>
    <dd><?php echo $customer->name ?></dd>
    <dt>Date of birth</dt>
    <dd><?php echo $customer->dateOfBirth->format('Y-m-d') ?></dd>
</dl>
