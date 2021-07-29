<?php

require __DIR__ . '/../db/dbDischi.php';

header('Content-Type: application/json');
echo json_encode($dischi);