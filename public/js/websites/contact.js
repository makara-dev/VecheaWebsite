$(document).ready(function() {
    if ($(window).width() >= 992) {
        imageReplace('#img', 'images/contact/bg-desktop.png')
    }
});

/**
 * Replace image base on given src
 * @param {String} imageId 
 * @param {String} imageSrc 
 * @return void
 */
function imageReplace(imageId, imageSrc){
    $(imageId).attr('src', imageSrc);
 }