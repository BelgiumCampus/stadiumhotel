(function () {
    $(document).ready(function () {
        $('.room-tile').hover(function () {
            var $this = $(this);
            console.log($this.find('.descr'));
            $this.find('.price').toggle();
            $this.find('.descr').toggle();
            $this.css("background-color", "#FDC304").css("color", "#181735");
        }, function () {
            var $this = $(this);
            console.log(this);
            $this.find('.price').toggle();
            $this.find('.descr').toggle();
            $this.css("background-color", "rgba(0, 125, 95, .8)").css("color", "#FFF");
        });

    })
})();
