
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read from Postgres</title>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css" charset="utf-8">
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript" charset="utf-8"></script>
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->

</head>
<body>
<!--  <table width="100%"  id="order_data" class="table table-bordered table-striped">-->
<!--      <tr>-->
<!--          <td >User Name</td>-->
<!--          <td>Password</td>-->
<!--          <td>Email</td>-->
<!--          <td>Created On</td>-->
<!--      </tr>-->
<!---->
<!---->
<!--      --><?php
//
//      $host = "localhost";
//      $user = "postgres";
//      $pass = "";
//      $db = "webix_test";
//
//      $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
//      or die ("Could not connect to server\n");
//
//      $query = "SELECT * FROM accounts";
//
//      $rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
//
//      while ($row = pg_fetch_assoc($rs)) {
//          ?>
<!--          <tr>-->
<!--              <td>--><?php //   echo $row['username'] ?><!--</td>-->
<!--              <td>--><?php //   echo $row['password'] ?><!--</td>-->
<!--              <td>--><?php //   echo $row['email'] ?><!--</td>-->
<!--              <td>--><?php //   echo $row['created_on'] ?><!--</td>-->
<!--          </tr>-->
<!--      --><?php
//
//      }
//      pg_close($con);
//      ?>
<!---->
<!--  </table>-->
<!---->
  <script type="text/javascript" charset="utf-8">
      webix.ready(function () {
          // var data = [
          //     {"id":"1","username":"Daniel","password":"12345","email":"daniel@yahoo.com","created_on":"2021-02-10 14:45:19"}
          // ,{"id":"2","username":"Max","password":"12321","email":"max@yahoo.ru","created_on":"2021-02-10 15:40:36"}
          // ]

          webix.ui({
              rows : [
                  {template:"<center><h1>Posgres data</h1></center>", height: 100},
                  {
                      cols:[
                          {
                              maxWidth:300,
                              rows:[
                                  { template: "Link 1"},
                                  { template: "Link 2"},
                                  { template: "Link 3"},

                              ],

                          },
                          {view:"resizer"},
                          {
                              view: "form",
                              maxWidth:400,
                              id:"film_form",
                              elements: [
                                  { view:"text", name:"username", id:"inp_username", label:"User Name", placeholder: "User Name" },  // input
                                  { view:"text", name:"password", id:"inp_password", label:"Password", placeholder: "Password" },
                                  { view: "text", id:"email", name:"email", label:"Email", placeholder:"Email"},
                                  { view: "text", id:"created_on", name:"created_on", label:"Created On", placeholder:"Created On"},
                                  {
                                      rows: [

                                          {

                                              cols:[
                                                  { view:"button", id:"save", autowidth:true, value:"Add new"},
                                                  { view:"button", id:"delete", autowidth:true, value:"Delete"},
                                              ]
                                          },
                                      ]
                                  },

                                  {},
                              ]

                          },
                          {view:"resizer"},
                          {
                              view:"datatable",
                              id:"accounts",
                              select: "cell",
                              columns:[
                                  {},
                                  {
                                      id:"username",
                                      header: "User Name",
                                      width:300

                                  },
                                  {
                                      id:"password", width:150,
                                      header:"Password"
                                  },
                                  {
                                      id:"email",
                                      header:"Emails",fillspace:true,
                                  },
                                  {
                                      id:"created_on", width: 250,
                                      header:"created date"

                                  },
                                  {},

                              ],
                              url:"fetch.php"
                          },
                      ],
                  },
              ],

          });
      });
  </script>

</body>
</html>