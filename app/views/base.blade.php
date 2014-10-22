<html>
<head>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
// Classes
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

// Usage as mixins
.element {
  .center-block();
}
.inline-blocks {
   vertical-align: middle;
   display: inline-block;
}
.nav {
    margin-top: 1.5em;
}
#header-text {
    height: 5em;
}
</style>
</head>
<body>
<div class="col-md-6 col-md-offset-3" id="header-text">
<div class="h1 col-md-4">Steven Smith</div>
<div class="col-md-3">
<ul class="nav nav-pills">
    <li><a href="#">Resume</a></li>
    <li><a href="#">Blog</a></li>
</ul>
</div>
</div>
<div class="col-md-12">
<hr>
</div>
<div class="col-md-6 col-md-offset-3">
@yield('content','If you see me please contact kodemaan@gmail.com, Thank you and sorry for the inconveniece. ')
</div>
</body>
</html>