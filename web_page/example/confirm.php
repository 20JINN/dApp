<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery scroll-navigation Plugin Demo</title>
        <link rel="stylesheet" href="style.css" />
        <style>
        #container { max-width:640px; margin:70px auto;  color:black;}
        </style>
    </head>
    <body>
        <div id="header">
            <div id="logo">문서 발급</div>
            <ul id="tabs" class='nav'>
              <li><a href="#i1" class="scrollNav-links scrollNav-active">기관 선택</a></li>
              <li><a href="#i2" class="scrollNav-links " >비밀번호 입력</a></li>
              <li><a href="#i3" class="scrollNav-links ">전송</a></li>
              <li><a href="#i4" class="scrollNav-links ">확인 및 알림</a></li>
              <li><a href="#i5" class="scrollNav-links "> ༚  </a></li>
            </ul>
          </div>

          <div id="container" class="scrollNavData">
            <div id="i1" class="scrollNav-content">
              <div id="d1">
                <h2>주민등록표등본 전송</h2>
                <button id="btn" >+ 문서추가</button>
                <div color=#4a4a4a>
                    <p>이영진님의 선택하신 문서를 공공기관으로 전송합니다.</p>
                    <p>어디로 전송할까요?</p>
                </div>
                
                <input type="text" name="member_name" size="50">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              </div>
              <div id=rect>
                  <a>기관분류 </a>
              </div>
              <div>
                  <form name="form" method="post" action="index2.php">
                  <select name="test" onchange="changes(document.form.test.value)" size="15" style="width:200px">
                    
                    <option value="1">경찰청</option>
                    <option value="2">관세청</option>
                  </select>
                    <select name="test2" size="15" style="width:200px">
                    <option>--소분류입니다--</option>
                  </select>
                
                </div>
              
<!-- jQuery_336 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:1px;height:1px"
     data-ad-client="ca-pub-2783044520727903"
     data-ad-slot="5649687997"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                  <div align=center>
                      <button id="btn_prev" >이전</button>
                      <button id="btn_next" >
                        <class="scrollNav-links " >다음</a>
                      </button>
                  </div>

                  </form>
                


            
          
       
          </div>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="../scroll-navigation.js"></script>
        <script>
        $(document).ready(function(){
            var s = new scrollNav();
            s.init();
        });
        </script>
        <script type="text/javascript">
          function changes(fr) {
            if(fr==1) {
            //뿌려줄값을 배열로정렬
            num = new Array("강원지방경찰청", "경기남부지방경찰청", "경기북부지방경찰청","경남지방경찰청","경북지방경찰청","전남지방경찰청","전북지방경찰청","인천지방경찰청","충남지방경찰청");
            vnum = new Array("강원지방경찰청", "경기남부지방경찰청", "경기북부지방경찰청","경남지방경찰청","경북지방경찰청","전남지방경찰청","전북지방경찰청","인천지방경찰청","충남지방경찰청");
            } else if(fr==2) {
              num = new Array("2)첫번째목록","2)두번째목록","2)세번째목록");
            vnum = new Array("1","2","3");
            }
            // 셀렉트안의 리스트를 기본값으로 한다..
          for(i=0; i<form.test2.length; i++) {
            form.test2.options[0] = null;
          }
            //포문을 이용하여 두번째(test2)셀렉트 박스에 값을 뿌려줍니당)
          for(i=0;i < num.length;i++) {
            document.form.test2.options[i] = new Option(num[i],vnum[i]);
          }
        }
        </script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </body>
</html>

