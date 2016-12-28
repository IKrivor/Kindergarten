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
                    print += '<div class="col-md-4">';
                    print += '<div id="no_img">';
                    print += '<img src="frontend/img/photo-camera.png" id="img_no"/>';
                    print += '</div>';
                    print += '</div>';
                    print += '<div class="col-md-8">';
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
                    print += '<label id="label-lic">Главное фото</label>';
                    print += '<input type="file" name="uploader-main-photo" id="uploader-main-photo" placeholder="Главное фото детского сада">';
                    print += '</div>';
                    print += '</div>';
                    print += '</div>';
                    print += '</div>';
                    print += '<div class="row">';
                    print += '<div class="dashed-place">';
                    print += '<div class="title">Галерея</div>';
                    print += '<div id="choice-photo">';
                    print += '<div class="inp-wrap">';
                    print += '<label id="label-lic">Добавить фото</label>';
                    print += '<button id="load-photo">Загрузить</button>';
                    print += '<input type="file" name="uploader-photo" id="uploader-photo" placeholder="Фото детского сада">';
                    print += '</div>';
                    print += '</div>';
                    print += '</div>';
                    print += '</div>';
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

            var print = '<div class="row">';
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
                        print += '<tr>';
                            print += '<td class="t-gr"><input id="gr1" type="checkbox" class="user-checkbox"><label for="gr1"><span></span></label></td>';
                            print += '<td class="t-gr t-num">1</td>';
                            print += '<td class="t-gr">10</td>';
                            print += '<td class="t-gr">5</td>';
                            print += '</tr>';
                        print += '<tr>';
                            print += '<td class="t-gr"><input id="gr2" type="checkbox" class="user-checkbox"><label for="gr2"><span></span></label></td>';
                            print += '<td class="t-gr t-num">2</td>';
                            print += '<td class="t-gr">12</td>';
                            print += '<td class="t-gr">3</td>';
                        print += '</tr>';
                    print += '</tbody>';
                print += '</table>';
                print += '</div>';
            $('#sad-container').append(print);
        }

        //Очищает контейрнер
        function clearContainer() {
            $('#sad-container').html("");
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

        createInfoPage();

    });

}(jQuery));
