<?php
// $url = 'https://www.wired.com/story/new-gods-weather-rain-cloud-seeding-emirates/';
$url = 'https://www.wired.com';
echo "Visiting ".$url. " ...<br><br>";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$dom = new DOMDocument();
@$dom->loadHTML($response);
$xpath = new DOMXPath($dom);
//$titles = $xpath->query('//h1'); // For specific article
$titles = $xpath->query('//a[h3]'); // For main website
// Query for article dates (example: <time class="published-date">)
$DDArray= [];
$highest = 0;
$ArtCount = 0;
foreach ($titles as $index => $title) {
    //print_r($title);
   
    
    // Check if a corresponding date exists
    // if ($dates->length > $index) {
    //     echo "<br>Date: " . $dates->item($index)->nodeValue . "\n <br>";
    // } else {
    //     echo "<br>Date: Not found\n<br>";
    // }
    // Get the link of the article
    $link = $title->getAttribute('href');// link is obtained here
    // Filtering non-story link
    $array = explode("/", $link);
    //print_r($array);
    // 1 because the link start with /, making it 2 elements at the start
    if($array[1] === "story"){ 
        //echo "Link: <a href='" . $link . "'>this" . $link . "</a>\n<br>";
        $url2 = $url.$link;
        // Visit the Website
        //
        $ch2 = curl_init($url2);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        $response2 = curl_exec($ch2);
        curl_close($ch2);

        $dom2 = new DOMDocument();
        @$dom2->loadHTML($response2);
        $xpath2 = new DOMXPath($dom2);

        // Get dates
        $dates = $xpath2->query('//time');
        

        // Check if a date is there
        if ($dates->length > 0) {
            //echo "<br>Date: " . $dates->item(0)->nodeValue . "\n <br>";
            $datetime = $dates->item(0)->getAttribute('datetime');

            // Convert datetime to Unix timestamp
            $timestamp = strtotime($datetime);

            //echo "Datetime: ".$datetime ."<br>";
            //echo "Unix Timestamp: " .$timestamp."<br>";
            if ($timestamp > 1640995200){
                //echo "<br>Title: " . $title->nodeValue . "\n<br>";
                //echo "Link: <a href='" . $link . "'>this" . $link . "</a>\n<br>";
                //echo "Date: " . $dates->item(0)->nodeValue . "\n <br>";
                $tempArray2 = ["<br>Title: " . $title->nodeValue . "\n<br>Link: <a href='" . $link . "'>this" . $link . "</a>\n<br>Date: " . $dates->item(0)->nodeValue . "\n <br>", $timestamp];
                array_push($DDArray,$tempArray2);
                if ($timestamp > $highest){
                    $highest = $timestamp;
                }
            }

        } else {
            echo "<br>Date: Not found\n<br>";
        }

    }
}

//After getting highest timestamp, proceed with priting and looping
$length = count($DDArray);
$counting = 0;
// Loop until every element is done
for ($k = 0; $k < $length; $k++) {
    // Loop until the data is finished
    for ($i = 0; $i < $length-$counting; $i++) {
        // Print the highest only
        if($DDArray[$i][1] >= $highest){
            $length = $length-1;
            echo $DDArray[$i][0];
            // Remove the printed data
            unset($DDArray[$i]);
            // Rearrange the array again
            $DDArray = array_values($DDArray);
            // Find new highest
            $highest = 0;
           // echo "Current Timestamp: ".$highest."<br>";
            //echo "Count is: ".$counting;
            //print_r($DDArray);
            for ($j = 0; $j < $length-$counting-1; $j++) {
                //echo "Timestamp is: ".$DDArray[$j][1]."<br>";
                if ($DDArray[$j][1] > $highest){
                    $highest = $DDArray[$j][1];
                    //echo "Highest timestamp is: ". $highest;
                }
            }
            
        }
    }
    $counting++;
}
/*
1. Get the <a> tag /
2. Extract the link /
3. Get the <h3> tag /
4. Extract THe title /
5. Filter out articles from non-articles /
6. Visit each atricle /
7. Extract date /
ERROR: Not all articles are fetched. HOW DO YOU DO THIS?? READING THE WHOLE DOMAIN????
8. sort by date {
    .find highest /
    .paste 
    .make new array
    .repeat
}
*/
?>
<br>
<br>
<br>
<br>
<a href="Assesment2.php">Assesment 2</a>