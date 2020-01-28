<?php 
    require "db.php";
?>
<!DOCTYPE html>
<html
  lang="en"
  xmlns="http://www.w3.org/1999/xhtml"
  xmlns:og="http://ogp.me/ns#"
>
  <head>
    <meta charset="utf-8" />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./style.css" />
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <meta property="og:title" content="Student Council Web" />
    <meta property="og:url" content="http://council.novel.systems/" />
    <meta property="og:image" content="./imgs/Vector_Smart_Object_11.png" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Student Council</title>
    <link rel="shortcut icon" href="./imgs/vector_smart_object__nGAMa.ico" />
  </head>
  <body>
    <nav class="navbar justify-content-center navbar-light">
      <a class="navbar-brand" href="#">
        <img
          src="./imgs/Vector_Smart_Object_11.png"
          width="142"
          height="100"
          alt="Student Council"
        />
      </a>
    </nav>
    <div class="jumbotron jumbotron-fluid vertical-center">
      <div class="container">
        <h1 class="display-4">
          <b>Student Council</b> <br />
          НИШ г.Уральск
        </h1>
        <p class="lead">
          Проявите лидерские качества и сделайте нашу школу лучше вместе с нами!
        </p>
        <p>
          <a href="https://t.me/nisuralsk"
            ><img
              src="./imgs/iconfinder_icon_telegram_4875780.svg"
              alt="Telegram"
              height="40px"
          /></a>
          <a href="https://instagram.com/niscouncil"
            ><img
              src="./imgs/iconfinder_38-instagram_1161953.svg"
              alt="Instagram"
              height="40px"
          /></a>
        </p>
        <h5>
          По предложениям:
          <a href="mailto:council.nis@gmail.com">council.nis@gmail.com</a>
        </h5>
      </div>
    </div>
    <div class="container">
      <?php
        $activities = R::find("activities","completed = ?",array(false));
        if($activities){
      ?>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Дата</th>
              <th scope="col">Название</th>
              <th scope="col">Описание</th>
              <th scope="col">Дополнительно</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($activities as $activity){ ?>
            <tr>
              <th scope="row"><?php echo $activity->date; ?></th>
              <td><?php echo $activity->name; ?></td>
              <td><?php echo $activity->desc; ?></td>
              <?php if($activity->site){ ?>
              <td>
                <a href="<?php echo $activity->site ?>"><?php echo $activity->site ?></a>
              </td>
              <?php } ?>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      <?php 
        echo "</div>";
        }
      ?>
      <hr class="my-4" />
      <h2>Функции:</h2>
      <div class="row">
        <div class="col-lg-3 col-xs-12">
          <div class="card">
            <div class="card-body">
              <h3>
                Открыть <br> Рейтинг
              </h3>
              <a
                class="btn btn-primary"
                href="https://rating.novel.systems/"
                >Открыть</a
              >
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <div class="card">
            <div class="card-body">
              <h3>
                Создать клуб NIS Comm
              </h3>
              <a class="btn btn-primary" href="https://bit.ly/nis_comm"
                >Создать</a
              >
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <div class="card">
            <div class="card-body">
              <h3>
                Открыть Архив
              </h3>
              <a class="btn btn-primary" href="https://bit.ly/nis_archive"
                >Открыть</a
              >
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <div class="card">
            <div class="card-body">
              <h3>
                Открыть <br> СУШ
              </h3>
              <a
                class="btn btn-primary"
                href="http://sms.ura.nis.edu.kz/Root/Account/Login?ReturnUrl=%2froot"
                >Открыть</a
              >
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <div class="card bg-warning">
            <div class="card-body">
              <h3>
                Открыть сетку NIS CUP
              </h3>
              <a
                class="btn btn-primary"
                href="
https://challonge.com/ru/niscs"
                >Открыть</a
              >
            </div>
          </div>  
      </div>
      </div>
      <hr class="my-4" />
      <h2>Следи за нашей работой:</h2>
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <a class="card btn btn-left" href="https://bit.ly/nisheadquarters">
            <div class="card-body">
              <h1>
                <img
                  class="ministry-logo"
                  src="./imgs/HQ.png"
                  alt="Council HQ"
                />
              </h1>
              <h4><b>Президент:</b></h4>
              <h4>Жарқынұлы Данияр 11B</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-xs-12">
          <a class="card btn btn-left" href="https://bit.ly/nisdigital">
            <div class="card-body">
              <h1>
                <img
                  class="ministry-logo"
                  src="./imgs/Digital.png"
                  alt="Council Digital"
                />
              </h1>
              <h4><b>Председатель:</b></h4>
              <h4>Максутов Акылбек 11C</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-xs-12">
          <a class="card btn btn-left" href="https://bit.ly/nisvolunteers">
            <div class="card-body">
              <h1>
                <img
                  class="ministry-logo"
                  src="./imgs/Volunteer.png"
                  alt="Council Volunteers"
                />
              </h1>
              <h4><b>Председатель:</b></h4>
              <h4>Сансызбаева Айдана 11А</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-xs-12">
          <a class="card btn btn-left" href="https://bit.ly/nisshanyraks">
            <div class="card-body">
              <h1>
                <img
                  class="ministry-logo"
                  src="./imgs/Shanyraks.png"
                  alt="Council Shanyraks"
                />
              </h1>
              <h4><b>Председатель:</b></h4>
              <h4>Хайретдинова Дана 11A</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-xs-12">
          <a class="card btn btn-left" href="https://bit.ly/nisevents">
            <div class="card-body">
              <h1>
                <img
                  class="ministry-logo"
                  src="./imgs/Events.png"
                  alt="Council Events"
                />
              </h1>
              <h4><b>Председатель:</b></h4>
              <h4>Каниева Наргиз 11E</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-xs-12">
          <a class="card btn btn-left" href="https://bit.ly/nismedia">
            <div class="card-body">
              <h1>
                <img
                  class="ministry-logo"
                  src="./imgs/Media.png"
                  alt="Council Media"
                />
              </h1>
              <h4><b>Председатель:</b></h4>
              <h4>Хабиев Жангирхан 12C</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
    <footer class="container-fluid footer" style="background-color: #f3f3f3;">
      <div class="container">
        <span class="text-muted">
          <b> © 2020 Copyright: </b> Yerzhan Zhamashev <br />
          at Council Digital, NIS PhM in Uralsk
        </span>
      </div>
    </footer>
  </body>
</html>