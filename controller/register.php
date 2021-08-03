<?php

// include the configs / constants for the database connection
require_once("MTW-digital/model/config/db.php");

// load the registration class
require_once("MTW-digital/model/classes/Registration.php");

// create the registration object. when this object is created, it will do all registration stuff automatically
// so this single line handles the entire registration process.
$registration = new Registration();

// show the register view (with the registration form, and messages/errors)
include("MTW-digital/views/login_out/register.php");
