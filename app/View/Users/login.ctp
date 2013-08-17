<div class="row">
    <?php if(!empty($msg)) :?>
        <div class=<?php echo $msg_level; ?>>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><?php echo $msg; ?></strong>
        </div>
    <?php endif; ?>
<div class="col-lg-4 login">
<!-- ログイン -->
  <img src="/img/logo.png" class="img-responsive">
        <?php echo $this->Form->create('User',array('type'=>'post','action'=>'login')); ?>
    <div class="form-group form-login">
        <?php echo $this->Form->input('username',array('type'=>'text','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'ユーザーID')); ?>
    </div>
    <div class="form-group form-login">
        <?php echo $this->Form->input('password',array('type'=>'password','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'パスワード')); ?>
    </div>
<!--    <div class="checkbox">
        <label class="save-label">
        <input type="checkbox">保存する
        </label>
    </div> -->
    <?php echo $this->Form->submit('ログイン',array('div'=>false,'class'=>'btn btn-default')); ?>

<!-- 新規登録 -->
<div align="right">
    <?php echo $this->Html->link('→　新規登録はこちら',array('controller'=>'users','action'=>'add')); ?>
</div>

</div>

</div><!-- #row -->

