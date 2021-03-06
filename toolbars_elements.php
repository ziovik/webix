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
                rows:[
                    {
                        // type: "space",
                        view: "toolbar",
                        id:"top_toolbar",
                        elements:[
                            { view:"button", id:"btn_save", autowidth:true, value:"Save"},
                            { view:"button", id:"btn_del", autowidth:true, value:"Delete"},
                            { view:"button", id:"btn_clear", autowidth:true, value:"Clear"},
                            // { },
                            { view:"checkbox", autowidth:true},
                            // { },
                            { view:"icon", autowidth:true, icon:"wxi-pencil" },
                            { },
                        ]
                    },
                    {
                        cols:[
                            {gravity: 2, minWidth: 300},
                            {view:"resizer"},
                            {minWidth: 200}
                        ]
                    }
                ]

            });
        });
    </script>

</body>
</html>