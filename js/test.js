if (typeof jQuery === 'function') {
    define('jquery', function () {
        return jQuery;
    });
}

define(['jquery'], function ($) {
    console.log($);
});