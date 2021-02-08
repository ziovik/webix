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
                        { view:"button", id:"btn_save", autowidth:true, value:"Save", click:saveForm,},
                        { view:"button", id:"btn_del", autowidth:true, value:"Delete", click:deleteForm },
                        { view:"button", id:"btn_clear", autowidth:true, value:"Clear", click:clearForm},
                        // { },
                        { view:"checkbox", id:"check1", autowidth:true},
                        // { },
                        { view:"icon", id:"icon1", autowidth:true, icon:"wxi-pencil" },
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
                                { view:"text", name:"title", id:"inp_title", label:"Title", placeholder: "Title" },  // input
                                { view:"text", name:"year", id:"inp_year", label:"Year", placeholder: "Year" },
                                { view: "text", id:"rating", name:"rating", label:"Rating", placeholder:"rating"},
                                {view:"radio", id:"radio", options:["Yes","No"]},
                                {
                                    rows: [

                                        {

                                            cols:[
                                                { view:"button", id:"confirm", autowidth:true, value:"Confirm"},
                                                { view:"button", id:"reset", autowidth:true, value:"Reset"},
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
                            id:"list_id",
                            data: film_collections,
                            template:"Film title =>: #title#, Year => #year#, Rating => #rating#",
                            select: true
                        }
                    ]
                }
            ]

        });
    });
    function  saveForm(){
        webix.message("You press the save button");
        var item_data = $$("film_form").getValues();
        $$("list_id").add(item_data);
        $$("film_form").clear();
    }
    function  deleteForm(){
        // webix.message("You press the delete button");
        var list = $$("list_id");
        var item_id = list.getSelectedId();
        if(item_id){
            webix.confirm("Delete selected list?").then(function(){
                list.remove(item_id);
            });

        }else{
            webix.message("Please, click any list item")
        }
    }
    function  clearForm(){
        webix.message("You press the clear button");
        $$("film_form").clear();

    }
</script>

</body>
</html>