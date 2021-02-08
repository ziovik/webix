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

                view: "layout",
                rows: [
                    {view:"template", template: "Hi there"},
                    {view:"template", template: "Welcome"},
                ]

            });

        });

    </script>


</body>
</html>