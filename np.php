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
        <h2 class="title">節點標題</h2>
        <!-- function功能區塊 -->
        <?php require_once('include/function_panel.html'); ?>
        <!-- NP Start -->
        <section class="np">
          <ul>
            <li><a href="#"><span class="num">1</span>利率及準備率</a></li>
            <li><a href="#"><span class="num">2</span>外匯資訊</a></li>
            <li><a href="#"><span class="num">3</span>金融穩定與監理</a></li>
            <li><a href="#"><span class="num">4</span>支付系統運作</a></li>
            <li><a href="#"><span class="num">5</span>經理國庫</a></li>
            <li><a href="#"><span class="num">6</span>發行貨幣</a></li>
            <li><a href="#"><span class="num">7</span>金融、國際收支、資金流量統計等</a></li>
            <li><a href="#"><span class="num">8</span>出版品</a></li>
            <li><a href="#"><span class="num">9</span>辦理人民申請提供政府資訊案件統計</a></li>
            <li><a href="#"><span class="num">10</span>國家賠償案件統計</a></li>
          </ul>
        </section>
        <!-- NP End -->
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