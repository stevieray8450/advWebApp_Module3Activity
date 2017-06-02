<?php

require_once 'vendor/autoload.php';

use WindowsAzure\Common\ServicesBuilder;
use MicrosoftAzure\Storage\Common\ServiceException;
use MicrosoftAzure\Storage\Table\Models\Entity;
use MicrosoftAzure\Storage\Table\Models\EdmType;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=bonifs1storageacct;AccountKey=pUE+2jvsFESmzn7B37lCzdbzdDrXkmYrBA7fug0wOMv662yaHrBP3dmOZFf7sNq++rJh/XtuWQjmtkzcJJ2phg==;EndpointSuffix=core.windows.net";

$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);

try    {
    // Create table.
    $tableRestProxy->createTable("mytable");
}
catch(ServiceException $e){
    $code = $e->getCode();
    $error_message = $e->getMessage();
    // Handle exception based on error codes and messages.
    // Error codes and messages can be found here:
    // http://msdn.microsoft.com/library/azure/dd179438.aspx
}

?>
