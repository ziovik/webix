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
                            {
                                view: "form",
                                minWidth:300,
                                id:"film_form",
                                elements: [
                                    { view:"text", name:"name", id:"inp_name", label:"Name", placeholder: "Full Name" },  // input
                                    { view:"text", name:"phone", id:"inp_phone", label:"Telephone", placeholder: "Telephone number" },
                                    { view: "text", name:"count", label: "count", value:3},
                                    {view:"radio", options:["Yes","No"]},
                                    {
                                        rows: [

                                            {

                                                cols:[
                                                    { view:"button", autowidth:true, value:"Confirm"},
                                                    { view:"button", autowidth:true, value:"Reset"},
                                                ]
                                            },
                                        ]
                                    },

                                    {},
                                ]

                            },


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