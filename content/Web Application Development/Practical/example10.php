<?php
session_start();

if (isset($_SESSION['count']) && $_SESSION['count'] < 5) {
    $_SESSION['count'] += 1;
    $msg = "You have visited this page " . $_SESSION['count'] . " times in this session.";
    echo $msg;
} elseif (isset($_SESSION['count']) && $_SESSION['count'] >= 5) {
    $count = $_SESSION['count'];
    session_destroy();
    $msg = "Session destroyed. You have visited this page " . $count . " times in this session.";
    echo $msg;
    exit;
} else {
    $_SESSION['count'] = 1;
    $msg = "You have visited this page " . $_SESSION['count'] . " times in this session.";
    echo $msg;
}
?>