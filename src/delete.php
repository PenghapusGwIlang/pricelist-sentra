<?php

include 'connect.php';

$id = $_POST['id'];

$conn->query("DELETE FROM barang WHERE id = $id");

header('location:index.php');
