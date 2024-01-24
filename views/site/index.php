<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="wrapper">
    <header class="my-8">
        <div class="mx-auto container">
            <div class="flex items-end justify-between w-full">
                <div class="flex items-center gap-1">
                    <div class="bg-gray-700 h-1.5 rounded-full w-1.5"></div>
                    <div class="bg-gray-700 h-1.5 rounded-full w-1.5"></div>
                    <div class="bg-gray-700 h-1.5 rounded-full w-1.5"></div>
                </div>
                <div class="text-gray-700 font-normal leading-none text-sm" id="time">00:00</div>
            </div>
        </div>
    </header>


    <main>
        <section class="h-screen home-page">
            <div class="flex flex-col lg:flex-row container gap-20 h-full items-center justify-center m-auto w-full">
                <div class="flex flex-col">
                    <div class="flex flex-col lg:flex-row items-end">
                        <h1 id="mainTitle"
                            class="w-full font-medium lg:leading-none lg:text-[15rem] sm:text-9xl text-8xl text-center text-gray-800">
                            ЭФКО
                        </h1>
                        <div id="yellowSquare" class="bg-amber-300 h-5 lg:h-10 lg:w-10 w-5"></div>
                    </div>
                    <p id="subtitle" class="text-gray-700 font-normal lg:text-5xl text-2xl text-left">Цифровые решения
                    </p>
                    <div id="projectInfo" class="flex items-end justify-between container mt-10 mx-auto">
                        <span class="text-gray-700 text-2xl lg:text-3xl">
                            Меня зовут <b>[ваше_имя]</b> <br> Это мой первый проект, на стеке HTML, CSS, JS, PHP, SQL
                        </span>
                    </div>

                </div>

                <div class="w-full border-l-2 px-5">
                    <ul class="flex flex-col gap-12 px-8 relative">
                        <li>
                            <div class="-left-10 absolute bg-white border-2 h-10 hidden lg:block rounded w-10"></div>
                            <div id="listItem1">
                                <a href="https://edu-efko.ru/" class="font-semibold text-gray-700 text-xl">Сайт
                                    курса</a>
                                <p class="font-semibold text-gray-400 text-sm">Порекомендуй нас друзьям</p>
                            </div>
                        </li>

                        <li id="listItem2">
                            <div class="-left-10 absolute bg-white border-2 h-10 hidden lg:block rounded w-10"></div>
                            <div>
                                <a href="https://t.me/efko_digital"
                                    class="font-semibold text-gray-700 text-xl">Telegram</a>
                                <p class="font-semibold text-gray-400 text-sm">Подпишись на группу и будь в курсе всех
                                    новостей</p>
                            </div>
                        </li>

                        <li id="listItem3">
                            <div class="-left-10 absolute bg-white border-2 h-10 hidden lg:block rounded w-10 bottom-0">
                            </div>
                            <div>
                                <a class="font-semibold text-gray-700 text-xl">GitHub</a>
                                <p class="font-semibold text-gray-400 text-sm">Поделись своим проектом с другими</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </main>

    <footer>
    </footer>
</div>