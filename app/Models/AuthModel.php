<?php
$user = $this->findByEmail($email);

if ($user && password_verify(
    $password, $user['password'])) {
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['role_id'] = $user['role_id'];
}