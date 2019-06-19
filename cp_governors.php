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
          <h2>中華民國中央銀行總裁</h2>
          <div class="governors_intro">
            <div class="pic">
              <img src="https://www.cbc.gov.tw/public/Data/86261133771.png" alt="">
            </div>
            <h3>楊金龍 先生<br>民國42年6月生</h3>
            <h4>學歷</h4>
            <ul>
              <li>國立政治大學銀行系畢業（65年5月）</li>
              <li>國立政治大學國際貿易研究所碩士（69年6月）</li>
              <li>英國伯明罕大學經濟研究所博士 （78年6月）</li>
            </ul>
            <h4>經歷</h4>
            <ul>
              <li>中央銀行經濟研究處研究員（82年4月 - 93年1月）</li>
              <li>中央銀行行務委員（93年1月 - 95年10月）</li>
              <li>中央銀行經濟研究處副處長（95年10月 - 97年3月）</li>
              <li>中央銀行經濟研究處處長（97年3月 - 101年2月）</li>
              <li>亞洲開發銀行（ADB）中華民國副理事（103年6月 - 107年3月）</li>
              <li>中美洲銀行（CABEI）中華民國副理事（103年6月 - 107年3月）</li>
              <li>中央銀行副總裁 （101年2月 - 迄今）</li>
            </ul>
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