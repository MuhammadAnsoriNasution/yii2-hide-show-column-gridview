$(document).ready(function () {
    showHideTable()
    $(document).on('ready pjax:success', function(){  
        showHideTable()
    })
    
    function showHideTable(){
        $('.kv-grid-table tr:nth-child(1) th').each (function( column, td) {
            if (column < 6){
                var fieldAktive = $(td).data('attr')
                if (fieldAktive){
                    $('*[data-column=".'+fieldAktive+'"] input[type="checkbox"]').attr("checked",true);
                }
    
            }else{
                var fieldAktive = $(td).data('attr')
                if (fieldAktive){
                    $('.'+fieldAktive).hide();
                }
            }
        });  

        $('.toggle-vis').click(function () {
            var column = $(this).data('column')
            $(column).toggle();
        })
    }
});
