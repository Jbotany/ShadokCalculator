let ShadokCalculator = function () {
    let my = {};

    my.init = function () {
        $('#shadok_calculator_submit').click(function (e) {
                e.preventDefault();
                let dataForm = $('.form-calculator').serialize();

                $.ajax({
                    type: 'POST',
                    url: urlAjax,
                    data: dataForm,
                    success: function (response) {
                        $('#shadok_calculator_shadokNumber').val(response);
                    }
                });
            }
        );
    }

    return my;
}();

$(document).ready(function () {
    ShadokCalculator.init();
});
