// $('table').tableFilter();
$('table').tableFilter({

    // input field to filter table rows
    'input' : 'input[type=search]',

    // trigger events and elements
    'trigger': {

        "event"   : "keyup",
        'element'   : undefined
    },

    // case sensitive
    'caseSensitive' :  true,

    // Timeout for keyboard events (keyup, keypress ...)
    'timeout' : -1,

    // enable table sort
    'sort'  : false,

    // not found element
    // e.g. notFoundElement : ".not-found"
    'notFoundElement' : null,

    // callback
    'callback'  : function(){}

});
