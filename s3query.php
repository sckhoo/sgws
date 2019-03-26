<?php

require '/vendor/autoload.php';

use Aws\S3\S3Client;

use Aws\Exception\AwsException;

$sharedConfig = [
    'profile' => 'default',
    'endpoint' => 'https://110.74.179.150:443/'
];

// Create an SDK class used to share configuration across clients.
$sdk = new Aws\Sdk($sharedConfig);

// Use an Aws\Sdk class to create the S3Client object.
//$s3Client = $sdk->createS3();

// Send a PutObject request and get the result object.
$result = $s3Client->putObject([
    'Bucket' => 's3-php',
    'Key' => 'my-key',
    'Body' => 'this is the body!'
]);

// Download the contents of the object.
//$result = $s3Client->getObject([
//    'Bucket' => 'my-bucket',
//    'Key' => 'my-key'
//]);

// Print the body of the result by indexing into the result object.
//echo $result['Body'];
 
//echo '<img src="png/'.$_POST[tenent].'.png">';

echo "<table style=\"width:80%\">";
echo "<tr><th>date</th><th>Hour</th><th>TB</th><th>objects</th></tr>";
echo "</table>";
//echo "$_POST[tenent]";

//echo '<img src="png/'.$_POST[tenent].'.png">';
?>
