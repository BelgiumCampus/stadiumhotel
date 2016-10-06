
    $('.room-tile').hover(function(){
        var $this = $(this);
        $this.find('.price').toggle();
        $this.find('.descr').toggle();
        $this.css("background-color", "#FDC304").css("color","#181735");
    }, function(){
        var $this = $(this);
        $this.find('.price').toggle();
        $this.find('.descr').toggle();
        $this.css("background-color", "rgba(0, 125, 95, .8)").css("color","#FFF");        
    });
    
    function makeBooking(room){
        console.log(room);
    }