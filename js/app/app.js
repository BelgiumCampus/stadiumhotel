(function () {
    var urlCleaner = function (url) {
        var mappedObjs = [];
        var multipleParam = url.indexOf('&') > -1;
        if (multipleParam) {
            var holder = url.split('&');
            holder.forEach(function (item, i) {
                var temp = item.split('=');
                mappedObjs.push({
                    name: temp[0],
                    value: temp[1]
                });
            });
        } else {
            var temp = url.split('=');
            mappedObjs.push({
                name: temp[0],
                value: temp[1]
            });
        }

        return mappedObjs;
    }
    $('document').ready(function () {
        var url = window.location.pathname.split('/');
        var urlHref = window.location.href;
        var containsParam = urlHref.indexOf('?') > -1;
        var param = urlHref.substr(urlHref.indexOf('?') + 1);
        var mappedObjs = containsParam ? urlCleaner(param) : [];
        mappedObjs.forEach(function (item, i) {
            $('#' + item.name).val(item.value);
        })

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
