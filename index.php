<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГЭНДАЛЬФ</title>

    <link rel="stylesheet" href="index.css">
	<link rel="shortcut icon" href="src/icons/Logo.svg">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>
<body>
    <div class="header__container">
        <header class="header">
            <div class="header__logo">
                <img src="src/icons/Logo.svg" alt="Логотип">
            </div>
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a href="#" class="header__link header__hover">Профориентация</a>
                    </li>
                    <li class="header__item">
                        <a href="#" class="header__link header__hover">Выбрать вакансию</a>
                    </li>
                    <li class="header__item">
                        <a href="#" class="header__link header__hover">Карьера в ГЭНДАЛЬФ</a>
                    </li>
                    <li class="header__item">
                        <a href="#" class="header__link header__hover">Стажерство</a>
                    </li>
                    <li class="header__item">
                        <a href="#" class="header__link header__hover">Отзывы</a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="header__button header__button-5 btn__interview">Запись на собеседование</a>
        </header>
    </div>
    <header class="header__burger">
        <div class="header__burger__icon">
            <a href="#"><img src="src/icons/search.png" alt="Поиск"></a>
        </div>
        <div class="header__burger__icon">
            <a href="#"><img src="src/icons/shop.png" alt="Услуги"></a>
        </div>
        <div class="header__burger__logo">
            <a href="index.php"><img src="src/icons/Logo.svg" alt="Логотип"></a>
        </div>
        <div class="header__burger__icon">
            <a href="#"><img src="src/icons/profile.png" alt="Профиль"></a>
        </div>
        <div class="hamb__field" id="hamb">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <nav class="menu" id="menu">
            <li><a class="submenu__header__item " href="#">Профориентация</a></li>
            <li><a class="submenu__header__item" href="#">Выбрать вакансию</a></li>
            <li><a class="submenu__header__item" href="#">Карьера в ГЭНДАЛЬФ</a></li>
            <li><a class="submenu__header__item" href="#">Стажерство</a></li>
            <li><a class="submenu__header__item" href="">Отзывы</a></li>
        </nav>
        <div class="popup" id="popup"></div>
    </header>
    <div class="main__container">
        
        <section class="welcome">
            <img class="welcome__bg" src="src/image/welcome__bg.png" alt="">
            <div class="welcome__content">
                <h1 class="welcome__title">Добро пожаловать в ГЭНДАЛЬФ!</h1>
                <p class="welcome__text">Мы готовы поделиться секретом, почему любим компанию, в которой работаем. Если тебе будут близки наши ценности и идеи, то смело записывайся на собеседование!</p>
                <div class="welcome__buttons">
                    <a class="welcome__buttons__whyUs welcome__buttons__hover" href="#"><p class="post-title">Почему мы</p></a>
                    <button class="welcome__buttons__interview btn__interview header__button-5">Записаться на собеседование</button>
                </div>   
            </div>
        </section>

        <section class="about__us">
            <div class="about__us__content">
                <h2 class="about__us__title">О том, чем мы занимаемся</h2>
                <p class="about__us__text">ГЭНДАЛЬФ – один из крупнейших игроков на рынке информационных технологий, занимающий 4 место среди 7000 партнеров фирмы «1С». У нас есть представительства в 15 городах России, а нашими услугами пользуются 23 000 организаций-клиентов, в числе которых «Базэл Аэро», «Ростсельмаш», UTG. Аэропорт Кольцово и многие другие.</p>
                <p class="about__us__text">Мы тщательно подходим к выбору сотрудников, которые становятся частью команды профессионалов.</p>
                <p class="about__us__text">У нас работают специалисты разных областей: программисты, маркетологи, менеджеры, копирайтеры, методисты и другие, чей карьерный рост не ограничен привычными рамками.</p>
                <div class="about__us__content__buttons">
                    <button class="about__us__button__learnMore about__us__button__hover1">Узнать больше</button>
                    <button class="about__us__button__interview about__us__button__hover2 btn__interview">Записаться на собеседование</button>
                </div>
            </div>
            <div class="about__us__image">
                <img src="src/image/about__us.png" alt="">
                <svg class="about__us__image__hexacon1" xmlns="http://www.w3.org/2000/svg" width="137" height="156" viewBox="0 0 137 156" fill="none">
                    <g filter="url(#filter0_bd_3_152)">
                        <path d="M68.5 0L132.153 37V111L68.5 148L4.84713 111V37L68.5 0Z" fill="url(#paint0_linear_3_152)" fill-opacity="0.7" shape-rendering="crispEdges"/>
                        <path d="M5.84713 37.5754L68.5 1.15667L131.153 37.5754V110.425L68.5 146.843L5.84713 110.425V37.5754Z" stroke="url(#paint1_linear_3_152)" stroke-opacity="0.5" stroke-width="2" shape-rendering="crispEdges"/>
                    </g>
                    <defs>
                        <filter id="filter0_bd_3_152" x="-7.15283" y="-12" width="151.306" height="172" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"/>
                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3_152"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                        <feBlend mode="normal" in2="effect1_backgroundBlur_3_152" result="effect2_dropShadow_3_152"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_3_152" result="shape"/>
                        </filter>
                        <linearGradient id="paint0_linear_3_152" x1="134.471" y1="127.188" x2="14.3818" y2="12.1192" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0145959" stop-color="#B67427" stop-opacity="0.62"/>
                        <stop offset="1" stop-color="#FDECB0" stop-opacity="0.41"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_3_152" x1="15.7995" y1="15.5451" x2="98.2679" y2="147.499" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white"/>
                        <stop offset="1" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>
                <svg class="about__us__image__hexacon2" xmlns="http://www.w3.org/2000/svg" width="68" height="76" viewBox="0 0 68 76" fill="none">
                    <g filter="url(#filter0_bd_3_153)">
                        <path d="M34 0L63.4449 17V51L34 68L4.55514 51V17L34 0Z" fill="url(#paint0_linear_3_153)" shape-rendering="crispEdges"/>
                        <path d="M5.55514 17.5774L34 1.1547L62.4449 17.5774V50.4226L34 66.8453L5.55514 50.4226V17.5774Z" stroke="url(#paint1_linear_3_153)" stroke-opacity="0.5" stroke-width="2" shape-rendering="crispEdges"/>
                    </g>
                    <defs>
                        <filter id="filter0_bd_3_153" x="-7.44482" y="-12" width="82.8896" height="92" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"/>
                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3_153"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                        <feBlend mode="normal" in2="effect1_backgroundBlur_3_153" result="effect2_dropShadow_3_153"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_3_153" result="shape"/>
                        </filter>
                        <linearGradient id="paint0_linear_3_153" x1="64.5174" y1="58.4375" x2="9.32639" y2="5.19444" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0145959" stop-color="#69B627" stop-opacity="0.62"/>
                        <stop offset="1" stop-color="#D2FDB0" stop-opacity="0.41"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_3_153" x1="9.62153" y1="7.14236" x2="47.3993" y2="68" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white"/>
                        <stop offset="1" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>
                <svg class="about__us__image__hexacon3" xmlns="http://www.w3.org/2000/svg" width="114" height="127" viewBox="0 0 114 127" fill="none">
                    <g filter="url(#filter0_bd_3_150)">
                        <path d="M53.0495 1.56375C55.4994 0.172468 58.5006 0.172471 60.9505 1.56375L105.778 27.0207C108.281 28.4421 109.828 31.0987 109.828 33.9772L109.828 84.6634C109.828 87.5419 108.281 90.1985 105.778 91.62L60.9505 117.077C58.5006 118.468 55.4994 118.468 53.0495 117.077L8.22193 91.6199C5.71887 90.1985 4.17245 87.5419 4.17245 84.6634L4.17245 33.9772C4.17245 31.0987 5.71888 28.4421 8.22193 27.0207L53.0495 1.56375Z" fill="url(#paint0_linear_3_150)" fill-opacity="0.3" shape-rendering="crispEdges"/>
                        <path d="M53.5433 2.43332C55.687 1.21595 58.313 1.21595 60.4567 2.43332L105.284 27.8902C107.474 29.134 108.828 31.4585 108.828 33.9772L108.828 84.6634C108.828 87.1821 107.474 89.5066 105.284 90.7504L60.4567 116.207C58.313 117.425 55.687 117.425 53.5433 116.207L8.71574 90.7504C6.52557 89.5066 5.17245 87.1821 5.17245 84.6634L5.17245 33.9772C5.17245 31.4585 6.52558 29.134 8.71575 27.8902L53.5433 2.43332Z" stroke="url(#paint1_linear_3_150)" stroke-opacity="0.5" stroke-width="2" shape-rendering="crispEdges"/>
                    </g>
                    <defs>
                        <filter id="filter0_bd_3_150" x="-7.82751" y="-11.4795" width="129.655" height="141.6" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"/>
                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3_150"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                        <feBlend mode="normal" in2="effect1_backgroundBlur_3_150" result="effect2_dropShadow_3_150"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_3_150" result="shape"/>
                        </filter>
                        <linearGradient id="paint0_linear_3_150" x1="92.8428" y1="100.534" x2="27.9935" y2="15.0009" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#00B7EC"/>
                        <stop offset="1" stop-color="#00B7EC" stop-opacity="0.33"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_3_150" x1="13.2622" y1="11.9245" x2="79.4345" y2="120.301" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white"/>
                        <stop offset="1" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </section>

        <section class="values">
            <div class="values__container">
                <h2 class="values__title">Наши ценности скажут о нас больше:</h2>
                <div class="swiper" id="values__swiper">
                    <div class="swiper-wrapper values__collection">
                        <div class="values__swiper__item swiper-slide">
                            <div class="values__swiper__item__numbBg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="83" height="91" viewBox="0 0 83 91" fill="none">
                                    <g filter="url(#filter0_bd_3_208)">
                                        <path d="M37.5368 1.23715C39.9805 -0.144911 42.9698 -0.144912 45.4134 1.23714L74.7176 17.8106C77.2275 19.2302 78.7793 21.8906 78.7793 24.7741L78.7793 57.6376C78.7793 60.5211 77.2275 63.1815 74.7176 64.6011L45.4134 81.1745C42.9698 82.5566 39.9805 82.5566 37.5368 81.1745L8.23263 64.6011C5.72272 63.1815 4.17094 60.5211 4.17094 57.6376L4.17094 24.7741C4.17094 21.8906 5.72272 19.2302 8.23263 17.8106L37.5368 1.23715Z" fill="url(#paint0_linear_3_208)" fill-opacity="0.8" shape-rendering="crispEdges"/>
                                        <path d="M38.0291 2.10758C40.1673 0.898278 42.7829 0.898277 44.9211 2.10758L74.2253 18.6811C76.4215 19.9232 77.7793 22.251 77.7793 24.7741L77.7793 57.6376C77.7793 60.1607 76.4215 62.4885 74.2253 63.7306L44.9211 80.3041C42.7829 81.5134 40.1673 81.5134 38.0291 80.3041L8.72492 63.7306C6.52875 62.4885 5.17094 60.1607 5.17094 57.6376L5.17094 24.7741C5.17094 22.251 6.52875 19.9232 8.72492 18.6811L38.0291 2.10758Z" stroke="url(#paint1_linear_3_208)" stroke-opacity="0.5" stroke-width="2" shape-rendering="crispEdges"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_bd_3_208" x="-7.82904" y="-11.7998" width="98.6083" height="106.011" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"/>
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3_208"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                        <feOffset dy="4"/>
                                        <feGaussianBlur stdDeviation="2"/>
                                        <feComposite in2="hardAlpha" operator="out"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="effect1_backgroundBlur_3_208" result="effect2_dropShadow_3_208"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_3_208" result="shape"/>
                                        </filter>
                                        <linearGradient id="paint0_linear_3_208" x1="66.7855" y1="70.1902" x2="21.2298" y2="9.85803" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00B7EC"/>
                                        <stop offset="1" stop-color="#00B7EC" stop-opacity="0.33"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_3_208" x1="10.5896" y1="7.87387" x2="57.0393" y2="84.2603" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <p class="values__swiper__item__numb">1</p>
                            </div>
                            <img class="swiper-slide__image" src="src/image/values1.png" alt="">
                            <h4 class="swiper-slide__title">Быть командой</h4>
                            <p class="swiper-slide__text">Готовность вносить вклад в общие цели команды и достигать их.</p>
                        </div>
                        <div class="values__swiper__item swiper-slide">
                            <div class="values__swiper__item__numbBg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="83" height="91" viewBox="0 0 83 91" fill="none">
                                    <g filter="url(#filter0_bd_3_208)">
                                        <path d="M37.5368 1.23715C39.9805 -0.144911 42.9698 -0.144912 45.4134 1.23714L74.7176 17.8106C77.2275 19.2302 78.7793 21.8906 78.7793 24.7741L78.7793 57.6376C78.7793 60.5211 77.2275 63.1815 74.7176 64.6011L45.4134 81.1745C42.9698 82.5566 39.9805 82.5566 37.5368 81.1745L8.23263 64.6011C5.72272 63.1815 4.17094 60.5211 4.17094 57.6376L4.17094 24.7741C4.17094 21.8906 5.72272 19.2302 8.23263 17.8106L37.5368 1.23715Z" fill="url(#paint0_linear_3_208)" fill-opacity="0.8" shape-rendering="crispEdges"/>
                                        <path d="M38.0291 2.10758C40.1673 0.898278 42.7829 0.898277 44.9211 2.10758L74.2253 18.6811C76.4215 19.9232 77.7793 22.251 77.7793 24.7741L77.7793 57.6376C77.7793 60.1607 76.4215 62.4885 74.2253 63.7306L44.9211 80.3041C42.7829 81.5134 40.1673 81.5134 38.0291 80.3041L8.72492 63.7306C6.52875 62.4885 5.17094 60.1607 5.17094 57.6376L5.17094 24.7741C5.17094 22.251 6.52875 19.9232 8.72492 18.6811L38.0291 2.10758Z" stroke="url(#paint1_linear_3_208)" stroke-opacity="0.5" stroke-width="2" shape-rendering="crispEdges"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_bd_3_208" x="-7.82904" y="-11.7998" width="98.6083" height="106.011" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"/>
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3_208"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                        <feOffset dy="4"/>
                                        <feGaussianBlur stdDeviation="2"/>
                                        <feComposite in2="hardAlpha" operator="out"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="effect1_backgroundBlur_3_208" result="effect2_dropShadow_3_208"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_3_208" result="shape"/>
                                        </filter>
                                        <linearGradient id="paint0_linear_3_208" x1="66.7855" y1="70.1902" x2="21.2298" y2="9.85803" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00B7EC"/>
                                        <stop offset="1" stop-color="#00B7EC" stop-opacity="0.33"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_3_208" x1="10.5896" y1="7.87387" x2="57.0393" y2="84.2603" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <p class="values__swiper__item__numb">2</p>
                            </div>
                            <img class="swiper-slide__image" src="src/image/values2.png" alt="">
                            <h4 class="swiper-slide__title">Побеждать и не сдаваться</h4>
                            <p class="swiper-slide__text">Быть ориентированным на результат, настойчивым и не сдаваться перед трудностями.</p>
                        </div>
                        <div class="values__swiper__item swiper-slide">
                            <div class="values__swiper__item__numbBg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="83" height="91" viewBox="0 0 83 91" fill="none">
                                    <g filter="url(#filter0_bd_3_208)">
                                        <path d="M37.5368 1.23715C39.9805 -0.144911 42.9698 -0.144912 45.4134 1.23714L74.7176 17.8106C77.2275 19.2302 78.7793 21.8906 78.7793 24.7741L78.7793 57.6376C78.7793 60.5211 77.2275 63.1815 74.7176 64.6011L45.4134 81.1745C42.9698 82.5566 39.9805 82.5566 37.5368 81.1745L8.23263 64.6011C5.72272 63.1815 4.17094 60.5211 4.17094 57.6376L4.17094 24.7741C4.17094 21.8906 5.72272 19.2302 8.23263 17.8106L37.5368 1.23715Z" fill="url(#paint0_linear_3_208)" fill-opacity="0.8" shape-rendering="crispEdges"/>
                                        <path d="M38.0291 2.10758C40.1673 0.898278 42.7829 0.898277 44.9211 2.10758L74.2253 18.6811C76.4215 19.9232 77.7793 22.251 77.7793 24.7741L77.7793 57.6376C77.7793 60.1607 76.4215 62.4885 74.2253 63.7306L44.9211 80.3041C42.7829 81.5134 40.1673 81.5134 38.0291 80.3041L8.72492 63.7306C6.52875 62.4885 5.17094 60.1607 5.17094 57.6376L5.17094 24.7741C5.17094 22.251 6.52875 19.9232 8.72492 18.6811L38.0291 2.10758Z" stroke="url(#paint1_linear_3_208)" stroke-opacity="0.5" stroke-width="2" shape-rendering="crispEdges"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_bd_3_208" x="-7.82904" y="-11.7998" width="98.6083" height="106.011" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"/>
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3_208"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                        <feOffset dy="4"/>
                                        <feGaussianBlur stdDeviation="2"/>
                                        <feComposite in2="hardAlpha" operator="out"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="effect1_backgroundBlur_3_208" result="effect2_dropShadow_3_208"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_3_208" result="shape"/>
                                        </filter>
                                        <linearGradient id="paint0_linear_3_208" x1="66.7855" y1="70.1902" x2="21.2298" y2="9.85803" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00B7EC"/>
                                        <stop offset="1" stop-color="#00B7EC" stop-opacity="0.33"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_3_208" x1="10.5896" y1="7.87387" x2="57.0393" y2="84.2603" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <p class="values__swiper__item__numb">3</p>
                            </div>
                            <img class="swiper-slide__image" src="src/image/values3.png" alt="">
                            <h4 class="swiper-slide__title">Заботиться о клиентах</h4>
                            <p class="swiper-slide__text">Выполнять обещания и интересоваться потребностями своих клиентов.</p>

                        </div>
                        <div class="values__swiper__item swiper-slide">
                            <div class="values__swiper__item__numbBg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="83" height="91" viewBox="0 0 83 91" fill="none">
                                    <g filter="url(#filter0_bd_3_208)">
                                        <path d="M37.5368 1.23715C39.9805 -0.144911 42.9698 -0.144912 45.4134 1.23714L74.7176 17.8106C77.2275 19.2302 78.7793 21.8906 78.7793 24.7741L78.7793 57.6376C78.7793 60.5211 77.2275 63.1815 74.7176 64.6011L45.4134 81.1745C42.9698 82.5566 39.9805 82.5566 37.5368 81.1745L8.23263 64.6011C5.72272 63.1815 4.17094 60.5211 4.17094 57.6376L4.17094 24.7741C4.17094 21.8906 5.72272 19.2302 8.23263 17.8106L37.5368 1.23715Z" fill="url(#paint0_linear_3_208)" fill-opacity="0.8" shape-rendering="crispEdges"/>
                                        <path d="M38.0291 2.10758C40.1673 0.898278 42.7829 0.898277 44.9211 2.10758L74.2253 18.6811C76.4215 19.9232 77.7793 22.251 77.7793 24.7741L77.7793 57.6376C77.7793 60.1607 76.4215 62.4885 74.2253 63.7306L44.9211 80.3041C42.7829 81.5134 40.1673 81.5134 38.0291 80.3041L8.72492 63.7306C6.52875 62.4885 5.17094 60.1607 5.17094 57.6376L5.17094 24.7741C5.17094 22.251 6.52875 19.9232 8.72492 18.6811L38.0291 2.10758Z" stroke="url(#paint1_linear_3_208)" stroke-opacity="0.5" stroke-width="2" shape-rendering="crispEdges"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_bd_3_208" x="-7.82904" y="-11.7998" width="98.6083" height="106.011" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"/>
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3_208"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                        <feOffset dy="4"/>
                                        <feGaussianBlur stdDeviation="2"/>
                                        <feComposite in2="hardAlpha" operator="out"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="effect1_backgroundBlur_3_208" result="effect2_dropShadow_3_208"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_3_208" result="shape"/>
                                        </filter>
                                        <linearGradient id="paint0_linear_3_208" x1="66.7855" y1="70.1902" x2="21.2298" y2="9.85803" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00B7EC"/>
                                        <stop offset="1" stop-color="#00B7EC" stop-opacity="0.33"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_3_208" x1="10.5896" y1="7.87387" x2="57.0393" y2="84.2603" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <p class="values__swiper__item__numb">4</p>
                            </div>
                            <img class="swiper-slide__image" src="src/image/values4.png" alt="">
                            <h4 class="swiper-slide__title">Быть увлеченным и ответственным</h4>
                            <p class="swiper-slide__text">Вкладывать душу в то, что делаешь и получать от работы удовольствие.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rise">
            <h2 class="rise__title">Инфраструктура для твоего развития и роста</h2>
            <div class="rise__content">
                <div class="rise__text__container">
                    <p class="rise__text">Мы&nbsp;создаем платформу для профессионального развития каждого сотрудника. Главная цель&nbsp;&mdash; дать возможность учиться, работать и&nbsp;получать удовольствие от&nbsp;каждой успешной задачи.</p>
                    <p class="rise__text">О&nbsp;возможностях личностного роста в&nbsp;ГЭНДАЛЬФ расскажет руководитель Департамента персонала и&nbsp;карьеры Татьяна Арсенович.</p>
                </div>
                <iframe class="rise__video" src="https://www.youtube.com/embed/4Adku7380Zo"></iframe>
            </div>
        </section>

        <section class="student">
            <img class="student__bg" src="src/image/student__bg.png" alt="">
            <div class="student__container">
                <h2 class="student__title">Ты студент и хочешь устроиться </br> на практику?</h2>
                <a class="student__button" href="#"><p class="post-title">Оставить заявку</p></a>
            </div>
        </section>

        <section class="answers">
            <div class="answers__container">
                <div class="answers__container__left">
                    <h3 class="answers__container__title">Ответы на вопросы</h3>
                    <div class="answers__container__item accordion-item">
                        <div class="accordion-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                <circle cx="11.5" cy="11.5" r="10.5" stroke="#00B7EC" stroke-width="2"/>
                                <path d="M16.5 11.134C17.1667 11.5189 17.1667 12.4811 16.5 12.866L9 17.1962C8.33333 17.5811 7.5 17.0999 7.5 16.3301L7.5 7.66987C7.5 6.90007 8.33333 6.41895 9 6.80385L16.5 11.134Z" fill="#00B7EC"/>
                            </svg>
                            <p class="answers__container__text">На что нужно обратить внимание на собеседовании?</p>
                        </div>
                        <div class="accordion-content">
                            <p>Кроме умения представлять себя, грамотно разговаривать и опрятного внешнего вида, стоит обратить внимание еще на пару моментов. Они не очевидны, но очень эффективны.</p>
                            <ul>
                                <li><b>Сохраняйте спокойствие.</b> Конечно, собеседование – это стрессовая ситуация, которая мешает конструктивно мыслить. Если волнение берет верх – выпейте немного воды, прижмите стопы к полу, а главное, помните: ничего ужасного произойти не может. </li>
                                <li><b>Внимание к самопрезентации.</b> Если собеседование – пьеса, вы – ее главный герой. Подготовьте рассказ о себе заранее, опираясь на важные навыки, и опишите, почему это важно для данной работы. Все это придаст вам уверенности в себе.</li>
                                <li><b>Каверзные вопросы – это норма.</b> Если вам задали какой-либо вопрос, который кажется вам сложным или задевает личные качества, знайте – правильных ответов не существует. Каверзные вопросы призваны показать вашу стрессоустойчивость и умение ориентироваться в ситуации. Здесь поможет адекватная самокритика и знания в своей профессии.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="answers__container__item accordion-item">
                        <div class="accordion-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                <circle cx="11.5" cy="11.5" r="10.5" stroke="#00B7EC" stroke-width="2"/>
                                <path d="M16.5 11.134C17.1667 11.5189 17.1667 12.4811 16.5 12.866L9 17.1962C8.33333 17.5811 7.5 17.0999 7.5 16.3301L7.5 7.66987C7.5 6.90007 8.33333 6.41895 9 6.80385L16.5 11.134Z" fill="#00B7EC"/>
                            </svg>
                            <p class="answers__container__text">Как правильно составить резюме?</p>
                        </div>
                        <div class="accordion-content">
                            <p>Резюме – это ваша визитная карточка на собеседовании. Из него потенциальный работодатель узнает о профессиональных навыках, опыте работы, достижениях и так далее.</p>
                            <p>Для того чтобы сделать классное резюме, нужно учесть 4 простых правила:</p>
                            <ul>
                                <li>Пишите правду;</li>
                                <li>Опишите, каких результатов вы достигли на прошлом месте работы;</li>
                                <li>Пишите только суть, максимально емко донося смысл своих задач;</li>
                                <li>Уделите внимание рассказу о себе. Это выделит ваше резюме среди других.</li>
                            </ul>
                            <p>Структура резюме обычно выглядит следующим образом:</p>
                            <ol>
                                <li>
                                    <p><b>Название резюме.</b> Укажите полностью ваше ФИО и должность, которую ищите.</p>
                                </li>
                                <li>
                                    <p><b>Личные данные.</b> Здесь нужно указать:</p>
                                    <ul>
                                        <li>дату рождения;</li>
                                        <li>город проживания;</li>
                                        <li>предпочтительный способ связи (для оперативности лучше указать номер телефона);</li>
                                        <li>e-mail.</li>
                                    </ul>
                                </li>
                                <li>
                                    <p><b>Образование.</b> Здесь пропишите все оконченные учебные заведения, пройденные курсы и укажите полученную специальность.</p>
                                </li>
                                <li>
                                    <p><b>Формат работы.</b> Укажите, какой график вы ищите и как хотели бы работать – удаленно или в офисе. Так рекрутер сможет быстрее найти ваше резюме.</p>
                                </li>
                                <li>
                                    <p><b>Опыт работы.</b> Начните с периода работы, пропишите компанию и укажите должность.</p>
                                    <p>К примеру: <b><i>июнь 2014 – сентябрь 2021 года – ООО «Бухгалтер», должность – главный делопроизводитель.</i></b></p>
                                </li>
                                <li>
                                    <p><b>Достижения на прошлых местах работы.</b> Один из главных пунктов в резюме. Расскажите, чего вы добились ранее, как помогли прошлому работодателю, как решали серьезные проблемы. Используйте конкретные факты и цифры.</p>
                                    <p>Примеры: <i>увеличил(а) прибыль компании на 40%, оставил(а) лояльным сложного клиента, разработал(а) уникальную программу и т.д.</i></p>
                                </li>
                                <li>
                                    <p><b>Дополнительная информация.</b> Сюда относятся навыки, которые могут помочь вам в работе. К примеру, владение ПК или владение иностранными языками.</p>
                                </li>
                                <li>
                                    <p><b>Рекомендации от предыдущих работодателей.</b> Этот пункт зачастую очень сильно влияет на решение о принятии кандидата на работу. Не поленитесь украсить положительным отзывом свое резюме.</p>
                                    <p>Не забудьте прикрепить фото к вашему резюме, чтобы работодатель мог сложить о вас общее впечатление.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="answers__container__item accordion-item">
                        <div class="accordion-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                <circle cx="11.5" cy="11.5" r="10.5" stroke="#00B7EC" stroke-width="2"/>
                                <path d="M16.5 11.134C17.1667 11.5189 17.1667 12.4811 16.5 12.866L9 17.1962C8.33333 17.5811 7.5 17.0999 7.5 16.3301L7.5 7.66987C7.5 6.90007 8.33333 6.41895 9 6.80385L16.5 11.134Z" fill="#00B7EC"/>
                            </svg>
                            <p class="answers__container__text">Возможно ли устроиться без опыта?</p>
                        </div>
                        <div class="accordion-content">
                            <p>Отсутствие опыта – не повод для отказа. Мы переводим сотрудников без опыта в специальный отдел профориентации, который занимается подготовкой специалистов для разных отделов ГЭНДАЛЬФ в соответствии с их способностями, навыками и желаниями.</p>
                        </div>
                    </div>
                    <div class="answers__container__item accordion-item">
                        <div class="accordion-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                <circle cx="11.5" cy="11.5" r="10.5" stroke="#00B7EC" stroke-width="2"/>
                                <path d="M16.5 11.134C17.1667 11.5189 17.1667 12.4811 16.5 12.866L9 17.1962C8.33333 17.5811 7.5 17.0999 7.5 16.3301L7.5 7.66987C7.5 6.90007 8.33333 6.41895 9 6.80385L16.5 11.134Z" fill="#00B7EC"/>
                            </svg>
                            <p class="answers__container__text">Ошибки на собеседовании. Чего нужно избегать?</p>
                        </div>
                        <div class="accordion-content">
                            <p>Есть несколько моментов, которые легко испортят ваше собеседование.</p>
                            <ul>
                                <li>Вульгарный внешний вид и поведение.</li>
                                <li>Группа поддержки в лице родственников, друзей и т.д.</li>
                                <li>Отсутствие знаний о месте, в которое устраиваетесь.</li>
                                <li>Разговоры по телефону.</li>
                                <li>Многословие «не по делу».</li>
                                <li>Неспособность к самопрезентации.</li>
                                <li>Чрезмерная заинтересованность в финансах.</li>
                                <li>Нежелание задавать вопросы.</li>
                                <li>Излишняя откровенность.</li>
                                <li>Оскорбление бывших коллег или работодателей.</li>
                                <li>Ложь.</li>
                                <li>Грубость и хамство.</li>
                            </ul>
                            <p>Обращайте внимание на указанные пункты и ни в коем случае не допускайте их. </p>
                        </div>
                    </div>
                </div>
                <img src="src/image/answers.png" alt="Картинка к секции Ответы на вопросы">
            </div>
        </section>

        <section id="interview" class="interview">
            <img class="interview__bg" src="src/image/interview__bg.png" alt="">
            <div class="interview__container">
                <h2 class="interview__title2">Записаться на собеседование</h2>
                <form class="interview__container__form" id="interview__form">
                    <div class="interview__container__form-input-item">
                        <input id="name" class="interview__input" type="text" name="name" placeholder="Как к вам обращаться?*" minlength="2" required>
                        <svg class="interview__input__svg" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g class="error__svg hidden">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="#FD7583"></circle>
                                <path d="M23.3535 9.13003L9.13024 23.3533C8.77337 23.7102 8.15138 23.6675 7.74187 23.258C7.33235 22.8485 7.28964 22.2265 7.64651 21.8696L21.8698 7.6463C22.2267 7.28942 22.8487 7.33214 23.2582 7.74165C23.6677 8.15116 23.7104 8.77315 23.3535 9.13003Z" fill="white"></path>
                                <path d="M21.8705 23.3535L7.64716 9.13024C7.29028 8.77337 7.333 8.15138 7.74251 7.74187C8.15202 7.33235 8.77401 7.28964 9.13089 7.64651L23.3542 21.8698C23.7111 22.2267 23.6683 22.8487 23.2588 23.2582C22.8493 23.6677 22.2273 23.7104 21.8705 23.3535Z" fill="white"></path>
                            </g>
                            <g class="success__svg hidden">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="#9BCC37"></circle>
                                <path d="M12.9982 18.209C13.1386 18.0687 13.2141 17.9931 13.3113 17.8852C16.0105 15.1107 18.7096 12.347 21.4087 9.57251C21.7326 9.23784 22.0889 8.98954 22.5532 9.00034C23.1254 9.00034 23.5573 9.27023 23.8272 9.78842C24.0971 10.3066 24.0431 10.8248 23.7192 11.3106C23.622 11.451 23.5033 11.5697 23.3845 11.6885C20.3183 14.8408 17.2413 17.9823 14.175 21.1346C13.3653 21.9551 12.5987 21.9551 11.7998 21.1346C10.3746 19.6664 8.9387 18.1982 7.51355 16.73C6.98452 16.1794 6.85496 15.5317 7.16806 14.9379C7.63231 14.0311 8.75515 13.88 9.51092 14.6465C10.5798 15.726 11.627 16.8164 12.6959 17.9067C12.7715 18.0039 12.8039 18.0255 12.9982 18.209Z" fill="white"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="interview__container__form-input-item">
                        <input id="tel" class="interview__input" type="tel" name="tel" placeholder="Телефон*" minlength="10" required>
                        <svg class="interview__input__svg" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g class="error__svg hidden">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="#FD7583"></circle>
                                <path d="M23.3535 9.13003L9.13024 23.3533C8.77337 23.7102 8.15138 23.6675 7.74187 23.258C7.33235 22.8485 7.28964 22.2265 7.64651 21.8696L21.8698 7.6463C22.2267 7.28942 22.8487 7.33214 23.2582 7.74165C23.6677 8.15116 23.7104 8.77315 23.3535 9.13003Z" fill="white"></path>
                                <path d="M21.8705 23.3535L7.64716 9.13024C7.29028 8.77337 7.333 8.15138 7.74251 7.74187C8.15202 7.33235 8.77401 7.28964 9.13089 7.64651L23.3542 21.8698C23.7111 22.2267 23.6683 22.8487 23.2588 23.2582C22.8493 23.6677 22.2273 23.7104 21.8705 23.3535Z" fill="white"></path>
                            </g>
                            <g class="success__svg hidden">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="#9BCC37"></circle>
                                <path d="M12.9982 18.209C13.1386 18.0687 13.2141 17.9931 13.3113 17.8852C16.0105 15.1107 18.7096 12.347 21.4087 9.57251C21.7326 9.23784 22.0889 8.98954 22.5532 9.00034C23.1254 9.00034 23.5573 9.27023 23.8272 9.78842C24.0971 10.3066 24.0431 10.8248 23.7192 11.3106C23.622 11.451 23.5033 11.5697 23.3845 11.6885C20.3183 14.8408 17.2413 17.9823 14.175 21.1346C13.3653 21.9551 12.5987 21.9551 11.7998 21.1346C10.3746 19.6664 8.9387 18.1982 7.51355 16.73C6.98452 16.1794 6.85496 15.5317 7.16806 14.9379C7.63231 14.0311 8.75515 13.88 9.51092 14.6465C10.5798 15.726 11.627 16.8164 12.6959 17.9067C12.7715 18.0039 12.8039 18.0255 12.9982 18.209Z" fill="white"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="interview__container__form-input-item">
                        <input id="email" class="interview__input" type="text" placeholder="Email" minlength="3">
                        <svg class="interview__input__svg" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g class="error__svg hidden">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="#FD7583"></circle>
                                <path d="M23.3535 9.13003L9.13024 23.3533C8.77337 23.7102 8.15138 23.6675 7.74187 23.258C7.33235 22.8485 7.28964 22.2265 7.64651 21.8696L21.8698 7.6463C22.2267 7.28942 22.8487 7.33214 23.2582 7.74165C23.6677 8.15116 23.7104 8.77315 23.3535 9.13003Z" fill="white"></path>
                                <path d="M21.8705 23.3535L7.64716 9.13024C7.29028 8.77337 7.333 8.15138 7.74251 7.74187C8.15202 7.33235 8.77401 7.28964 9.13089 7.64651L23.3542 21.8698C23.7111 22.2267 23.6683 22.8487 23.2588 23.2582C22.8493 23.6677 22.2273 23.7104 21.8705 23.3535Z" fill="white"></path>
                            </g>
                            <g class="success__svg hidden">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="#9BCC37"></circle>
                                <path d="M12.9982 18.209C13.1386 18.0687 13.2141 17.9931 13.3113 17.8852C16.0105 15.1107 18.7096 12.347 21.4087 9.57251C21.7326 9.23784 22.0889 8.98954 22.5532 9.00034C23.1254 9.00034 23.5573 9.27023 23.8272 9.78842C24.0971 10.3066 24.0431 10.8248 23.7192 11.3106C23.622 11.451 23.5033 11.5697 23.3845 11.6885C20.3183 14.8408 17.2413 17.9823 14.175 21.1346C13.3653 21.9551 12.5987 21.9551 11.7998 21.1346C10.3746 19.6664 8.9387 18.1982 7.51355 16.73C6.98452 16.1794 6.85496 15.5317 7.16806 14.9379C7.63231 14.0311 8.75515 13.88 9.51092 14.6465C10.5798 15.726 11.627 16.8164 12.6959 17.9067C12.7715 18.0039 12.8039 18.0255 12.9982 18.209Z" fill="white"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="interview__container__form-input-item">
                        <input id="job" class="interview__input" type="text" placeholder="Желаемая должность" minlength="4" required>
                        <svg class="interview__input__svg" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g class="error__svg hidden">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="#FD7583"></circle>
                                <path d="M23.3535 9.13003L9.13024 23.3533C8.77337 23.7102 8.15138 23.6675 7.74187 23.258C7.33235 22.8485 7.28964 22.2265 7.64651 21.8696L21.8698 7.6463C22.2267 7.28942 22.8487 7.33214 23.2582 7.74165C23.6677 8.15116 23.7104 8.77315 23.3535 9.13003Z" fill="white"></path>
                                <path d="M21.8705 23.3535L7.64716 9.13024C7.29028 8.77337 7.333 8.15138 7.74251 7.74187C8.15202 7.33235 8.77401 7.28964 9.13089 7.64651L23.3542 21.8698C23.7111 22.2267 23.6683 22.8487 23.2588 23.2582C22.8493 23.6677 22.2273 23.7104 21.8705 23.3535Z" fill="white"></path>
                            </g>
                            <g class="success__svg hidden">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="#9BCC37"></circle>
                                <path d="M12.9982 18.209C13.1386 18.0687 13.2141 17.9931 13.3113 17.8852C16.0105 15.1107 18.7096 12.347 21.4087 9.57251C21.7326 9.23784 22.0889 8.98954 22.5532 9.00034C23.1254 9.00034 23.5573 9.27023 23.8272 9.78842C24.0971 10.3066 24.0431 10.8248 23.7192 11.3106C23.622 11.451 23.5033 11.5697 23.3845 11.6885C20.3183 14.8408 17.2413 17.9823 14.175 21.1346C13.3653 21.9551 12.5987 21.9551 11.7998 21.1346C10.3746 19.6664 8.9387 18.1982 7.51355 16.73C6.98452 16.1794 6.85496 15.5317 7.16806 14.9379C7.63231 14.0311 8.75515 13.88 9.51092 14.6465C10.5798 15.726 11.627 16.8164 12.6959 17.9067C12.7715 18.0039 12.8039 18.0255 12.9982 18.209Z" fill="white"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="interview__radio__container">
                        <p class="interview__title3">Выберите категорию занятости</p>
                        <div class="interview__radio">
                            <input id="radio-1" type="radio" name="radio" value="1" checked>
                            <label for="radio-1">Работа в офисе</label>
                        </div>
                        <div class="interview__radio">
                            <input id="radio-2" type="radio" name="radio" value="2">
                            <label for="radio-2">Стажировка</label>
                        </div>
                        <div class="interview__radio">
                            <input id="radio-3" type="radio" name="radio" value="3">
                            <label for="radio-3">Удаленная работа</label>
                        </div>
                    </div>
                    <textarea class="interview__input__textarea" placeholder="Ваши вопросы"></textarea>
                    <div class="interview__form__button">
                        <label class="interview__form__button__resume" for="file-upload">Прикрепить резюме
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
                                <path d="M28 20.2553C27.9066 20.8533 27.7731 21.4445 27.6004 22.0251C27.2217 23.2159 26.5251 24.2853 25.5831 25.1221C24.6411 25.959 23.488 26.5326 22.2438 26.7835C21.0064 27.0926 19.7074 27.0704 18.4817 26.7192C17.2561 26.368 16.1486 25.7006 15.2747 24.7865C10.7454 20.3655 6.2302 15.9308 1.729 11.4823C0.793851 10.611 0.196928 9.4469 0.0408276 8.1902C-0.115273 6.9335 0.179199 5.66264 0.873631 4.59605C1.37057 3.76237 2.09107 3.07873 2.95653 2.61971C3.82199 2.16069 4.79917 1.94393 5.78148 1.99306C6.52065 1.99805 7.25121 2.14943 7.92945 2.43814C8.60769 2.72684 9.21967 3.14694 9.72879 3.6733C13.6177 7.48827 17.5042 11.3055 21.3884 15.1251C22.0966 15.786 22.5137 16.6926 22.5507 17.6513C22.5878 18.6101 22.2418 19.5451 21.5867 20.2568C20.9316 20.9685 20.0192 21.4006 19.0443 21.4608C18.0694 21.521 17.1091 21.2045 16.3684 20.579L16.0669 20.3035L5.92871 10.3736C5.77245 10.2567 5.65551 10.0964 5.59301 9.91344C5.53051 9.73052 5.52534 9.53339 5.57815 9.34755C5.61987 9.21128 5.69381 9.08663 5.79395 8.9838C5.89408 8.88096 6.01756 8.80285 6.15431 8.75584C6.29105 8.70884 6.43718 8.69427 6.58075 8.71333C6.72432 8.73239 6.86126 8.78453 6.98039 8.86551C7.07891 8.94493 7.17256 9.03001 7.26084 9.1203C10.6496 12.4119 14.008 15.7035 17.3359 18.9952C17.584 19.279 17.9127 19.4837 18.2799 19.5831C18.6471 19.6824 19.0361 19.672 19.3972 19.5529C19.6785 19.4601 19.9333 19.3029 20.1406 19.0943C20.3478 18.8857 20.5017 18.6317 20.5893 18.3532C20.677 18.0748 20.696 17.7798 20.6447 17.4927C20.5935 17.2056 20.4735 16.9346 20.2947 16.702C20.1965 16.585 20.0914 16.4679 19.9862 16.3646L8.4247 5.00922C7.75095 4.32315 6.83389 3.91853 5.8642 3.8795C4.8945 3.84047 3.94681 4.17004 3.21817 4.79968C2.48952 5.42931 2.036 6.31056 1.95191 7.26018C1.86782 8.2098 2.15963 9.15471 2.76666 9.89844C2.87884 10.0224 2.99803 10.1463 3.12423 10.2703C7.58336 14.6545 12.0472 19.0388 16.5156 23.423C17.3119 24.2591 18.3576 24.8257 19.5024 25.0413C20.4551 25.2208 21.439 25.152 22.3562 24.8419C23.2734 24.5318 24.0919 23.9911 24.7301 23.2736C25.3684 22.5562 25.8042 21.6871 25.9941 20.7528C26.184 19.8185 26.1214 18.8516 25.8125 17.9484C25.5168 17.0981 25.0165 16.3303 24.3542 15.7104L10.0934 1.68318C9.94191 1.56827 9.8271 1.4132 9.76249 1.23626C9.69789 1.05933 9.68619 0.867927 9.72879 0.684673C9.7671 0.536924 9.84262 0.401012 9.94843 0.289447C10.0542 0.177881 10.1869 0.0942455 10.3342 0.046238C10.4816 -0.00176947 10.6388 -0.0126066 10.7915 0.0147239C10.9443 0.0420544 11.0875 0.106675 11.2082 0.202637C11.2853 0.264613 11.3554 0.340361 11.4255 0.409224L25.7143 14.4365C26.7918 15.4812 27.5247 16.82 27.8177 18.279C27.8738 18.5613 27.9159 18.8437 27.9649 19.126L28 20.2553Z" fill="#9BCC37"/>
                            </svg>
                        </label>
                        <input class="hidden" type="file" id="file-upload" name="file-upload">
                        <button type="submit" class="interview__form__button__request">Оставить заявку</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    
    <script src="src/blocks/validate__form/inputmask.min.js"></script>
	<script src="src/blocks/validate__form/just-validate.min.js"></script>
	<script src="src/blocks/validate__form/validate.js" ></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="src/blocks/values/values.js"></script>
    <script src="src/blocks/header/header.js"></script>
    <script src="src/blocks/answers/answers.js"></script>
</body>
</html>