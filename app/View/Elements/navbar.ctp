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
            <a class="navbar-brand" href="/">bookpecker</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <!-- li にアクティブつける  -->
                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> 新規登録',array('controller'=>'users','action'=>'add'),array('escape' => FALSE)); ?></li>
            </ul>
        </div>
    </div>
</nav>