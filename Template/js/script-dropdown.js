$(document).ready(function() {
    $('.content').click(function (e) {
        var $this =$(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        else {
            $this.removeClass('active');
        }
    })
});
