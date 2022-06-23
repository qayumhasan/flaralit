<script>
    function icon_store(el){
        var val = $(el).attr('data');
        console.log(val);
        $('#category_icon').val(val);
        $('.btn_icon_cng').remove()
        $('.icon_cng_new').empty().prepend(`<span class="icon `+ val +`">`)
    }
</script>