<html>
    <head>
        <title>
        </title>
     
       
        <script>
            
        
    
var fileName2;
var base64enc;

function clickLink(){
    if(confirm("Would you like to play this video using VLC Player?")) {
    window.location.href = "vlc://" + 'https://singlefetchepoch.herokuapp.com/' + encodeURIComponent(fileName2.replaceAll(' ', '.').replaceAll('[', '').replaceAll(']', '')) + '?token=' + base64enc;
}else{
           if(confirm("Would you like to play this video using NPlayer?")) {
    window.location.href = "nplayer-" + 'https://singlefetchepoch.herokuapp.com/' + encodeURIComponent(fileName2.replaceAll(' ', '.').replaceAll('[', '').replaceAll(']', '')) + '?token=' + base64enc;
}
    }
}
    
    
    
    


//make php code - so if clicked then go back to the txt file and make the plex server go to the bottom of the list. also check if randomly displayed would be good here.



function countOccurences(string, word) {
   return string.split(word).length - 1;
}




var currUrl2 = window.location.href;
var currUrl = 'https://poop.org/decryptxml15.php?d=YUhSMGM1SE02TDR5OHgzTUQyazEwdE1qSTRMVEU1TUMwek15NWtNREJrWXpka01EQTNNalkwWVRnMk9UQXdOREl5TjJJNU5tTmhZMk5oTUM1d2JHVjRMbVJwY21WamREb3pNalF3TUM5elpXRnlZMmcvY1hWbGNuazkqqqqThor:%20The%20Dark%20Worldqqqq2013qqqqSmxndFU1R3hsZTRDMVUzYjIydDEwbGJqMUtVbTR6TkVaQ1pIQjFMVlJZTVdab09VSklMUT09';
//var removeFirstFive = currUrl.slice(36);  //36 or 47
var removeFirstFive = currUrl2.slice(52);  //36 or 47 or 58

//alert(removeFirstFive);
const myArray = removeFirstFive.split("qqqq");
//alert(myArray[0]);
var decode1 = atob(myArray[0]);
var decode2 = atob(myArray[3]);
var decode11 = decode1.split("");
var decode22 = decode2.split("");
decode11 = decode11.slice(0, 5) + ',' + decode11.slice(6);
decode11 = decode11.slice(0, 17) + decode11.slice(18);
decode11 = decode11.slice(0, 17) + decode11.slice(18);
decode11 = decode11.slice(0, 24) + decode11.slice(25);
decode11 = decode11.slice(0, 24) + decode11.slice(25);
decode11 = decode11.slice(0, 27) + decode11.slice(28);
decode11 = decode11.slice(0, 27) + decode11.slice(28);
decode11 = decode11.slice(0, 30) + decode11.slice(31);
decode11 = decode11.slice(0, 30) + decode11.slice(31);
decode11 = decode11.slice(0, 30) + decode11.slice(31);
decode11 = decode11.slice(0, 30) + decode11.slice(31);
decode11 = decode11.toString();
decode11 = decode11.replaceAll(',', '');
decode22 = decode22.slice(0, 5) + ',' + decode22.slice(6);
decode22 = decode22.slice(0, 17) + decode22.slice(18);
decode22 = decode22.slice(0, 17) + decode22.slice(18);
decode22 = decode22.slice(0, 24) + decode22.slice(25);
decode22 = decode22.slice(0, 24) + decode22.slice(25);
decode22 = decode22.slice(0, 27) + decode22.slice(28);
decode22 = decode22.slice(0, 27) + decode22.slice(28);
decode22 = decode22.slice(0, 30) + decode22.slice(31);
decode22 = decode22.slice(0, 30) + decode22.slice(31);
decode22 = decode22.slice(0, 30) + decode22.slice(31);
decode22 = decode22.slice(0, 30) + decode22.slice(31);
decode22 = decode22.toString();
decode22 = decode22.replaceAll(',', '');

decode22 = atob(decode22);
decode11 = atob(decode11);

var link9 =  decode11 + myArray[1] + decode22;
//alert(link9);

