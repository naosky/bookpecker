<div class="row">
    <div class="col-sm-6">
    <h1>
        <img class="img-responsive" src="/img/logo.png" alt="bookpecker(ブックペッカー) 漫画収集データベース">
    </h1>
    </div>
    <div class="col-sm-6">
        <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-upload"></span> お知らせ</h3>
        </div>
        <div class="panel-body">
            <strong>2013.08.24</strong> サイト更新
        </div>
        </div>
    </div>
    <?php if(!empty($msg)) :?>
        <div class=<?php echo $msg_level; ?>>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><?php echo $msg; ?></strong>
        </div>
    <?php endif; ?>
    <div class="col-sm-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-log-in"></span> ログインフォーム</h3>
        </div>
        <div class="panel-body">
        <table class="table login-table">
            <tbody>
                <tr>
                <td colspan="2">
                    <?php echo $this->Form->create('User',array('type'=>'post','action'=>'login')); ?>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <?php echo $this->Form->input('username',array('type'=>'text','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'ユーザーID')); ?>
                    </div>
                </td></tr>
                <tr><td>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <?php echo $this->Form->input('password',array('type'=>'password','div'=>false,'class'=>'form-control','label'=>false,'placeholder'=>'パスワード')); ?>
                </td><td>
                    <?php echo $this->Form->submit('ログイン',array('div'=>false,'class'=>'btn btn-default btn-block')); ?>
                </td></tr>
                <tr><td>
                <div class="checkbox">
                    <label class="save-label"><input type="checkbox">保存する</label>
                </div>
                </td><td>
            </tbody>
        </table>
        </div>
    </div>
    </div>

    <div class="col-sm-6 col-sm-offset-6">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-edit"></span> 新規登録はこちらから！</h3>
        </div>
        <div class="panel-body">
            <p class="text-right">
                <a href="/users/add"><button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-refresh"></span> 新規登録ページへ
                </button></a>
            </p>
        </div>
    </div>
    </div>

</div><!-- #row -->
