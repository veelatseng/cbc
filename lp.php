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
        <h2 class="title">列表頁：一般列表頁</h2>
        <!-- function功能區塊 -->
        <div class="function_panel">
          <!-- 文字大小 -->
          <div class="font_size">
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
              <li><a href="#" class="facebook"></a></li>
              <li><a href="#" class="google"></a></li>
              <li><a href="#" class="line"></a></li>
              <li><a href="#" class="twitter"></a></li>
            </ul>
          </div>
          <div class="function_btn">
            <button type="button" class="btn btn-sm  btn_advanced_search">顯示條件查詢</button>
          </div> 
        </div>
        <!-- LP Start -->
        <section class="lp">
          <!-- advanced_search -->
          <?php require_once('include/advanced_search.html'); ?>
          <!-- category -->
          <?php require_once('include/category.html'); ?>
          <!-- 文字列表 -->
          <div class="list">
            <ul>
              <li>
                <span class="num">1</span><a href="#">107年11月5日申購發行資訊</a>
              </li>
              <li>
                <span class="num">2</span><a href="#">107年11月5日申購發行資訊</a>
              </li>
              <li>
                <span class="num">3</span><a href="#">107年9月底銀行衍生性金融商品名目本金餘額統計</a>
              </li>
              <li>
                <span class="num">4</span><a href="#">107年11月2日中央銀行公開市場操作資訊</a>
              </li>
              <li>
                <span class="num">5</span><a href="#">107年11月364天期定期存單開標結果</a>
              </li>
              <li>
                <span class="num">6</span><a href="#">107年11月2日申購發行資訊</a>
              </li>
              <li>
                <span class="num">7</span><a href="#">107年11月1日中央銀行公開市場操作資訊</a>
              </li>
              <li>
                <span class="num">8</span><a href="#">107年11月1日申購發行資訊</a>
              </li>
              <li>
                <span class="num">9</span><a href="#">107年9月銀行衍生性金融商品交易量統計</a>
              </li>
              <li>
                <span class="num">10</span><a href="#">107年9月國際金融業務分行（OBU）概況</a>
              </li>
              <li>
                <span class="num">11</span><a href="#">107年10月31日中央銀行公開市場操作資訊</a>
              </li>
              <li>
                <span class="num">12</span><a href="#">107年10月31日申購發行資訊</a>
              </li>
              <li>
                <span class="num">13</span><a href="#">預告修正「外匯收支或交易申報辦法」</a>
              </li>
              <li>
                <span class="num">14</span><a href="#">107年10月30日中央銀行公開市場操作資訊</a>
              </li>
              <li>
                <span class="num">15</span><a href="#">107年10月30日申購發行資訊</a>
              </li>
            </ul>
          </div>
        </section>
        <!-- LP End -->
        <!-- Pagination -->
        <?php require_once('include/pagination.html'); ?>
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
