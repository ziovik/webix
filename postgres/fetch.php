<?php

    $host = "localhost";
    $user = "postgres";
    $pass = "";
    $db = "webix_test";

    $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n");

    $query = "SELECT * FROM accounts";

    $rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
    $data = array();

    while($row = pg_fetch_assoc($rs))
    {
        $sub_array = array();
        $sub_array['id'] = $row["id"];
        $sub_array['username'] = $row["username"];
        $sub_array['password'] = $row["password"];
        $sub_array['email'] = $row["email"];
        $sub_array['created_on'] = $row["created_on"];
        $data[] = $sub_array;
    }
    echo json_encode($data);


    //got
//[{"id":"1","username":"Daniel","password":"12345","email":"daniel@yahoo.com","created_on":"2021-02-10 14:45:19"},
//{"id":"2","username":"Max","password":"12321","email":"max@yahoo.ru","created_on":"2021-02-10 15:40:36"}]


//need
//{ id: 1, title:"Bone collector", year: 2020, rating: 4.5},
//{ id: 2, title:"Chuck", year: 2002, rating: 4.5},
//{ id: 3, title:"IP man", year: 1998, rating: 4.5},
//{ id: 4, title:"Home alone", year: 2018, rating: 4.5},