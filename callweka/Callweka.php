<?php
   
   //$cmd = 'java -cp weka.jar weka.associations.Apriori -C 0.5 -t data\bread.csv';
//หลังคำสั่งTใหญ่ คือtest หลังคำสั่งtคือtain 
  // $cmdtest = 'java -cp weka.jar weka.classifiers.trees.J48 -t data\iristrain.arff -T data\iristest.arff';
   //-p คิอ prediction output ปริ้นเฉพาะoutput ถ้า 0 output ค่าธรรมดา
//   $cmd = 'java -cp weka.jar weka.classifiers.trees.J48 -t data\iristrain.arff -T data\iristestunseen.arff -p 0';
//w น้ำหนัก knn -x หมายถึงว่า เราจะใช้model k4cross ก็คือใส่ค่า เช่น 20  
 //$cmd = 'java -cp weka.jar weka.classifiers.lazy.IBk -K 5 -W 0 -A -t data/iris.arff -x 20 -p 0';
 //
   $cmd = 'java -cp weka.jar weka.classifiers.bayes.NaiveBayes -t data/iris.arff -split-percentage 80 -p 0';
  //-N คือ numberofclustering
  //$cmd = 'java -cp weka.jar weka.clusterers.SimpleKMeans -N 3 -t data/iris.arff -p 0';

    exec($cmd, $output1);

	 for ($i = 0; $i< sizeof($output1); $i++)
    {
        trim($output1[$i]);
       echo $output1[$i]."<br>";
	   }

   // exec($cmdtest, $output1);

//	 for ($i = 0; $i< sizeof($output1); $i++)
  //  {
  //      trim($output1[$i]);
  //      echo $output1[$i]."<br>";    
   // }
	
	exec($cmd, $output2);

for ($i = 0; $i< sizeof($output2); $i++)
   {
        trim($output2[$i]);
       echo $output2[$i]."<br>";    
  }
   
?>