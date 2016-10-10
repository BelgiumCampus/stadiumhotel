(function () {
    $('document').ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        var url = window.location.pathname.split('/');

        var currentPage = url[url.length - 1];
        if (currentPage.lastIndexOf('.php') < 0) currentPage = 'index.php';

        $('[href="' + currentPage + '"]').addClass('active-page');

        /*Event Listeners*/
        $('body').on('click', '.mobile-toggle a', function () {
            $('nav ul').toggleClass('show-menu hide-menu');
        })

        $('body').on('change', '.room-type', function (el) {
            var currentVal = 0;
            $('.room-type').each(function (i, e) {
                currentVal += $(e).val() * 2;
            })
            $('#people').val(currentVal);
        })

        /*Datepickers*/
        $(function () {
            $('#conferencedatepicker').datepicker({
                showOn: "both",
                autoclose: "true",
                format: 'dd/mm/yyyy'
            });
        })

        $(function () {
            $('#arrivaldatepicker').datepicker({
                showOn: "both",
                autoclose: "true",
                format: 'dd/mm/yyyy'
            });
        })

        $(function () {
            $('#departdatepicker').datepicker({
                showOn: "both",
                autoclose: "true",
                format: 'dd/mm/yyyy'
            });
        })

        $(function () {
            $('.clockpicker').clockpicker({
                donetext: 'Done'
            });
        })
    })
})();
