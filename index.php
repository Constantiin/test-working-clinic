<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Многопрофильная клиника для детей и взрослых</title>

    <link rel="stylesheet" href="css/index.css">

    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

</head>
<body>
    <header class="header">
        <div class="header__container container">
            <button class="header__burger-menu" aria-label="Меню"></button>

            <div class="header__mobile">
                <img class="header__logo" src="img/logo.png" alt="Логотип компании">
                <div class="header__contacts">
                    <a class="header__phone" href="tel:+78630000000">+7(863) 000 00 00</a>
                    <span class="header__city">Ростов-на-Дону</span>
                </div>
            </div>

            <div class="header-left">
                <img class="header__logo" src="img/logo.png" alt="Логотип компании">
                <address class="header__address address">
                    <span class="address__city">Ростов-на-Дону</span>
                    <span class="address__street">ул. Ленина, 2Б </span>
                </address>
            </div>
            <div class="header-right">
                <a class="header__phone" href="tel:+78630000000">+7(863) 000 00 00</a>
                <button class="header__appointment-btn btn" aria-label="Кнопка записи на приём">
                    Записаться на прием
                </button>
            </div>
        </div>

    </header>

    <nav class="nav">
        <div class="nav__container container">
            <div class="nav__menu menu">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="#" class="menu__link">О клинике</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">Услуги</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">Специалисты</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">Цены</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mobile-menu">
        <ul class="mobile-menu__list">
            <li class="mobile-menu__item">
                <a href="#" class="mobile-menu__link">О клинике</a>
            </li>
            <li class="mobile-menu__item">
                <a href="#" class="mobile-menu__link">Услуги</a>
            </li>
            <li class="mobile-menu__item">
                <a href="#" class="mobile-menu__link">Специалисты</a>
            </li>
            <li class="mobile-menu__item">
                <a href="#" class="mobile-menu__link">Цены</a>
            </li>
            <li class="mobile-menu__item">
                <a href="#" class="mobile-menu__link">Контакты</a>
            </li>
        </ul>
        
        <button class="mobile-menu__appointment-btn btn" aria-label="Кнопка записи на приём">
            Записаться на прием
        </button>
    </div>

    <main class="main">
        <img class="main__clinic-photo" src="img/clinic.jpg" alt="Фотография клиники">
        <div class="main__container container">
            <section class="main__top">
                <div class="main__content container">
                    <div class="main__content-wrapper">
                        <h1 class="main__title">Многопрофильная клиника для детей и взрослых</h1>
                        <div class="main__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua</div>
                    </div>
                </div>
            </section>

            <div class="main__slider swiper">
                <div class="swiper-wrapper">
                    <section class="main__bottom container swiper-slide">
                        <div class="main__card card">
                            <div class="card__content">
                                <h2 class="card__title">Check-UP</h2>
                                <h3 class="card__subtitle">для мужчин</h3>
                                <ul class="card__list">
                                    <li class="card__item">Гормональный скрининг</li>
                                    <li class="card__item">Тестостерон</li>
                                    <li class="card__item">Свободный тестостерон</li>
                                    <li class="card__item">Глобулин, связывающий половые гормоны</li>
                                </ul>
                                <div class="card__price price">
                                    <span class="price__with-discount">Всего 2800₽</span>
                                    <span class="price__without-discount">3500₽</span>
                                </div>
                                <div class="main__buttons">
                                    <button class="main__order-btn btn">Записаться</button>
                                    <button class="main__detail-btn btn">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- подключение файла с выборкой из базы -->
                    <?php include('db.php') ?>
                    <!-- перебираем в цикле строки выборки и выводим переменные в нужные места -->
                    
                    <!-- начало цикла -->
                    <?php foreach ($result as $row): ?>

                    <section class="main__bottom container swiper-slide">
                        <div class="main__card card">
                            <div class="card__content">
                                <h2 class="card__title"><?=$row['title']?></h2>
                                <h3 class="card__subtitle"><?=$row['subtitle']?></h3>
                                <ul class="card__list">
                                    <li class="card__item"><?=$row['option_1']?></li>
                                    <li class="card__item"><?=$row['option_2']?></li>
                                    <li class="card__item"><?=$row['option_3']?></li>
                                    <li class="card__item"><?=$row['option_4']?></li>
                                </ul>
                                <div class="card__price price">
                                    <span class="price__with-discount">Всего <?=$row['priceWithDiscount']?>₽</span>
                                    <span class="price__without-discount"><?=$row['price']?>₽</span>
                                </div>
                                <div class="main__buttons">
                                    <button class="main__order-btn btn">Записаться</button>
                                    <button class="main__detail-btn btn">Подробнее</button>
                                </div>
                            </div>
                        </div>

                    </section>

                    <?php endforeach; ?>
                    <!-- конец цикла -->

                </div>
                
                <div class="main__control-slide">
                    <button class="main__arrow main__arrow_left" aria-label="Предыдущий слайд"></button>
                    <p><span class="number-slide">1</span>/4</p>
                    <button class="main__arrow main__arrow_right" aria-label="Следующий слайд"></button>
                </div>
            </div>
            
        </div>
    </main>

    <footer class="footer">
        <div class="footer__container container">
            <img class="footer__logo" src="img/logo-footer.png" alt="Логотип компании">

            <ul class="footer__menu-list footer-menu">
                <li class="footer-menu__item">
                    <a href="#" class="footer-menu__link">О клинике</a>
                </li>
                <li class="footer-menu__item">
                    <a href="#" class="footer-menu__link">Услуги</a>
                </li>
                <li class="footer-menu__item">
                    <a href="#" class="footer-menu__link">Специалисты</a>
                </li>
                <li class="footer-menu__item">
                    <a href="#" class="footer-menu__link">Цены</a>
                </li>
                <li class="footer-menu__item">
                    <a href="#" class="footer-menu__link">Контакты</a>
                </li>
            </ul>

            <div class="footer__messengers messengers">
                <ul class="messengers__list">
                    <li class="messengers__item">
                        
                        <a class="messengers__link messengers__link_instagram" href="#" aria-label="Наш Инстаграм"></a>
                        
                    </li>
                    <li class="messengers__item">
                        
                        <a class="messengers__link messengers__link_whatsup" href="#" aria-label="Наш Вотсап"></a>
                        
                    </li>
                    <li class="messengers__item">
                        
                        <a class="messengers__link messengers__link_telegram" href="#" aria-label="Наш телеграм"></a>
                        
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <div class="overlay">
        <div class="appointment">
            <h2 class="appointment__title">Заполните форму и мы свяжемся с вами</h2>

            <form class="appointment__form callback" action="sendmail.php" method="post">

                <label class="callback__label">
                    <span class="callback__label-text">Имя:</span>
                    <input class="callback__input" type="text" name="name" required>
                </label>

                <fieldset class="callback__group gender">
                    <legend class="gender__title">Пол:</legend>
                    <label class="gender__label">
                        <span class="gender__text">Мужчина</span>
                        <input class="gender__radio" type="radio" name="gender" value="man">
                    </label>
                    <label class="gender__label">
                        <span class="gender__text">Женщина</span>
                        <input class="gender__radio" type="radio" name="gender" value="woman">
                    </label>
                </fieldset>

                <label class="callback__label">
                    <span class="callback__label-text">Возраст:</span>
                    <input class="callback__input" type="number" name="age">
                </label>

                <label class="callback__label">
                    <span class="callback__label-text">Телефон:</span>
                    <input type="tel" class="callback__input" name="phone" placeholder="ваш номер телефона" required>
                </label>

                <fieldset class="callback__group connect">
                    <legend class="connect__title">Где удобнее связаться?</legend>
                    <label class="connect__label">
                        <input class="connect__radio" type="radio" name="connect" value="call">
                        <span class="connect__text">Позвонить</span>
                    </label>
                    <label class="connect__label">
                        <input class="connect__radio" type="radio" name="connect" value="telegram">
                        <span class="connect__text">Телеграм</span>
                    </label>
                    <label class="connect__label">
                        <input class="connect__radio" type="radio" name="connect" value="whatsup">
                        <span class="connect__text">Whatsup</span>
                    </label>
                </fieldset>

                <button class="callback__btn btn" type="submit">Заказать обратную связь</button>
                <button class="callback__btn btn" type="reset">Очистить форму</button>
            </form>
        </div>
    </div>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