var xhr1 = new XMLHttpRequest();
xhr1.open('GET', link9, true);
xhr1.onreadystatechange = function() {
    if (xhr1.readyState == XMLHttpRequest.DONE) {
        //alert(xhr1.responseText);
        //console.log(xhr1.responseText);
        xmlDoc = xhr1.responseText;
        //document.write('hellooooo');
        //document.write(xmlDoc);
        var findSize = (xhr1.responseText.indexOf('size'));
        //alert(findSize);
        
		getSizeValue = xhr1.responseText.substring(findSize);
        getSizeValue = getSizeValue.substring(6);
        getSizeValue = getSizeValue.slice(0, getSizeValue.indexOf("\""));
        getSizeValue = parseInt(getSizeValue, 10);
        //document.write('getSizeValue = ' + getSizeValue + '<P>');
         if(((getSizeValue) != 4) && ((xhr1.responseText.length > 0))){
         //alert('Plex Server is running and search size is greater than 4');
         
          
		 var typeCount = countOccurences(xhr1.responseText,"type=\"movie");    
         //alert('type was found ' + typeCount + ' times');    
             
             
             
             
             
         for(i=0; i < typeCount; i++){    
             var findType = (xhr1.responseText.indexOf('type=\"movie'));    
             //alert('findType = ' + findType);
             newXML = xhr1.responseText.substring(findType);
             //newXML = xhr1.responseText.slice(0, xhr1.responseText.indexOf(findType));
             //document.write(newXML);
             //alert(newXML);
             movTitle = (newXML.indexOf('title=\"'));
             movTitle2 = newXML.substring(movTitle);
        	 movTitle2 = movTitle2.substring(7);
        	 movTitle2 = movTitle2.slice(0, movTitle2.indexOf("\""));    
             //alert('movTitle2 = ' + movTitle2);    //The Movie Title in PLex
             movYear = (newXML.indexOf('year=\"'))
             movYear2 = newXML.substring(movYear);
        	 movYear2 = movYear2.substring(6);
        	 movYear2 = movYear2.slice(0, movYear2.indexOf("\""));    
             //alert('movYear2 = ' + movYear2);    //The Movie Year in Plex  
             
             plexTitleWithoutSpecialCharacters = movTitle2.replace(/[^a-zA-Z0-9]/g, '');
             tmdbTitleWithoutSpecialCharacters = decodeURI(myArray[1]).replace(/[^a-zA-Z0-9]/g, '');
             //document.write('Plex Title = ' + plexTitleWithoutSpecialCharacters);
             //document.write('TMDB Title = ' + tmdbTitleWithoutSpecialCharacters);
             
             if(plexTitleWithoutSpecialCharacters.toLowerCase() == tmdbTitleWithoutSpecialCharacters.toLowerCase()){
                //alert('They have the same titles');
                if(movYear2 == myArray[2]){
                    //alert('They have the same year!');
                    //Bitrate, AudioCOdec, VideoCodec, VideoResolution, PartKey, Duration, FileName, FIleSize
                     bitRate = (newXML.indexOf('bitrate=\"'))
                     bitRate2 = newXML.substring(bitRate);
                     bitRate2 = bitRate2.substring(9); //the number 9 indicates the number of characters inbetween the quotes two lines above. 'bitrate is 7 plus the equals and plus the quote. the slash doesnt count because its an escape character
                     bitRate2 = bitRate2.slice(0, bitRate2.indexOf("\""));
                     bitRate2 = ((parseInt(bitRate2, 10))/1024).toFixed(2);
                     //alert('bitrate2 = ' + bitRate2);    //The Movie bitrate in Plex  
                     audioCodec = (newXML.indexOf('audioCodec=\"'))
                     audioCodec2 = newXML.substring(audioCodec);
                     audioCodec2 = audioCodec2.substring(12);
                     audioCodec2 = audioCodec2.slice(0, audioCodec2.indexOf("\""));
                     //alert('audioCodec2 = ' + audioCodec2);    //The Movie AudioCodec in Plex  
                     videoCodec = (newXML.indexOf('videoCodec=\"'))
                     videoCodec2 = newXML.substring(videoCodec);
                     videoCodec2 = videoCodec2.substring(12);
                     videoCodec2 = videoCodec2.slice(0, videoCodec2.indexOf("\""));
                     //alert('videoCodec2 = ' + videoCodec2);    //The Movie VideoCodec in Plex 
                     videoResolution = (newXML.indexOf('videoResolution=\"'))
                     videoResolution2 = newXML.substring(videoResolution);
                     videoResolution2 = videoResolution2.substring(17);
                     videoResolution2 = videoResolution2.slice(0, videoResolution2.indexOf("\""));
                     //alert('videoResolution2 = ' + videoResolution2);    //The Movie Video Resolution in Plex 
                     partKey = (newXML.indexOf('key=\"'))
                     partKey2 = newXML.substring(partKey);
                     partKey2 = partKey2.substring(5);
                     partKey2 = partKey2.slice(0, partKey2.indexOf("\""));
                     //alert('partKey2 = ' + partKey2);    //The Movie Part Key in Plex 
                     duration = (newXML.indexOf('duration=\"'))
                     duration2 = newXML.substring(duration);
                     duration2 = duration2.substring(10);
                     duration2 = duration2.slice(0, duration2.indexOf("\""));
                     duration2 = ((parseInt(duration2, 10))/60000);
                     //alert('duration2 = ' + duration2);    //The Movie Duration in Plex 
                    
                     fileName = (newXML.indexOf(' file=\"'))
                     fileName2 = newXML.substring(fileName);
                     fileName2 = fileName2.substring(7);
                     fileName2 = fileName2.slice(0, fileName2.indexOf("\""));
                     fileName2 = fileName2.substring(fileName2.lastIndexOf("/") + 1);
                     fileName2 = fileName2.substring(fileName2.lastIndexOf("\\") + 1);
                    
                     //alert('fileName2 = ' + fileName2);    //The Movie FileName in Plex 
                     fileSize = (newXML.indexOf('size=\"'))
                     fileSize2 = newXML.substring(fileSize);
                     fileSize2 = fileSize2.substring(6);
                     fileSize2 = fileSize2.slice(0, fileSize2.indexOf("\""));
                     //alert('fileSize2 = ' + fileSize2);    //The Movie FileName in Plex 
                     //document.write('<html><body><a href="' + decode11.slice(0, -14) + partKey2 + '?' + decode22.slice(1) + '">' + fileName2 + '</a></body></html>');
                     if((fileSize2 < 22548578304)){
                        base64enc = btoa(decode11.slice(0, -14) + partKey2 + '?' + decode22.slice(1));
                        base64enc = base64enc.split("");
                        base64enc = base64enc.slice(0, 5) + ',5,' + base64enc.slice(5); 
                        base64enc = base64enc.slice(0, 20) + ',4' + base64enc.slice(20); 
                        base64enc = base64enc.slice(0, 28) + ',3' + base64enc.slice(28); 
                        base64enc = base64enc.slice(0, 33) + ',2' + base64enc.slice(33); 
                        base64enc = base64enc.slice(0, 37) + ',1' + base64enc.slice(37); 
                        base64enc = base64enc.slice(0, 39) + ',0' + base64enc.slice(39); 
                         
                         
                         
                         
                        //base64enc = base64enc.slice(0, 5) + ',' + base64enc.slice(6);
                        //base64enc = base64enc.slice(0, 17) + base64enc.slice(18);
                        //base64enc = base64enc.slice(0, 17) + base64enc.slice(18);
                        //base64enc = base64enc.slice(0, 24) + base64enc.slice(25);
                        //base64enc = base64enc.slice(0, 24) + base64enc.slice(25);
                        //base64enc = base64enc.slice(0, 27) + base64enc.slice(28);
                        //base64enc = base64enc.slice(0, 27) + base64enc.slice(28);
                        //base64enc = base64enc.slice(0, 30) + base64enc.slice(31);
                        //base64enc = base64enc.slice(0, 30) + base64enc.slice(31);
                        //base64enc = base64enc.slice(0, 30) + base64enc.slice(31);
                        //base64enc = base64enc.slice(0, 30) + base64enc.slice(31);
                        base64enc = base64enc.toString();
                        base64enc = base64enc.replaceAll(',', '');
                        base64enc = btoa(base64enc + Math.floor(Date.now() / 1000));
                         //$&*()=:/,;?+'
                     	//document.write('<p> <a onclick="clickLink();return false;" href="vlc://https://singlefetchepoch.herokuapp.com/' + encodeURIComponent(fileName2.replaceAll(' ', '.').replaceAll('[', '').replaceAll(']', '')) + '?token=' + base64enc + '" style="color:orange;">' + fileName2  + '</a>   || <p  style="color:orange;">     FileSize: ' + (fileSize2/1024/1024/1024).toFixed(2) + 'GB  ||  Duration:  ' + Math.round(duration2) + ' mins   ||  BitRate: ' + bitRate2  + ' Mb/s || Video Codec: ' + videoCodec2 + ' ||  Video Resolution: ' + videoResolution2 + '</p>');
                         document.write('<p> <a onclick="clickLink();return false;" href="' + window.location.href + '" style="color:orange;">' + fileName2  + '</a>   || <p  style="color:orange;">     FileSize: ' + (fileSize2/1024/1024/1024).toFixed(2) + 'GB  ||  Duration:  ' + Math.round(duration2) + ' mins   ||  BitRate: ' + bitRate2  + ' Mb/s || Video Codec: ' + videoCodec2 + ' ||  Video Resolution: ' + videoResolution2 + '</p>');
                         
                         
                         
                        var remember = '22'; 
                     }else{
                         //alert('file size is too large.');
                     }
                     var newXML = xhr1.responseText.substring((xhr1.responseText.indexOf('size=\"')));
                    //make sure it works if the same server has multiple versions of the same movie
                }else{
                 	//alert('They dont have different years!');   
                }
                 
                 
                 
                 
             }else{
             	//alert('They have different titles');
             }
             
                 
             
             //remove the part of the string up to current point so it doesnt get used again.
         }   
             
             
             
         }
        
        
        
        
     
		
    }
}
xhr1.send(null);




























            
            
            
        </script>
   
            
            
            
            
    </head>
    <body>
            
       
  
  
            
         
                
            
            
            
            
            
            
            
        
    </body>
</html>
