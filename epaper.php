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
                <h2 class="title">訂閱電子報</h2>
                <!-- function功能區塊 -->
                <div class="function_panel">
                    <!-- 文字大小 -->
                    <div class="font_size">
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
                        <button type="button" class="btn btn-sm btn_subscribe">訂閱電子報</button>
                        <button type="button" class="btn btn-sm btn_subscribe_modify">變更/取消電子報</button>
                    </div>
                </div>
                <!-- Epaper Start -->
                <section class="epaper">
                    <h2>請填入您的訂閱資料</h2>
                    <!-- <p>註:<abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>為必填(選)欄位, 不能為空白。</p> -->
                    <form action="" class="form_grid">
                        <div class="form_grp">
                            <label for="" class="form_title"><abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>(必填)</abbr>訂戶電子郵件帳號：</label>
                            <div class="form_content">
                                <input type="mail" id="" value="">
                                <div class="notice_warning">這似乎不是一個正常的格式 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="form_grp">
                            <label class="form_title"><abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>(必填)</abbr>驗證碼：</label>
                            <div class="form_content">
                                <img src="images/basic/captcha.gif" alt="" class="captcha">
                                <input type="text" id="" value="">
                                <button type="button" class="btn btn-sm btn_sound">語音播放</button>
                                <button type="button" class="btn btn-sm btn_reload">語音播放</button>
                                <div class="notice_error">您輸入的驗證碼錯誤 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <table summary="" class="table_list">
                            <caption></caption>
                            <thead>
                                <tr>
                                    <th>新聞稿</th>
                                    <th>出版品</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="新聞稿">
                                        <div class="check_grp">
                                            <label><input type="checkbox" name="" value="" checked="">貨幣政策</label>
                                            <label><input type="checkbox" name="" value="">外匯政策</label>
                                            <label><input type="checkbox" name="" value="">首長演講辭</label>
                                            <label><input type="checkbox" name="" value="">經濟及金融情況</label>
                                            <label><input type="checkbox" name="" value="">統計資料</label>
                                            <label><input type="checkbox" name="" value="">鈔券及硬幣</label>
                                            <label><input type="checkbox" name="" value="">市場管理措施</label>
                                            <label><input type="checkbox" name="" value="">金融監理</label>
                                            <label><input type="checkbox" name="" value="">經理國庫、公債及國庫券</label>
                                            <label><input type="checkbox" name="" value="">其他</label>
                                        </div>
                                    </td>
                                    <td data-title="出版品">
                                        <div class="check_grp">
                                            <label><input type="checkbox" name="" value="" checked="">不定期及委託研究</label>
                                            <label><input type="checkbox" name="" value="">金融統計月報</label>
                                            <label><input type="checkbox" name="" value="">金融統計月報〔IMF格式〕</label>
                                            <label><input type="checkbox" name="" value="">中央銀行季刊</label>
                                            <label><input type="checkbox" name="" value="">中華民國臺灣地區國際收支平衡表季報</label>
                                            <label><input type="checkbox" name="" value="">本國銀行營運績效季報</label>
                                            <label><input type="checkbox" name="" value="">中央銀行年報</label>
                                            <label><input type="checkbox" name="" value="">中華民國臺灣地區資金流量統計</label>
                                            <label><input type="checkbox" name="" value="">中華民國臺灣地區公民營企業資金狀況調查結果報告</label>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="btn_grp">
                            <input name="" type="reset" value="清除">
                            <input name="" type="submit" value="確認訂閱">
                        </div>
                    </form>
                </section>
                <!-- Epaper End -->
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