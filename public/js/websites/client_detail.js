if($(window).width() >= 992 ){
    addClass('.client-detail', 'container');
}

/**
 * Add class name base on given the name of class
 * @param {String} className 
 * @param {String} addClassName 
 * @return void
 */
function addClass(className, addClassName){
    $(className).addClass(addClassName);
}

/**
 * Remove class name base on given the name of class
 * @param {String} className 
 * @param {String} removeClassName 
 * @return void
 */
function removeClass(className, removeClassName){
    $(className).removeClass(removeClassName);
}