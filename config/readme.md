Example Database Connection
create file db.php on this folder and write this configuration example

     define('_HOST_NAME','Hostname');
     define('_DATABASE_NAME','database_name');
     define('_DATABASE_USER_NAME','user_db_name');
     define('_DATABASE_PASSWORD','password');

     $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);

     if($MySQLiconn->connect_errno)
     {
       die("ERROR : -> ".$MySQLiconn->connect_error);
     }