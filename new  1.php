
<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
    <!-- Good default declaration:
    * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
    * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
    * Disables use of eval() and inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
        * Enable inline JS: add 'unsafe-inline' to default-src
        * Enable eval(): add 'unsafe-eval' to default-src
    * Create your own at http://cspisawesome.com
    -->
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: 'unsafe-inline' https://ssl.gstatic.com; style-src 'self' 'unsafe-inline'; media-src *" /> -->

    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Hello</title>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<!--Google -Fonts-->
		<link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>
		
<!--Font-awsome-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>




		 <header>
	<div class="logo">Logo</div>

<nav class="responsive-menu">
	<a href="#" class="toggle-menu" data-toggle-class="active" data-toggle-target=".main-menu, this"><svg height="32" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg"><path d="M4 10h24c1.104 0 2-.896 2-2s-.896-2-2-2H4c-1.104 0-2 .896-2 2s.896 2 2 2zm24 4H4c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2zm0 8H4c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2z" fill="#fff"/></svg><span>Menu</span></a>
		<form action="cars_search.html" style="height:10px;width:70px;background-color:#f56c09;float:left;"><input type="text" style="width:50%;" name="item"/><input type="submit"></form>
   

   <ul class="main-menu">
        <li><a href="#"><span>البحث</span></a> 
            <ul class="sub-menu">
                <li></li>
              
                
            </ul>
        </li>
        <li><a href="#"><span>بروفايلي</span></a>
            <ul class="sub-menu">
                <li><a href="#"><span>تعديل البروفايل</span></a></li>
                <li><a href="#"><span>لوحة التحكم</span></a></li>
               
            </ul>
        </li>
        <li><a href="#"><span>بوست جديد</span></a></li>
        <li><a href="#"><span>الرسائل</span></a></li>
        <li><a href="#"><span>الخروج</span></a></li>
    </ul>
</nav>
	
</header> 
		
		
		
		<div id="output">
		
		<form action="posted.html" >
		
		
		<table>
		<td>
		<input style="width:100%" type="text" placeholder="دخل عنوان العرض" name="title">
		<br>
		<input style="width:100%" type="number" placeholder=" السعر بالدولار" name="price">
		<br>
		<input style="width:100%" type="date" placeholder=" تاريخ انتهاء البيع" name="lastdate">
		</td>
		</table>
		<table>
		<b style="float:right;">اضغط لترفيع الصورة</b>
		<br>
		<input style="float:right;" type="file" name="image" accept="image/x-png,image/gif,image/jpeg" />
		</table>
		<br><br><br>
		<table>
		<a style="float:right;" href="https://nudlu.com/audio-recording.html">
		اضغط هنا للتسجيل الصوتي
		</a>
		<input style="width:100%" type="text" placeholder="الصق رابط التسجيل" name="audio">
		</table>
		<br>
		<table>
		<a style="float:right;" href="https://nudlu.com/video-recording.html">
		اضغط هنا للتصوير
		</a>
			<input type="text" style="width:100%" placeholder="الصق رابط التصوير" name="video">
		</table>
		<br>
		
		<br>
		<input style="float:right;" type="submit">
		
		</form>
		</div>
		
		
		
		

 


		
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript" src="js/index.js"></script>
    
</body>

</html>