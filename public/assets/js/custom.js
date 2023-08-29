(function ($) {
    "use-strict";

    $(document).ready(function () {


        $(".delete-button").on("click", function (p) {
            p.preventDefault();
            $(this).next(".delete-form").children('.modal').addClass('is-active');
        });

        $(".delete-no").on('click', function () {
            $(this).parents('.modal').removeClass('is-active');
        });
    });
})(jQuery);
