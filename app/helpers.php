<?php

declare(strict_types=1);

function print_pre(array $arr): void
{
    echo "<pre>";
        print_r($arr);
    echo "</pre>";
}

function getTransactionFiles(string $dirPath): array {
    $files = [];

    foreach (scandir($dirPath) as $file){
        if(is_dir($file)) continue;
        $files[] = $dirPath . $file;
    }

    return $files;
}

function getTransactions(string $fileName): array {
    if(!file_exists($fileName)) {
        trigger_error("File " . $fileName . " not found", E_USER_ERROR);
    }

    $file = fopen($fileName, "r");

    fgets($file);

    $transactions = [];

    while(($transaction = fgetcsv($file)) !== false) {
        $transactions[] = extractTransactions($transaction);
    }

    return $transactions;
}

function extractTransactions(array $transaction): array {
    [$date, $checkNumber, $description, $amount] = $transaction;

    $amount = (float) str_replace(['$', ','], '', $amount);

    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount,
    ];
}

function formatDate(string $date): string {
    return date("M, j, Y", strtotime($date));
}