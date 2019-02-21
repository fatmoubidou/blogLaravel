/**
 * First we will load lodash, popper, JQuery and Bootstrap libraries.
 */

window._ = require('lodash');
window.Popper = require('popper.js').default;
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}
