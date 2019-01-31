<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>Test work Saprykin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/skel.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <link type="text/css" rel="stylesheet" href="/css/simplePagination.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.simplePagination.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>

</head>
<body>

<div class="wrapper style1">

    <div id="header" class="skel-panels-fixed">
        <div id="logo">
            <h1><a href="/">Logo</a></h1>

        </div>
    </div>

    <div id="main">
        <div class="container">
			<?php include 'application/views/' . $this->content_view; ?>
        </div>
    </div>

    <div id="footer" class="wrapper style1">
        <div class="container">

        </div>
    </div>

</body>
</html>