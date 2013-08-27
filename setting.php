<h2>Monaca側の設定情報</h2>
<form action="" method="post" autocomplete="off">
<table class="form-table">
  <tr>
    <th>メールアドレス</th>
    <td>
      <input type="email" name="email" value="<?php print esc_attr($setting['email']); ?>">
    </td>
  </tr>
  <tr>
    <th>パスワード</th>
    <td>
      <input type="password" name="password" value="<?php print esc_attr($setting['password']); ?>">
    </td>
  </tr>
  <tr>
    <th>WebDav URL</th>
    <td>
      <input type="text" name="webdav" value="<?php print esc_attr($setting['webdav']); ?>">
    </td>
  </tr>
  <tr>
    <th>設定保存</th>
    <td>
      <input type="checkbox" name="save" value="1"
      <?php if ($setting['save'] == 1):
        print ' checked=checked';
      endif;?> > Monaca側の設定情報を保存する(推奨されません)。
    </td>
  </tr>
</table>
<h2>転送可能なプロジェクト一覧</h2>

<table class="form-table">
<?php foreach(get_option('monaca_press_projects') as $key=>$project): ?>
  <tr>
    <th>
      <label><input type="radio" value="<?php print $key; ?>" name="project"><?php print $key;?></label>
    </th>
    <td>
      <?php print $project['info']; ?>
    </td>
  </tr>
<?php endforeach;?>
</table>
<p>
<input class="button-primary" type="submit" name="submit" value="Monacaに転送する">
</p>

</form>
