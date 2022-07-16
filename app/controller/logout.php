<?php

session_destroy();
header("Refresh: 0;url=".$_SERVER['HTTP_REFERER']);
