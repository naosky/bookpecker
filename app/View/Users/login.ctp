<div class="row">

<?php if(!empty($msg)) :?>
        <div class=<?php echo $msg_level; ?>>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>※</strong><?php echo $msg; ?>
        </div>
<?php endif; ?>
<div class="col-sm-12">
    <h1>
        <a href="/"><img src="/img/logo.png" alt="bookpecker(ブックペッカー) 漫画収集データベース"></a>
    </h1>
    <hr>
</div>

<div class="col-sm-4">
    <h3>Please sign in</h3>
        <?php echo $this->Form->create('User',array('type'=>'post','action'=>'login')); ?>
        <div class="input-group">
        <?php echo $this->Form->input('username',array('type'=>'text','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'USER NAME')); ?>
    </div>
    <div class="input-group">
        <?php echo $this->Form->input('password',array('type'=>'password','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'PASSWORD')); ?>
    </div>
    <div class="checkbox">
        <label class="save-label"><input type="checkbox">保存する</label>
    </div>
        <?php echo $this->Form->submit('SIGN IN',array('div'=>false,'class'=>'btn btn-default')); ?>
    <hr>
</div>
<div class="col-sm-6 col-sm-offset-2">
    <h2>NEWS</h2>
    <dl class="dl-horizontal">
        <dt>2013.08.24</dt>
        <dd>サイト更新</dd>
        <dt>2013.08.24</dt>
        <dd>サイト更新</dd>
        <dt>2013.08.24</dt>
        <dd>サイト更新</dd>
    </dl>
    <hr>
</div>
</div>

