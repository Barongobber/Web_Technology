
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    const query= window.location.search.split('id=')[1];
    console.log(query);
    $.ajax({
        type:'GET',
        data:{
            id:query,
        },
        url: '../../assets/php/event/delete_event.php',
        success: function(response){
            window.location.href = '../../utm_connect.php?cms=content_management';
        }
    });
</script>