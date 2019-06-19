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
        <section class="cp kids">
          <h2 class="kids_title">什麼是貨幣的演進?</h2>
          <div class="cp_pic float_left">
            <img src="https://assets.imgix.net/examples/balloons.jpg?w=400&amp;auto=format%2Cenhance" alt="圖說圖說圖說圖說">
            <div class="caption">圖說圖說圖說圖說</div>
          </div>  
          <p>「貨幣」是人類的重要發明之一，人們日常生活上進行的交易都需要使用貨幣，它是日常生活上不可或缺的重要交易工具。</p>
          <h3>原始貨幣的誕生</h3>
          <p>在貨幣還沒發明以前，人類只能透過「以物易物」（例如拿米換油、鹽）的方式，交換彼此所需要的物品。後來，為了方便交易買賣，聰明的人類開始動腦筋，利用大家公認有價值，且大家可以接受的東西，當作大家買賣的交易工具。早期被人類拿來當作貨幣的物品，包括貝殼、茶葉、礦石、皮草、牛羊、珍貴金屬(如黃金、白銀)等，可以說是千奇百怪、無奇不有。</p>
          <p>標準化貨幣的出現：隨著人類交易活動變多，加以日常活動範圍變大，但可當作商品貨幣的物品中常有不能切割（如貝殼、牛羊）、容易腐壞（如茶葉、皮草）與不方便攜帶（如礦石）等問題，而最常被當作交易工具的黃金或白銀雖可以切割，卻也有重量與成分是不是足夠與衡量費時的問題，而令人們傷透腦筋。</p>
          <p>為解決問題，人們於是發明了標準化的金屬貨幣（也就是「鑄幣」），並由政府規定作為貨幣的金屬重量、成色與每個單位的價值，就像在中國古時候，人們所使用的元寶、銀錠、銅幣與鐵幣等。透過標準化的貨幣，大家就可以方便而且放心的交易。</p>
          <p>只是隨著商業活動日漸興盛，人們需要攜帶很多錢幣才能進行買賣，是一件很麻煩的事，且有被偷或被搶的危險。</p>
          <h3>邁入信用貨幣時代</h3>
          <p>為了避免攜帶金屬貨幣的麻煩，加上印刷技術越來越發達，人類進一步發明了以重量較輕的紙，印製而成的貨幣（也就是「紙幣」）。在西元十世紀北宋初期，四川商人共同發行一種紙券「交子」，就是人類最早的紙幣紀錄。直到十八世紀英國英格蘭銀行（就是英國的中央銀行）發行了標準化面額的銀行券，才是現代紙幣之流通。</p>
          <p>早期紙幣可以按照紙幣的面額，換成同等價值的黃金或白銀，因此紙幣的發行數量仍會受到限制。隨著貨幣演進到1930年代以後，各國所採用的貨幣幾乎都已不可以換成同等價值的黃金或白銀，改為由政府透過國家權威與信用，印製紙鈔或鑄造硬幣。從此，也開啟了信用貨幣時代。</p>
          <p>但是，因為印製紙鈔或硬幣的成本比較低，如果政府沒有限制地印了太多鈔票，有可能產生惡性通貨膨脹的問題。因此，如何控制鈔票與硬幣的發行數量，成為各國中央銀行的重要責任。</p>
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
