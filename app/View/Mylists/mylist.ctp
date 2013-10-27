<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>bookpecker|ブックペッカー/MyList</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script>
$(document).ready(function(){
    // hide #back-top first
    $("#back-top").hide();
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});
</script>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/sticky-footer-navbar.css" rel="stylesheet">
<link href="/css/notbs.css" rel="stylesheet">
<link rel="shsortcut icon" href="favicon.ico">
</head>
<body>
<!-- test -->
<div id="wrap">
<div class="container">
<!-- Navbar -->
<nav class="navbar navbar-fixed-top navbar-inverse role="navigation"">
    <div class="container">
	    <div class="navbar-header">
    	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        		<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
        	</button>
		    <a class="navbar-brand" href="mylist.html">bookpecker</a>
        </div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
      			<li class="active"><a href="mylist.html"><span class="glyphicon glyphicon-book"></span> マイリスト</a></li>
      			<li><a href="/mylists/search"><span class="glyphicon glyphicon-search"></span> 書籍の登録</a></li>
            </ul>
			<ul class="list-group toggle-list">
				<li class="list-group-item">合計冊数<span class="badge pull-right">156</span></li>
				<li class="list-group-item">所有タイトル<span class="badge pull-right">7</span></li>
				<li class="list-group-item">完結タイトル<span class="badge pull-right">4</span></li>
				<li class="list-group-item">最終更新日<span class="pull-right">2013/08/01</span></li>
			</ul>
       		<a href="index.html"><button type="button" class="btn btn-default navbar-btn pull-right btn-sm">ログアウト</button></a>
        </div>
    </div>
</nav>

<div class="row">

<div class="col-sm-12">
    <hr>
</div>

<div class="col-sm-4 col-md-3 inview">
    <div class="panel">
    <div class="panel-heading">ユーザーID様</div>
		<ul class="list-group">
			<li class="list-group-item">合計冊数<span class="badge pull-right">156</span></li>
			<li class="list-group-item">所有タイトル<span class="badge pull-right">7</span></li>
			<li class="list-group-item">完結タイトル<span class="badge pull-right">4</span></li>
			<li class="list-group-item">最終更新日<span class="pull-right">2013/08/01</span></li>
		</ul>
    </div>
	<hr>
    <div class="panel">
    	<div class="panel-heading">広告</div>
    	<div class="panel-body">
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
			<p>広告をずらーっと</p>
	    </div>
    </div>

</div>


<div class="col-sm-8 col-md-9">

