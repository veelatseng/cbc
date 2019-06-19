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
        <h1 class="title">對於此次回覆信件之滿意度調查</h1>
        <!-- Inslist Start -->
        <section class="survey">
          <form action="">
            <table summary=""  class="table_list">
              <caption></caption>
              <tr>
                <th scope="row"><label>處理速度</label></th>
                <td>
                  <label><input type="radio" value="">非常滿意</label>
                  <label><input type="radio" value="">滿意</label>
                  <label><input type="radio" value="">尚可</label>
                  <label><input type="radio" value="">不滿意</label>
                  <label><input type="radio" value="">非常不滿意</label>
                </td>
              </tr>
              <tr>
                <th scope="row"><label>內容、專業度</label></th>
                <td>
                  <label><input type="radio" value="">非常滿意</label>
                  <label><input type="radio" value="">滿意</label>
                  <label><input type="radio" value="">尚可</label>
                  <label><input type="radio" value="">不滿意</label>
                  <label><input type="radio" value="">非常不滿意</label>
                </td>
              </tr>
              <tr>
                <th scope="row"><label>解決問題程度</label></th>
                <td>
                  <label><input type="radio" value="">非常滿意</label>
                  <label><input type="radio" value="">滿意</label>
                  <label><input type="radio" value="">尚可</label>
                  <label><input type="radio" value="">不滿意</label>
                  <label><input type="radio" value="">非常不滿意</label>
                </td>
              </tr>
              <tr>
                <th scope="row"><label>整體滿意度</label></th>
                <td>
                  <label><input type="radio" value="">非常滿意</label>
                  <label><input type="radio" value="">滿意</label>
                  <label><input type="radio" value="">尚可</label>
                  <label><input type="radio" value="">不滿意</label>
                  <label><input type="radio" value="">非常不滿意</label>
                </td>
              </tr>
            </table>
            <div class="btn_grp">
              <input name="" type="reset" value="重新填寫">
              <input name="" type="submit" value="送出">
            </div>
          </form>

        </section>
        <!-- Inslist End -->
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