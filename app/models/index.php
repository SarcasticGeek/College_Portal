<?php
foreach (glob("*.php") as $filename)
{
    include $filename;
}

//header("Location: ..");
//exit();