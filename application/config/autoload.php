<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['libraries'] = array('database','session','form_validation');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','time_ago','nokencode','tgl_indo');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('auth_m','pengajuan_m', 'pengguna_m');