<?php
    require "./vendor/autoload.php";

    $uri = getenv("MONGODB_CONNECTION_STRING");

    $client = new MongoDB\Client($uri);
    
    try {
        $client->test->command(['ping' => 1]);
        echo 'Successfully pinged the MongoDB server.', PHP_EOL;

    } catch (MongoDB\Driver\Exception\RuntimeException $e) {
        printf("Failed to ping the MongoDB server: %s\n", $e->getMessage());
    }
?>