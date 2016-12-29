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

        //Загружает страницу "Дети"
        function createChildrenPage() {
            $.ajax({
                type: 'POST',
                url: "../backend/get_children.php",
                dataType: "json",
                data: ({query: 1}),
                success: function(data){

                    var print = '<div class="row" id="group-list">';
                            print += '<div class="button-place">';
                                print += '<button id="add-kid" class="add-but">Добавить</button>';
                                print += '<button id="update-kid" class="update-but">Редактировать</button>';
                                print += '<button id="remove-kid" class="remove-but">Удалить</button>';
                            print += '</div>';
                            print += '<table id="table-kids">';
                                print += '<thead>';
                                    print += '<tr>';
                                        print += '<th></th>';
                                        print += '<th class="t-kid-name">ФИО</th>';
                                        print += '<th class="t-kid-name">Дата рождения</th>';
                                        // print += '<th class="t-kid-name">Свидетельство о рождении</th>';
                                        // print += '<th class="t-kid-name">Страховой медицинский полис</th>';
                                        // print += '<th class="t-kid-name">Справка о здоровье</th>';
                                        // print += '<th class="t-kid-name">Сертификат прививок</th>';
                                    print += '</tr>';
                                print += '</thead>';
                                print += '<tbody>';
                                print += '</tbody>';
                            print += '</table>';
                        print += '</div>';
                    $('#parent-container').append(print);

                    for(var i = 0; i < data.length; i++){
                        var print2 = '';
                        print2 += '<tr>';
                        print2 += '<td class="t-kid"><input id="' + data[i].ch_id + '" type="checkbox" class="user-checkbox"><label for="ch_id"><span></span></label></td>';
                        print2 += '<td class="t-kid t-num">' + data[i].ch_lastName + " " + data[i].ch_firstName +  " " + data[i].ch_patronymic +  '</td>';
                        print2 += '<td class="t-kid">' + data[i].ch_birthDate + '</td>';
                        // print2 += '<td class="t-kid"><img src="../img/tick.png"></td>';
                        // print2 += '<td class="t-kid"><img src="../img/tick.png"></td>';
                        // print2 += '<td class="t-kid"><img src="../img/tick.png"></td>';
                        // print2 += '<td class="t-kid"><img src="../img/tick.png"></td>';
                        print2 += '</tr>';
                        $('#table-kids tbody').append(print2);
                    }

                },
                error: function (data) {
                    alert("Error!");
                }
            });
        }

        //Очищает контейрнер
        function clearContainer() {
            $('#parent-container').html("");
        }

        //Обновление данных о родителе
        $('body').on('click', '#par_save', function(e){
            e.preventDefault();

            var par_id = getCookie("parID");
            var parents_fam = document.getElementById("parents-fam").value;
            var parents_name = document.getElementById("parents-name").value;
            var parents_otch = document.getElementById("parents-otch").value;
            var parents_tel = document.getElementById("parents-tel").value;
            var parents_mail = document.getElementById("parents-mail").value;

            $.ajax({
                type: 'POST',
                url: "./backend/update_par.php",
                data: ({
                    par_id: par_id,
                    parents_fam: parents_fam,
                    parents_name: parents_name,
                    parents_otch: parents_otch,
                    parents_tel: parents_tel,
                    parents_mail: parents_mail
                }),
                success: function(data){
                    if(data == "1"){
                        alert("Данные успешно обновлены!");
                        clearContainer();
                        createInfoPage();
                    } else alert("Error");
                },
                error: function (data) {
                    alert("Error!");
                }
            })
        });
        
        createInfoPage();

        //Страница "Личные данные"
        $('body').on('click', '#info-menu', function(e){
            e.preventDefault();
            clearContainer();
            createInfoPage();
        });

        //Страницы ""Дети
        $('body').on('click', '#children-menu', function(e){
            e.preventDefault();
            clearContainer();
            createChildrenPage();
        });
    });

}(jQuery));
