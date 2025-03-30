<?php
require '../vendor/autoload.php';

use Phpml\Classification\NaiveBayes;
use Phpml\Transformer;
use Phpml\Dataset\CsvDataset;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\ModelManager;
use Phpml\Metric\Accuracy;


// Load dataset from CSV file
$dataset = new CsvDataset('datasets/Training.csv', 132, true); // 4 features, true for header

// Split dataset into training and testing sets
$split = new StratifiedRandomSplit($dataset, 0.2); // 80% training, 20% testing

$trainSamples = $split->getTrainSamples();
$trainLabels = $split->getTrainLabels();
$testSamples = $split->getTestSamples();
$testLabels = $split->getTestLabels();


// Create and train the RandomForest classifier
// $classifier = new SVC();

if(!file_exists('models/model.phpml')){
    $classifier = new NaiveBayes();

    $classifier->train($trainSamples, $trainLabels);

    $predictions = $classifier->predict($testSamples);

    $accuracy = Accuracy::score($testLabels, $predictions);



    // Save the trained model to a file
    $modelManager = new ModelManager();
    $modelManager->saveToFile($classifier, 'models/model.phpml');
    $classifier = $modelManager->restoreFromFile('models/model.phpml');

}else{
    $modelManager = new ModelManager();
    $classifier = $modelManager->restoreFromFile('models/model.phpml');

}


// $arr = array_values($features);
// $flowerSpecies = ['setosa', 'versicolor', 'virginica'];  

// $speciesMap = [];
// foreach ($flowerSpecies as $index => $species) {
//     $speciesMap[$index] = $species;
// }

// print_r($speciesMap[$predictions]);

$features = json_decode($_POST['symptomValues']);


if (is_array($features )) {
    foreach ($features  as $value) {
        if ($value !== 0 && $value !== 1) {
            $result = [];
            $result['type'] = "error";
            $result['error'] = "Invalid symptom value detected.";
            $result = json_encode($result);
            die($result);
            // die("Invalid symptom value detected.");
        }
    }

    $predictions = $classifier->predict($features);
    
    $result = [];
    $result['type'] = "success";
    $result['success'] = $predictions;
    $result = json_encode($result);
    print_r($result);
    // print_r($predictions);

}else{
    $result = [];
    $result['type'] = "error";
    $result['error'] = "Invalid Symptoms Values ";
    $result = json_encode($result);
    print_r($result);
    // print_r("Invalid Symptoms Values ");
}

?>
