<?php
	require_once('test/style.php');
	require_once('SentimentAnalyzer.php');
	/*	
		We instantiate the SentimentAnalyzerTest class below by passing in the SentimentAnalyzer object (class)
		found in the file: 'SentimentAnalyzer.class.php'.

		This class must be injected as a dependency into the constructor as shown below
		
	*/

	$sat = new SentimentAnalyzerTest(new SentimentAnalyzer());

	/*
		Training The Sentiment Analysis Algorithm with words found in the trainingSet directory

		The File 'data.neg' contains a list of sentences that's been marked 'Negative'.
		We use the words in this file to train the algorithm on how a negative sentence/sentiment might
		be structured.

		Likewise, the file 'data.pos' contains a list of 'Positive' sentences and the words are also
		used to train the algorithm on how to score a sentence or document as 'Positive'.

		The trainAnalyzer method below accepts three parameters:
			* param 1: The Location of the file where the training data are located
			* param 2: Used to describe the 'type' of file [param 1] is; used to indicate
					   whether the supplied file contians positive words or not
			* param 3: Enter a less than or equal to 0 here if you want all lines in the
					   file to be used as a training set. Enter any other number if you want to
					   use exactly those number of lines to train the algorithm

	*/

	$sat->trainAnalyzer('../trainingSet/data.neg', 'negative', 5000); //training with negative data
	$sat->trainAnalyzer('../trainingSet/data.pos', 'positive', 5000); //trainign with positive data


	/*
		The analyzeSentence method accepts as a sentence as parameter and score it as a positive, 
		negative or neutral sentiment. it returns an array that looks like this:

		array
		(
			'sentiment' => '[the sentiment value returned]',
			'accuracy' => array
							(
								'positivity'=> 'A floating point number showing us the probability of the sentence being positive',
								'negativity' => 'A floating point number showing us the probability of the sentence being negative',
							),
		)

		An example is shown below:
	*/

		$sentence1 = 'while the performances are often engaging , this loose collection of largely improvised numbers would probably have worked better as a one-hour tv documentary . ';
		$sentence2 = 'edited and shot with a syncopated style mimicking the work of his subjects , pray turns the idea of the documentary on its head , making it rousing , invigorating fun lacking any mtv puffery . 
';

$s1 = 'good nice';
$s2 = 'bad worse';

		$sentimentAnalysisOfSentence1 = $sat->analyzeSentence($s1);

		$resultofAnalyzingSentence1 = $sentimentAnalysisOfSentence1['sentiment'];
		$probabilityofSentence1BeingPositive = $sentimentAnalysisOfSentence1['accuracy']['positivity'];
		$probabilityofSentence1BeingNegative = $sentimentAnalysisOfSentence1['accuracy']['negativity'];

		$sentimentAnalysisOfSentence2 = $sat->analyzeSentence($s2);

		$resultofAnalyzingSentence2 = $sentimentAnalysisOfSentence2['sentiment'];
		$probabilityofSentence2BeingPositive = $sentimentAnalysisOfSentence2['accuracy']['positivity'];
		$probabilityofSentence2BeingNegative = $sentimentAnalysisOfSentence2['accuracy']['negativity'];

        $za1 = $resultofAnalyzingSentence1;
    $za2 = $probabilityofSentence1BeingPositive;
    $zb1 = $resultofAnalyzingSentence2;
    $zb2 = $probabilityofSentence2BeingNegative;

		
echo ($za1); echo ($za2); echo ($zb1); echo ($zb2); 

	/*
		The AnalyzeDocument method accepts the path to a text file as parameter.
		It analyzes the file and scores it as either a positive or a negative sentiment. It also
		returns an array with the same keys as the analyzeSentence method.

		An example is demonstrated below

	*/

	/*	$documentLocation = '../trainingSet/review.txt';
		$sentimentAnalysisOfDocument = $sat->analyzeDocument($documentLocation);
		$resultofAnalyzingDocument = $sentimentAnalysisOfDocument['sentiment'];
		$probabilityofDocumentBeingPositive = $sentimentAnalysisOfDocument['accuracy']['positivity'];
		$probabilityofDocumentBeingNegative = $sentimentAnalysisOfDocument['accuracy']['negativity'];

		require_once('test/presentation.php');*/
?>
