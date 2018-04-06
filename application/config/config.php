<?php

define('BASE_URL', 'http://localhost/advaitadhara/');
define('PUBLIC_URL', BASE_URL . 'public/');
define('XML_SRC_URL', BASE_URL . 'md-src/xml/');

// Physical location of resources
define('PHY_BASE_URL', '/var/www/html/advaitadhara/');
define('PHY_PUBLIC_URL', PHY_BASE_URL . 'public/');
define('PHY_XML_SRC_URL', PHY_BASE_URL . 'md-src/xml/');

define('DB_HOST', '127.0.0.1');
define('DB_PORT', '27017');
define('DB_NAME', 'advaitadhara');
define('DB_USER', 'advaitadharaUSER');
define('DB_PASSWORD', 'advaitadhara123');

// use advaitadhara;
// db.createUser(
//    {
//      user: "advaitadharaUSER",
//      pwd: "advaitadhara123",
//      roles:
//        [
//          { role: "readWrite", db: "advaitadhara" }
//        ]
//    }
// )

?>
