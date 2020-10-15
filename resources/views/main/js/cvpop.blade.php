<script>
    setCVBack();
    $('.cv-radio').click(function(e){
        setCVBack(e.currentTarget);
    });
    $('.cv-item').click(function(e){
        e = $(this).find('input')
        e.prop("checked",true);
        setCVBack()
    });
    function setCVBack(e = '')
    {
        if (e == '')
        {
            e = '.cv-radio:checked';
        }
        $('.cv-background').removeClass('cv-background');
        let item = $(e).parent().parent();
        if($(e).is(':checked'))
        {
            item.addClass('cv-background');
        }
        else
        {
            item.removeClass('cv-background');
        }
    }
</script>