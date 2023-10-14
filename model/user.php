<?php
function checkUser($user_admin, $pass_admin)
{
  $sql = "SELECT * FROM user_login WHERE user_admin = '$user_admin' AND pass_admin = '$pass_admin'";
  return getOne($sql);
}
