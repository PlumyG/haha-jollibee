<?php
         $serverName = ""; //serverName\instanceName
         $connectionInfo = array( "Database"=>"Jollibee", "UID"=>"admin", "PWD"=>"asdf", "CharacterSet" => "UTF-8");
         $conn = sqlsrv_connect( $serverName, $connectionInfo);

         if( !$conn ) {
            echo "Connection could not be established.<br />";
            die( print_r( sqlsrv_errors(), true));
         }
         // Close the connection.
         //sqlsrv_close($conn);
?>