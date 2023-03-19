<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="adminstyle.css">
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
  <link rel="icon" type="../image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
  <link rel="icon" type="../image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
  <link rel="manifest" href="../favicon/site.webmanifest">
  <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#a9a9a9">
  <meta name="msapplication-config" content="../favicon/browserconfig.xml">
  <meta name="theme-color" content="#a9a9a9">
  <title>
    Админка нах
  </title>
</head>
<body class="style">

  <div class="content">
    <h3><center>Форма добавления в базу</center></h3>
    <form method="post" class="input">
      <div class="cols">
        <div class="item">

          <center><label class="zag">Основная информация</label></center>

          <label for="name" class="name">ФИО</label>
          <input type="text" class="name-in" name="name" role="1" id="name" placeholder="Иванов Иван Иванович" title="Фамилия, Имя, Отчество. Полностью" required="required" aria-required="true">

          <label for="family_old" class="family_old">Девичья фамилия</label>
          <input type="text" class="family_old-in" name="family_old" id="family_old" placeholder="Корякова" title="Девичья или старая фамилия, если есть." required="required" aria-required="true">

          <label for="birth" class="birth">Дата рождения</label>
          <input type="date" class="birth-in" name="birth" id="birth" required="required" aria-required="true">

          <label for="cat" class="cat">Категория</label>
          <select class="cat-in" name="cat-in" id="cat" required="required" aria-required="true">
            <option value="1" id="0">Автолюбители</option>
            <option value="2" id="1">Интернет бойцы</option>
            <option value="3" id="2">Чиновники</option>
            <option value="4" id="3">Силовики</option>
            <option value="5" id="4">Судьи</option>
            <option value="6" id="5">Военные</option>
            <option value="7" id="6">Заключённые</option>
            <option value="8" id="7">Груз 200</option>
            <option value="9" id="8">ЛОМы</option>
            <option value="10" id="9">Пропагандисты</option>
            <option value="11" id="10">Провластные организации</option>
            <option value="12" id="11">Фальсификаторы</option>
            <option value="12" id="11">Не определена</option>
          </select>

          <label for="criminal" class="criminal">Судимости по УК</label>
          <input type="text" class="criminal-in" name="criminal" id="criminal" placeholder="105 ч.2, 213 ч.1, 328 ч. 1" title="Если есть судимости перечислить через запятую в формате 105 ч.2, 213 ч.1, 328 ч. 1">
        </div>

        <div class="item">
          <center><label class="zag">Фото профиля</label></center>
          <div style="height: 240px; width: 180px; background-image: url(../image/fot.jpg); background-size: 100% 100%; margin: 4px auto;">
          </div>
          <input type="file" class="face-in" name="face-in" id="face" title="Аватар, обязательно должно быть хорошо видно лицо." required="required" aria-required="true">
        </div>
        <div class="item">

          <center><label class="zag">Пруфы</label></center>

          <div style="height: 180px; width: 240px; background-image: url(../image/fot2.jpg); background-size: 100% 100%; margin: 4px auto;">
          </div>
          <label for="photo" class="photo">Фото доказательство</label>
          <input type="file" class="photo-in" name="photo-in" multiple="multiple" id="photo" title="Фото машины с Z, фото с символикой, скриншот поста или переписки и т.д." required="required" aria-required="true">

          <label for="url_doc" class="url_doc">Ссылка на архив drive.google.com</label>
          <input type="text" class="url_doc-in" name="url_doc" id="url_doc" placeholder="https://drive.google.com/file/d/0BwH_Sd" title="Прямая ссылка на скачивание архива с гугл диска.">

          <label for="url_video" class="url_video">Ссылка на видео YouTube</label>
          <input type="text" class="url_video-in" name="url_video" id="url_video" placeholder="https://youtu.be/L_dWvTCdDQ4" title="Прямая ссылка на видео">
        </div>

      </div>
      <div class="cols">

        <div class="item">

          <center><label class="zag">Адрес</label></center>

          <label for="country" class="country">Страна</label>
          <input type="text" class="country-in" name="country-in" id="country" placeholder="Россия" title="На русском языке, полностью.">

          <label for="region" class="region">Регион</label>
          <input type="text" class="region-in" name="region-in" id="region" placeholder="Тверская область" title="Край, область. На русском языке, полностью.">

          <label for="сity" class="сity">Город</label>
          <input type="text" class="сity-in" name="сity-in" id="сity" placeholder="Тверь или дер. Кукушкино Ржевский район" title="Населённый пункт. На русском языке, полностью.">

          <label for="address" class="address">Адрес</label>
          <input type="text" class="address-in" name="address-in" id="address" placeholder="пр-т Ленина, 78, корп. 4, кв. 49" title="Улица, дом, корпус, квартира. На русском языке, полностью.">
        </div>




        <div class="item">

          <center><label class="zag">Документы</label></center>

          <label for="passport" class="passport">Паспорт</label>
          <input type="text" class="passport-in" name="passport-in" id="passport" placeholder="1234 567890" title="Серия и номер">

          <label for="out" class="out">Выдан</label>
          <input type="text" class="out-in" name="out-in" id="out" placeholder="22.11.2022, УМВД России по Тверской области в центральном районе города Твери, 123-456" title="Когда, кем, код подразделения">

          <label for="snils" class="snils">СНИЛС</label>
          <input type="text" class="snils-in" name="snils-in" id="snils" placeholder="123-456-789 12" title="Пример: 123-456-789 12">

          <label for="inn" class="inn">ИНН</label>
          <input type="text" class="inn-in" name="inn-in" id="inn" placeholder="69 1234567890" title="Пример: 69 1234567890">

          <label for="oms" class="oms">ПОЛИС ОМС</label>
          <input type="text" class="oms-in" name="oms-in" maxlength="16" id="oms" placeholder="1234-1234-1234-1234" title="Пример: 1234-1234-1234-1234">

          <label for="vu" class="vu">Водительское удостоверение</label>
          <input type="text" class="vu-in" name="vu-in" maxlength="16" id="vu" placeholder="12 23 123456" title="Пример: 12 23 123456">
        </div>

        <div class="item">

          <center><label class="zag">Контактная информация</label></center>

          <label for="tel" class="tel">Телефон</label>
          <input type="tel" class="tel-in" name="tel-in" maxlength="12" id="tel" placeholder="+79001234567" title="Сотовый телефон в формате +79001234567">

          <label for="email" class="email">Электронная почта</label>
          <input type="email" class="email-in" name="email-in" id="email" placeholder="alex@gmail.com" title="Пример: alex@gmail.com">

        </div>

        <div class="item">
          <label for="auto" class="auto">АВВВТОМОБИЛЬ!</label>
          <textarea class="auto-in" rows="5" name="auto-in" rows="3" id="auto" placeholder="Toyota Land Cruiser 200 2020 г. UU1КSD0D538316811 Ч001МО 69RUS" title="Марка, модель, год, VIN, ГРЗ &quot;Toyota Land Cruiser 200 2020 г. UU1КSD0D538316811 Ч001МО 69RUS&quot;"></textarea>
        </div>

      </div>
      <div class="cols">

        <div class="item">

          <center><label class="zag">Соцсети</label></center>

          <label for="vk" class="vk">VK</label>
          <input type="text" class="vk-in" name="vk-in" id="vk" placeholder="https://vk.com/id12345687" title="Ссылка на VK с ID. Узнать ID можно при помощи сервиса https://regvk.com/">

          <label for="ok" class="ok">OK</label>
          <input type="text" class="ok-in" name="ok-in" id="ok" placeholder="https://ok.ru/profile/123456789000" title="Ссылка на OK с ID.">

          <label for="fb" class="fb">FaceBook</label>
          <input type="text" class="fb-in" name="fb-in" id="fb" placeholder="https://www.facebook.com/234324325523" title="Ссылка на FaceBook.">

          <label for="inst" class="inst">Instagram</label>
          <input type="text" class="inst-in" name="inst-in" id="inst" placeholder="https://www.instagram.com/insta_ze4ka/" title="Ссылка на instagram.">

          <label for="twitter" class="twitter">Twitter</label>
          <input type="text" class="twitter-in" name="twitter-in" id="twitter" placeholder="https://twitter.com/qwerty" title="Ссылка на Twitter">

          <label for="mw" class="mw">Мой мир</label>
          <input type="text" class="mw-in" name="mw-in" id="mw" placeholder="https://my.mail.ru/mail/qwerty/" title="Ссылка на Мой мир.">

          <label for="mamba" class="mamba">Mamba</label>
          <input type="text" class="mamba-in" name="mamba-in" id="mamba" placeholder="https://www.mamba.ru/ru/profile/123456789" title="Ссылка на Mamba.">

          <label for="dzen" class="dzen">Dzen</label>
          <input type="text" class="dzen-in" name="dzen-in" id="dzen" placeholder="https://dzen.ru/ovdinfo" title="Ссылка на Dzen.">

          <label for="avito" class="avito">Avito</label>
          <input type="text" class="avito-in" name="avito-in" id="avito" placeholder="https://www.avito.ru/user/42d5e286e" title="Ссылка на Avito.">

          <label for="tiktok" class="tiktok">TikTok</label>
          <input type="text" class="tiktok-in" name="tiktok-in" id="tiktok" placeholder="https://www.tiktok.com/@qwerty" title="Ссылка на TikTok.">

          <label for="lj" class="lj">LiveJournal</label>
          <input type="text" class="lj-in" name="lj-in" id="lj" placeholder="https://navalny.livejournal.com/" title="Ссылка на LiveJournal.">

          <label for="youtube" class="youtube">YouTube</label>
          <input type="text" class="youtube-in" name="youtube-in" id="youtube" placeholder="https://www.youtube.com/channel/UCkL9y-c" title="Ссылка на YouTube">

        </div>
        <div class="item">

          <h4><center>Мессенджеры</center></h4>

          <label for="telegram" class="telegram">Telegram</label>
          <input type="text" class="telegram-in" name="telegram-in" id="telegram" placeholder="+79001234567" title="Номер телефона на который привязан Telegram">

          <label for="tg_id" class="сtg_id">ID</label>
          <input type="text" class="tg_id-in" name="tg_id-in" id="tg_id" placeholder="123456789" title="Telegram ID">

          <label for="viber" class="viber">Viber</label>
          <input type="text" class="viber-in" name="viber-in" id="viber" placeholder="+79001234567" title="Номер телефона на который привязан Viber">

          <label for="wa" class="wa">WhatsApp</label>
          <input type="text" class="wa-in" name="wa-in" id="wa" placeholder="+79001234567" title="Номер телефона на который привязан WhatsApp">

          <label for="isq" class="isq">ICQ</label>
          <input type="text" class="isq-in" name="isq-in" id="isq" placeholder="https://icq.im/qwerty@mail.ru" title="Ссылка на ICQ">

          <label for="other" class="other">Другие соц-сети и мессенджеры</label>
          <textarea class="other-in" name="other-in" rows="5" id="other" placeholder="https://t.me/qwerty https://www.facebook.com/qwerty и т.д." title="Ссылки на дополнительные или старые соц-сети через пробел. "></textarea>
        </div>

      </div>
      <div class="cols">

        <div class="item">

          <center><label class="zag">Занятость</label></center>

          <label for="educ" class="educ">Образование</label>
          <input type="text" class="educ-in" name="educ-in" id="educ" placeholder="Инженер ТВГТУ Тверь, Курсант ТСУ Тверь" title="Инженер ТВГТУ Тверь, Курсант ТСУ Тверь  и т.д. через запятую.">

          <label for="job" class="job">Место работы</label>
          <input type="text" class="job-in" name="job-in" id="job" placeholder="ООО &quot;РиК&quot;, ЗАО &quot;Барыги&quot; " title="ООО &quot;РиК&quot;, ЗАО &quot;Барыги&quot;   и т.д. через запятую.">

          <label for="post" class="post">Должность</label>
          <input type="text" class="post-in" name="post-in" id="post" placeholder="Старший специалист по чистке унитазов.">

          <label for="mov" class="mov">Движения</label>
          <input type="text" class="mov-in" name="mov-in" id="mov" placeholder="НОД, Молодая Гвардия Единой России, НАШИ, Юнармия, ЛДПР" title="Участие в общественных движениях, партиях, организациях.">
        </div>

        <div class="item">

          <center><label class="zag">Связи</label></center>

          <label for="members" class="members">Родственники</label>
          <input type="text" class="members-in" name="members-in" id="members" placeholder="Иванова Фёкла Николаевна (жена), Иванова Мария Ивановна (дочь)" title="Перечислить родственников запятую указывая в скобках через пробел кем приходится. &quot;Иванова Фёкла Николаевна (жена), Иванова Мария Ивановна (дочь)&quot;">

          <label for="social" class="social">Знакомые</label>
          <input type="text" class="social-in" name="social-in" id="social" placeholder="Торопов Максим Александрович (ОПГ Дружина Афанасий), Савин Руслан Александрович (ОПГ Дружина Афанасий)" title="Перечислить знакомых, соратников, единомышленников и прочих связанных лиц из круга общения. через запятую указывая в скобках через пробел кем приходится. &quot;Торопов Максим Александрович (ОПГ Дружина Афанасий), Савин Руслан Александрович (ОПГ Дружина Афанасий)&quot;">

          <label for="tegs" class="tegs">Теги</label>
          <input type="text" class="tegs-in" name="tegs-in" id="tegs" placeholder="#ОПГАфанасий #Руденя #ЛДПР #ЛОМ" title="Теги связывающие человека с чем либо. Перечислить через запятую" required="required" aria-required="true">
        </div>

        <div class="item">
          <label for="comment" class="comment">Комментарий для публикации на сайте.</label>
          <textarea class="comment-in" rows="20" name="comment-in" maxlength="2500" id="comment" placeholder="Дорогая Валентина, видя, как яро ваш муж поддерживает войну, у нас вызывает искреннее недоумение, почему Евгений ещё не на фронте. Советуем немедленно исправить эту ситуацию и обратиться в военный комиссариат по Тверской области (+7 482 235-98-56)" title="Пишите красиво, грамотно. Данный комментарий по сути является мини постом в карточке деанона. Максимум 2500 символов." required="required" aria-required="true"></textarea>
        </div>

        <div class="item">
          <label for="comment_admin" class="comment_admin">Скрытый комментарий не для публикации на сайте</label>
          <textarea class="comment_admin-in" rows="10" name="comment_admin-in" maxlength="2500" id="comment_admin" placeholder="Знает где лежат ядерные ракеты, давал взятки Губеру, редкостный пидорас." title="Рабочие моменты, тайны, секреты."></textarea>
        </div>

        <div class="item">
          <button type="button" class="btn" name="btn" style="success" id="btn">Сохранить</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
