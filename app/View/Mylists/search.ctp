<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>bookpecker|ブックペッカー</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/sticky-footer-navbar.css" rel="stylesheet">
<link href="css/notbs.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

<div id="wrap">
<div class="container">

<!-- Navbar -->
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
	<div class="container">
	    <div class="navbar-header">
    	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        		<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
        	</button>
		    <a class="navbar-brand" href="index.html">bookpecker</a>
    	</div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
      			<li class="active"><a href="add.html"><span class="glyphicon glyphicon-edit"></span> 新規登録</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="row">

<!-- エラーメッセージ　-->
	<div class="col-sm-12 alert alert-warning">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>※</strong> 入力情報に関するエラーが発生しました
	</div>

	<div class="col-sm-12">
		<h1>
			<a href="index.html"><img src="img/logo.png" alt="bookpecker(ブックペッカー) 漫画収集データベース"></a>
		</h1>
    	<hr>
	</div>

	<div class="col-sm-4">
   		<h3>新規登録（無料）</h3>
    	<p class="text-primary">お好きなお名前とパスワードを入力してください</p>
    	<div class="input-group has-error">
			<input type="text" class="form-control" placeholder="USER NAME">
            <span class="text-danger">既に使用されているユーザー名です</span>
    	</div>
    	<div class="input-group has-error">
			<input type="password" class="form-control" placeholder="PASSWORD">
            <span class="text-danger">パスワードは半角英数で6文字以上としてください</span>
    	</div>
		<button type="submit" class="btn btn-default">登録する</button>
    	<hr>
	</div>

</div><!-- #row -->

</div><!-- #container -->

</div><!-- #wrap -->

<!-- Footer -->
<div id="footer">
	<div class="container">
		<p class="text-muted credit">copyright &copy; 2013 logico. all rights reserved.</p>
	</div>
</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>