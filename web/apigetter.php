<html><body>

<?php
    set_time_limit(99999);
	ini_set('max_execution_time', 99999);
    $timer_start = microtime(true);

	$link = urlencode($_GET['s']);
	$link2 = str_replace('%20', '+', $link);
	$myfile = fopen("./u/$link2.php", "w") or die("Unable to open file!");
	$txt = "var raw_plex_data = {\"status\":\"success\",\"version\":1,\"last_generated\":";
	fwrite($myfile, $txt);
	$last_generated = round(microtime(true) * 1000);
	$txt = $last_generated;
	fwrite($myfile, $txt);
	$txt = ",\"last_updated\":\"last updated : 2021-12-16 - 05:17\",\"total_items\":";
	fwrite($myfile, $txt);
	$txt = "100,\"num_sections\":1,\"section_display_order\":[1],\"sections\":{\"1\":{\"key\":1,\"type\":\"movie\",\"title\":\"Recently Added Episodes\",\"num_items\":100,\"items\":{";
	fwrite($myfile, $txt);
	


	
    $baseUrl = 'https://api.themoviedb.org/3/search/movie?query=';
    
	$urlPart3 = '&api_key=e02bb07d813f5255844c6d19ab9395ab&language=en-US&include_adult=false&page=';
	//$urlPart4 = '&page=1';
	$urlPart4 = 1;
    
    
    
    //$xml3 = simplexml_load_file(urlencode($baseUrl . $urlPart2 . $urlPart3 . $urlPart4));
	

$nextPage = 0;
$url2 = $baseUrl . $link . $urlPart3;
echo $url2;


//$url = "https://api.themoviedb.org/3/search/movie?query=2%20fast%202%20furious&api_key=e02bb07d813f5255844c6d19ab9395ab&language=en-US&include_adult=false&page=1";

$curl = curl_init($url2);
curl_setopt($curl, CURLOPT_URL, $url2);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//print_r($resp);
echo '<p>';

$array = json_decode($resp, true);
print_r($array);
echo '<p>';

$aaa = array($array['results']);
$bbb = array();
$ccc = array($array['total_pages']);
$totalPages = $ccc[0];
echo 'total pages = ' . $totalPages. '<P>';


for($iiii=0; $iiii < ($nextPage + 5); $iiii++){
    $url3 =$baseUrl . $link . $urlPart3 . $urlPart4;
    $curl = curl_init($url3);
    curl_setopt($curl, CURLOPT_URL, $url3);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    //print_r($resp);
    echo '<p>';

    $array = json_decode($resp, true);
    $aaa = array($array['results']);
    for($i=0; $i < count($array['results']); $i++){
        $posterPath = ($array['results'][$i]['poster_path']);
        $backdropPath = ($array['results'][$i]['backdrop_path']);
        $releaseYear = (substr(($array['results'][$i]['release_date']), 0, 4));
        if($posterPath && $releaseYear){
            echo $i;
            print_r($array['results'][$i]);
            echo '<P>';
            echo 'Movie ID = '; print_r($array['results'][$i]['id']);
            $movID = $array['results'][$i]['id'];
            $bbb[$iiii][$i] = $movID;
            $txt = "\"$movID\":{\"key\":$movID,\"type\":\"movie\",\"thumb\":\"";
            fwrite($myfile, $txt);

            echo '<P>';
            echo 'Poster_Path = '; print_r($array['results'][$i]['poster_path']);





             $txt = "$posterPath\",\"backdrop\":\"";
             fwrite($myfile, $txt);  
             $txt = "$backdropPath\",\"title\":\"";
             fwrite($myfile, $txt);


            echo '<P>';
            echo 'Movie Title = ';print_r($array['results'][$i]['title']);
            $movTitle = $array['results'][$i]['title'];
            $movTitle = str_replace('”', '"', $movTitle);
            $movTitle = str_replace('“', '"', $movTitle);
            $movTitle = str_replace('"', '\'', $movTitle);
            $movTitle = preg_replace('/\s+/', ' ',$movTitle);
            $movTitle2 = str_split($movTitle);
            $value3 = '';
            $value4 = '';
            foreach($movTitle2 as $value3){
                echo $value3;
                $value4 = $value4 . $value3;
            }
            echo '<br>' . $value4;





             $txt = "$value4\",\"seasonepisode\":\"1\",\"duration\":1,\"view_count\":1,\"tagline\":\"1\",\"rating\":false,\"user_rating\":false,\"release_year\":";
             fwrite($myfile, $txt);



            echo '<P>';
            echo 'Release Year = '; print_r(substr(($array['results'][$i]['release_date']), 0, 4));



             $txt = "\"$releaseYear\",\"release_date\":\"";
             fwrite($myfile, $txt);



             echo '<P>';
            echo 'Release Date = '; print_r($array['results'][$i]['release_date']);
            $releaseDate = ($array['results'][$i]['release_date']);




             $txt = "$releaseDate\",\"addedAt\":1,\"content_rating\":\"PG\",\"summary\":\"";
             fwrite($myfile, $txt);


            echo '<P>';
            echo 'Overview/SUmmary = '; print_r($array['results'][$i]['overview']);
            $summaryOfTitle = ($array['results'][$i]['overview']);
            $summaryOfTitle = str_replace('”', '"', $summaryOfTitle);
            $summaryOfTitle = str_replace('\\', '-', $summaryOfTitle);
            $summaryOfTitle = str_replace('/', '-', $summaryOfTitle);
            $summaryOfTitle = str_replace('“', '"', $summaryOfTitle);
            $summaryOfTitle = str_replace('"', '\'', $summaryOfTitle);
            $summaryOfTitle = preg_replace('/\s+/', ' ',$summaryOfTitle);
            $summaryOfTitle2 = str_split($summaryOfTitle);
            $value = '';
            $value2 = '';
            foreach($summaryOfTitle2 as $value){
                echo $value;
                $value2 = $value2 . $value;
            }
            echo '<br>' . $value2;


            $txt = "$value2\",\"studio\":\"1\",\"genre\":[],\"director\":[],\"role\":[],\"media\":{\"bitrate0\":1,\"aspect_ratio0\":1,\"audio_channels0\":1,\"audio_codec0\":\"1\",\"video_codec0\":\"1\",\"video_resolution0\":\"1\",\"video_framerate0\":\"24p\",\"stream_URL0\":\"/mnt/gHS.mkv\",\"total_size0\":1}},";
             fwrite($myfile, $txt);





            echo '<P>';
            echo 'BackDrop_Path = '; print_r($array['results'][$i]['backdrop_path']);



            echo '<P>';
            echo 'Genre_ids = '; print_r($array['results'][$i]['genre_ids']);
            echo '<P>';
            echo 'Rating = '; print_r($array['results'][$i]['vote_average']);
            echo '<P>';

        }else{
            echo '';
        }

		
    }
    $urlPart4 = $urlPart4 +1; 
    echo 'urlPart4 = ' . $urlPart4;
    echo 'api = ' . $url3;
}






								fclose($myfile);
                            	$fh = fopen("./u/$link2.php", "a") or die("can't open file");
                                $stat = fstat($fh);
                                ftruncate($fh, $stat['size']-1);
                                fclose($fh); 
                                $myfile = fopen("./u/$link2.php", "a") or die("can't open file");
                                $txt = "";
                                fwrite($myfile, $txt); 




