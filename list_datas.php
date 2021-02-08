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
        var film_collections = [
            { id: 1, title:"Bone collector", year: 2020, rating: 4.5},
            { id: 2, title:"Chuck", year: 2002, rating: 4.5},
            { id: 3, title:"IP man", year: 1998, rating: 4.5},
            { id: 4, title:"Home alone", year: 2018, rating: 4.5},


        ]
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
                        {
                            view: "list",
                            data: film_collections,
                            template:"Film title =>: #title#, Year => #year#",
                            select: true
                        }
                    ]
                }
            ]

        });
    });
</script>

</body>
</html>