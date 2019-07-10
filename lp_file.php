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
        <h2 class="title">列表頁：檔案列表頁</h2>
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
          <div class="table_list file_download">
            <table summary="警政單位偵破偽造新臺幣鈔券案件獎金發給原則">
              <caption></caption>
              <thead>
                <tr>
                  <th>序號</th>
                  <th>標題</th>
                  <th>檔案下載</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-title="序號" class="num">01</td>
                  <td data-title="標題">106年1月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">02</td>
                  <td data-title="標題">106年2月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">03</td>
                  <td data-title="標題">106年3月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">04</td>
                  <td data-title="標題">106年4月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">05</td>
                  <td data-title="標題">106年5月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">06</td>
                  <td data-title="標題">106年6月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">07</td>
                  <td data-title="標題">106年7月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">08</td>
                  <td data-title="標題">106年8月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">09</td>
                  <td data-title="標題">106年9月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">10</td>
                  <td data-title="標題">106年10月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">11</td>
                  <td data-title="標題">106年11月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">12</td>
                  <td data-title="標題">106年12月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">13</td>
                  <td data-title="標題">105年1月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">14</td>
                  <td data-title="標題">105年2月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td data-title="序號" class="num">15</td>
                  <td data-title="標題">105年3月份</td>
                  <td data-title="檔案下載" class="file">
                    <a href="xxxx.doc" class="doc">word檔名</a>
                    <a href="xxxx.pdf" class="pdf">pdf檔名</a>
                    <a href="xxxx.odf" class="odf">odf檔名</a>
                  </td>
                </tr>
              </tbody>
            </table>
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