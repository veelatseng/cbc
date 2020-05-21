<!doctype html>
<html lang="zh-Hant" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>歡迎來到中央銀行全球資訊網</title>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <!-- slick css-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css" />
  <!-- cbc css -->
  <link rel="stylesheet" href="css/cbc.css" id="cssStyle">
</head>

<body>
  <!-- 直接跳主內容區 -->
  <a class="goCenter" href="#center" tabindex="1">按Enter到主內容區</a>
  <!-- wrapper Start -->
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/header.html'); ?>
    <!-- header End -->
    <!-- main Start -->
    <div id="center" class="main innerpage">
      <!-- 內頁新增一個classname-->
      <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
      <div class="container">
        <!-- breadcrumb路徑 -->
        <?php require_once('include/breadcrumb.html'); ?>
        <!-- 這裡需要套h1文章標題 -->
        <h1 class="title">組織與職掌</h1>
        <!-- function功能區塊 -->
        <?php require_once('include/function_panel.html'); ?>
        <!-- CP Start -->
        <section class="organization">
          <h3>中央銀行之組織</h3>
          <p>總裁、副總裁下的部門有：</p>
          <p>業務局、發行局、外匯局、國庫局、金融業務檢查處、經濟研究處、秘書處、會計處、資訊處、人事室、政風室、法務室、駐紐約代表辦事處、駐倫敦代表辦事處、中央印製廠、中央造幣廠。</p>
          <ul>
            <li>
              <a href="" class="president">總裁、副總裁</a>
              <ul class="supervisor">
                <li><a href="">監事會</a></li>
                <li><a href="">理事會</a></li>
              </ul>
              <ul class="office">
                <li><a href="">業務局</a></li>
                <li><a href="">發行局</a></li>
                <li><a href="">外匯局</a></li>
                <li><a href="">國庫局</a></li>
                <li><a href="">金融業務檢查處</a></li>
                <li><a href="">經濟研究處</a></li>
                <li><a href="">秘書處</a></li>
                <li><a href="">會計處</a></li>
                <li><a href="">資訊處</a></li>
                <li><a href="">人事室</a></li>
                <li><a href="">政風室</a></li>
                <li><a href="">法務室</a></li>
                <li><a href="">駐紐約代表辦事處</a></li>
                <li><a href="">駐倫敦代表辦事處</a></li>
              </ul>
              <ul class="mint">
                <li><a href="">中央印製廠</a></li>
                <li><a href="">中央造幣廠</a></li>
              </ul>
            </li>
          </ul>
          <p>點選單位名稱可瀏覽該單位之職掌</p>
        </section>
      </div>
    </div>
    <!-- fatfooter Start -->
    <?php require_once('include/fatfooter.html'); ?>
    <!-- fatfooter End -->
    <!-- footer Start-->
    <?php require_once('include/footer.html'); ?>
    <!-- footer End -->
  </div>
  <a href="javascript:;" class="scrollToTop">回頁首</a>
  <?php require_once('include/js.html'); ?>
</body>

</html>