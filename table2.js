$(document).ready(function() {

    $('table[name=example-table]').tableFilter({

        //input : "input[type=search]", Default element

        trigger : {

            event 	: "keyup",
            //element : "button[name=btn-filtro]"
        },

        //timeout: 80,

        sort : true,

        //caseSensitive : false, Default

        callback : function() { /* Callback após o filtro */

        },

        notFoundElement : ".not-found"
    });

    // for(i=0;i<100;i++){
    //
    //     $("table tbody").append("<tr><td>"+i+"ab</td><td>"+i+"ab</td><td>"+i+"ab</td><td>"+i+"ab</td><td>"+i+"ab</td></tr>");
    // }
});