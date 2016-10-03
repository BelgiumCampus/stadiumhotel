(function () {
    $('document').ready(function () {
        $('body').on('click', '.mobile-toggle a', function () {
            $('nav ul').toggleClass('show-menu hide-menu');
        })

        $(function () {
            $('#arrivaldatepicker').datepicker({
                showOn: "both",
                autoclose: "true"
            });
        })

        $(function () {
            $('#departdatepicker').datepicker({
                showOn: "both",
                autoclose: "true"
            });
        })
    })
})();
