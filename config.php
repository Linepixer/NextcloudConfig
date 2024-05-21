<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'redis' =>
  array (
    'host' => '10.5.0.7',
    'port' => 6379,
  ),
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'trusted_domains' =>
  array (
    0 => 'cloud.linepixer.com',
    1 => 'local.linepixer.com',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '29.0.0.19',
  'overwrite.cli.url' => 'http://192.168.1.250:52200',
  'dbname' => 'nextcloud',
  'dbhost' => '10.5.0.6:3306',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => getenv('DBUSER'),
  'dbpassword' => getenv('DBPASSWORD'),
  'maintenance_window_start' => 1,
  'default_phone_region' => 'AR',
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_from_address' => 'admin',
  'mail_domain' => 'linepixer.com',
  'mail_smtpsecure' => 'ssl',
  'mail_smtphost' => 'smtppro.zoho.com',
  'mail_smtpport' => '465',
  'mail_smtpauth' => 1,
  'mail_smtpname' => getenv('MAIL_SMTPNAME'),
  'mail_smtppassword' => getenv('MAIL_SMTPPASSWORD'),
  'overwriteprotocol' => 'https',
  'upload_max_filesize' => '1024G',
);
