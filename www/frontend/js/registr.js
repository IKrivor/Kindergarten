(function ($) {
    $(document).ready(function () {
        $("select").change(function(){
            if($(this).val() == "Представитель детского сада"){
                $('#kinder-choice').removeClass("hidden");
                $('#parent-choice').addClass("hidden");
            } else if($(this).val() == "Родитель"){
                $('#kinder-choice').addClass("hidden");
                $('#parent-choice').removeClass("hidden");
            }else{
                $('#kinder-choice').addClass("hidden");
                $('#parent-choice').addClass("hidden");
            }
        });

        $('body').on('click', '#sad-reg', function(e){
            e.preventDefault();

            var sad_name = document.getElementById("reg-sad-name").value;
            var sad_address = document.getElementById("reg-sad-address").value;
            var sad_tel = document.getElementById("reg-sad-tel").value;
            var sad_login = document.getElementById("reg-sad-login").value;
            var sad_pass = document.getElementById("reg-sad-pass").value;
            var sad_repass = document.getElementById("reg-sad-repass").value;
            console.log(sad_name,sad_address,sad_tel,sad_login,sad_pass,sad_repass);

            $.ajax({
                type: 'POST',
                url: "./backend/registr-sad.php",
                data: ({
                    sad_name: sad_name,
                    sad_address: sad_address,
                    sad_tel: sad_tel,
                    sad_login: sad_login,
                    sad_pass: sad_pass,
                    sad_repass: sad_repass
                }),
                success: function(data){
                    if(data == "1"){alert("Регистрация прошла успешно!");document.location.href = "../sad_page.php";}
                    if(data == "0") alert("Такой логин уже существует!");
                    if(data == "-1") alert("Пароли не совпадают!");
                },
                error: function (data) {
                    alert("Error!");
                }
            })
        });

        $('body').on('click', '#par-reg', function(e){
            e.preventDefault();

            var sad_name = document.getElementById("reg-sad-name").value;
            var sad_address = document.getElementById("reg-sad-address").value;
            var sad_tel = document.getElementById("reg-sad-tel").value;
            var sad_login = document.getElementById("reg-sad-login").value;
            var sad_pass = document.getElementById("reg-sad-pass").value;
            var sad_repass = document.getElementById("reg-sad-repass").value;
            console.log(sad_name,sad_address,sad_tel,sad_login,sad_pass,sad_repass);

            $.ajax({
                type: 'POST',
                url: "./backend/registr-parent.php",
                data: ({
                    sad_name: sad_name,
                    sad_address: sad_address,
                    sad_tel: sad_tel,
                    sad_login: sad_login,
                    sad_pass: sad_pass,
                    sad_repass: sad_repass
                }),
                success: function(data){
                    if(data == "1"){alert("Регистрация прошла успешно!");document.location.href = "../sad_page.php";}
                    if(data == "0") alert("Такой логин уже существует!");
                    if(data == "-1") alert("Пароли не совпадают!");
                },
                error: function (data) {
                    alert("Error!");
                }
            })
        });
        
    });
}(jQuery));

