<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers - интернет-магазин цветов</title>

    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>
    <section class="hero">
        <div class="container">
            <h1 class="hero__title">
                Эксклюзивные цветы и букеты flowers shop
            </h1>
            <p class="hero__description">
                первая в россии эксклюзивная доставка цветов для людей,
                которые ценят <span class="hero__description-color">
                    уникальность
                </span>                  
            </p>
            <div class="swiper-container flowers-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_1.png" alt="img: Flowers" class="flowers-slider__img">
                  </div>
                  <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_2.png" alt="img: Flowers" class="flowers-slider__img">
                  </div>
                  <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_3.png" alt="img: Flowers" class="flowers-slider__img">
                  </div>
                  <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_4.png" alt="img: Flowers" class="flowers-slider__img">
                  </div>
                  <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_5.png" alt="img: Flowers" class="flowers-slider__img">
                  </div>
                  <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_6.png" alt="img: Flowers" class="flowers-slider__img">
                  </div>
                  <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_7.png" alt="img: Flowers" class="flowers-slider__img">
                  </div>
                </div>
                <div class="swiper-button-prev flowers-slider__btn"></div>
                <div class="swiper-button-next flowers-slider__btn"></div>
            </div>
            <p class="hero__cta">
                Закажите эксклюзивный букет со 
                <span class="hero__cta-color">
                    скидкой 10%
                </span>
            </p>
            <button data-fancybox data-src="#modal-1" href="javascript:;" class="hero__btn">
                Заказать букет
            </button>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <h2 class="reviews__title">
                Мы делаем лучшие букеты
            </h2>
            <div class="swiper-container reviews-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide reviews__slide">
                        <div class="reviews__image reviews__image-1">
                            <span class="reviews__name">
                                Алиса Иванова
                            </span>
                            <span class="reviews__city">
                                г. Киев
                            </span>
                        </div>
                        <div class="reviews__text-box">
                            <p class="reviews__text">
                                Я очень довольна таким отношением к делу. 
                                Обслужили просто превосходно, я заказывала 
                                по телефону — так подробно мне всё объяснили, 
                                помогли выбрать замечательный букет, и привезли 
                                всё вовремя, букет был очень красивый, он очень 
                                понравился, спасибо вам огромное.
                            </p>
                            <a href="javascript:;" id="review-1" class="reviews__link">
                                Посмотреть фотографии букета
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide reviews__slide">
                        <div class="reviews__image reviews__image-2">
                            <span class="reviews__name">
                                Ника Смирнова
                            </span>
                            <span class="reviews__city">
                                г. Одесса
                            </span>
                        </div>
                        <div class="reviews__text-box">
                            <p class="reviews__text">
                                Я очень довольна таким отношением к делу. 
                                Обслужили просто превосходно, я заказывала 
                                по телефону — так подробно мне всё объяснили, 
                                помогли выбрать замечательный букет, и привезли 
                                всё вовремя, букет был очень красивый, он очень 
                                понравился, спасибо вам огромное.
                            </p>
                            <a href="#" class="reviews__link">
                                Посмотреть фотографии букета
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide reviews__slide">
                        <div class="reviews__image reviews__image-3">
                            <span class="reviews__name">
                                Маргарита Смаева
                            </span>
                            <span class="reviews__city">
                                г. Краснодар
                            </span>
                        </div>
                        <div class="reviews__text-box">
                            <p class="reviews__text">
                                Я очень довольна таким отношением к делу. 
                                Обслужили просто превосходно, я заказывала 
                                по телефону — так подробно мне всё объяснили, 
                                помогли выбрать замечательный букет, и привезли 
                                всё вовремя, букет был очень красивый, он очень 
                                понравился, спасибо вам огромное.
                            </p>
                            <a href="#" class="reviews__link">
                                Посмотреть фотографии букета
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev reviews-slider__btn"></div>
                <div class="swiper-button-next reviews-slider__btn"></div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-md-0 advantages__box">
                    <div class="advantages__wrapp">
                        <img src="<?php echo get_template_directory_uri()?>//assets/images/icons/icon-planet.svg" alt="icon: planet" class="advantages__icon">
                    </div>
                    <h3 class="advantages__title">
                        Только прямые поставки цветов из Голландии
                    </h3>
                </div>
                <div class="col-md-4 mb-5 mb-md-0 advantages__box">
                    <div class="advantages__wrapp">
                        <img src="<?php echo get_template_directory_uri()?>//assets/images/icons/icon-scroll.svg" alt="icon: scroll" class="advantages__icon">
                    </div>
                    <h3 class="advantages__title">
                        Наши флористы имеют 10 летний стаж работы
                    </h3>
                </div>
                <div class="col-md-4 advantages__box">
                    <div class="advantages__wrapp">
                        <img src="<?php echo get_template_directory_uri()?>//assets/images/icons/icon-hand.svg" alt="icon: hand" class="advantages__icon">
                    </div>
                    <h3 class="advantages__title">
                        Все цветы вручную отбираются нашими флористами
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section class="goods">
        <div class="container">
            <h2 class="goods__title">
                Собери свой букет
                <span class="goods__title-color">
                    прямо сейчас
                </span>
            </h2>
            <p class="goods__description">
                Выберите желаемые цветы и наши флористы их оформят и доставят лично в руки!
            </p>
            <div class="row goods__wrapper">
                <div class="col-lg-3 col-md-6 goods__card" data-id="1">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>//assets/images/slider-Flowers/flower_1.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color1" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color1" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color1" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color1" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color1" value="blue">
                                <span class="card__label-cheched"></span>
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="2">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_2.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color2" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color2" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color2" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color2" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color2" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="3">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_3.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color3" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color3" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color3" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color3" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color3" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="4">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_4.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color4" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color4" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color4" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color4" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color4" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="5">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_5.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color5" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color5" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color5" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color5" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color5" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="6">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_6.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color6" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color6" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color6" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color6" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <span class="card__label-cheched"></span>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color6" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="7">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_7.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color7" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color7" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color7" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color7" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color7" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="8">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_1.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color8" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color8" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color8" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color8" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color8" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" href="javascript:;" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="9">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_3.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color8" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color8" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color8" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color8" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color8" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" href="javascript:;" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="10">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_7.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color8" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color8" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color8" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color8" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color8" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" href="javascript:;" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="11">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_2.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color8" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color8" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color8" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color8" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color8" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" href="javascript:;" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="12">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_4.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color8" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color8" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color8" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color8" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color8" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" href="javascript:;" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="13">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_6.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color8" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color8" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color8" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color8" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color8" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" href="javascript:;" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="14">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_5.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color8" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color8" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color8" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color8" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color8" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" href="javascript:;" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="15">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_2.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color8" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color8" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color8" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color8" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color8" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" href="javascript:;" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 goods__card" data-id="16">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/slider-Flowers/flower_5.png" alt="rose" class="card__img">
                        <h3 class="card__title">
                            розы
                        </h3>
                        <span class="card__label-text">
                            Выберите цвет:
                        </span>
                        <div class="card__colors">
                            <label class="card__label card__label-white">
                                <input class="card__input-colors" type="radio" name="color8" value="white">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-beige">
                                <input class="card__input-colors" type="radio" name="color8" value="beige">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-pink">
                                <input class="card__input-colors" type="radio" name="color8" value="pink">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-red">
                                <input class="card__input-colors" type="radio" name="color8" value="red">
                                <span class="card__label-cheched"></span>
                            </label>
                            <label class="card__label card__label-blue">
                                <input class="card__input-colors" type="radio" name="color8" value="blue">
                                <span class="card__label-cheched"></span>
                            </label>
                        </div>
                        <span class="card__label-text">
                            Количество:
                        </span>
                        <div class="card__counter-group">
                            <button class="card__counter-btn" data-symbol="decrease">-</button>
                            <input type="text" value="1" data-count="1" class="card__counter">
                            <button class="card__counter-btn" data-symbol="increase">+</button>
                        </div>
                        <button data-fancybox data-src="#modal-2" href="javascript:;" class="card__basket">
                            В корзину
                        </button>
                    </div>
                </div>
            </div>
            <a href="#" class="goods__more">
                Все цветы
            </a>
        </div>
    </section>
    <section class="offer">
        <div class="container">
            <h2 class="offer__title">
                остались вопросы?
            </h2>
            <a data-fancybox data-src="#modal-1" href="javascript:;" class="offer__link">
                закажите звонок нашего флориста!
            </a>
            <span class="offer__label">
                или позвоните по телефону
            </span>
            <a href="tel:+78006548745" class="offer__phone">
                8 (800) 654-87-45
            </a>
        </div>
    </section>

    <?php get_footer(); ?>

    <div class="modal-1" id="modal-1">
        <h2 class="modal__title">
            Закажите обратный звонок
        </h2>
        <form action="#">
            <input class="form__input" type="tel" placeholder="+3 (__) __-__-__">
            <button class="form__btn">
                Перезвоните мне
            </button>
        </form>
    </div>

    <div class="modal-2" id="modal-2">
        <h2>Отлично!</h2>
        <p>Товар добавлен в корзину!</p>
    </div>

    <?php wp_footer(); ?>

</body>
</html>