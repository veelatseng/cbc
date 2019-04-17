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
                <h2 class="title">「五大銀行平均存款利率」與「五大銀行平均基準利率」</h2>
                <!-- function功能區塊 -->
                <?php require_once('include/function_panel.html'); ?>
                <!-- suggestions Start -->
                <section class="rate_table">
                    <table summary="">
                        <caption>
                            <div class="rate_info">
                                <div class="time">
                                    <span>日期：</span><time>2019-01-01</time>
                                </div>
                                <div class="unit">
                                    <span>單位：</span><time>年息百分比率</time>
                                </div>
                            </div>
                        </caption>
                        <tr>
                            <th rowspan="7">五大銀行平均<em>存款</em>利率</th>
                            <td class="length">一個月期</td>
                            <td class="rate">0.60</td>
                        </tr>
                        <tr>
                            <td class="length">三個月期</td>
                            <td class="rate">0.64</td>
                        </tr>
                        <tr>
                            <td class="length">六個月期</td>
                            <td class="rate">0.78</td>
                        </tr>
                        <tr>
                            <td class="length">九個月期</td>
                            <td class="rate">0.89</td>
                        </tr>
                        <tr>
                            <td class="length">一年期</td>
                            <td class="rate">1.04</td>
                        </tr>
                        <tr>
                            <td class="length">二年期</td>
                            <td class="rate">1.05</td>
                        </tr>
                        <tr>
                            <td class="length">三年期</td>
                            <td class="rate">1.07</td>
                        </tr>
                        <tr>
                            <th>五大銀行平均<em>基準</em>利率</th>
                            <td colspan="2" class="rate">2.63</td>
                        </tr>
                    </table>
                    <il>
                        <li>五大銀行為台灣銀行、合作金庫銀行、第一銀行、華南銀行及台灣土地銀行。</li>
                        <li>存款利率為一般定期存款固定利率。</li>
                    </il>
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