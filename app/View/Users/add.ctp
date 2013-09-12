<div class="row">
    <div class="col-sm-6">
    <h1>
        <img class="img-responsive" src="/img/logo.png" alt="bookpecker(ブックペッカー) 漫画収集データベース">
    </h1>
    </div>
    <?php if(!empty($msg)) :?>
        <div class=<?php echo $msg_level; ?>>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><?php echo $msg; ?></strong>
        </div>
    <?php endif; ?>

<!-- 新規登録 -->
<div class="col-sm-6">
    <ol class="breadcrumb">
        <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">新規登録</li>
    </ol>

    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-edit"></span> 新規登録</h3>
        </div>
        <div class="panel-body">
        <table class="table login-table">
            <tbody>
                <tr>
                    <td colspan="2">お好きなユーザーIDとパスワードを入力してください</td>
                </tr>
                <tr>
                <td colspan="2">
                    <?php echo $this->Form->create('User',array('type'=>'post', 'action'=>'add')); ?>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <?php echo $this->Form->input('username',array('type'=>'text','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'ユーザーID',)); ?>
                    </div>
                </td></tr>
                <tr><td>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <?php echo $this->Form->input('password',array('type'=>'password','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'パスワード')); ?>
                    </div>
                </td><td>
                    <?php echo $this->Form->submit('登録する',array('div'=>false,'class'=>'btn btn-default btn-block')); ?>
                </td></tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

</div>


