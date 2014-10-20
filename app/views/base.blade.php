<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Steven Smith - {{{ isset($title) ? $title : 'Home' }}}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{{ HTML::style('css/default.css') }}
</head>
<body>
<div id="header">
  <h1>Steven Smith</h1>
  <h2>Menu</h2>
  <ul>
    <li class="{{ $currentpagehome or '' }}"><a href="#" accesskey="1">Home</a></li>
    <li><a href="#" accesskey="2">Resume</a></li>
    <li><a href="#" accesskey="3">Blog</a></li>
    <li><a href="#" accesskey="5">Contact</a></li>
  </ul>
</div>
<div id="content">
  <div id="colOne">
    <h3>Links</h3>
    <ul class="list">
      <li class="first"><img src="images/github.png" height="20" width="20"><a href="#">GitHub - Kodemaan</a></li>
      <li><a href="#">Nulla dignissim nec augue</a></li>
      <li><a href="#">Nunc ante elit nulla</a></li>
      <li><a href="#">Aliquam suscipit consequat</a></li>
      <li><a href="#">Cursus sed arcu sed</a></li>
      <li><a href="#">Nulla dignissim nec augue</a></li>
    </ul>
    <p>&nbsp;</p>
    <h3>Consequat Portitor</h3>
    <p><img src="images/img6.jpg" alt="" width="179" height="59" /></p>
    <p>Vestibulum pellentesque. Morbi sit amet magna ac lacus dapibus interdum. Donec <a href="#">pede nisl gravida</a> iaculis, auctor vitae, bibendum sit amet, mauris. Cras adipiscing libero et risus. Donec rutrum. <a href="#">More&#8230;</a></p>
  </div>
  <div id="colTwo" style="border:1px;border-color:red;height:100px;width:100px;">    
  </div>
</div>
<div id="footer">
  <p style="font-size:7px">Design by <a href="http://freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
</body>
</html>
