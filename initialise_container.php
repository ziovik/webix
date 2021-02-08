<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webix </title>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css" charset="utf-8">
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
   <div id="container_a"></div>
    <script type="text/javascript" charset="utf-8">
        webix.ready(function (){

            webix.ui({
                container: "container_a",
                height: 500, width: 300,
                rows: [
                    {template: "First template"},
                    {template: "second template"},
                ]

            });


        });


    </script>

<!--  takes the full screen if we use without the div and remove its properties-->
<!--   <script type="text/javascript" charset="utf-8">-->
<!--       webix.ready(function (){-->
<!---->
<!--           webix.ui({-->
<!---->
<!--               rows: [-->
<!--                   {template: "First template"},-->
<!--                   {template: "second template"},-->
<!--               ]-->
<!---->
<!--           });-->
<!---->
<!---->
<!--       });-->
<!---->
<!---->
<!--   </script>-->


</body>
</html>