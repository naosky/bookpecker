<div class="row">

<div class="col-lg-4 login">
<!-- ログイン -->
  <img src="/img/logo.png" class="img-responsive">
    <div class="form-group form-login">
        <?php echo $this->Form->create('User'); ?>
        <input type="text" class="form-control" id="InputID" placeholder="ユーザーID">
    </div>
    <div class="form-group form-login">
        <input type="text" class="form-control" id="InputPassword" placeholder="パスワード">
    </div>
    <div class="checkbox">
        <label class="save-label">
        <input type="checkbox">保存する
        </label>
    </div>
    <button type="submit" class="btn btn-default">ログイン</button></a>

<!-- 新規登録 -->
<div align="right">
<a href="add">→ 新規登録はこちら</a>
</div>

</div>

</div><!-- #row -->

