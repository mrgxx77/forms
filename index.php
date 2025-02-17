<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>Форми</h1>
    <div class="wrapper flex-between">
        <form action="one.php" method="post">
            <div class="simple-form">
                <h2>01. проста форма</h2>
                <lable>
                    <p><input type="text" placeholder="Введіть ім’я" name="userName"></p>
                </lable>
                <lable>
                    <p><input type="email" placeholder="Email" name="email"></p>
                </lable>
                <p>
                    <select name="city" id="g">
                        <option value="Ваше місто" selected disabled>Ваше місто</option>
                        <option value="Хмельницький">Хмельницький</option>
                        <option value="Житомир">Житомир</option>
                        <option value="Львів">Львів</option>
                        <option value="Київ">Київ</option>
                        <option value="Харків">Харків</option>
                    </select>
                </p>
                <p>
                    <textarea name="about_email" id="d" placeholder="Email"></textarea>
                </p>
                <button type="submit">Зареєструватися</button>
            </div>
        </form>
        <form action="six.php" method="post">
            <div class="fixed_form">
                <h2>06. фіксована форма</h2>
                <div class="lll">
                    <label>Логін
                        <p><input type="text" name="login"></p>
                    </label>
                    <label>Пароль
                        <p><input type="text" name="password"></p>
                    </label>
                    <p class="l">Забули пароль?</p>
                    <label>
                        <span class="check">
                            <input type="checkbox" name="remember_password" value="1">
                            <span></span>
                        </span>
                        <span>Запам’ятати пароль</span>
                    </label>
                    <input type="hidden" name="login" value="<?= $login ?>">
                    <input type="hidden" name="password" value="<?= $password ?>">
                    <input type="hidden" name="remember_password" value="<?= $remember_password ?>">

                    <button type="submit">Увійти</button>
                </div>
            </div>
        </form>
    </div>

    <form action="two.php" method="post">
        <div class="wrapper">
            <hr>
            <div class="elements">
                <h2>02. елементи</h2>
                <div class="flex-between">
                    <div class="radio">
                        <label>
                            <p><input type="radio" name="pickup" value="Mail">Нова Пошта</p>
                        </label>
                        <label>
                            <p><input type="radio" name="pickup" value="Courier">Кур’єр</p>
                        </label>
                        <label>
                            <p><input type="radio" name="pickup" disabled>Самовивіз</p>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <p>
                                <span class="check">
                                    <input type="checkbox" name="check" value="read">
                                    <span></span>
                                </span>
                                <span>Прочитав умови договору</span>
                            </p>
                        </label>
                        <label>
                            <p>
                                <span class="check">
                                    <input type="checkbox" name="check" value="Consonant">
                                    <span></span>
                                </span>
                                <span>Згідний з ПДВ 9%</span>
                            </p>
                        </label>
                        <label>
                            <p>
                                <span class="check">
                                    <input type="checkbox" name="check" disabled>
                                    <span></span>
                                </span>
                                <span>Отримувати новини на ел. пошту</span>
                            </p>
                        </label>
                    </div>
                    <div class="insert">
                        <label class="nss flex-between">Статус
                            <span><input type="checkbox" name="status" value="new"></span>
                            <span></span>
                            <p>Новинки</p>
                            <span><input type="checkbox" name="status" value="shares"></span>
                            <span></span>
                            <p>Акційні товари</p>
                            <span><input type="checkbox" name="status" value="sale"></span>
                            <span></span>
                            <p>Розпродаж</p>
                        </label>
                        <label class="flex-between">Дата
                            <p><input type="datetime-local"></p>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </form>
    <form action="three.php" method="post">
        <div class="wrapper">
            <div class="checkboxes">
                <h2>03. стилізовані чекбокси</h2>
                <div class="flex-between">
                    <div class="human">
                        <label class="mann flex-between"><input type="checkbox"><p>Чоловік</p></label>
                        <label class="womann flex-between"><input type="checkbox"><p>Жінка</p></label>
                    </div>
                    <div class="dddd">
                        <label>
                            <input type="checkbox">Отримувати новини
                            <span class="slider"></span>
                        </label>
                        <label>
                            <input type="checkbox">Купити додому ковбаси
                            <span class="slider"></span>
                        </label>
                        <label>
                            <input type="checkbox">Включити світло
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class=""></div>
            </div>
            <hr>
        </div>
    </form>
    <form action="four.php" method="post">
        <div class="wrapper">
            <div class="table-form">
                <h2>04. форма таблицею</h2>
                <div class="ggg">
                    <h2>Заповніть усі необхідні поля</h2>
                    <div class="flex-between">
                        <div class="text">
                            <p>ФІО:</p>
                            <p>Пароль:</p>
                            <p>Місто:</p>
                            <p>Стать:</p>
                            <p>Фото:</p>
                            <p>Коментарій:</p>
                        </div>
                        <div class="inputiki">
                            <p><input type="text" placeholder="Введіть ім’я" name="UserName"></p>
                            <p><input type="text" placeholder="Введіть не менше 6 символів" minlength="6" name="password"></p>
                            <p><select name="City" id="n">
                                    <option value="Ваше місто" selected disabled>Ваше місто</option>
                                    <option value="Хмельницький">Хмельницький</option>
                                    <option value="Житомир">Житомир</option>
                                    <option value="Львів">Львів</option>
                                    <option value="Київ">Київ</option>
                                    <option value="Харків">Харків</option>
                                </select></p>
                            <div class="r-human">
                                <label>
                                    <p><input type="radio" name="human" value="man">Чоловік</p>
                                </label>
                                <label>
                                    <p><input type="radio" name="human" value="woman">Жінка</p>
                                </label>
                            </div>
                            <p><input type="file" name="file"></p>
                            <p><textarea name="text" id="s" placeholder="Введіть текст повідомлення"></textarea></p>
                            <button type="submit">Зареєструватися</button>
                        </div>
                    </div>
                    <!-- <label>
                        <p>ФІО:<input type="text" placeholder="Введіть ім’я"></p>
                    </label>
                    <label>
                        <p>Пароль:<input type="text" placeholder="Введіть не менше 6 символів" minlength="6"></p>
                    </label>
                    <label>Місто:
                        <select name="City" id="n">
                            <option value="Ваше місто" selected disabled>Ваше місто</option>
                            <option value="Хмельницький">Хмельницький</option>
                            <option value="Житомир">Житомир</option>
                            <option value="Львів">Львів</option>
                            <option value="Київ">Київ</option>
                            <option value="Харків">Харків</option>
                        </select>
                    </label>
                    <label class="flex-between">Стать:
                        <p><input type="radio">Чоловік</p>
                        <p><input type="radio">Жінка</p>
                    </label>
                    <label>Фото:
                        <p><input type="text"></p>
                    </label>
                    <label>Коментарій:
                        <p><textarea name="text" id="s" placeholder="Введіть текст повідомлення"></textarea></p>
                    </label>
                    <label>
                        <p><input type="submit"></p>
                    </label> -->
                </div>
            </div>
            <hr>
        </div>
    </form>
    <form action="five.php" method="post">
        <div class="wrapper">
            <div class="table-form-five">
                <h2>05. форма таблицею</h2>
                <div class="ddd">
                    <div class="flex-between">
                        <label>Прізвище та ім’я
                            <p><input type="text" name="userName"></p>
                        </label>
                        <label>Ел. пошта
                            <p><input type="email" name="email"></p>
                        </label>
                        <label>Телефон
                            <p><input type="tel" name="tel"></p>
                        </label>
                    </div>
                    <span>
                        <hr>
                    </span>
                    <div class="flex-between">
                        <label>Країна
                            <p class="county">
                                <select name="country" id="p">
                                    <option value="Ваша країна" selected disabled>Ваша країна</option>
                                    <option value="Індонезія">Індонезія</option>
                                    <option value="Україна">Україна</option>
                                    <option value="Польща">Польща</option>
                                    <option value="Молдова">Молдова</option>
                                    <option value="Німеччина">Німеччина</option>
                                </select>
                            </p>
                        </label>
                        <label>Адреса
                            <p class="adress"><input type="text" name="adress"></p>
                        </label>
                    </div>
                    <div class="aa flex-between">
                        <label>Місто
                            <p><input type="text" name="city"></p>
                        </label>
                        <label>Будинок
                            <p><input type="text" name="house"></p>
                        </label>
                        <label>Поштовий індекс
                            <p><input type="text" name="mail_index"></p>
                        </label>
                    </div>
                    <span>
                        <hr>
                    </span>
                    <label class="agree">
                        <input type="checkbox" name="agree" value="1"><p>Я погоджуюсь з правилами оплати та доставки товару</p>
                    </label>
                    <span>
                        <hr>
                    </span>
                    <div class="sss flex-between">
                        <button type="submit" class="send" name="go_back">Повернутися назад</button>
                        <button type="submit" class="send" name="make_purchase">Оформити покупку</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>