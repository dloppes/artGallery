<?php
  include("../../includes/connection.php");

    $sql = "SELECT art_id, art_title, art_type FROM art join artist on art.artist_id = artist.artist_id";
    $result = $conn->query($sql);