var sadID;

(function ($) {

    $(document).ready(function () {

        //Загружает страницу "О саде"
        function createInfoPage() {
            $.ajax({
                type: 'POST',
                url: "../backend/get_sad_info.php",
                dataType:"json",
                data: ({id: getCookie("sadID")}),
                success: function(data){
                    console.log(data);
                    var print = '<div class="row">';
                            print += '<div class="dashed-place">';
                                print += '<div class="title">Основная информация</div>';

                                print += '<div class="gr-form">';
                                    print += '<div class="inp-wrap">';
                                        print += '<input type="text" id="sad-name" name="sad-name" placeholder="Название детского сада" />';
                                    print += '</div>';
                                    print += '<div class="inp-wrap">';
                                        print += '<textarea id="sad-address" name="sad-address" placeholder="Адрес детского сада"></textarea>';
                                    print += '</div>';
                                    print += '<div class="inp-wrap">';
                                        print += '<input type="text" id="sad-tel" name="sad-tel" placeholder="Телефон" />';
                                    print += '</div>';
                                    print += '<div class="inp-wrap">';
                                        print += '<textarea id="sad-regim" name="sad-regim" placeholder="Режим работы детского сада"></textarea>';
                                    print += '</div>';
                                    print += '<div class="inp-wrap">';
                                        print += '<textarea id="sad-description" name="sad-description" placeholder="Описание детского сада"></textarea>';
                                    print += '</div>';

                                    print += '<div class="inp-wrap">';
                                        print += '<button id="sad_save">Сохранить</button>';
                                    print += '</div>';

                        //             print += '<div class="inp-wrap">';
                        //                 print += '<label id="label-lic">Главное фото</label>';
                        //                 print += '<input type="file" name="uploader-main-photo" id="uploader-main-photo" placeholder="Главное фото детского сада">';
                        //             print += '</div>';
                        //         print += '</div>';
                        //     print += '</div>';
                        // print += '</div>';
                        // print += '<div class="row">';
                        //     print += '<div class="dashed-place">';
                        //         print += '<div class="title">Галерея</div>';
                        //             print += '<div id="choice-photo">';
                        //                 print += '<div class="inp-wrap">';
                        //                 print += '<label id="label-lic">Добавить фото</label>';
                        //                 print += '<button id="load-photo">Загрузить</button>';
                        //                 print += '<input type="file" name="uploader-photo" id="uploader-photo" placeholder="Фото детского сада">';
                        //             print += '</div>';
                        //         print += '</div>';
                        //     print += '</div>';
                        // print += '</div>';
                    $('#sad-container').append(print);

                    $('#sad-name').val(data.kin_name);
                    $('#sad-address').val(data.kin_address);
                    $('#sad-tel').val(data.kin_tel);
                    if(data.mode != null) $('#sad-regim').val(data.mode);
                    if(data.description != null) $('#sad-description').val(data.description);
                },
                error: function (data) {
                    alert("Error!");
                }
            });


        }

        //Загружает страницу "Группы"
        function createGroupPage() {
            $.ajax({
                type: 'POST',
                url: "../backend/get_groups.php",
                dataType: "json",
                data: ({query: 1}),
                success: function(data){

                    var print = '<div class="row" id="group-list">';
                        print += '<div class="button-place">';
                            print += '<button id="add-group" class="add-but">Добавить</button>';
                            print += '<button id="update-group" class="update-but">Редактировать</button>';
                            print += '<button id="remove-group" class="remove-but">Удалить</button>';
                        print += '</div>';
                        print += '<table id="table-groups">';
                            print += '<thead>';
                                print += '<tr>';
                                    print += '<th></th>';
                                    print += '<th class="t-gr-name">Номер группы</th>';
                                    print += '<th class="t-gr-name">Количество свободных мест</th>';
                                    print += '<th class="t-gr-name">Количество занятых мест</th>';
                                print += '</tr>';
                            print += '</thead>';
                            print += '<tbody>';
                            print += '</tbody>';
                        print += '</table>';
                        print += '</div>';
                    $('#sad-container').append(print);

                    for(var i = 0; i < data.length; i++){
                        var print2 = '';
                        print2 += '<tr>';
                        print2 += '<td class="t-gr"><input id="' + data[i].gr_id + '" type="checkbox" class="user-checkbox"><label for="' + data[i].gr_id + '"><span></span></label></td>';
                        print2 += '<td class="t-gr t-num">' + data[i].gr_number + '</td>';
                        print2 += '<td class="t-gr">' + data[i].gr_seatsNumber + '</td>';
                        print2 += '<td class="t-gr">' + data[i].gr_freeSeatsNumber + '</td>';
                        print2 += '</tr>';
                        $('#table-groups tbody').append(print2);
                    }

                },
                error: function (data) {
                    alert("Error!");
                }
            });
        }

        //Очищает контейрнер
        function clearContainer() {
            $('#sad-container').html("");
        }

        //Загружает форму группы
        function createGroupForm(groupID) {

            $.ajax({
                type: 'POST',
                url: "../backend/get_group_info.php",
                dataType:"json",
                data: ({id: getCookie("grID")}),
                success: function(data){
                    var print = '<div class="row">';
                    if(groupID == null) print += '<div class="title">Добавление группы</div>';
                    else print += '<div class="title">Редактирование группы</div>';
                    print += '<div class="gr-form">';
                    print += '<div class="inp-wrap">';
                    print += '<input type="text" id="gr-number" name="gr-number" required placeholder="Номер группы" />';
                    print += '</div>';
                    print += '<div class="inp-wrap">';
                    print += '<textarea id="gr-age-limit" name="gr-age-limit" required placeholder="Возрастные ограничения"></textarea>';
                    print += '</div>';
                    print += '<div class="inp-wrap">';
                    print += '<input type="text" id="gr-kolvo-mest" name="gr-kolvo-mest" required placeholder="Количество мест" />';
                    print += '</div>';
                    print += '<div class="inp-wrap">';
                    print += '<input type="text" id="gr-kolvo-free-mest" name="gr-kolvo-free-mest" required placeholder="Количество свободных мест" />';
                    print += '</div>';
                    print += '<div class="inp-wrap">';
                    print += '<input type="text" id="gr-price" name="gr-price" required placeholder="Стоимость в год" />';
                    print += '</div>';
                    print += '<div class="inp-wrap">';
                    if(groupID == null) print += '<button id="gr_save">Сохранить</button>';
                    else print += '<button id="gr_update">Сохранить</button>';
                    print += '</div>';
                    print += '</div>';
                    print += '</div>';
                    $('#sad-container').append(print);

                    $('#gr-number').val(data.gr_number);
                    $('#gr-age-limit').val(data.gr_ageLimit);
                    $('#gr-kolvo-mest').val(data.gr_seatsNumber);
                    $('#gr-kolvo-free-mest').val(data.gr_freeSeatsNumber);
                    $('#gr-price').val(data.gr_yearPrice);
                },
                error: function (data) {
                    alert("Error!");
                }
            });
            
            
            
            
        }

        function oneItemCheck(){
            var checkCount = 0;
            $('table input[type="checkbox"]').each(function(){
                if($(this).is(':checked')){
                    checkCount = checkCount + 1;
                }
            });
            if(checkCount == 0){alert('Пожалуйста, выберите пункт.'); return false;}
            if(checkCount == 1){return true;}
            if(checkCount >= 1){alert('Пожалуйста, выберите один пункт.'); return false;}
        }

        $('body').on('click', '#groups-menu', function(e){
            e.preventDefault();
            clearContainer();
            createGroupPage();
        });

        $('body').on('click', '#o-sade-menu', function(e){
            e.preventDefault();
            clearContainer();
            createInfoPage();
        });

        //Добавление группы
        $('body').on('click', '#add-group', function(e){
            e.preventDefault();
            clearContainer();
            createGroupForm();
        });
        $('body').on('click', '#gr_save', function(e){
            e.preventDefault();
            var gr_number = document.getElementById("gr-number").value;
            var gr_age_limit = document.getElementById("gr-age-limit").value;
            var gr_kolvo_mest = document.getElementById("gr-kolvo-mest").value;
            var gr_kolvo_free_mest = document.getElementById("gr-kolvo-free-mest").value;
            var gr_price = document.getElementById("gr-price").value;
            var gr_sad_id = getCookie("sadID");

            $.ajax({
                type: 'POST',
                url: "./backend/add_group.php",
                data: ({
                    gr_number: gr_number,
                    gr_age_limit: gr_age_limit,
                    gr_kolvo_mest: gr_kolvo_mest,
                    gr_kolvo_free_mest: gr_kolvo_free_mest,
                    gr_price: gr_price,
                    gr_sad_id: gr_sad_id
                }),
                success: function(data){
                    if(data == "1"){
                        alert("Группа успешно создана!");
                        clearContainer();
                        createGroupPage();
                    } else alert("Error");
                },
                error: function (data) {
                    alert("Error!");
                }
            })
        });

        //Редактирование группы
        $('body').on('click', '#update-group', function(e){
            e.preventDefault();
            var grID = $(this).parents('#group-list').find('.t-gr input[type="checkbox"]:checked').attr('id');
            setCookie("grID", grID);
            if(oneItemCheck()){
                clearContainer();
                createGroupForm(grID);
            }
        });
        $('body').on('click', '#gr_update', function(e){
            e.preventDefault();

            var gr_id = getCookie("grID");
            var gr_number = document.getElementById("gr-number").value;
            var gr_age_limit = document.getElementById("gr-age-limit").value;
            var gr_kolvo_mest = document.getElementById("gr-kolvo-mest").value;
            var gr_kolvo_free_mest = document.getElementById("gr-kolvo-free-mest").value;
            var gr_price = document.getElementById("gr-price").value;

            $.ajax({
                type: 'POST',
                url: "./backend/update_group.php",
                data: ({
                    gr_id: gr_id,
                    gr_number: gr_number,
                    gr_age_limit: gr_age_limit,
                    gr_kolvo_mest: gr_kolvo_mest,
                    gr_kolvo_free_mest: gr_kolvo_free_mest,
                    gr_price: gr_price
                }),
                success: function(data){
                    if(data == "1"){
                        alert("Группа успешно обновлена!");
                        clearContainer();
                        createGroupPage();
                    } else alert("Error");
                },
                error: function (data) {
                    alert("Error!");
                }
            })
        });

        //Удаление группы
        $('body').on('click', '#remove-group', function(e){
            e.preventDefault();
            var grID = $(this).parents('#group-list').find('.t-gr input[type="checkbox"]:checked').attr('id');
            if(oneItemCheck()){
                if(confirm("Вы уверены, что хотите удалить эту группу?")){
                    $.ajax({
                        url: "./backend/remove_group.php",
                        type:'POST',
                        data: ({gr_id: grID}),
                        success: function(data){
                            if(data == "1"){
                                alert("Группа успешно удалена!");
                                clearContainer();
                                createGroupPage();
                            } else alert("Er");
                            
                        },
                        error: function (data) {
                            alert("Error!");                            
                        }
                    });
                }
            }
        });

        $('body').on('click', '#sad_save', function(e){
            e.preventDefault();

            var sad_id = getCookie("sadID");
            var sad_name = document.getElementById("sad-name").value;
            var sad_address = document.getElementById("sad-address").value;
            var sad_tel = document.getElementById("sad-tel").value;
            var sad_regim = document.getElementById("sad-regim").value;
            var sad_description = document.getElementById("sad-description").value;

            $.ajax({
                type: 'POST',
                url: "./backend/update_sad.php",
                data: ({
                    sad_id: sad_id,
                    sad_name: sad_name,
                    sad_address: sad_address,
                    sad_tel: sad_tel,
                    sad_regim: sad_regim,
                    sad_description: sad_description
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

    });

}(jQuery));
