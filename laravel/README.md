<h2>1. Зайти в папку .docker и запустить докер используя команду <u>docker-compose up</u></h2>
<h2>2. Подождать пока composer установит все компоненты (это может занять до нескольких минут)</h2>
<h2>3. Внутри контейнера запустить команду <br />php artisan migrate:fresh --seed --seeder=DatabaseSeeder</h2>
<h3>Сервис теперь доступен на http://localhost:8080</h3>

<p>Пакет для Postman можно импортировать используя файл: test28.postman_collection.json который есть в проекте</p>
<p>Все запросы по адресу /api/v1/ <u>не требуют</u> авторизации</p>
<p>Все запросы по адресу /api/v2/ <b>требуют</b> авторизации, правда там всего один запрос в этом примере :)</p>

<h2>Получить авторизационный токен</h3>
<p>Выполнить GET запрос http://localhost:8080/api/v1/auth/login в ответ выдаст авторизационный токен</p>
<p>который при необходимость вставить в заголовки запроса <br />&nbsp;Authorization: Bearer 'token'</p>
