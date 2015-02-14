<?php



require_once __DIR__.'/../../vendor/autoload.php';

use src\classes\RequestMethodFactory;
use src\classes\Exceptions\InvalidRequestMethodException;

try{

    $requestMethod = new RequestMethodFactory();
    $requestMethod = $requestMethod->makeRequestMethodFactory();

    echo get_class ($requestMethod);

}catch(InvalidRequestMethodException $exception){
    echo "Error: " . $exception->getMessage();
}
