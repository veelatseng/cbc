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
                <div class="funtion_panel">
                    <button type="button" class="btn btn-sm btn_faq">意見信箱FAQ</button>
                    <!-- 文字大小 -->
                    <div class="font_size">
                        <span>字型大小：</span>
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
                            <li class="forward"><a href="#">轉寄友人</a></li>
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
                </div>
                <!-- suggestions Start -->
                <section class="suggestions">
                    <div class="flow">
                        <div class="step">
                            <div class="no">
                                <span>1</span>
                            </div>
                            服務流程
                        </div>
                        <div class="step active">
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
                    <h3>處理原則說明</h3>
                    <div class="text_block">
                        <ul>
                            <li>依據「行政院及所屬各機關處理人民陳情案件要點」第十四點規定，人民陳情案件如無具體內容或未具真實姓名或聯絡方式者，受理機關得不予處理。</li>
                            <li>如連續收到同一案情之人民陳情案件將予併案辦理。</li>
                        </ul>
                        <form action="" class="form_grid">
                            <div class="form_grp">
                                <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>姓名：</label>
                                <div class="form_content">
                                    <input type="text" id="" value="" placeholder="請輸入您的姓名">
                                </div>
                            </div>
                            <div class="form_grp">
                                <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>E-mail帳號：</label>
                                <div class="form_content">
                                    <input name="" id="" type="text" placeholder="請輸入您的e-mail">
                                </div>
                            </div>
                            <div class="form_grp">
                                <label for="password" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>聯絡地址：</label>
                                <div class="form_content">
                                    <input name="" id="" type="text" placeholder="請輸入您的聯絡地址">
                                </div>
                            </div>
                            <div class="form_grp">
                                <label for="password" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>聯絡電話：</label>
                                <div class="form_content">
                                    <input name="" id="" type="text" placeholder="請輸入您的連絡電話">
                                </div>
                            </div>
                            <div class="form_grp">
                                <label for="password" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>意見標題：</label>
                                <div class="form_content">
                                    <input name="" id="" type="text" placeholder="請輸入您的意見標題">
                                </div>
                            </div>
                            <div class="form_grp">
                                <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>意見內容：</label>
                                <div class="form_content">
                                    <textarea name="" id="" cols="30" rows="70" placeholder="請輸入意見內容(限2000字內)"></textarea>
                                </div>
                            </div>
                            <div class="form_grp">
                                <label class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>驗證碼：</label>
                                <div class="form_content">
                                    <img src="images/basic/captcha.gif" alt="" class="captcha">
                                    <input type="text" id="" value="">
                                    <button type="button" class="btn btn-sm btn_sound">語音播放</button>
                                    <button type="button" class="btn btn-sm btn_reload">語音播放</button>
                                </div>
                            </div>
                            <div class="btn_grp">
                                <input name="" type="reset" value="清除" class="sound">
                                <input name="Search" type="submit" value="送出">
                            </div>
                        </form>
                        <ul>
                            <li>本行將依您的來信內容，交由業務權責單位處理，並儘快於七日內答覆。</li>
                            <li>本網站不提供附加檔案功能，如欲於郵件中附加檔案，請洽：(02)2357-1522。</li>
                        </ul>
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