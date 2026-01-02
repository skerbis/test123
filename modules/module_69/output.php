<?php

use FriendsOfRedaxo\MBlock\MBlock;
// Nur Online-Items laden (empfohlen für Frontend)
$items = MBlock::getOnlineDataArray("REX_VALUE[1]");
dump($items);