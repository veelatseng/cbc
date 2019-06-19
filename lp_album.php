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
        <h2 class="title">列表頁：圖文列表頁</h2>
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
          <!-- 相簿列表 -->
          <div class="album">
            <ul>
              <li>
                <a href="#">
                  <div class="imgOuter">
                    <img src="https://assets.imgix.net/examples/kingfisher.jpg?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                  </div>
                  <div class="caption">
                    <time>2018-01-01</time>
                    <h3>中央銀行理監事聯席會議會後記者會</h3>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="imgOuter">
                    <img src="https://assets.imgix.net/examples/lorie.png?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                  </div>
                  <div class="caption">
                    <time>2018-01-01</time>
                    <h3>己亥豬年生肖紀念套幣記者會</h3>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="imgOuter">
                    <img src="https://assets.imgix.net/unsplash/transport.jpg?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                  </div>
                  <div class="caption">
                    <time>2018-01-01</time>
                    <h3>楊金龍總裁「貿易戰之國際經濟新局與臺灣因應策略」研討會演講「國際經貿新局－對美中貿易失衡的觀點」</h3>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="imgOuter">
                    <img src="https://assets.imgix.net/unsplash/motorbike.jpg?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                  </div>
                  <div class="caption">
                    <time>2018-01-01</time>
                    <h3>相簿標題</h3>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="imgOuter">
                    <img src="https://assets.imgix.net/unsplash/coyote.jpg?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                  </div>
                  <div class="caption">
                    <time>2018-01-01</time>
                    <h3>相簿標題</h3>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="imgOuter">
                    <img src="https://assets.imgix.net/examples/blueberries.jpg?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                  </div>
                  <div class="caption">
                    <time>2018-01-01</time>
                    <h3>相簿標題</h3>
                  </div>
                </a>
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
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="vendor/jquery.easing.min.js"></script>
  <!-- slick js -->
  <script src="vendor/slick/slick.min.js "></script>
  <script src="vendor/slick/slick-lightbox.js "></script>
  <!-- hyUI -->
  <script src="js/hyui.js"></script>
  <!-- 客製js -->
  <script src="js/customize.js"></script>
</body>

</html>
