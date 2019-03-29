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
                <h2 class="title">意見填寫</h2>
                <!-- function功能區塊 -->
                <?php require_once('include/funtion_panel.html'); ?>
                <!-- suggestions Start -->
                <section class="suggestions">
                    <div class="flow">
                        <div class="step">
                            <div class="no">
                                <span>1</span>
                            </div>
                            服務流程
                        </div>
                        <div class="step">
                            <div class="no">
                                <span>2</span>
                            </div>
                            填寫信件內容
                        </div>
                        <div class="step active">
                            <div class="no">
                                <span>3</span>
                            </div>
                            確認信提醒
                        </div>
                        <div class="step">
                            <div class="no">
                                <span>4</span>
                            </div>
                            案件送出成功
                        </div>
                    </div>
                    <h3>確認信提醒</h3>
                    <div class="suggestions_confirm text_block">
                        <p>您的電子信箱為<em>ooooo@gmail.com</em>，請確認是否正確。</p>
                        <p>確認無誤後，系統將隨即自動發送確認信函至此信箱，請您打開確認信函點選確認，系統及受理此意見內容。</p>
                        <p>請注意，若您在14天內未打開確認信函點選確認，本行將視為無效案件，請重新制本行意見信箱再次填寫，謝謝您的配合。</p> 
                    </div>
                </section>
                <!-- suggestions End -->
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