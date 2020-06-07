<div class="page-container">
    <div class="header row" id="section1">
        <div class="col-6"></div>
        <div class="col-1 menu-item menu-item-active" section="#section1">Главная</div>
        <div class="col-1 menu-item" section="#section2">Проекты</div>
        <div class="col-1 menu-item" section="#section3">Детали</div>
        <div class="col-1 menu-item">Контакты</div>

    </div>

    <div class="middles row" id="section2">
        <div class="col-3"></div>
        <div class="col-3 middles-first text">Проекты госструктур</div>
        <div class="col-3 middles-second text">Проекты</div>
        <div class="col-3 middles-third text">Контроль</div>
    </div>

    <div class="cores row" id="section3">
        <div class="row">
            <div class="col-4">
                <img src="" style="width:100%" id="main-case-image">
            <div/>
            <div id="main-case-text"></div>
        </div>
    </div>

        <!-- end .container --></div>

    <script>
      $(document).ready(function () {
        // плавное перемещение страницы к нужному блоку
        $(".menu-item").click(function () {
          let elementClick = $(this).attr("section");
          $(".menu-item").removeClass('menu-item-active');
          $(this).addClass('menu-item-active');
          destination = $(elementClick).offset().top;
          $("body,html").animate({scrollTop: destination}, 800);
        });
      });

    </script>
{!! $jsLoaderClass !!}
