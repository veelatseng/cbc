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
        <h2 class="title">列表頁SP：新台幣／美元（中文）</h2>
        <!-- function功能區塊 -->
        <?php require_once('include/function_panel.html'); ?>
        <!-- LP Start -->
        <section class="lp">
          <h3 class="table_title">新臺幣對美元銀行間成交之收盤匯率 </h3>
          <div>
            <table summary="">
              <caption>(資料來源：台北外匯經紀股份有限公司)</caption>
              <thead>
                <tr>
                  <th>日期</th>
                  <th>NTD/USD</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-title="日期" class="num">2018-11-13</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-12</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-11</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-10</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-09</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-08</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-07</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-06</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-05</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-04</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-03</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-02</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-11-01</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-10-31</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
                </tr>
                <tr>
                  <td data-title="日期" class="num">2018-10-30</td>
                  <td data-title="NTD/USD" class="rate">30.902</td>
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