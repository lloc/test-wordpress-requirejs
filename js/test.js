if (typeof jQuery === 'function') {
    define('jquery', function () {
        return jQuery;
    });
}

define(['jquery'], function ($) {
    console.log('Test loaded!');
    console.log('First <h1> contains: ' + $('h1').html());
});