<!-- 所有リスト -->
	<div class="col-sm-12 col-md-6 book">
    	<div class="panel panel-book" data-toggle="modal" href="#myModal">
    		<div class="panel-body panel-hover new">
	        	<small class="date">2012/10/23</small>
            	<div class="media">
            		<span class="pull-left">
						<img class="media-object img-book" src="img/ctitle/003.jpg">
            			<span class="badge">34巻</span>
            		</span>
	       			<div class="media-body">
				    	<dl>
                    		<dt>バガボンド</dt>
	    					<dd>井上 雄彦</dd>
	    					<dd>モーニングKC／講談社</dd>
	    				</dl>
            			<div class="alert">35巻発売中（2013/04/23）</div>
					</div>
            	</div>
        	</div>
    	</div>
	</div>
	<div class="col-sm-12 col-md-6 book">
    	<div class="panel panel-book" data-toggle="modal" href="#myModal">
    		<div class="panel-body panel-hover new">
	        	<small class="date">2012/10/23</small>
            	<div class="media">
            		<span class="pull-left">
						<img class="media-object img-book" src="img/ctitle/001.jpg">
            			<span class="badge">34巻</span>
            		</span>
	       			<div class="media-body">
				    	<dl>
                    		<dt>バガボンド</dt>
	    					<dd>井上 雄彦</dd>
	    					<dd>モーニングKC／講談社</dd>
	    				</dl>
            			<div class="alert">35巻発売中（2013/04/23）</div>
					</div>
            	</div>
        	</div>
    	</div>
	</div>
	<div class="col-sm-12 col-md-6 book">
    	<div class="panel panel-book" data-toggle="modal" href="#myModal">
    		<div class="panel-body panel-hover default">
	        	<small class="date">2012/10/23</small>
            	<div class="media">
            		<span class="pull-left">
						<img class="media-object img-book" src="img/ctitle/002.jpg">
            			<span class="badge">34巻</span>
            		</span>
	       			<div class="media-body">
				    	<dl>
                    		<dt>バガボンド</dt>
	    					<dd>井上 雄彦</dd>
	    					<dd>モーニングKC／講談社</dd>
	    				</dl>
            			<div class="alert">発売情報なし</div>
					</div>
            	</div>
        	</div>
    	</div>
	</div>
	<div class="col-sm-12 col-md-6 book">
    	<div class="panel panel-book" data-toggle="modal" href="#myModal">
    		<div class="panel-body panel-hover default">
	        	<small class="date">2012/10/23</small>
            	<div class="media">
            		<span class="pull-left">
						<img class="media-object img-book" src="img/ctitle/004.jpg">
            			<span class="badge">34巻</span>
            		</span>
	       			<div class="media-body">
				    	<dl>
                    		<dt>バガボンド</dt>
	    					<dd>井上 雄彦</dd>
	    					<dd>モーニングKC／講談社</dd>
	    				</dl>
            			<div class="alert">発売情報なし</div>
					</div>
            	</div>
        	</div>
    	</div>
	</div>
	<div class="col-sm-12 col-md-6 book">
    	<div class="panel panel-book" data-toggle="modal" href="#myModal">
    		<div class="panel-body panel-hover complete">
	        	<small class="date">2012/10/23</small>
            	<div class="media">
            		<span class="pull-left">
						<img class="media-object img-book" src="img/ctitle/001.jpg">
            			<span class="badge">34巻</span>
            		</span>
	       			<div class="media-body">
				    	<dl>
                    		<dt>バガボンド</dt>
	    					<dd>井上 雄彦</dd>
	    					<dd>モーニングKC／講談社</dd>
	    				</dl>
            			<div class="alert">Complete!!</div>
					</div>
            	</div>
        	</div>
    	</div>
	</div>
	<div class="col-sm-12 col-md-6 book">
    	<div class="panel panel-book" data-toggle="modal" href="#myModal">
    		<div class="panel-body panel-hover complete">
	        	<small class="date">2012/10/23</small>
            	<div class="media">
            		<span class="pull-left">
						<img class="media-object img-book" src="img/ctitle/002.jpg">
            			<span class="badge">34巻</span>
            		</span>
	       			<div class="media-body">
				    	<dl>
                    		<dt>バガボンド</dt>
	    					<dd>井上 雄彦</dd>
	    					<dd>モーニングKC／講談社</dd>
	    				</dl>
            			<div class="alert">Complete!!</div>
					</div>
            	</div>
        	</div>
    	</div>
	</div>
    
	<p id="back-top"><a href="top"><span></span></a></p>

    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
			    	<div class="panel modal-panel">
    					<div class="panel-body">
            				<div class="media">
            					<span class="pull-left">
									<img src="img/ctitle/003.jpg">
            					</span>
	       						<div class="media-body">
				    				<dl>
                    					<dt>バガボンド</dt>
	    								<dd>井上 雄彦</dd>
	    								<dd>モーニングKC</dd>
	    								<dd>講談社</dd>
	    							</dl>
								</div>
            				</div>
                            <hr>
                        	<div class="form-group" id="check">
                            	<label class="checkbox-inline"><input type="checkbox" checked>1</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>2</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>3</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>4</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>5</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>6</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>7</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>8</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>9</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>10</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>11</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>12</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>13</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>14</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>15</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>16</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>17</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>18</label>
                            	<label class="checkbox-inline"><input type="checkbox" checked>19</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>20</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>21</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>22</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>23</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>24</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>25</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>26</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>27</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>28</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>29</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>30</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>31</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>32</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>33</label>
                                <label class="checkbox-inline"><input type="checkbox" checked>34</label>
                                <label class="checkbox-inline"><input type="checkbox">35</label>
                                <label class="checkbox checkbox-a"><input type="checkbox" id="all">全巻一括チェック・リセット</label>
                            </div>

                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>収集中
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">完結
                            </label>
                            <span class="help-block">完結にするとCompleteListに登録されます</span>
                        
                            <div class="form-group">
                                <p class="muted muted-s">メモ欄</p>
                                <textarea class="form-control modal-text" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-default btn-sm">保存</button>
                </div>
            </div><!-- /.modal-content -->
      	</div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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

<script>
$(function(){
    $('#all').click(function(){
      if(this.checked){
        $('#check input').prop('checked','checked');
      }else{
        $('#check input').removeAttr('checked');
    }
  });
});

$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})

</script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>