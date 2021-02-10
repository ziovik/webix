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
        var student_data = [
            {id:1, student:"Daniel Monday", subject:"Maths", year: 2002, hours: 4, marks:20},
            {id:2, student:"Max Galkin", subject:"English", year: 1998, hours: 3, marks:100 },
            {id:4, student:"Anthony Madrid", subject:"Russian", year: 2021, hours: 10, marks:80},
            {id:5, student:"Jame Cooper", subject:"History", year: 2012, hours: 8, marks: 60}

        ];
        webix.ui({
           rows:[
               {

                   view:"datatable",
                   footer: true,
                   type:"space",
                   select: true,

                   // autoConfig: true,
                   // padding:10, margin:20,

                   // make sure u make all header have thesame ways
                   columns:[
                       {},
                       {
                           id:"student", fillspace:true,// fillspace is to make it take the remaining space
                           header:[ "Students", {content:"textFilter"} ],
                           width:300  // if fillspace is set then width will not work so for now not working

                       },
                       {
                           id:"subject", width:150,
                           header:[ {text:"Subjects", rowspan:2}, "Under the span"]
                       },
                       {
                           id:"year",
                           header:[ {text:"Years", rowspan:2}, "Years" ]
                       },
                       {
                           id:"hours", width: 150,
                           header:[ {text:"Attended values", colspan:2}, "Hours" ],  //this colspan creates two cols up and down. the text goes up and the hours go down
                           footer:[
                               {text:"Total Hours", colspan:1 },
                               {content: "summColumn"},
                           ]
                       },
                       {
                           id:"marks", width:150,
                           header:[ "", "Marks" ],  // no colspan of 2 so it only stays down

                           footer:[
                                   {text:"Total Marks", colspan:1 },
                                   {content: "summColumn"},
                               ]
                       },
                       {}


                   ],
                   data:student_data,
               },
               {
                   view:"datatable",
                   data:student_data,
                   columns:[
                       { id:"student", template:"#subject# - #year#" },

                       {
                           id:"marks",
                           template:"<span style='color:green;'>#marks#</span>"
                       }
                   ]
               }
           ]

        });
    });
</script>



</body>
</html>