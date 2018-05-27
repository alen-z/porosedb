<?php

require 'vendor/autoload.php';

use Aws\Common\Aws;

// Create a service builder using a configuration file
$aws = Aws::factory('config/aws_service_dynamodb.json');

// Get the client from the builder by namespace
$client = $aws->get('DynamoDb');

/** @var \Aws\DynamoDb\DynamoDbClient $client */
var_dump($client->listTables());