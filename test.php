<?php

require_once('includes/bbcode.php');

$test1 = "BBcode test: [b arg=1]bold tag with argument (arg striped)[/b], [br]font tag: [font size=35px color=#FF4400]BIG text[/font]. [i]Italic text[/i][br]".
"Nested B and I: [i]Italic text [b]Italic bold text[/b] more italic text[/i][br]".
"[font color=red][b]Red bold text[/b][/font][br]".
"Invalid code: [code param1=test3 param2=test2 param3=test3]Invalid[/code]\n\n".
"[ul][li]Test 1[li]Test 2[li]Test 3[/ul]LI outside OL/UL: [li]Orderd list[/li][/ol]\n\n".
"[img width=50px height=50px]https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Light_bulb_icon_red.svg/551px-Light_bulb_icon_red.svg.png[/img]".
"[img=https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/2000px-ok_x_nuvola_green.png/600px-2000px-ok_x_nuvola_green.png width=50px height=50px][br][br]".
"URL tag with {PARAM}: [url=https://github.com/zynexiz][br]".
"URL tag with {PARAM} and content: [i][url=https://github.com/zynexiz]GitHub[/url][/i][br]".
"URL tag with just URL: [url]https://github.com/zynexiz[/url]";
$nocode = "This is a string without code..";

$table = "TR and TH outside table tag: [tr][th]Firstname[/th][th]Lastname[/th][th]Age[/th][/tr]".
"[table width=100% bcolor=gray color=white]".
"[tr][th]Firstname[/th][th]Lastname[/th][th]Age[/th][/tr]".
"[tr][td]Jill[/td][td]Smith[/td][td]50[/td][/tr]".
"[tr][td]Eve[/td][td]Jackson[/td][td]94[/td][/tr][/table]";

echo bbcode2html("[font size=30px color=red]Test string: [/font][br][br]").bbcode2html($test1);
echo bbcode2html("[br][br][font size=30px color=red]No BBCode: [/font][br][br]").bbcode2html($nocode);
echo bbcode2html("[br][br][font size=30px color=red]Table test: [/font][br][br]").bbcode2html($table);
?>
