<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="login.tpl">Go to login page</a>';