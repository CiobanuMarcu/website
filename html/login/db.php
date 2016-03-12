<?php

function getConnection()
{
  $conn=mysqli_connect('localhost', 'root', '', 'my_db');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  return $conn;
}

function closeConnection($connection)
{
  mysqli_close($connection);
}