$(document).ready(function (){
    $("#submit").on('click' , function(){
        var username=$("#username").val();
        var lastname=$("#lastname").val();
        if(username == "" || lastname == ""){
            alert("Please complete the form");
        }else{
            $.ajax({
                url:'http://localhost/ajax/public/src/includes/update.php',
                method:'POST',
                data:{
                    submit: 1,
                    usernamePHP:username,
                    lastnamePHP:lastname
                },
                success:function(response){
                    $("#response").html(response);
                    // $("#submit").attr("disabled" , "true");
                    console.log("SUCCESS!");
                },
                dataType: 'text'
            });
        }
    });
});