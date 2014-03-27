$(document).ready(function() {
    
    /**
     * function to change the flag on the language menu
     */
    $(".language .dropdown-menu li").click(function(){
      var current_span = $(this).find('a').find('span');
      var clone = current_span.clone();
      current_span.parents('.language').find('.dropdown-toggle').find('span').replaceWith(clone);
    });
    
    /**
     * function to generate te iphone menu (display none on normal screen)
     */
    var iphone_ul = $('<ul>')
    iphone_ul.addClass('language nav navbar-nav pull-left');
    iphone_ul.attr('id', 'language-iphone');
    $('#language-screen .dropdown .dropdown-menu li').each(function (index, elem){
        $(elem).clone().appendTo(iphone_ul);
    });
    iphone_ul.insertAfter('#language-screen');
});