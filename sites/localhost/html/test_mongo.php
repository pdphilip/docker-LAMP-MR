<?php

// Manager Class
$manager = new MongoDB\Driver\Manager("mongodb://".getenv(MONGO_HOST).":27017");

// Query Class
$query = new MongoDB\Driver\Query(array('age' => 30));

// Output of the executeQuery will be object of MongoDB\Driver\Cursor class
$cursor = $manager->executeQuery('testDb.testColl', $query);

// Convert cursor to Array and print result
print_r($cursor->toArray());
