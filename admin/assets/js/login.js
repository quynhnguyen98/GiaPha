$ (document).ready(function(){
    $ ("#login").click(function(){
        var name = $ ("#txtName").val();
        var pass = $ ("#txtPassword").val();
        if(name == "" || pass ==""){
            alert('Vui lòng nhập đầy đủ thông tin!');
        }
        else{
            $.ajax({
                url:"../admin/xulylogin.php",
                type: "post",
                data:"username="+name+"&password="+pass+"&login=login",
                success: function(data){
                    $ ("#loi-login").html(data);

                    if(data.indexOf('success')>=0)
                      window.location = '../admin/index.php' ;
                },
                error:function(){
                    alert('loi');
                }
            });

        }
    }); 
});