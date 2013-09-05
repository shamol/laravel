
$(document).ready(function(){
    $('#editPostForm').submit(function (){
        $.ajax({
            type:'post',
            url:'/',
            dataType:'json',
            success:function(data){
                alert('in response');
            }
        });
    });
});

