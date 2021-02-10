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
        var grid_data = [
            { id:1, title:"The Shawshank Redemption", year:new Date(1994, 9, 14), votes:678790, rating:9.2, rank:1},
            { id:2, title:"The Godfather", year:new Date(1972, 2, 24), votes:511495, rating:9.2, rank:2},
            { id:3, title:"The Godfather: Part II", year:new Date(1974, 11, 20), votes:319352, rating:9.0, rank:3},
            { id:4, title:"The Good, the Bad and the Ugly", year:new Date(1966, 11, 23), votes:213030, rating:8.9, rank:4, mark:true},
            { id:5, title:"My Fair Lady", year:new Date(1964, 11, 25), votes:533848, rating:8.9, rank:5},
            { id:6, title:"12 Angry Men", year:new Date(1957, 3, 10), votes:164558, rating:8.9, rank:6}
        ];

        webix.ui({
            cols:[
                {
                    view:"datatable",

                    columns:[
                        {
                            id:"title", header:"Title", fillspace:true,
                            template:function(obj, common, value, column, index){		// template as a function
                                if (obj.mark)
                                    return "<span class='highlight'>" + obj.title + "</span>"
                                else
                                    return obj.title;
                            }
                        },
                        // {
                        //     id:"year", header:"Year", width:150,
                        //     format:webix.i18n.dateFormatStr				// locale-based formatting for dates
                        // },
                        {
                            id:"year", template:function (obj) {
                                if(obj.rating > 9)
                                    return "<span class='highlight'>" + obj.year + "</span>"
                                else
                                    return  obj.year
                            }
                        },
                        {
                            id:"rating", header:"Rating",
                            template:"#rating#"							// string/html format (default)
                        },
                        {
                            id:"votes", header:"Votes",
                            format:webix.i18n.numberFormat				// locale-based formatting for numbers
                        },
                        {
                            width:50,
                            template:"{common.trashIcon()}"				// usage of predefined elements
                        }
                    ],
                    data:grid_data
                }
            ]
        });
    });
</script>



</body>
</html>