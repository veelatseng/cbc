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
                <!-- 這裡需要套h1文章標題 -->
                <h1 class="title">Organizations</h1>
                <!-- function功能區塊 -->
                <?php require_once('include/function_panel_en.html'); ?>
                <!-- CP Start -->
                <section class="organization">
                    <!-- <h3>中央銀行之組織</h3> -->
                    <p>Organization and Management of the Central Bank of the Republic of China</p>
                    <ul>
                        <li>
                            <a href="" class="president">Governor<br>Deputy Governors</a>
                            <ul class="supervisor">
                                <li><a href="">Board of Supervisors</a></li>
                                <li><a href="">The Board of Directors</a></li>
                            </ul>
                            <ul class="office">
                                <li><a href="">Department of Banking</a></li>
                                <li><a href="">Department of Issuing</a></li>
                                <li><a href="">Department of Foreign Exchange</a></li>
                                <li><a href="">Department of the Treasury</a></li>
                                <li><a href="">Department of Financial Inspection</a></li>
                                <li><a href="">Department of Economic Research</a></li>
                                <li><a href="">Secretariat</a></li>
                                <li><a href="">Department of Accounting</a></li>
                                <li><a href="">Department of Information Management</a></li>
                                <li><a href="">Personnel Office</a></li>
                                <li><a href="">Ethics Office</a></li>
                                <li><a href="">Legal Affairs Office</a></li>
                                <li><a href="">New York Representative Office</a></li>
                                <li><a href="">London Representative Office</a></li>
                            </ul>
                            <ul class="mint">
                                <li><a href="">Central Engraving & Printing Plant</a></li>
                                <li><a href="">Central Mint</a></li>
                            </ul>
                        </li>
                    </ul>
                    <p>點選單位名稱可瀏覽該單位之職掌</p>
                </section>
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