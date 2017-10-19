<?php
require 'vendor/autoload.php';

$stripe = array(
    //"secret_key" => "sk_test_m9je4LRBtv4pq1qcjK7DLZP8",
    //"publishable_key" => "pk_test_TqXgPu6QSeWRGlboNqgu6pfI"
    "secret_key" => "sk_test_oBE2uWHPCxcqwEpOOjISuskk",
    "publishable_key" => "pk_test_P4imLv0RdjzeljeQNl1BcOY5"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

$token = $_POST['stripeToken'];

$charge = \Stripe\Charge::create(array(
    'amount' => $_POST['amount'],
    'description' => $_POST['description'],
    'currency' => 'usd',
    'source' => $token
));

print_r($charge);
die;