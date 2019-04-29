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
                <h2 class="title">Change subscription/unsubscribe</h2>
                <!-- function功能區塊 -->
                <div class="function_panel">
                    <!-- 文字大小 -->
                    <div class="font_size">
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
                            <li><a href="#"><img src="images/basic/icon_facebook.png" alt="facebook"></a></li>
                            <li><a href="#"><img src="images/basic/icon_googleplus.png" alt="google plus"></a></li>
                            <li><a href="#"><img src="images/basic/icon_line.png" alt="line"></a></li>
                            <li><a href="#"><img src="images/basic/icon_twitter.png" alt="twitter"></a></li>
                        </ul>
                    </div>
                    <div class="function_btn">
                        <button type="button" class="btn btn-sm btn_subscribe">Subscriber Services</button>
                        <button type="button" class="btn btn-sm btn_subscribe_modify">Change subscription/unsubscribe</button>
                    </div>
                </div>
                <!-- Epaper Start -->
                <section class="epaper">
                    <h2>Subscription Form</h2>
                    <form action="" class="form_grid">
                        <div class="form_grp">
                            <label for="" class="form_title">訂戶電子郵件帳號：</label>
                            <div class="form_content">
                                <span class="mail">veela.tseng@hyweb.com.tw</span>
                            </div>
                        </div>
                        <table summary="" class="table_list">
                            <caption>You can add (check) or delete (uncheck) the subscribed items below:</caption>
                            <thead>
                                <tr>
                                    <th>Press Release</th>
                                    <th>Publications</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="Press Release">
                                        <div class="check_grp">
                                            <label><input type="checkbox" name="" value="" checked="">Monetary & Foreign Exchange Policy</label>
                                            <label><input type="checkbox" name="" value="">Speeches</label>
                                            <label><input type="checkbox" name="" value="">Economic and Financial Conditions</label>
                                            <label><input type="checkbox" name="" value="">Statistical Data</label>
                                            <label><input type="checkbox" name="" value="">Banknotes and Coins</label>
                                            <label><input type="checkbox" name="" value="">Market Infrastructure</label>
                                            <label><input type="checkbox" name="" value="">Banking Sector Statistics</label>
                                            <label><input type="checkbox" name="" value="">Others</label>
                                        </div>
                                    </td>
                                    <td data-title="Publications">
                                        <div class="check_grp">
                                            <label><input type="checkbox" name="" value="" checked="">Annual Report</label>
                                            <label><input type="checkbox" name="" value="">Financial Statistics Monthly, Taiwan District, the Republic of China</label>
                                            <label><input type="checkbox" name="" value="">Financial Statistics (in IFS format)</label>
                                            <label><input type="checkbox" name="" value="">Balance of Payments Quarterly, Taiwan District, the Republic of China</label>
                                            <label><input type="checkbox" name="" value="">Condition and Performance of Domestic Banks</label>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="btn_grp">
                            <input name="" type="submit" value="Change Subscription">
                            <input name="" type="submit" value="Unsubscribe">
                        </div>
                    </form>
                </section>
                <!-- Epaper End -->
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