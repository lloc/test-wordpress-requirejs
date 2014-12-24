if (typeof jQuery === 'function') {
    define('jquery', function () {
        return jQuery;
    });
}

define(['jquery'], function ($) {
    $('h1').html('Test loaded!');
});