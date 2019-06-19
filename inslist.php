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
        <h2 class="title">全國金融機構查詢系統</h2>
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
              <li><a href="#" class="facebook"></a></li>
              <li><a href="#" class="google"></a></li>
              <li><a href="#" class="line"></a></li>
              <li><a href="#" class="twitter"></a></li>
            </ul>
          </div>
          <div class="function_btn">
            <button type="button" class="btn btn-sm">English</button>
          </div> 
        </div>
        <!-- Inslist Start -->
        <section class="inslist">
          <form action="">
            <table summary=""  class="table_list">
              <caption></caption>
              <tr>
                <th scope="row"><label><input type="checkbox" value="">機構代號(總、分支或管轄單位)</label></th>
                <td><input type="text" id="insname" placeholder="請輸入機構代號(總、分支或管轄單位)"></td>
              </tr>
              <tr>
                <th scope="row"><label><input type="checkbox" value="">金融機構名稱</label></th>
                <td><input type="text" id="insname" placeholder="請輸入金融機構名稱"></td>
              </tr>
              <tr>
                <th scope="row"><label><input type="checkbox" value="">金融機構類別</label></th>
                <td>
                  <div class="form_grp">
                    <select name="" id="selectSample">
                      <optgroup label="金融機構類別">
                        <option value="01本國銀行">本國銀行 </option>
                        <option value="02外國銀行">外國銀行 </option>
                        <option value="04信用合作社">信用合作社 </option>
                        <option value="05農會信用部">農會信用部 </option>
                        <option value="06漁會信用部">漁會信用部 </option>
                        <option value="07票券金融公司">票券金融公司 </option>
                        <option value="08證券金融公司">證券金融公司 </option>
                        <option value="09本國人壽保險公司">本國人壽保險公司 </option>
                        <option value="10本國產物保險公司">本國產物保險公司 </option>
                        <option value="11產物保險合作社">產物保險合作社</option>
                        <option value="14本國再保險公司">本國再保險公司</option>
                        <option value="12外國人壽保險公司">外國人壽保險公司 </option>
                        <option value="13外國產物保險公司">外國產物保險公司 </option>
                        <option value="22外國再保險公司">外國再保險公司 </option>
                        <option value="15存款保險公司">存款保險公司</option>
                        <option value="16信用卡公司">信用卡公司 </option>
                        <option value="17外國銀行駐台代表人辦事處">外國銀行駐台代表人辦事處 </option>
                        <option value="18郵局">郵局</option>
                        <option value="19證券商(中央公債交易商)">證券商(中央公債交易商)</option>
                        <option value="20中央銀行">中央銀行</option>
                        <option value="21金融控股公司">金融控股公司</option>
                        <option value="25外幣收兌處">外幣收兌處</option>
                        <option value="27陸商銀行">陸商銀行</option>
                      </optgroup>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row"><label><input type="checkbox" value="">僅查詢總機構，列表時</label></th>
                <td>
                  <div class="form_grp">
                    <select name="" id="selectSample">
                      <optgroup label="查詢總機構列表">
                        <option value="Y" selected="">列出機構英文名稱</option>
                        <option value="N">不列機構英文名稱</option>
                        <option value="O">僅列網址</option>
                      </optgroup>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row"><label><input type="checkbox" value="">郵遞區號</label></th>
                <td><input type="text" id="insname" placeholder="請輸入郵遞區號"></td>
              </tr>
            </table>
            <div class="btn_grp">
              <button type="button" class="btn btn-sm  btn_show_table">其他查詢條件</button>
            </div> 
            <div class="adv_inlist">
              <table summary=""  class="table_list"> 
                <tr>
                  <th scope="row"><label><input type="checkbox" value="">國內或國外機構</label></th>
                  <td>
                    <div class="radio_grp">
                      <label><input name="radioSample" type="radio" value="">國內</label>
                    </div>
                    <div class="form_grp form_inline">
                      <label><input name="radioSample" type="radio" value="">排序方式：</label>
                      <select name="" id="selectSample">
                        <optgroup label="選擇縣市別或總機構別">
                          <option value="總機構別" selected="">總機構別</option>
                          <option value="縣市別">縣市別</option>
                        </optgroup>
                      </select>
                    </div>   
                    <div class="form_grp form_inline">
                      <label><input name="radioSample" type="radio" value="">縣市名稱：</label>
                      <select name="" id="selectSample">
                        <optgroup label="縣市名稱">
                          <option value="11台北市">台北市 </option>
                          <option value="12新北市">新北市 </option>
                          <option value="13基隆市">基隆市 </option>
                          <option value="14宜蘭縣">宜蘭縣 </option>
                          <option value="21桃園市">桃園市 </option>
                          <option value="22新竹市">新竹市 </option>
                          <option value="23新竹縣">新竹縣 </option>
                          <option value="24苗栗縣">苗栗縣 </option>
                          <option value="31台中市">台中市 </option>
                          <!--option value="32台中縣">台中縣 </option-->
                          <option value="33彰化縣">彰化縣 </option>
                          <option value="34南投縣">南投縣 </option>
                          <option value="41雲林縣">雲林縣 </option>
                          <option value="42嘉義市">嘉義市 </option>
                          <option value="43嘉義縣">嘉義縣 </option>
                          <option value="44台南市">台南市 </option>
                          <!--option value="45台南縣">台南縣 </option-->
                          <option value="51高雄市">高雄市 </option>
                          <!--option value="52高雄縣">高雄縣 </option-->
                          <option value="53屏東縣">屏東縣 </option>
                          <option value="61花蓮縣">花蓮縣 </option>
                          <option value="62台東縣">台東縣 </option>
                          <option value="63澎湖縣">澎湖縣 </option>
                          <option value="71金門">金門 </option>
                          <option value="72馬祖">馬祖 </option>
                        </optgroup>
                      </select>
                    </div>    
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label><input type="checkbox" value="">國內或國外機構</label></th>
                  <td>
                    <div class="radio_grp">
                      <label><input name="radioSample" type="radio" value="">國內</label>
                    </div>
                    <div class="form_grp form_inline">
                      <label><input name="radioSample" type="radio" value="">排序方式：</label>
                      <select name="" id="selectSample">
                        <optgroup label="選擇國家別或總機構別">
                          <option value="總機構別" selected="">總機構別</option>
                          <option value="國家別">國家別</option>
                        </optgroup>
                      </select>
                    </div>   
                    <div class="form_grp form_inline">
                      <label><input name="radioSample" type="radio" value="">國家名稱：</label>
                      <select name="" id="selectSample">
                        <optgroup label="選擇國家名稱">
                          <option value="210日本">日本</option>
                          <option value="220韓國">韓國</option>
                          <option value="225越南">越南</option>
                          <option value="230香港">香港</option>
                          <option value="235澳門">澳門</option>
                          <option value="240新加坡">新加坡</option>
                          <option value="245緬甸">緬甸</option>
                          <option value="250印尼">印尼</option>
                          <option value="260菲律賓">菲律賓</option>
                          <option value="265柬埔寨">柬埔寨</option>
                          <option value="270泰國">泰國</option>
                          <option value="275寮國">寮國</option>
                          <option value="280馬來西亞">馬來西亞</option>
                          <option value="290沙烏地阿拉伯">沙烏地阿拉伯</option>
                          <option value="480薩爾瓦多">薩爾瓦多</option>
                          <option value="300阿拉伯聯合大公國">阿拉伯聯合大公國</option>
                          <option value="310巴林">巴林</option>
                          <option value="320印度">印度</option>
                          <option value="330中國">中國</option>
                          <option value="410美國">美國</option>
                          <option value="420加拿大">加拿大</option>
                          <option value="450巴拿馬">巴拿馬</option>
                          <option value="460巴拉圭">巴拉圭</option>
                          <option value="470巴西">巴西</option>
                          <option value="490尼泊爾">尼泊爾</option>
                          <option value="610德國">德國</option>
                          <option value="620法國">法國</option>
                          <option value="630英國">英國</option>
                          <option value="640荷蘭">荷蘭</option>
                          <option value="650比利時">比利時</option>
                          <option value="660瑞士">瑞士</option>
                          <option value="680波蘭">波蘭</option>
                          <option value="810南非">南非</option>
                          <option value="820汶萊">汶萊</option>
                          <option value="920澳大利亞">澳大利亞</option>
                          <option value="940帛琉">帛琉</option>
                          <option value="999其他">其他</option>
                        </optgroup>
                      </select>
                    </div>    
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label><input type="checkbox" value="">設立或更新日期</label></th>
                  <td>
                    <div class="form_grp">
                      <select name="" id="selectSample">
                        <option value="1">設立日期</option>
                        <option value="2">更新日期</option>
                      </select>
                    </div>
                    <div class="form_grp form_inline">
                      <select name="" id="selectSample">
                        <optgroup label="選擇民國或民國前">
                          <option value="民國" selected="">民國</option>
                          <option value="民國前">民國前</option>
                        </optgroup>
                      </select>
                      <input type="number" id="" placeholder="">年<input type="number" id="" placeholder="">月<input type="number" id="" placeholder="">日
                      ~
                      <select name="" id="selectSample">
                        <optgroup label="選擇民國或民國前">
                          <option value="民國" selected="">民國</option>
                          <option value="民國前">民國前</option>
                        </optgroup>
                      </select>
                      <input type="number" id="" placeholder="">年<input type="number" id="" placeholder="">月<input type="number" id="" placeholder="">日
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label><input type="checkbox" value="">外匯業務別</label></th>
                  <td>
                    <div class="form_grp">
                      <select name="" id="selectSample">
                        <option value="">選擇外匯業務別</option>
                        <option value="">買賣外幣現鈔及旅行支票業務</option>
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label><input type="checkbox" value="">外匯字軌</label></th>
                  <td><input type="text" id="insname" placeholder="請輸入外匯字軌"></td>
                </tr>
                <tr>
                  <th scope="row"><label><input type="checkbox" value="">國庫及公債業務</label></th>
                  <td>
                    <div class="check_grp">
                      <label><input type="checkbox" value="">中央公債交易商</label>
                      <label><input type="checkbox" value="">實體公債還本付息經辦行</label>
                      <!-- <label><input type="checkbox" value="">實體公債轉換為無實體(登錄)公債經辦行</label> -->
                      <label><input type="checkbox" value="">中央登錄債券清算銀行經辦行</label>
                      <label><input type="checkbox" value="">國庫經辦行</label>
                    </div>
                  </td>
                </tr>

              </table>
            </div>
            <div class="btn_grp">
              <input name="" type="reset" value="取消重填">
              <input name="Search" type="submit" value="開始搜尋">
            </div>
          </form>

        </section>
        <!-- Inslist End -->
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