(function () {
    $('document').ready(function () {

        var url = window.location.pathname.split('/');
        var currentPage = url[url.length - 1];
        if (currentPage.lastIndexOf('.php') < 0) currentPage = 'index.php';

        $('[href="' + currentPage + '"]').addClass('active-page');

        $('body').on('click', '.mobile-toggle a', function () {
            $('nav ul').toggleClass('show-menu hide-menu');
        })

        $(function () {
            $('#conferencedatepicker').datepicker({
                showOn: "both",
                autoclose: "true"
            });
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
        
        
          $(function () {
            $('.clockpicker').clockpicker({
            donetext: 'Done'
            });
        })
    })
})();
