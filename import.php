<?php
header('Content-Type: application/json; charset=utf-8');

$localFile = './uploads/'.basename($_GET['filename']);

include_once 'FileImporter.php';

$importer = new FileImporter();
try {
    $rows = $importer->read($localFile);
    if ($importer->validate($rows) && $importer->save($rows)) {
        http_response_code(200);

        $ppmonth = [];
        foreach ($importer->getProductsPerMonth() as $month => $count) {
            $ppmonth[] = ['month' => $month, 'count' => $count];
        }
        $ppmerchant = [];
        foreach ($importer->getProductsPerMerchant() as $merchant => $count) {
            $ppmerchant[] = ['merchant' => $merchant, 'count' => $count];
        }

        echo json_encode([
            'result' => 'success',
            'count' => count($rows),
            'productsPerMonth' => $ppmonth,
            'productsPerMerchant' => $ppmerchant,
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
    error_log('EXCEPTION');
    exit;
}
