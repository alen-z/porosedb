<?php

require 'vendor/autoload.php';

use Aws\Common\Aws;

echo date("c") . "\n";

$instance_metadata = \Aws\Common\InstanceMetadata\InstanceMetadataClient::factory()
    ->get('dynamic/instance-identity/document')
    ->send()
    ->json();

echo $instance_metadata['instanceId'] . "\n";

$instance_region = $instance_metadata['region'];
echo $instance_region . "\n";

$aws = Aws::factory(
    array(
        'profile' => 'my_profile',
        'region' => $instance_region,
    )
);

// Get the client from the builder by namespace
$client = $aws->get('DynamoDb');

/** @var \Aws\DynamoDb\DynamoDbClient $client */
$result = $client->listTables();

// TableNames contains an array of table names
foreach ($result['TableNames'] as $tableName) {
    echo "- " . $tableName . "\n";
}
