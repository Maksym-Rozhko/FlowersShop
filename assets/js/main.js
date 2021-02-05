$(document).ready(function() {
    const flowersSlider = new Swiper('.flowers-slider', {
      loop: true,
      slidesPerView: 6,
    
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2,
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 3,
        },
        // when window width is >= 992px
        992: {
          slidesPerView: 6,
        }
      }
  });

  const reviewsSlider = new Swiper('.reviews-slider', {
      loop: true,
      slidesPerView: 1,
    
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  });

  $("#review-1").on('click', function() {

    $.fancybox.open([
      {
        src  : '../assets/images/modalFlowers/flowers-1.jpg',
        opts : {
          caption : 'First caption',
          thumb   : '../assets/images/modalFlowers/flowers-1.jpg'
        }
      },
      {
        src  : '../assets/images/modalFlowers/flowers-2.jpeg',
        opts : {
          caption : 'Second caption',
          thumb   : '../assets/images/modalFlowers/flowers-2.jpeg'
        }
      },
      {
        src  : '../assets/images/modalFlowers/flowers-3.jpg',
        opts : {
          caption : 'Third caption',
          thumb   : '../assets/images/modalFlowers/flowers-3.jpg'
        }
      },
      {
        src  : '../assets/images/modalFlowers/flowers-4.jpg',
        opts : {
          caption : 'Fourth caption',
          thumb   : '../assets/images/modalFlowers/flowers-4.jpg'
        }
      },
      {
        src  : '../assets/images/modalFlowers/flowers-5.webp',
        opts : {
          caption : 'Fifth caption',
          thumb   : '../assets/images/modalFlowers/flowers-5.webp'
        }
      },
      {
        src  : '../assets/images/modalFlowers/flowers-6.jpg',
        opts : {
          caption : 'Sixth caption',
          thumb   : '../assets/images/modalFlowers/flowers-6.jpg'
        }
      },
      {
        src  : '../assets/images/modalFlowers/flowers-7.jpg',
        opts : {
          caption : 'Seventh caption',
          thumb   : '../assets/images/modalFlowers/flowers-7.jpg'
        }
      },
    ], {
      loop : true,
      thumbs : {
        autoStart : true
      }
    });
  });

  $(function(){
    $currentGoods = 8;
    $goods = $(".goods__wrapper>.goods__card");
      
      $update = function() {
        $activeGoods = 0;
        $dataGoods = 0;

        $goods.each(function(ind,obj) {
          $dataGoods++;
          $(this).css({ "display" : ($dataGoods > $currentGoods) ? 'none' : 'block' });

          if ( $dataGoods <= $currentGoods) { 
            $activeGoods++; 
          }
        });
          
        if ($activeGoods === $goods.length) {
          $btnMore.css({ "display" : "none" });   
        }
      };

      $update();
      $btnMore = $('.goods__more');
      $goodsWrapper = $('.goods__wrapper');
      $btnMore.click(function(e) {
        e.preventDefault();
        $currentGoods = $currentGoods + 4;
        $update();
      });
      
      $goodsWrapper.append($btnMore);
  });
});

const goodsAmount = document.querySelectorAll('.card__counter-group');

for (let counter of goodsAmount) {
  counter.addEventListener('click', e => {
    let target = e.target;
    let container = e.currentTarget;
    let counter = container.querySelectorAll('.card__counter')[0];
    let count = parseInt(counter.getAttribute("data-count"));
    const targetSymbol = target.dataset.symbol;

    if (targetSymbol === 'decrease') {
      count = count === 1 ? count : (count - 1);
    } else if (targetSymbol === 'increase') {
      count += 1;
    }

    counter.setAttribute('data-count', count);
    counter.value = count;
  });
};


// const goodsWrapper = document.querySelector('.goods__wrapper');
// const goodsMoreBtn = document.querySelector('.goods__more');
// const newDivElem = document.createElement('div');
// newDivElem.classList.add('col-lg-3', 'col-md-6');

// const goodsDataBase = [
//   {
//     "id": "9",
//     "img": "3",
//   },
//   {
//     "id": "10",
//     "img": "7",
//   },
//   {
//     "id": "11",
//     "img": "2",
//   },
//   {
//     "id": "12",
//     "img": "4",
//   },
// ];

// goodsMoreBtn.addEventListener('click', (e) => {
//   e.preventDefault();

//   for(goods of goodsDataBase) {
//     goodsDataBase.forEach(({id, img}) => {
//       // for (let i = 0; i <= goodsDataBase.length; i++) {
//       // }
//       newDivElem.innerHTML = `
//         <div class="">
//           <div class="card">
//               <img src="./assets/images/slider-Flowers/flower_${img}.png" alt="rose" class="card__img">
//               <h3 class="card__title">
//                   розы
//               </h3>
//               <span class="card__label-text">
//                   Выберите цвет:
//               </span>
//               <div class="card__colors">
//                   <label class="card__label card__label-white">
//                       <input class="card__input-colors" type="radio" name="color${id}" value="white">
//                       <span class="card__label-cheched"></span>
//                   </label>
//                   <label class="card__label card__label-beige">
//                       <input class="card__input-colors" type="radio" name="color${id}" value="beige">
//                       <span class="card__label-cheched"></span>
//                   </label>
//                   <label class="card__label card__label-pink">
//                       <input class="card__input-colors" type="radio" name="color${id}" value="pink">
//                       <span class="card__label-cheched"></span>
//                   </label>
//                   <label class="card__label card__label-red">
//                       <input class="card__input-colors" type="radio" name="color${id}" value="red">
//                       <span class="card__label-cheched"></span>
//                   </label>
//                   <label class="card__label card__label-blue">
//                       <input class="card__input-colors" type="radio" name="color${id}" value="blue">
//                       <span class="card__label-cheched"></span>
//                       <span class="card__label-cheched"></span>
//                   </label>
//               </div>
//               <span class="card__label-text">
//                   Количество:
//               </span>
//               <div class="card__counter-group">
//                   <button class="card__counter-btn" data-symbol="decrease">-</button>
//                   <input type="text" value="1" data-count="1" class="card__counter">
//                   <button class="card__counter-btn" data-symbol="increase">+</button>
//               </div>
//               <button data-fancybox data-src="#modal-2" class="card__basket">
//                   В корзину
//               </button>
//           </div>
//         </div>
//       `
//     });

//     goodsWrapper.append(newDivElem);
//   }
// });
