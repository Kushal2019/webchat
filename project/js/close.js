<script>
$(window).bind('unload', function(){
    $.ajax({
        type: 'get',
        async: false,
        url: 'path/to/file.php'
    });
});
</script>