<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webix </title>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css" charset="utf-8">
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

<script type="text/javascript" charset="utf-8">
    webix.ready(function (){
        var films_data = [
            {id:1, title:"Home Alone 1", year: 2002, rating: 5, details:"The best of the season"},
            {id:2, title:"IP Man 1", year: 2016, rating: 4.5, details:"Martial Art"},
            {id:3, title:"James Bond", year: 1998, rating: 5, details:"007 Film of the year"},
            {id:4, title:"Coming to America", year: 2021, rating: 5, details:"Coming soon"},
            {id:5, title:"Attack of the dragon", year: 2012, rating: 3, details:"Triller"}

        ];
        webix.ui({

            view:"datatable",
            autoConfig: true,   //it gets the first row which is id=1 and get the names which are title, year,
            // rating, details to form row head. and makes each column 100px except the title. and also allows sorting by clicking head
            // make sure the names for all header are thesame as the first so as to show them
            data:films_data
        });
    });
</script>



</body>
</html>