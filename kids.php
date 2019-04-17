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
                <h2 class="title">兒童網頁</h2>
                <!-- function功能區塊 -->
                <?php require_once('include/function_panel.html'); ?>
                <!-- kids Start -->
                <section class="kids">
                    <p>小朋友！想多瞭解央行組織與政策嗎？請直接點選下列問題，更不要忘了參加最後測驗題的挑戰喔。</p>
                    <div class="intro">
                        <h3>基本介紹</h3>
                        <ol class="cjk">
                            <li>中央銀行基本介紹：<a href="">什麼是中央銀行?</a></li>
                            <li>中央銀行總裁介紹：<a href="">中央銀行總裁是何許人也?</a></li>
                        </ol>
                        <h3>主要政策</h3>
                        <ol class="cjk">
                            <li>
                                發行貨幣
                                <ul>
                                    <li><a href="">什麼是貨幣的演進?</a></li>
                                    <li><a href="">新臺幣如何設計與使用?</a></li>
                                </ul>
                            </li>
                            <li>
                                穩定物價
                                <ul>
                                    <li><a href="">什麼是物價?</a></li>
                                    <li><a href="">為什麼物價會變得很可怕呢?</a></li>
                                    <li><a href="">中央銀行怎麼穩定物價呢?</a></li>
                                </ul>
                            </li>
                            <li>
                                維護金融穩定
                                <ul>
                                    <li><a href="">為什麼需要管理銀行?</a></li>
                                    <li><a href="">小朋友與銀行有什麼關係?</a></li>
                                    <li><a href="">中央銀行與銀行的關係?</a></li>
                                </ul>
                            </li>
                            <li>
                                保管黃金及管理外匯市場
                                <ul>
                                    <li><a href="">為什麼中央銀行是國家黃金的守護神?</a></li>
                                    <li><a href="">什麼是外匯與匯率?</a></li>
                                    <li><a href="">什麼是外匯存底?</a></li>
                                </ul>
                            </li>
                        </ol>
                        <div class="btn_grp">
                            <a href="" class="btn_enter">進入測驗題</a>
                        </div>
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
