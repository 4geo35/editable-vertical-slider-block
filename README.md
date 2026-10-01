### Установка

Добавить в `tailwind.admin.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-vertical-slider-block/src/resources/views/livewire/admin/**/*.blade.php",
    "./vendor/4geo35/editable-vertical-slider-block/src/resources/views/admin/**/*.blade.php",

Добавить в `tailwind.config.js`, созданный в пакете `tailwindcss-theme`. 

    "./vendor/4geo35/editable-vertical-slider-block/src/resources/views/components/**/*.blade.php",
    "./vendor/4geo35/editable-vertical-slider-block/src/resources/views/web/**/*.blade.php",

Установить слайдер `npm install swiper`

Добавить в `app.js`:

    import Swiper from "swiper/bundle"
    import "swiper/css/bundle"
    window.Swiper = Swiper

Установить lightbox `npm install fslightbox`, добавить в `app.js`:

    import "fslightbox"

#### Views

Сокращение для представлений: `evsb`

#### Config

Название файла: `editable-vertical-slider-block`  
Название типа блока: `verticalSlides`

- `slidesPerView` => `3`: количество слайдов на экране `3` или `6`
- `textOnPicture` => `false`: выводить заголовок над изображением
