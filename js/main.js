(function($) {
    "use strict";

    // Spinner
    var spinner = function() {
        setTimeout(function() {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
                $("#body").removeClass("d-none");
            }
        }, 1);
    };
    spinner();

})(jQuery);