$txt = "},\"sorts\":{\"title_asc\":[";
fwrite($myfile, $txt);



$arlength2 = $totalPages;
for($iiiii = 0; $iiiii < $nextPage + 5; $iiiii++){
    $arlength = count($bbb[$iiiii]); //how many items in one page which is 20 minus any movies without a year or a poster picture.
    $prev = '';
    for($ii = 0; $ii < $arlength; $ii++){
        if($bbb[$iiiii][$ii]){
            if(($bbb[$iiiii][$ii]) != $prev){
                $txt = $bbb[$iiiii][$ii] . ',';
            
        		$prev = ($bbb[$iiiii][$ii]);
        		echo 'PREV = ' . $prev;
        		fwrite($myfile, $txt);
            }
        }
    }
}
								fclose($myfile);
                            	$fh = fopen("./u/$link2.php", "a") or die("can't open file");
                                $stat = fstat($fh);
                                ftruncate($fh, $stat['size']-1);
                                fclose($fh); 
                                $myfile = fopen("./u/$link2.php", "a") or die("can't open file");
                                $txt = "";
                                fwrite($myfile, $txt); 






$txt = "],\"release_asc\":[],\"addedAt_asc\":[],\"rating_asc\":[],\"title_desc\":[";
fwrite($myfile, $txt);


$arlength2 = $totalPages;
for($iiiii = 0; $iiiii < $nextPage + 5; $iiiii++){
    $arlength = count($bbb[$iiiii]); //how many items in one page which is 20 minus any movies without a year or a poster picture.
    $prev = '';
    for($ii = 0; $ii < $arlength; $ii++){
        if($bbb[$iiiii][$ii]){
            if(($bbb[$iiiii][$ii]) != $prev){
                $txt = $bbb[$iiiii][$ii] . ',';
            
        		$prev = ($bbb[$iiiii][$ii]);
        		echo 'PREV = ' . $prev;
        		fwrite($myfile, $txt);
            }
        }
    }
}
    
								fclose($myfile);
                            	$fh = fopen("./u/$link2.php", "a") or die("can't open file");
                                $stat = fstat($fh);
                                ftruncate($fh, $stat['size']-1);
                                fclose($fh); 
                                $myfile = fopen("./u/$link2.php", "a") or die("can't open file");
                                $txt = "";
                                fwrite($myfile, $txt); 

$txt = "],\"release_desc\":[],\"addedAt_desc\":[],\"rating_desc\":[]},\"genres\":[]}}};";
fwrite($myfile, $txt);


fclose($myfile); 




echo '<P><P><P>';

print_r(memory_get_usage()/1024);
echo '<P><P><P>';
print_r(memory_get_peak_usage()/1024);
echo '<P><P><P>';                        
                        
    
    
    
    
    
    
    
    
    


?>

       <meta http-equiv="refresh" content="0; URL=./AM2.php#1/<?php echo $link2 ?>" /> <P><P> 
         </body>
         </html>
