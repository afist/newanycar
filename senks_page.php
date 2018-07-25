<?
// FILE SENKS PAGE //
//-----------------//
session_start();
$name = $_SESSION['order_name'];
$tel = $_SESSION['order_tel'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<meta name='robots' content='noindex,follow' />
	<title>NewAnyCar</title>
	<link rel="stylesheet" href="css/style.css" />
	<style>
		#senks_block {color: #313E47;text-align: center;position: fixed;top: 10%;width: 100%;}
		#senks_block img {width: 185px;margin-bottom: 10px;}
		#senks_block h1 {font-size: 36px;font-weight: 700;text-transform: uppercase;color: rgba(9, 14, 100, 0.7);}
		.senks_text {line-height: 1.2;font-size: 18px;margin: 25px auto;}
		.senks_red {color: #fff;font-size: 19px;font-weight: bold;background: rgba(9, 14, 100, 0.7);height: 45px;line-height: 45px;}
	</style>
</head>
<body style="background-size: 100% 100%;">
	<div id="senks_block">
		<img src="img/index.png" alt="">
		<h1><? if(isset($name)){echo $name;} ?><br>Благодарим за интерес, проявленный к сервису NewAnyCar     
    </h1>
		<p class='senks_text'>База автомобилей в наличии отравлена вам на E-mail </p>
		
	</div>
  
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49416085 = new Ya.Metrika2({
                    id:49416085,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49416085" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  
</body>
</html>