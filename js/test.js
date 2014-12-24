if (typeof jQuery === 'function') {
    define('jquery', function () {
        return jQuery;
    });
}

define(['jquery'], function ($) {
    console.log('Test loaded!');
    console.log('Content of the first <h2> in this document: ' + $('h2').html());
});