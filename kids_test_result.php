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
  <link rel="stylesheet" href="css/cbc.css">
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
        <!-- h2節點 -->
        <h2 class="title">認識央行(兒童網頁)-測驗題</h2>
        <!-- function功能區塊 -->
        <?php require_once('include/function_panel.html'); ?>
        <!-- kids Start -->
        <section class="kids">
          <ul class="kids_test">
            <li>
              <div class="question">
                1.中央銀行在台北市那一條路上？
                <span class="answer">你選擇的是：羅斯福路</span>
              </div>
              <div class="answer">
                <span class="right"></span>中央銀行的地址為台北市羅斯福路一段2號。
              </div>
            </li>
            <li>
              <div class="question">
                2.哪一國人創造最早的紙幣紀錄？
                <span class="answer">你選擇的是：美國</span>
              </div>
              <div class="answer">
                <span class="wrong"></span>在西元十世紀北宋初期，四川商人共同發行一種紙券「交子」，是人類最早的紙幣紀錄。
              </div>
            </li>
          </ul>
        </section>
        <!-- kids End -->
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
