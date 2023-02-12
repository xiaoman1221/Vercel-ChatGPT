<?php
$init_url = "https://api.openai.com/v1/completions"; //接口
$YOUR_KEY = ""; // 你的OpenAI的key (https://beta.openai.com/account/api-keys)
function get_a($WORD)
{
  global $init_url;
  $init_data = array(
    "model" => "text-davinci-003", //模型
    "prompt" => $WORD,
    "temperature" => 0.5, //温度
    "max_tokens" => 4000,
    "top_p" => 1.0,
    "frequency_penalty" => 0.8,
    "presence_penalty" => 0.0
  );
  // 数据输出
  $ret = array(
    "code" => 0,
    "msg" => posturl($init_url, $init_data)['choices'][0]['text']
  );
  echo json_encode($ret);
  return;
}

// libcurl.php的代码片段
function posturl($url, $data)
{
  global $YOUR_KEY;
  $data = json_encode($data);
  $headerArray = array(
    "Content-type: application/json;charset='utf-8'",
    "Accept:application/json",
    "Authorization:Bearer " . $YOUR_KEY,
  );
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headerArray);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($curl);
  curl_close($curl);
  return json_decode($output, true);
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $x = trim($_POST['prompt']);
  get_a($x);
  exit;
  // return get_a($x);
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
  <title>Ai智能-Chatgpt</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/bootstrap/5.1.3/css/bootstrap.css" type="text/css" rel="stylesheet">
  <style>
    * {
      padding: 0;
      margin: 0
    }

    body {
      background-color: #0044a7;
      padding-bottom: 2rem;
      background: url(https://api.dujin.org/bing/1920.php);
    }

    body>.container {
      width: 800px;
      background: url(ddfbf58e0d70d.png) no-repeat top;
      background-size: 100%
    }

    .hide {
      display: none;
    }

    .box {
      background-color: #fff;
      border-radius: 2rem;
      height: 100%;
      top: 15rem;
      position: relative;
      padding: 2rem;
      box-shadow: 0 .4rem 1rem .1rem rgb(0 0 0 / 20%)
    }

    .box .form-control {
      border-radius: 1rem
    }

    .box .form-control:focus {
      border-color: #0044a7;
      box-shadow: 0 0 0 .1rem #0044a7
    }

    .box .alert-success {
      border-radius: 1rem;
      color: #08005bb1;
      background-color: #c1daff;
      border-color: #628ac5;
    }

    .box button {
      border-radius: 1rem;
      height: calc(3.5rem + 2px);
      line-height: 1.25;
    }

    .box .btn-success {
      background-color: #0044a7;
      color: #fff;
      border-color: #0044a7
    }

    .box #about .btn svg {
      margin-top: -2px
    }

    .box #about .btn3 {
      margin-top: 1rem
    }

    .box #about .btn3 a {
      display: inline-flex;
      font-size: .8rem;
      background-color: #0044a7;
      color: #fff;
      border-radius: .25rem;
      margin-bottom: .2rem;
      padding: .5rem .5rem
    }

    .box .form-check-input:checked {
      background-color: #0044a7;
      border-color: #0044a7
    }

    .box .uid .form-floating {
      float: left;
    }

    .box .uid .form-floating .form-control {
      float: left;
    }

    .box .uid .btn-secondary {
      float: left;
      border-radius: 0 1rem 1rem 0
    }

    /*.box .uid #uid{border-radius:1rem 0 0 1rem;}*/
    .box .uid #uid {
      border-radius: 1rem;
      min-height: calc(4.5em + 0.75rem + 2px);
    }

    .box .uid .btn-success {
      float: right;
    }

    .log {
      margin-top: 2rem;
      max-height: 20rem;
      overflow-y: auto;
      font-size: 0.9rem;
      line-height: 1.5rem;
    }

    .log .log-main {
      word-break: reak-all;
    }

    .log .log-main div {
      margin-bottom: 0.4rem;
    }

    .log .log-main div img {
      vertical-align: middle;
      margin-top: -2px;
      width: 1.2rem;
      height: 1.2rem;
      border-radius: 50%;
      margin-right: 0.6rem;
    }

    @media screen and (max-width:800px) {
      body>.container {
        width: 100%
      }
    }

    @media screen and (max-width:500px) {
      .box {
        top: 8rem;
        border-radius: 2rem 2rem 2rem 2rem;
      }

      .box .uid .form-floating {
        width: 100%;
      }

      /*70%*/
      .box .uid .btn-secondary {
        width: 30%;
      }

      .box .uid .btn-success {
        width: 100%;
        margin-top: 1rem;
      }

    }

    @media screen and (max-width:400px) {
      .box {
        top: 10rem
      }
    }
  </style>






  <script src="https://s3.pstatp.com/cdn/expire-1-w/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/layer/3.5.1/layer.min.js" type="application/javascript"></script>
</head>

<body>
  <div class="container">
    <div class="box col-12">
      <div class="text-center alert alert-success mb-3" role="alert" id="content">
        由于第三方接口费用较高,建议使用自己key创建项目!<br>
        点击<a href="https://studio.yhdzz.cn/shop/1212.html" target="_blank">购买代码</a>
      </div>

      <div class="form-inline uid mb-3 clearfix">
        <div class="form-floating col-6">
          <textarea class="form-control prompt" id="prompt" placeholder="输入问题"></textarea>
          <label for="prompt">输入问题</label>
        </div>
        <button class="btn btn-success col-3" id="get_post">提问</button>
      </div>


      <div class="form-floating mb-3 frequency log" style="display:none;">
        <textarea class="form-control answer" id="answer" placeholder="回答" style="min-height: calc(10em + 0.75rem + 2px);"></textarea>
        <label for="answer">回答</label>
      </div>
      <div class="mb-3">
        <div class="text-center" id="about">
          <div class="btn btn-primary btn-sm btn1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-android2" viewbox="0 0 16 16">
              <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />

            </svg>
            购买账户
          </div>
          <div class="btn btn-primary btn-sm btn2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-apple" viewbox="0 0 16 16">
              <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z" />
              <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z" />
            </svg>
            商务联系
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      //开始提交
      $("#get_post").click(function() {

        $(".log").show();
        $(".answer").val("");
        var prompt = $("#prompt").val();
        if (prompt == "") {
          layer.msg("请输入你的 问题", {
            icon: 5
          });
          return;
        }

        // loading =  layer.msg("正在获取请稍后", { icon: 16 });
        loading = layer.load(2, {
          shade: [0.2, '#000']
        });
        $.ajax({
          cache: true,
          type: "POST",
          url: "/index.php",
          data: {
            prompt: prompt
          },
          dataType: "json",
          success: function (data) {
          console.log(data);
          if (data.code === 0) {
            layer.close(loading);
            layer.msg("获取成功！");
            $(".answer").val(data.msg);
          } 
        },
          error: function (){
            layer.close(loading);
            layer.msg("获取失败！");
            $(".answer").val("服务器API路由已超载 StatusCode:504\n服务器出现错误\n请检查网络或联系:xiaoman1221@yhdzz.cn 搭建自己的ChatGPT");
          }
        });
      });

      $("#about .btn1").click(function() {
        layer.alert('<a href="https://studio.yhdzz.cn/shop/1161.html" target="_blank">小满云电工作室</a>', {
          icon: 1
        });
      });
      $("#about .btn2").click(function() {
        layer.alert('email:xiaoman1221@yhdzz.cn', {
          icon: 1
        });
      });
    });
  </script>
</body>
</html>


