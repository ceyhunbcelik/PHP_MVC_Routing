$(document).ready(function(){
    

    $('#city').change(function(){
        
        var city_name = $(this).val()
        
        $.ajax({
            type : 'POST',
            url  : 'ajax/county',
            data : {
                'city_name' : city_name,
            },
            success: function(e){
                $('.county').show()
                $('#county').show()
                
                $('#county').html(e);
            }
        })
    })

})