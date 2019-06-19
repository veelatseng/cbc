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
        <h2 class="title">Case sent successfully</h2>
        <!-- function功能區塊 -->
        <?php require_once('include/function_panel_en.html'); ?>
        <!-- suggestions Start -->
        <section class="suggestions">
          <div class="flow">
            <div class="step">
              <div class="no">
                <span>1</span>
              </div>
              Service Flow
            </div>
            <div class="step">
              <div class="no">
                <span>2</span>
              </div>
              Letter-Writing
            </div>
            <div class="step">
              <div class="no">
                <span>3</span>
              </div>
              Confirmation letter reminder
            </div>
            <div class="step active">
              <div class="no">
                <span>4</span>
              </div>
              Case sent successfully
            </div>
          </div>
          <h3>Case sent successfully</h3>
          <div class="text_block">
            <p>We have received your confirmation and your letter is now being processed.</p>
            <p>Case No：<em>(OOOOOOOO)</em></p>
            <p>You can check the processing status by letter number.</p>   
            <p>We will submit the contents of your letter to the related processing personnel and reply as soon as possible within 7 days.</p>  
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