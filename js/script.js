$(document).ready(function() {
    $('.views .view_btn').click(function (e) {
        $('.views .view_btn').removeClass('active');

        var $this =$(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
    });
    $('.check-box .checked').click(function (e) {
        var $this =$(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        else{
            $this.removeClass('active');
        }
    })
    $('.button-close').click(function (e) {
        var $this =$(this);
        if (!$this.parent().hasClass('open')) {
            $this.parent().addClass('open');
        }
        else{
            $this.parent().removeClass('open');
        }
    })
});
