<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="np"></div>

    <form>
        <p>
            <div class="poisk" id="poiskovik">
            <input type="search" placeholder="Поиск">
            <input type="submit" value="Найти">
        </p>
        <input type="checkbox" id="side-checkbox"/>
            <div class="side-panel">
                <label class="side-button-2" for="side-checkbox">+</label>    
                <div class="side-title">Меню:</div>
                <li><a href="#glav"><font color="white">Главная</font></a></li>
                <li><a href="#osits"><font color="white">Контакты</font></a></li>
                <li><a href="regist.html"><font color="white">Регестрация</font></a></li>
                <li><a href="sigin.html"><font color="white">Вход</font></a></li>
                <li><a href="Taskes.html"><font color="white">Задания</font></a></li>
                <li><a href="#osits"><font color="white">О сайте</font></a></li>
                <div class="np"></div><hr>
                <div id ="option" class="option" hidden>
                <p>
                    <font color="white">Цвет: </font>
                    <input class="politra" type="color" id="col" list="color">
                    <datalist id="color"> 
                    <option value = "#ff0000" label="red">
                    </datalist>
                    <button class="btn" type ="button" onclick = nigcht()>OK</button>
                </p>
                <p>
                    <font color="white">Размер шрифта:</font><br>
                    <button id = "men" class="btn" type ="button" onclick = sizem()>меньше</button>
                    <button id = "bol" class="btn" type ="button" onclick = sizeb()>больше</button><br>
                    <button id = "df" class="btn" type ="button" onclick = def()>Стандартный размер</button><br>
                    <font color="white">Прозначность:</font><br>
                    <input id="opas" type="range" min="0" max="1" step="0.1" value ="1">
                    <button class="btn" type ="button" onclick = "ops_2()">OK</button><br>
                    <font color="white">Стили:</font><br>
                    <button id = "ss1" class="btn" type ="button" onclick = stylesg() >/</button>
                    <button id = "ss2" class="btn" type ="button" onclick = stylesr() >/</button>
                    <button id = "ss3" class="btn" type ="button" onclick = stylesb() >/</button><br>
                    <button id = "ss4" class="btn" type ="button" onclick = standarts()>Стандартный</button><br><hr>
                </p>  
                <p><input type="submit" value="Выйти из аккаунта" class="exit"></p>  
                </div>

            </div>
            <div class="side-button-1-wr">
                <label class="side-button-1" for="side-checkbox">
                    <div class="side-b side-open">Меню</div>
                    <div class="side-b side-close">Закрыть</div>
                </label>
            </div>
            <div id="info_user" hidden>
                <hr color="black" width="150px">
                <p>Введите почту: </p>
                <input id = "email" type = "email" name = "auth_email" placeholder="@mail.com" required>
                <p>Введите номер телефона:</p>
                <input id = "namber" type = "namber" name = "auth_namber" placeholder="+7" required>
                <p><button class="btncl" type ="button" onclick = nigcht()>OK</button></p>
                <p><sup>*это нужно для получения уведомлений</sup></p>
            </div>
    </form>

    <form class="php">
        <div class="PHP">
        <p>
            <?php
                try{
                    $conn = new PDO("mysql:host=localhost", "root", "12345q");
                    // $conn->setAttribute(PDO::ATTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // echo "Datebase connection:)";
                }
                catch (PDOException $e){
                    // echo "eror" . $e->getMessage();
                }
                // $query=("use RegUser;");
                // $user1 =("INSERT INTO user(name, password) VALUES ('Ваня', '12345')");
                // $result = $conn->exec($query);
                // $result = $conn->exec($user1);

                //заходим в бд
                $query=("use RegUser;");
                $result = $conn->exec($query);
                
                if(isset($_POST["auth_login"]) && isset($_POST["auth_pass"])){
                     //передаем значения
                    $login = $_POST["auth_login"];
                    $passs = $_POST["auth_pass"];
        
                    //добавляем данные в бд
                    $new_user = "INSERT INTO user(name, password) VALUES ('$login', '$passs')";
                    $result = $conn->exec($new_user);

                    //проверка вполнения
                    if($result == false){
                        echo '<script>alert("Ошибка")</script>';
                    }else{
                        echo '<script>alert("Успешно")</script>';
                    }

                }
                
                if(isset($_POST["login"]) && isset($_POST["pass"])){
                    //передаем значения ввода
                    $log_user = $_POST["login"];
                    $pass_user = $_POST["pass"];

                    //делаем запрос в бд
                    $poisc_name = "SELECT id, name, CAST(password as char(50)) as password FROM user;";
                    $result = $conn->query($poisc_name);
                    
                    //делаем поиск по списку 
                    foreach($result as $row){
                        $id = $row["id"];
                        $name_person = $row["name"];
                        $pass = $row["password"];
                        // print ($name_person);
                        // print ($pass);
                        //сравниваем занчения введеные и данные из бд
                        if($log_user == $name_person && $pass_user == $pass){
                            echo '<script>
                                document.getElementById("option").hidden = false;
                                document.getElementById("info_user").hidden = false;
                                // document.getElementById("infos").hidden = hidden;
                                alert("Вам доступные новые функции")
                            </script>';
                            break;
                        }else{
                            echo '<script>alert("Нверный логин или пароль")</script>';
                        }
                    }   
                    
                    //проверка вполнения
                    // if($result == false){
                    //     echo '<script>alert("Ошибка")</script>';
                    // }else{
                    //     echo '<script>alert("Успешно")</script>';
                    // }

                }
                
                //делаем запрос в бд
                $poisc_color= "SELECT * FROM color;";
                $result = $conn->query($poisc_color);

                foreach($result as $row){
                    $id = $row["id"];
                    $name = $row["name"];
                    $name_16 = $row["name_16"];
                    // print($name ." " .$name_16. " ");
                }   
                // echo '<p>
                //         <li><font color="white">''</font></li>
                //         <li><font color="white">''</font></li>
                //         <li><font color="white">''</font></li>
                //     </p>'
                // $link = mysql_conn("localhost", "root", "")
                // $sql = 'INSERT INTO user SET name = "Иван"';
                
                // $result = mysql_query($link, $sql)
                // if($result == false){
                //     print("Произошла ошибка при выполнении запроса")
                // }

                // if(isert($_POST["lang"])){
                //     $lang = $_POST["lang"];
                //     echo $lang;
                // }
            ?>
        </p>
        </div>    
    </div>
    </form>

    <div class="panel" id="pan">
        <div class="title">
            <p><h2><font color="white">Привет, вот немного о моём лете.</font></h2></p>
        </div>
        <p id="infos" hidden = false>Войдите в свой аккаунт чтобы увидеть всю информацию.</p>

        <div id="pan_infos" class="pan_infos" >
        <div id="glav" class="txt">
            <p>
                <img class="img" src="/image/foto.PNG">
                <span>21.07.2023</span><br>
                Это я отдыхаю в Крыму. Я плавал с аквалангов и видел много красивых рыб, а так же водных растений. 
            </p>
        </div>
        <br>
        <hr>
        <div class="txt">
            <p>
                <img class="img" src="/image/foto2.PNG">
                <span>16.08.2023</span><br>
                В конце лета я с друзьями поехал в палаточный лагерь. Мы были на берегу озура в Демьянске. Там было очень красиво.
            </p>
        </div>
        <br>
        <hr>

        <div class="txt">
            <p>
                <img class="img" src="/image/foto3.PNG">
                <span>25.08.2023</span><br>
                После лагеря мы решили сьездить на карьер. Теперь это моё самое любимое место там очень красиво и очень чистая вода. Плавать там одно удавольствие.
            </p>
        </div>
        <br>
        <hr>
        <p>
            <p></p>
        </p>
        <!-- <details>
            <summary>
                Мои хобби;)
            </summary>
            <ul>
                <li>Волейбоил</li>
                <li>Путишествия</li>
                <li>Футбо</li>
            </ul>
        </details> -->
        <!-- <p> -->
        <!-- <input id = "poisk" type = "poisk" name = "auth_naiti" placeholder="Что найти?" required> -->
        <!-- <button class="btn" type ="button" onclick = pr()>Найти</button><br>
        </p>
        <button id = "cl" class="btn" type ="button" onclick = rgb()>Цвета</button><br>
        <p>Дан массив [-1, 2, 5, -6, 0, 7, "Иван", "Марья"].<br>Вывести положителные числа этого массива.</p>
        <p id="otv"></p> -->

        <!-- <form>
            <p><h3>//Небольшой опрос</h3></p>
            <p>
                Какие языки ты знаешь?<br>
                <input type="checkbox" name="lang" value="1C"/>1C<br>
                <input type="checkbox" name="lang" value="1C"/>Python<br>
                <input type="checkbox" name="lang" value="1C"/>C#<br>
                <input type="checkbox" name="lang" value="1C"/>PHP<br>
                <input type="submit" value="отправить">
            </p>
        </form>
        <br> -->
        <hr>

        <!-- <p>Какой знаешь язык лучше всего?</p>
        <form method ="POST">
            <select name = "lang" size="1">
                <option value="C++">C++<option>
                <option value="PHP">PHP<option>
                <option value="HTML">HTML<option>
            </select>
            <input type="submit" value="отправить">
        </form>
        <br>
        <hr> -->

        <p>Какие хочешь выучить?</p>
        <form method ="POST">
            <select name = "lang[]" size="2" multiple="multiple">
                <option value="C++">C++</option>
                <option value="PHP">PHP</option>
                <option value="HTML">HTML</option>
                <option value="Python">Python</option>
                <option value="C#">C#</option>
            </select>
            <input type="submit" value="отправить">
        </form>
        <br>
        <hr>
        <?php
            if($_POST["lang"] != NULL){
                $langs = $_POST["lang"];
                foreach($langs as $item){
                    echo ($item);
                }
            }
        ?>

        <p>
        <button id = "btn" class="btn" type ="button" onclick = sm()>Вычеслить</button>
        <button id = "btn" class="btn" type ="button" onclick = ran()>Вывести рандомное число</button><br><hr>
        </p>

        <video src="/image/_import_61a85d93bd0254.08110474_FPpreview.mp4" poster="/image/poster.PNG" width="400" height="200" controls></video>
        <br>
        <hr>
        <div id="contact">
            <p><h3>Меня можно найти по адресу:</h3></p>
            <div  class = "carta "style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/gbou_mo_kolledzh_podmoskovye_korpus_7/1010401519/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">ГБОУ МО колледж Подмосковье, корпус № 7</a><a href="https://yandex.ru/maps/21641/lobnja/category/college/184106236/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Колледж в Лобне</a><iframe src="https://yandex.ru/map-widget/v1/?ll=37.482834%2C56.006170&mode=search&oid=1010401519&ol=biz&z=16.3" width="400" height="200" frameborder="1" allowfullscreen="true" style="position:relative;">
            </iframe></div><br>
            <p><h3>Мои соц. сети:</h3></p>
            <p>
                <a href="https://vk.com/serzmi"><img src="/image/vk.png" width="50" 
                height="50"></a>
                <a href="https://www.instagram.com/"><img src="/image/inst.png" width="55" 
                height="50"></a>
                <a href="https://web.telegram.org/k/"><img src="/image/tg.jpg" width="55" 
                height="50"></a>
            </p>
        </div>
        <br>
         <!-- <figure>
            <figcaption>Просто красиво</figcaption>
            <img src="/2023/Sites/Site1/fotos1.PNG" alt="пузырьки" width="400" height="200">
        </figure>    -->
        </div>

        <hr>
        <div>
            <p id="osits" class="eding">
                <h5><sup>Учебная практика ИСИП 20.20</sup></h5>
                <h5><sup>Алехин Сергей</sup></h5>
                <a href = '#top'>На верх</a>
            </p>
        </div>

    </div>
    <!-- <form> -->
        <!-- <input type="checkbox" id="side-checkbox"/>
            <div class="side-panel">
                <label class="side-button-2" for="side-checkbox">+</label>    
                <div class="side-title">Меню:</div>
                <li><a href="#glav"><font color="white">Главная</font></a></li>
                <li><a href="#osits"><font color="white">Контакты</font></a></li>
                <li><a href="regist.html"><font color="white">Регестрация</font></a></li>
                <li><a href="sigin.html"><font color="white">Вход</font></a></li>
                <li><a href="#osits"><font color="white">О сайте</font></a></li>
            </div>
            <div class="side-button-1-wr">
                <label class="side-button-1" for="side-checkbox">
                    <div class="side-b side-open">Меню</div>
                    <div class="side-b side-close">Закрыть</div>
                </label>
            </div>
    </form> -->
    <script src="main.js"></script>
</body>

</html
