<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Take Off Rally 2017 - Keio Univ. SFC Graduate Party -</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style/basscss.css">
    <link rel="stylesheet" href="style/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/feedin.js"></script>
    <script type="text/javascript" src="./js/nav.js"></script>
    <!--scroll --!>
    <script type="text/javascript">
      $(document).ready(function() {
       $('#top').scrollInTurn({
           fadeInSpeed:1000
        });
        $('#fee').scrollInTurn();
        $('#about').scrollInTurn();
        $('#info').scrollInTurn();
      });
    </script>
    <style>
      .fixed {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10000;
      }
    </style>
  </head>
  <body class="white bg-black center">
    <nav class="clearfix py2 bg-lighten-3 fixed sm-show">
      <div class="sm-flex center nowrap">
        <div class="flex-auto">
          <a href="#top" class="btn btn-primary black bg-white navbtn">Top</a>
        </div>
        <div class="flex-auto">
          <a href="#about" class="btn btn-primary black bg-white navbtn">Take Off Rallyとは?</a>
        </div>
        <div class="flex-auto">
          <a href="#info" class="btn white navbtn">概要</a>
        </div>
        <div class="flex-auto">
          <a href="#fee" class="btn white navbtn">料金</a>
        </div>
        <div class="flex-auto">
          <a href="#contact" class="btn white navbtn">Contact</a>
        </div>
      </div>
    </nav>
    <article id="top" class="py4">
    <div class="target">
    </div>
    <div id="photo">
        <img src="./img/top.jpg" alt="Take Off Rally">
    </div>
    <div id="about" class="clearfix py1 px3">
      <h2>Take Off Rallyとは？</h2>
      <h4 class="mx-auto col-5">SFC Take Off Rally は、SFC1期生の卒業から続く、伝統的なSFC生のための卒業記念パーティー・謝恩会です。今年度もSFC24期生のご卒業を盛大にお祝いします！</h4>
    </div>
    <div id="info" class="py1">
      <h2>開催概要</h2>
      <table class="mx-auto col-5">
        <tr>
            <th>日時<th><td>2017年3月23日(水)18:30~</td>
        </th>
        <tr>
            <th>会場<th><td>クルーズ・クルーズ YOKOHAMA(スカイビル27階)</td>
        </th>
      </table>
    </div>
    <div id="fee" class="px2 py1 center">
      <h2>料金</h2>
      <h3>基本料金 10,000円</h3>
      <table class="mx-auto col-5">
        <caption>各種割引</caption>
        <tr>
            <th>早割<th><td>2月10日までの申し込みで500円割引</td>
        </th>
        <tr>
            <th>グループ割<th><td>5人以上同時申し込みした人全員300円ずつ割引</td>
        </th>
        <tr>
            <th>シェア割<th><td>Take Off Rally 2017 Facebookページをシェアで300円割引</td>
        </th>
      </table>
      <p class="mx-auto col-5">各種割引併用可能！8900円〜で参加いただけます</p>
      <a href="https://docs.google.com/forms/d/e/1FAIpQLScNzsD9zTFm9r4F10DrxXaWPuabCY53ZufbdogSr26TaXN6oA/viewform?c=0&w=1" class="btn black bg-white">参加申し込み</a>
    </div>
    <div id="contact" class="py2 px3 center">
      <h2>お問い合わせ</h2>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=1073465862720028";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-page" data-href="https://www.facebook.com/takeoffrally2017/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/takeoffrally2017/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/takeoffrally2017/">慶應義塾大学sfc Take Off Rally2017</a></blockquote></div>
        <h3>Mail : takeoff[at]sfc.keio.ac.jp</h3>
    </div>
    </article>
    <footer class="clearfix py3">
    <div class="clearfix">
      <div id="copyright" class="px3 right">
        &copy Take Off Rally2017実行委員会 <?php echo date(Y); ?>
      </div>
    </div>
    </footer>
  </body>
</html>
