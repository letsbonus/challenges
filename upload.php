<?php
header('Content-type: application/json');

$localFile = './uploads/'.basename($_FILES['filename']['name']);

// Probably other checks should be here ... (file already exists?)

if ($_FILES['filename']['error'] != UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode([
        'result' => 'error',
        'type' => 'upload',
        'message' => 'there was an error uploading your file',
    ]);
    exit;
}

if (!move_uploaded_file($_FILES['filename']['tmp_name'], $localFile)) {
    http_response_code(400);
    echo json_encode([
        'result' => 'error',
        'type' => 'copy',
        'message' => 'there was an error copying your file',
    ]);
    exit;
}



include_once 'FileImporter.php';

$importer = new FileImporter();
try {
    $rows = $importer->read($localFile);
    if ($importer->validate($rows)) {
        http_response_code(200);
        echo json_encode([
            'result' => 'success',
            'count' => count($rows),
            'rows' => array_chunk($rows, 10)[0],
        ]);
        exit;
    }
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'result' => 'error',
        'type' => 'process',
        'message' => $e->getMessage(),
    ]);
    exit;
}
