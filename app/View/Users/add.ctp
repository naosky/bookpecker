<div class="row">

<!-- 新規登録 -->
<div class="col-lg-4 login">
	<img src="/img/logo.png" class="img-responsive">
        <?php echo $this->Form->create('User',array('type'=>'post', 'action'=>'add')); ?>
    <div class="form-group form-login">
        <?php echo $this->Form->input('username',array('type'=>'text','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'ユーザーID',)); ?>
    </div>
    <div class="form-group form-login">
        <?php echo $this->Form->input('password',array('type'=>'password','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'パスワード')); ?>
    </div>
    <div>
        <?php echo $this->Form->submit('bookpeckerに登録する',array('div'=>false,'class'=>'btn btn-default')); ?>
	</div>
</div>

</div>
