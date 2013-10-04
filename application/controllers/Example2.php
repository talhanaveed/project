<?php
class Example2 extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
       $this->load->library('Google_Client');
session_start();

$client = new Google_Client();
$client->setApplicationName('Google Contacts PHP Sample');
$client->setScopes("http://www.google.com/m8/feeds/");
// Documentation: http://code.google.com/apis/gdata/docs/2.0/basics.html
// Visit https://code.google.com/apis/console?api=contacts to generate your
// oauth2_client_id, oauth2_client_secret, and register your oauth2_redirect_uri.
 $client->setClientId('551072679190.apps.googleusercontent.com');
 $client->setClientSecret('bBDlSbxKfLr9YXzERTWbgmr8');
 $client->setRedirectUri('http://localhost/Project/index.php/Example2');
 $client->setDeveloperKey('AIzaSyDYUYRPTXRMqIwLL5yvonrpt78o0zdME6w');

if (isset($_GET['code'])) {
  $client->authenticate();
  $_SESSION['token'] = $client->getAccessToken();
   $this->load->view('main_screen');
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
 $client->setAccessToken($_SESSION['token']);
}

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['token']);
  $client->revokeToken();
}

if ($client->getAccessToken()) {
  $req = new Google_HttpRequest("https://www.google.com/m8/feeds/contacts/default/full");
  $val = $client->getIo()->authenticatedRequest($req);

  // The contacts api only returns XML responses.
  $response = json_encode(simplexml_load_string($val->getResponseBody()));
  print "<pre>" . print_r(json_decode($response, true), true) . "</pre>";

  $this->load->view('login',$response);
  // The access token may have been updated lazily.
  $_SESSION['token'] = $client->getAccessToken();
} else {
  $auth = $client->createAuthUrl();
}

if (isset($auth)) {
    print "<a class=login href='$auth'>Connect Me!</a>";
  } else {
    print "<a class=logout href='?logout'>Logout</a>";
}
    }
};
?>