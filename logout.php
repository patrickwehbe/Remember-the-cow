<?php


//Call $_SESSION[]
session_start();

//Go back to index.php
header("Location: index.php");

//End session
//Empty $_SESSION[]
session_destroy();