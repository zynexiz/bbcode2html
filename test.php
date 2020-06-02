<?php

require_once('bbcode.php');

$bbcode = "[b]Bold text[/b]
[font size=35px color=#FF4400]Read text size 35px[/font]
[i]Italic text[/i]
[i]Italic text [b]Italic bold text nested inside I tag[/b] more italic text[/i]
[font color=red][b]Red bold text[/b][/font]
[invalid param1=test3 param2=test2 param3=test3]Invalid tag[/invalid][br]
Some images: [img width=50px height=50px]https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Light_bulb_icon_red.svg/551px-Light_bulb_icon_red.svg.png[/img] [img=https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/2000px-ok_x_nuvola_green.png/600px-2000px-ok_x_nuvola_green.png width=50px height=50px][br]
URL tag with link as argument: [url=https://github.com/zynexiz]
URL tag with link as argument with text: [url=https://github.com/zynexiz]GitHub[/url]
URL tag with link between tags: [url]https://github.com/zynexiz[/url]

Unordered lists with li alias (*): [ul][*]Test 1[*]Test 2[*]Test 3[/ul]
Ordered lists: [ol][li]Test 1[li]Test 2[li]Test 3[/ol]
LI outside OL/UL: [li]Orderd list[/li]

[b]HTML safe text:[/b]
<html>
<head>
<title></title>
</head>
<body>
This is the HTML body...
</body>
</html>

";

$nobbcode = "This is just a string without BBCode inside..";


echo bbcode2html("[font size=30px color=red]BBCode tests:[/font][br][br]").bbcode2html($bbcode);
echo bbcode2html("[font size=30px color=red]No BBCode in string:[/font][br][br]").bbcode2html($nobbcode);
?>
