<?php
    require "./vendor/autoload.php";

    $uri = getenv("ME_CONFIG_MONGODB_URL");

    $client = new MongoDB\Client($uri);
    
    try {
        $client->test->command(['ping' => 1]);
        echo 'Successfully pinged the MongoDB server.', PHP_EOL;

    } catch (Exception $e) {
        printf("Failed to ping the MongoDB server: %s\n", $e->getMessage());
    }
?>
