var parentID;

(function ($) {

    $(document).ready(function () {

        //Загружает страницу "Личная информация"
        function createInfoPage() {
            $.ajax({
                type: 'POST',
                url: "../backend/get_par_info.php",
                dataType:"json",
                data: ({id: getCookie("parID")}),
                success: function(data){
                    console.log(data);
                    var print = '<div class="row">';
                            print += '<div class="dashed-place">';
                                print += '<div class="title">Личные данные</div>';
                                print += '<div class="parents-inputs">';
                                    print += '<div class="inp-wrap">';
                                        print += '<input type="text" id="parents-fam" name="parents-fam" placeholder="Фамилия" />';
                                    print += '</div>';
                                    print += '<div class="inp-wrap">';
                                        print += '<input type="text" id="parents-name" name="parents-name" placeholder="Имя" />';
                                    print += '</div>';
                                    print += '<div class="inp-wrap">';
                                        print += '<input type="text" id="parents-otch" name="parents-otch" placeholder="Отчество" />';
                                    print += '</div>';
                                    print += '<div class="inp-wrap">';
                                        print += '<input type="email" id="parents-mail" name="parents-mail" placeholder="Электронная почта"/>';
                                    print += '</div>';
                                    print += '<div class="inp-wrap">';
                                        print += '<input type="text" id="parents-tel" name="parents-tel" placeholder="Телефон" />';
                                    print += '</div>';
                                    print += '<div class="inp-wrap">';
                                        print += '<button id="par_save">Сохранить</button>';
                                    print += '</div>';
                                // print += '<div class="inp-wrap">';
                                // print += '<label id="label-pass">Копия паспорта</label>';
                                // print += '<input type="file" name="uploader-pass" id="uploader-pass" placeholder="Копия паспорта">';
                                // print += '</div>';
                                print += '</div>';
                            print += '</div>';
                        print += '</div>';

                    $('#parent-container').append(print);

                    $('#parents-fam').val(data.par_lastName);
                    $('#parents-name').val(data.par_firstName);
                    $('#parents-otch').val(data.par_patronymic);
                    if(data.par_email != null) $('#parents-mail').val(data.par_email);
                    if(data.par_tel != null) $('#parents-tel').val(data.par_tel);
                },
                error: function (data) {
                    alert("Error!");
                }
            });


        }

        createInfoPage();

    });

}(jQuery));
