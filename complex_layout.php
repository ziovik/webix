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
            webix.ui({
                type: "space",   // to add a grey space at the bottom and top of page
                rows:[
                    {template: "This is the first one row"},
                    {
                        padding: 10, margin: 10,
                        cols: [
                            {template: "The second row-> col 1"},
                            // {template: "The second row-> col 2", maxWidth: 300},
                            {template: "The second row-> col 2"},
                            {
                                rows: [
                                    {template: "The second row-> col 3"},
                                    {
                                        type: "space",     cols: [
                                            {template: "The second row-> col 4"},
                                            {template: "The second row-> col 5"}
                                        ]
                                    }
                                ]
                            }


                        ]
                    }
                ]
            });
        });
    </script>



</body>
</html>