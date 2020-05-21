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
        <!-- h2節點 -->
        <h2 class="title">RSS訂閱</h2>
        <!-- function功能區塊 -->
        <div class="function_panel">
          <!-- 文字大小 -->
          <div class="font_size">
            <!-- <span>字型大小：</span> -->
            <!-- 英文用<span>font-size：</span> -->
            <ul>
              <li><a href="#" class="small">小</a></li>
              <li><a href="#" class="medium">中</a></li>
              <li><a href="#" class="large">大</a></li>
            </ul>
          </div>
          <!-- function功能區塊 -->
          <div class="function">
            <ul>
              <li class="back"><a href="javascript:history.back()">回上一頁</a></li>
              <li class="print"><a href="#">友善列印</a></li>
              <!-- <li class="forward"><a href="#">轉寄友人</a></li> -->
            </ul>
          </div>
          <!-- 社群分享 -->
          <div class="share">
            <ul>
              <li><a href="#"><img src="images/basic/icon_facebook.png" alt="facebook"></a></li>
              <li><a href="#"><img src="images/basic/icon_googleplus.png" alt="google plus"></a></li>
              <li><a href="#"><img src="images/basic/icon_line.png" alt="line"></a></li>
              <li><a href="#"><img src="images/basic/icon_twitter.png" alt="twitter"></a></li>
            </ul>
          </div>
          <div class="function_btn">
            <button type="button" class="btn btn-sm btn_opml">OPML快速訂閱</button>
          </div> 
        </div>
        <!-- RSS Start -->
        <section class="rss">
          <h3>什麼是RSS?</h3>
          <p>RSS(Really Simple Syndication)是一種用來發佈和聚集網頁內容的XML，使用者透過訂閱RSS的功能配合RSS閱讀器，即可直接取得網站最即時的資訊。</p>
          <h3>如何訂閱 RSS?</h3>
          <p>下載RSS Reader或支援RSS功能的瀏覽器，安裝完成後，選擇訂閱頻道，將下方的RSS連結匯入；或者選擇下方的OPML快速訂閱，將所有RSS頻道一次匯入，再進行篩選。</p>
          <ul>
            <li><a href="#">中央銀行理監事聯席會議決議</a></li>
            <li><a href="#">重大政策</a></li>
            <li><a href="#">兒童網頁</a></li>
            <li><a href="#">新臺幣/美元 銀行間收盤匯率</a></li>
            <li><a href="#">外匯存底</a></li>
            <li><a href="#">貨幣總計數M2年增率</a></li>
            <li><a href="#">準備率</a></li>
            <li><a href="#">金融業隔夜拆款利率</a></li>
            <li><a href="#">重貼現率</a></li>
            <li><a href="#">徵才公告</a></li>
            <li><a href="#">電子布告欄</a></li>
            <li><a href="#">本行發行存單</a></li>
            <li><a href="#">新聞稿</a></li>
          </ul>
        </section>
        <!-- RSS End -->
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