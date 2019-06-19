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
        <!-- 這裡需要套h1文章標題 -->
        <h1 class="title">現任首長</h1>
        <!-- function功能區塊 -->
        <?php require_once('include/function_panel.html'); ?>
        <!-- Governors Start -->
        <section class="governors">
          <h2>總裁</h2>
          <div class="governors_info">
            <a href="">
              <span class="pic">
                <img src="https://www.cbc.gov.tw/public/Data/86261133771.png" alt="">
              </span>
              楊金龍 先生
            </a>
          </div>
          <h2>副總裁</h2>
          <div class="governors_info">
            <a href="">
              <span class="pic">
                <img src="https://www.cbc.gov.tw/public/Data/25316505771.JPG" alt="">
              </span>
              嚴宗大 先生
            </a>
          </div>
          <div class="governors_info">
            <a href="">
              <span class="pic">
                <img src="https://www.cbc.gov.tw/public/Data/8321441471.jpg" alt="">
              </span>
              陳南光 先生
            </a>
          </div>
        </section>
        <!-- Governors End -->
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