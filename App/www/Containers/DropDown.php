<p class='title city'>İL</p>
<select id="city">
    <option value="">-- İl Seçiniz --</option>
    <?php foreach ($cities as $city): ?>
        <?php if ($city['city'] == $city['county']): ?>
            <option value="<?= $city['city'] ?>"><?= $city['city'] ?></option>
        <?php endif ?>
    <?php endforeach ?>
</select>

<p class='title county'>İLÇE</p>
<select id="county"></select>

<script>
$(document).ready(function(){

    $('#city').change(function(){
        
        var city_name = $(this).val()
        var url = '<?= URL . '/ajax/county' ?>'

        $.ajax({
            type : 'POST',
            url  : url,
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
</script>