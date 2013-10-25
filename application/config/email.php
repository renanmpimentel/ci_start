<?php

/**
 * Envio de email pelo gmail
 */

$config['protocol']		='smtp';
$config['smtp_host']	='ssl://smtp.googlemail.com';
$config['smtp_port']	='465';
$config['smtp_timeout']	='60';
$config['smtp_user']	='email@gmail.com';
$config['smtp_pass']	='sua_senha';
$config['charset']		='utf-8';
$config['mailtype']		='html';
$config['newline']		="\r\n";
