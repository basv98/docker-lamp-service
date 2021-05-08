<?php
if (mysqli_connect("database", "root", "docker", null)) {
    echo "connected!!";
} else {
    echo "Error :(";
}