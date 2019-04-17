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
                <h2 class="title">意見信箱</h2>
                <!-- function功能區塊 -->
                <div class="function_panel">
                    <!-- 文字大小 -->
                    <div class="font_size">
                        <!-- <span>字型大小：</span> -->
                        <!-- 英文用<span>font-size：</span> -->
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
                            <li><a href="#"><img src="images/basic/icon_facebook.png" alt="facebook"></a></li>
                            <li><a href="#"><img src="images/basic/icon_googleplus.png" alt="google plus"></a></li>
                            <li><a href="#"><img src="images/basic/icon_line.png" alt="line"></a></li>
                            <li><a href="#"><img src="images/basic/icon_twitter.png" alt="twitter"></a></li>
                        </ul>
                    </div>
                    <div class="function_btn">
                        <button type="button" class="btn btn-sm btn_casesearch">案件查詢</button>
                    </div>
                </div>
                <!-- suggestions Start -->
                <section class="suggestions">
                    <div class="flow">
                        <div class="step active">
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
                        <div class="step">
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
                    <h3>本系統服務流程圖</h3>
                    <div class="flowchart">
                        <img src="images/flowchart.png" alt="">
                    </div>
                    <h3>個人資料蒐集處理利用告知事項暨同意書</h3>
                    <div class="agreement text_block">
                        <ol>
                            <li>為確認您所提供的電子信箱無誤，或防止遭他人冒用等，在您填寫完信件寄出時，系統將自動發送「確認信」至您的信箱，請點選確認連結後，才完成意見信箱留言程序；本行將依您的來信內容，交由權責單位處理，並儘快於七日內答覆(本系統服務流程圖如下)。</li>
                            <li>您所填寫的資料(含姓名、電子郵件信箱、電話、地址) ，依據個人資料保護法及相關規定，不對外公開，僅供「與當事人連絡」或「轉知權責單位處理」等業務聯繫使用。</li>
                            <li>本人已明白並同意貴行依前項目的蒐集、處理及使用本人填寫的資料。</li>
                        </ol>
                        <form action="">
                            <div class="btn_grp">
                                <input name="" type="reset" value="取消" class="sound">
                                <input name="Search" type="submit" value="同意以上規範，開始寫信">
                            </div>
                        </form> 
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