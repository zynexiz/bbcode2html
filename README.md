# bbcode2html
PHP BBCode to HTML generator

## What does it do?
It takes a string contaning BBCode and convert it to safe HTML

* UTF-8 aware
* Replaces unsafe HTML characters (`<`, `>`, `&`, ` `) with safe HTML entities (`&lt;`, `&gt;`, `&amp;`, `&nbsp;`)

## Whats tags does it support
Anything you want more or less. You can define the tags you want to use yourself, some are included to show how it works. More information about how to add your own tags are inside the bbcode.php.

## Usage
Include the bbcode.php in your code and use bbcode2html($myBBCodeString) to convert some text. It will return safe HTML.

## Support my work?
If you like my work and wany to support the development, consider to donate :)
