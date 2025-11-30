<?php
// require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
// $APPLICATION->SetTitle("О курсах иностранных языков");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Подключение Tailwind (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Курсы иностранных языков</title>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Hero блок -->
    <header class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-24">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Курсы иностранных языков
            </h1>
            <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto">
                Современная методика, квалифицированные преподаватели и комфортная среда обучения.
            </p>
            <a href="#programs"
               class="mt-8 inline-block bg-white text-blue-700 px-8 py-3 rounded-xl shadow-md text-lg font-medium hover:bg-blue-50 transition">
                Смотреть программы
            </a>
        </div>
    </header>

    <!-- Преимущества -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Почему выбирают нас</h2>
            <div class="grid md:grid-cols-3 gap-10">

                <div class="bg-white rounded-xl shadow p-8">
                    <h3 class="text-xl font-semibold mb-3">Опытные преподаватели</h3>
                    <p class="text-gray-600">
                        Наши преподаватели — носители языка и сертифицированные специалисты.
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow p-8">
                    <h3 class="text-xl font-semibold mb-3">Современные методики</h3>
                    <p class="text-gray-600">
                        Используем коммуникативный подход, интерактивные задания и актуальные материалы.
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow p-8">
                    <h3 class="text-xl font-semibold mb-3">Удобный формат</h3>
                    <p class="text-gray-600">
                        Обучение в группах, индивидуально или онлайн — выбирайте удобный формат.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Программы -->
    <section id="programs" class="py-20 bg-gray-100">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Наши программы</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

                <div class="bg-white rounded-xl shadow p-6 flex flex-col">
                    <h3 class="text-xl font-semibold mb-2">Английский язык</h3>
                    <p class="text-gray-600 flex-grow">
                        Уровни от A1 до C2. Готовимся к IELTS, TOEFL, Cambridge Exams.
                    </p>
                    <a href="#" class="mt-4 inline-block text-blue-600 font-medium hover:underline">
                        Узнать больше →
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow p-6 flex flex-col">
                    <h3 class="text-xl font-semibold mb-2">Немецкий язык</h3>
                    <p class="text-gray-600 flex-grow">
                        Подготовка к экзаменам Goethe-Zertifikat. Говорим свободно уже через 3 месяца.
                    </p>
                    <a href="#" class="mt-4 inline-block text-blue-600 font-medium hover:underline">
                        Узнать больше →
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow p-6 flex flex-col">
                    <h3 class="text-xl font-semibold mb-2">Французский язык</h3>
                    <p class="text-gray-600 flex-grow">
                        Динамичные уроки, интерактивные задания и поставленная произносительная база.
                    </p>
                    <a href="#" class="mt-4 inline-block text-blue-600 font-medium hover:underline">
                        Узнать больше →
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Запись -->
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Готовы начать обучение?</h2>
            <p class="text-gray-600 mb-10 max-w-2xl mx-auto">
                Оставьте заявку, и мы подберём для вас программу и уровень. Начните говорить на иностранном языке уже сегодня.
            </p>
            <a href="#"
               class="bg-indigo-600 text-white px-10 py-4 rounded-xl shadow-lg text-lg font-medium hover:bg-indigo-700 transition">
                Оставить заявку
            </a>
        </div>
    </section>

</body>
</html>

<?php
// require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
