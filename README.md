
# CI_SSH Codigniter 3 SSH library integration
This library based on the [phpseclib](https://github.com/phpseclib/phpseclib/tree/master/phpseclib) project.

# Installation 
just move the SSH.php file and the ssh folder into your libraries folder, this code tested with **PHP 7.2**.

# Usage example

```PHP
$this->load->library('SSH', array(  
  'host' => 'your.host',  
  'user' => 'username',  
  'pass' => 'password',
  'port' => 'port'  
));  
echo $SSH->exec('pwd');  
echo $SSH->exec('ls -la');
```
