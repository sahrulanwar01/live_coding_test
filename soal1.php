<?php
function generateToken($user) {
    $token = bin2hex(random_bytes(16));
    if(!isset($_SESSION['tokens'][$user])) {
        $_SESSION['tokens'][$user] = [];
    }
if (count($_SESSION['tokens'][$user]) >= 10) {
    array_shift($_SESSION['tokens'][$user]);
}
$_SESSION['tokens'][$user][] = $token;
return $token;
}

function verifyToken($user, $token) {
    if (isset($_SESSION['tokens'][$user])) {
        $index = array_search($token, $_SESSION['tokens'][$user]);
        if ($index !== false) {
            unset($_SESSION['tokens'][$user][$index]);
            return true;
        }
    }
    return false;
}

session_start();
$user = "sahrul";
$token1 = generateToken($user);
echo "Token 1: $token1 <br>";
$token2 = generateToken($user);
echo "Token 2: $token2 <br>";

$verified = verifyToken($user, $token1);
echo "Token 1 verified: " .($verified ? "Valid": "Invalid") . "<br>";
$verified = verifyToken($user, $token2);
echo "Token 2 verified: " .($verified ? "Valid": "Invalid") . "<br>";
?>