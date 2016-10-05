(function () {
    $('document').ready(function () {
        
        var url = window.location.pathname.split('/');
        var currentPage = url[url.length-1];
        $('[href="' + currentPage + '"]').addClass('active-page');
        
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
