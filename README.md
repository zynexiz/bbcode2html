# bbcode2html
PHP BBCode to HTML generator

## What does it do?
It takes a string contaning BBCode and convert it to safe HTML

* UTF-8 aware
* Replaces unsafe HTML characters (`<`, `>`, `&`, ` `) with safe HTML entities (`&lt;`, `&gt;`, `&amp;`, `&nbsp;`)

## What tags does it support
Anything you want more or less. You can define the tags you want to use yourself, some are included to show how it works. An example how you define allowed tag in the BBCode string.

```PHP
BBCode=array(
  'i'=>     array('start_tag'=>'<i>', 'end_tag'=>'</i>'),
  'url'=>   array('start_tag'=>'<a href="{PARAM}">', 'end_tag'=>'</a>'),
  'img'=>   array('start_tag'=>'<img src="{PARAM}" {ARG} />', 'arg'=>'width={ARG},height={ARG}'),
  'b'=>     array('start_tag'=>'<b>','end_tag'=>'</b>'),
  'br'=>    array('start_tag' => '<br>'),
  'font'=>  array('start_tag'=>'<span style="{ARG}">', 'end_tag'=>'</span>', 'arg'=>'color:{ARG};,size:{ARG};bcolor:{ARG};'),
  'ul'=>    array('start_tag'=>'<ul>' , 'end_tag'=>'</ul>'),
  'ol'=>    array('start_tag'=>'<ol>' , 'end_tag'=>'</ol>'),
  'li'=>    array('start_tag'=>'<li>', 'end_tag'=>'</li>', 'parent'=>'ul,ol'),
)
 ```

Parameter | Description
----------|------------
start_tag | The first part of the html code. Can pass parameters and arguments to the html tag. {PARAM} can be passed as [tag=PARAM], or [tag]PARAM[/tag]. {ARG} needs the arg parameter to define what arguments are allowed.
end_tag | The closing tag for the html code. Optional if no closing tag is required for HTML code (fx `<br>`).
arg | (optional) Comma-separated values of what arguments are passed. Must contain the key itself and {ARG}. Fx. "color:{ARG};" will pass [tag color=red] as "color:red;" and "width={ARG}" will pass [tag width=25px] as width=25px as	argument to {ARG} in start_tag. The key can be whatever you define it to be.
parent | (optional) Comma-separated values of parent tags the tag must be inside.

Both tag alias and argument alias are supported, fx. font argument bcolor could be converted to background-color.

## Usage
Include the bbcode.php in your code and use bbcode2html($myBBCodeString) to convert some text. It will return safe HTML.

## Support my work?
If you like my work and wany to support the development, consider to donate :)
