<?php
use SimpleSAML\Auth\Simple as SimpleSAMLAuth;

$auth = new SimpleSAMLAuth('default-sp');

$auth->requireAuth();

if($auth->isAuthenticated()){
    echo "<script>console.log('User has been authenticated')</script>";
}
