<!-- Navbar -->
<div class="navbar navbar-fixed-top navbar-inverse navbar-static-top">
    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    <?php echo $this->Html->link('bookpecker',array('controller'=>'mylists','action'=>'mylist'),array('class'=>'navbar-brand')); ?>
    <div class="nav-collapse collapse navbar-responsive-collapse">
        <?php echo $this->Html->link('ログアウト',array('controller'=>'users','action'=>'logout'),array('class'=>'btn btn-default navbar-btn pull-right')); ?>

    </div>
    </div>
</div>