<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';


return new QueryBuilder(
    Connection::make()
);


// $pdo = Connection::make();

// $query = new QueryBuilder($pdo);