(function($) {
    $(function() {
        $('.main-navigation .label_link').addClass('submitclick');
        $('.main-navigation .search-field').val('');
        $('.main-navigation .search-field').on('blur', () => {
          
            // console.log('hellow')
            
            $('.main-navigation .label_link').addClass('submitclick');
        });
        $('.main-navigation .search-submit').on('click',  event => {
          event.preventDefault();
          $( ".block" ).animate({ "left": "-=50px" }, "slow" );
          
          
          
          if ($('.main-navigation .search-field').val().length > 0) {
            $ ('.main-navigation .search-form').submit();
            
            
            return false;
          }
            $('.main-navigation .label_link').toggleClass('submitclick');
            $('.main-navigation .label_link').focus();
            
          });
      
    });
  })(jQuery);
