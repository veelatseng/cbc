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
        <h2 class="title">E-mail filling and processing steps</h2>
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
            <button type="button" class="btn btn-sm btn_casesearch">Case Enquiry</button>
          </div>
        </div>
        <!-- suggestions Start -->
        <section class="suggestions">
          <div class="flow">
            <div class="step active">
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
            <div class="step">
              <div class="no">
                <span>4</span>
              </div>
              Case sent successfully
            </div>
          </div>
          <h3>System service flow chart</h3>
          <div class="flowchart">
            <img src="images/flowchart.png" alt="">
          </div>
          <h3>Personal data collection and handling use consent form</h3>
          <div class="agreement text_block">
            <ol>
              <li>Your personal information (including name, e-mail, phone number, address) will be protected by the Personal Data Protection Regulations. Personal information will only be used for relevant businesses and will not open to the public.</li>
              <li>I have understood and agreed to collect, process and use the information I have filled in the content.</li>
            </ol>
            <form action="">
              <div class="btn_grp">
                <input name="" type="reset" value="Cancel" class="sound">
                <input name="Search" type="submit" value="I agree with the above terms and will begin to write">
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