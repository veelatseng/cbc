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
        <!-- 這裡需要套h1文章標題 -->
        <h1 class="title">內容頁：欄位內容頁</h1>
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
              <li><a href="#" class="facebook"></a></li>
              <li><a href="#" class="google"></a></li>
              <li><a href="#" class="line"></a></li>
              <li><a href="#" class="twitter"></a></li>
            </ul>
          </div>
          <div class="publish_time">
            <span>發布日期：</span><time>2019-01-01</time>
          </div>
        </div>
        <!-- CP Start -->
        <section class="cp">
          <h3>表格樣式</h3>
          <table summary="">
            <tbody>
              <tr>
                <th scope="row">中文名詞</th>
                <td>保付支票</td>
              </tr>
              <tr>
                <th scope="row">英文名詞</th>
                <td>英文名詞</td>
              </tr>
              <tr>
                <th scope="row">中文解釋</th>
                <td>付款人於支票上記載照付或保付或其他同義字樣，並由授權人簽章後，其付款責任，與匯票承兌人同。付款人於支票上已為前項之記載時，發票人及背書人免除其責任。付款人對其保付的支票，不得以存款不足為由拒付，亦不得為存款額外或信用契約所約定數目以外之保付。</td>
              </tr>
              <tr>
                <th scope="row">英文解釋</th>
                <td>Refers to the check where the payor states "Paid Accordingly "or "Accepted" on the check that has been endorsed by the payee. The responsibility for payment is the same as that for the acceptor of a bill of exchange. If the above statement is made by the payor on the check, then the drawer and the endorsement person are freed of their responsibility. The check has been accepted by the payor who cannot reject the payment based on insufficient funds. The check could only be accepted based on the deposits or the agreed amount stated in a credit contract.</td>
              </tr>
            </tbody>
          </table>
        </section>
        <!-- CP End -->
        <!-- cp_slider+slick_lightbox -->
        <div class="lightbox_slider">
          <h3>燈箱照片</h3>
          <div class="cp_slider">
            <div class="imgOuter">
              <a href="https://assets.imgix.net/examples/kingfisher.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" data-caption="第一張圖說">
                <img src="https://assets.imgix.net/examples/kingfisher.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" alt="">
              </a>
              <p class="infotxt">第一張圖說</p>
            </div>
            <div class="imgOuter">
              <a href="https://assets.imgix.net/examples/puffins.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" data-caption="第二張圖說">
                <img src="https://assets.imgix.net/examples/puffins.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" alt="">
              </a>
              <p class="infotxt">第二張圖說</p>
            </div>
            <div class="imgOuter">
              <a href="https://assets.imgix.net/unsplash/transport.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" data-caption="第三張圖說">
                <img src="https://assets.imgix.net/unsplash/transport.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" alt="">
              </a>
              <p class="infotxt">第三張圖說</p>
            </div>
            <div class="imgOuter">
              <a href="https://assets.imgix.net/unsplash/bridge.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" data-caption="第四張圖說">
                <img src="https://assets.imgix.net/unsplash/bridge.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" alt="">
              </a>
              <p class="infotxt">第四張圖說</p>
            </div>
            <div class="imgOuter">
              <a href="https://assets.imgix.net/unsplash/bridge.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" data-caption="第四張圖說">
                <img src="https://assets.imgix.net/unsplash/bridge.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" alt="">
              </a>
              <p class="infotxt">第五張圖說</p>
            </div>
            <div class="imgOuter">
              <a href="https://assets.imgix.net/unsplash/bridge.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" data-caption="第四張圖說">
                <img src="https://assets.imgix.net/unsplash/bridge.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" alt="">
              </a>
              <p class="infotxt">第六張圖說</p>
            </div>
          </div>
        </div>
        <!-- weblink 外部連結 -->
        <div class="web_link">
          <h3>外部連結</h3>
          <ol>
            <li><a href="javscript:;">外部連結1</a></li>
            <li><a href="javscript:;">外部連結2</a></li>
            <li><a href="javscript:;">外部連結3</a></li>
            <li><a href="javscript:;">外部連結4</a></li>
            <li><a href="javscript:;">外部連結5</a></li>
          </ol>
        </div>
        <!-- file download 檔案下載 -->
        <div class="file_download">
          <h3>檔案下載</h3>
          <div class="file_download">
            <table summary="">
              <caption></caption>
              <tbody>
                <tr>
                  <td class="num">01</td>
                  <td>20180807楊總裁講辭_虛擬貨幣與數位經濟：央行在數位時代的角色</td>
                  <td class="file">
                    <a href="xxxx.doc">word檔名</a>
                    <a href="xxxx.pdf">pdf檔名</a>
                    <a href="xxxx.odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td class="num">02</td>
                  <td>20180807楊總裁講辭_虛擬貨幣與數位經濟：央行在數位時代的角色</td>
                  <td class="file">
                    <a href="xxxx.doc">word檔名</a>
                    <a href="xxxx.pdf">pdf檔名</a>
                    <a href="xxxx.odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td class="num">03</td>
                  <td>20180807楊總裁講辭_虛擬貨幣與數位經濟：央行在數位時代的角色</td>
                  <td class="file">
                    <a href="xxxx.doc">word檔名</a>
                    <a href="xxxx.pdf">pdf檔名</a>
                    <a href="xxxx.odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td class="num">04</td>
                  <td>20180807楊總裁講辭_虛擬貨幣與數位經濟：央行在數位時代的角色</td>
                  <td class="file">
                    <a href="xxxx.doc">word檔名</a>
                    <a href="xxxx.pdf">pdf檔名</a>
                    <a href="xxxx.odf">odf檔名</a>
                  </td>
                </tr>
                <tr>
                  <td class="num">05</td>
                  <td>20180807楊總裁講辭_虛擬貨幣與數位經濟：央行在數位時代的角色</td>
                  <td class="file">
                    <a href="xxxx.doc">word檔名</a>
                    <a href="xxxx.pdf">pdf檔名</a>
                    <a href="xxxx.odf">odf檔名</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <ul>
            <li>
              <a href="xxxx.doc">word檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.odf">odf檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.pdf">pdf檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.xls">xls檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.ppt">ppt檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.jpg">jpg檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.mp3">mp3檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.mov">mov檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.txt">txt檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.odf">odf檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.xxx">其他格式檔名<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
            <li>
              <a href="xxxx.zip">全部資料壓縮檔<span class="kb">(100.kb)</span></a>
              <span class="update">更新日期：2014/5/30</span>
              <span class="file_view">下載次數：5</span>
            </li>
          </ul>
        </div>
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