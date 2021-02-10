<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webix </title>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css" charset="utf-8">
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

<!--    <script type="text/javascript" charset="utf-8">-->
<!--        webix.ready(function (){-->
<!--            webix.ui({-->
<!--                type: "space",   // to add a grey space at the bottom and top of page-->
<!--                rows:[-->
<!--                    {template: "This is the first one row", height: 100},  // fixed size-->
<!--                    {-->
<!--                        padding: 10, margin: 10,-->
<!--                        cols: [-->
<!--                            {width: 80},// fixed size-->
<!--                            {template: "The second row-> col 1", width: 200},-->
<!--                          -->
<!--                            {template: "The second row-> col 2"},-->
<!--                           -->
<!--                        ]-->
<!--                    }-->
<!--                ]-->
<!--            });-->
<!--        });-->
<!--    </script>-->

<!-- setting autoheight or autowidth to true-->
<!--    <script type="text/javascript" charset="utf-8">-->
<!--        webix.ready(function (){-->
<!--            webix.ui({-->
<!---->
<!--                rows:[-->
<!--                    {template: "This is a text by me", autoHeight: 100},  // auto define the width-->
<!--                    {-->
<!--                        cols:[-->
<!--                            {}, // just empty but take the rest of the space if other size are defined-->
<!--                            { template:"Row 2 Column 1" },-->
<!--                            { template:"Row 2 Column 2" }-->
<!--                        ]-->
<!--                    }-->
<!---->
<!--                ]-->
<!--            });-->
<!--        });-->
<!--    </script>-->
<!--    gravity are use for relative sizes-->
<!--    <script type="text/javascript" charset="utf-8">-->
<!--        webix.ready(function (){-->
<!--            webix.ui({-->
<!---->
<!--                rows:[-->
<!--                    {template: "This is a text by me", gravity: 1},  //this is optional cos by default its already 1-->
<!--                    {-->
<!--                        gravity:3,-->
<!--                        cols:[-->
<!---->
<!--                            { template:"Row 2 Column 1" },-->
<!--                            { template:"Row 2 Column 2" }-->
<!--                        ]-->
<!--                    }-->
<!---->
<!--                ]-->
<!--            });-->
<!--        });-->
<!--    </script>-->
<!--adding special border called resizer-->
<script type="text/javascript" charset="utf-8">
    webix.ready(function (){
        webix.ui({

            rows:[
                {template: "This is a text by me", gravity: 1},  //this is optional cos by default its already 1
                {
                    gravity:3,
                    cols:[

                        { width:80 },
                        { template:"Row 2 Column 1" },
                        { view:"resizer" },  // its added between them to move them  || scroll
                        { template:"Row 2 Column 2", minWidth:150 }
                    ]
                }

            ]
        });
    });
</script>

</body>
</html>