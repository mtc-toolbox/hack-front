<div class="page-container">
    <div class="header row" id="section1">
        <div class="col-6"></div>
        <div class="col-1 menu-item menu-item-active" section="#section1">Главная</div>
        <div class="col-1 menu-item" section="#section2">Проекты</div>
        <div class="col-1 menu-item"  section="#section3">Новости</div>
        <div class="col-1 menu-item">Контакты</div>

    </div>

    <div class="middles row" id="section2">
        <div class="col-3"></div>
        <div class="col-3 middles-first text">Проекты госструктур</div>
        <div class="col-3 middles-second text">Проекты</div>
        <div class="col-3 middles-third text">Контроль</div>
    </div>

    <div class="cores row" id="section3">
        <div class="col-3" id="categories">
            <div class="col-12 core-category core-first text" data-id="1">Медицина</div>
            <div class="col-12 core-category core-second text" data-id="2">ПФ</div>
            <div class="col-12 core-category core-third text"  data-id="3">ЖКХ</div>
            <div class="col-12 core-category core-zero text"  data-id="0">Все</div>
        </div>
        <div class="col-9">
            <div class="row" id="cases">

            </div>
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
