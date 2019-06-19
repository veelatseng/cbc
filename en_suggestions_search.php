<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to the Central Bank of the Republic of China (Taiwan)</title>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script> 
  <![endif]-->
  <!-- slick css-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css" />
  <!-- cbc css -->
  <link rel="stylesheet" href="css/cbc_en.css">
</head>

<body>
  <!-- 直接跳主內容區 -->
  <a class="goCenter" href="#center" tabindex="1">按Enter到主內容區</a>
  <!-- wrapper Start -->
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/header_en.html'); ?>
    <!-- header End -->
    <!-- main Start -->
    <div id="center" class="main innerpage">
      <!-- 內頁新增一個classname-->
      <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
      <div class="container">
        <!-- breadcrumb路徑 -->
        <?php require_once('include/breadcrumb_en.html'); ?>
        <!-- h2節點 -->
        <h2 class="title">Case Enquiry</h2>
        <!-- function功能區塊 -->
        <div class="function_panel">
          <!-- 文字大小 -->
          <div class="font_size">
            <!-- <span>字型大小：</span> -->
            <!-- 英文用<span>font-size：</span> -->
            <ul>
              <li><a href="#" class="small">S</a></li>
              <li><a href="#" class="medium">M</a></li>
              <li><a href="#" class="large">L</a></li>
            </ul>
          </div>
          <!-- function功能區塊 -->
          <div class="function">
            <ul>
              <li class="back"><a href="javascript:history.back()">Go Back</a></li>
              <li class="print"><a href="#">Print</a></li>
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
            <button type="button" class="btn btn-sm btn_fill">E-mail filling and processing steps</button>
          </div>            
        </div>
        <!-- suggestions Start -->
        <section class="suggestions">
          <div class="text_block">
            <form action="" class="form_grid">
              <p><abbr class="necessary" title=“Required“>*</abbr>Required</p>
              <div class="form_grp">
                <label for="" class="form_title"><abbr class="necessary" title="Required">*</abbr>Name：</label>
                <div class="form_content">
                  <input type="text" id="" value="" placeholder="Please key in your name">
                </div>
              </div>
              <div class="form_grp">
                <label for="" class="form_title"><abbr class="necessary" title="Required">*</abbr>Case NO.：</label>
                <div class="form_content">
                  <input name="" id="" type="text" placeholder="Please key in your Case NO.">
                </div>
              </div>
              <div class="form_grp">
                <label class="form_title"><abbr class="necessary" title=“Required“>*</abbr>Validation code：</label>
                <div class="form_content">
                  <img src="images/basic/captcha.gif" alt="" class="captcha">
                  <input type="text" id="" value="">
                  <button type="button" class="btn btn-sm btn_sound">Voice play</button>
                  <button type="button" class="btn btn-sm btn_reload">Regenerate</button>
                  <div class="notice_error">您輸入的驗證碼錯誤 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="btn_grp">
                <input name="Search" type="submit" value="Search">
              </div>
            </form>
          </div>
        </section>
        <!-- suggestions End -->
      </div>
    </div>
    <!-- fatfooter Start -->
    <?php require_once('include/fatfooter_en.html'); ?>
    <!-- fatfooter End -->
    <!-- footer Start-->
    <?php require_once('include/footer_en.html'); ?>
    <!-- footer End -->
  </div>
  <a href="javascript:;" class="scrollToTop">回頁首</a>
  <?php require_once('include/js.html'); ?>
</body>

</html>