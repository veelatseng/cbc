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
                <h2 class="title">認識央行(兒童網頁)-測驗題</h2>
                <!-- function功能區塊 -->
                <?php require_once('include/function_panel.html'); ?>
                <!-- kids Start -->
                <section class="kids">
                    <ul class="kids_test">
                        <li>
                            <div class="question">
                                1.中央銀行在台北市那一條路上？
                            </div>
                            <form action="">
                                <div class="radio_grp option">
                                    <label><input name="radioSample" type="radio" value="">中山北路</label>
                                    <label><input name="radioSample" type="radio" value="">羅斯福路</label>
                                    <label><input name="radioSample" type="radio" value="">忠孝西路</label>
                                    <label><input name="radioSample" type="radio" value="">新生南路</label>
                                </div>
                            </form>
                        </li>
                    </ul>
                    <div class="btn_grp">
                        <input name="Search" type="submit" value="確認送出" class="btn_enter">
                        <a href="javascript:history.back()" class="btn_back">回上一題</a></li>
                    </div>
                </section>
                <!-- kids End -->
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
