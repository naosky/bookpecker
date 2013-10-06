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
    <h3>新規登録（無料）</h3>
    <p class="text-primary">お好きなお名前とパスワードを入力してください</p>
    <div class="input-group">
        <?php echo $this->Form->create('User',array('type'=>'post','action'=>'add')); ?>
        <?php echo $this->Form->input('username',array('type'=>'text','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'USER NAME',)); ?>
    </div>
    <div class="input-group">
        <?php echo $this->Form->input('password',array('type'=>'password','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'PASSWORD')); ?>
    </div>
    <?php echo $this->Form->submit('登録する',array('div'=>false,'class'=>'btn btn-default')); ?>
    <hr>
</div>

</div><!-- #row -->



