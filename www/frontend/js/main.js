(function ($) {

    $(document).ready(function () {

        //Вход
        $('body').on('click', '#enter', function(e){
            e.preventDefault();

            var type = document.getElementById("user-type").value;
            var login = document.getElementById("enter-login").value;
            var pass = document.getElementById("enter-pass").value;

            $.ajax({
                type: 'POST',
                url: "./backend/enter.php",
                data: ({
                    type: type,
                    login: login,
                    pass: pass
                }),
                success: function(data){
                    if(data == "-1") alert("Неправильный логин или пароль!");
                    else {
                        if(type == "Детский сад"){
                            setCookie("sadID",parseInt(data));
                            document.location.href = "../kindergarten.php";
                        }else{
                            setCookie("parID",parseInt(data));
                            document.location.href = "../parent.php";
                        }
                    }
                },
                error: function (data) {
                    alert("Error!");
                }
            })
        });

    });

}(jQuery));