<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

// Initialize S3 client
$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'us-east-1', // Replace with your desired region
]);

// Upload a file to S3
$result = $s3->putObject([
    'Bucket' => 'abhi-infosec',
    'Key'    => 'var/www/html/aws-lym/demo.jpg',
    'SourceFile' => '/var/www/html/aws-lym/demo.jpg',
]);

echo 'File uploaded to S3: ' . $result['ObjectURL'];
