(function () {
    $('document').ready(function () {
        $('body').on('click','.mobile-toggle a', function() {
            $('nav ul').toggleClass('show-menu hide-menu');
        })
    })
})();
