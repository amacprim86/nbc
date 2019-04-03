var $ = require('jquery');
var jQueryBridget = require('jquery-bridget');
var Flickity = require('flickity');

// make Flickity a jQuery plugin
jQueryBridget( 'flickity', Flickity, $ );
// now you can use $().flickity()
$('.carousel').flickity({...});
