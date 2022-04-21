const express = require('express')
const PORT = process.env.PORT || 5000
var app = express();

app.get('/', (req, res) => {

    res.setHeader('Access-Control-Allow-Origin', 'https://google.com');

    // Request methods you wish to allow
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');

    // Request headers you wish to allow
    res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');

    // Set to true if you need the website to include cookies in the requests sent
    // to the API (e.g. in case you use sessions)
    res.setHeader('Access-Control-Allow-Credentials', true);

   
   
   
   
   

function countOccurences(string, word) {
   return string.split(word).length - 1;
};




   var fullUrl = req.protocol + '://' + req.get('host') + req.originalUrl;
   var fullUrl2 = fullUrl.substring(46);
   const myArray = fullUrl2.split("qqqq");
   let bufferObj1 = Buffer.from(myArray[0], "base64");
   let decode1 = bufferObj1.toString("utf8");
   let bufferObj2 = Buffer.from(myArray[3], "base64");
   let decode2 = bufferObj2.toString("utf8");
   let decode11 = decode1.split('');
   let decode22 = decode2.split('');
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
decode11 = decode11.replace(/,/g, '');

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
decode22 = decode22.replace(/,/g, '');
  
  
 let bufferObj3 = Buffer.from(decode11, "base64");
   decode11 = bufferObj3.toString("utf8");
   let bufferObj4 = Buffer.from(decode22, "base64");
   decode22 = bufferObj4.toString("utf8");
  //res.send('Array = ' + myArray);
  //res.send('decode11 = ' + decode11);





let link9 =  'https://plex3.herokuapp.com/cdn/' + decode11 + myArray[1] + decode22;

const request = require('request');
request(link9, function (error, response, body) {
  //console.error('error:', error); // Print the error if one occurred
  //console.log('statusCode:', response && response.statusCode); // Print the response status code if a response was received
  //console.log('body:', body); // Print the HTML for the Google homepage.
  


var findSize = (body.indexOf('size'));
  var getSizeValue = '';
 getSizeValue = body.substring(findSize);
        getSizeValue = getSizeValue.substring(6);
        getSizeValue = getSizeValue.slice(0, getSizeValue.indexOf("\""));
        getSizeValue = parseInt(getSizeValue, 10);    
        if(((getSizeValue) != 4) && ((body.length > 0))){
          var typeCount = countOccurences(body,"type=\"movie");
          var i = 0;
          for(i=0; i < typeCount; i++){    
             var findType = (body.indexOf('type=\"movie'));    
             //alert('findType = ' + findType);
             newXML = body.substring(findType);
            var movTitle = '';
            var movTitle2 = '';
             movTitle = (newXML.indexOf('title=\"'));
             movTitle2 = newXML.substring(movTitle);
        	 movTitle2 = movTitle2.substring(7);
        	 movTitle2 = movTitle2.slice(0, movTitle2.indexOf("\""));    
             //alert('movTitle2 = ' + movTitle2);    //The Movie Title in PLex
            var movYear = '';
            var movYear2 = '';
             movYear = (newXML.indexOf('year=\"'))
             movYear2 = newXML.substring(movYear);
        	 movYear2 = movYear2.substring(6);
        	 movYear2 = movYear2.slice(0, movYear2.indexOf("\""));    
             //alert('movYear2 = ' + movYear2);    //The Movie Year in Plex  
             
            
             var plexTitleWithoutSpecialCharacters = movTitle2.replace(/[^a-zA-Z0-9]/g, '');
             var tmdbTitleWithoutSpecialCharacters = decodeURI(myArray[1]).replace(/[^a-zA-Z0-9]/g, '');
             //document.write('Plex Title = ' + plexTitleWithoutSpecialCharacters);
             //document.write('TMDB Title = ' + tmdbTitleWithoutSpecialCharacters);
             

             if(plexTitleWithoutSpecialCharacters.toLowerCase() == tmdbTitleWithoutSpecialCharacters.toLowerCase()){
                //alert('They have the same titles');
                if(movYear2 == myArray[2]){
                    //alert('They have the same year!');
                    //Bitrate, AudioCOdec, VideoCodec, VideoResolution, PartKey, Duration, FileName, FIleSize
                     var bitRate = (newXML.indexOf('bitrate=\"'))
                     var bitRate2 = newXML.substring(bitRate);
                     bitRate2 = bitRate2.substring(9); //the number 9 indicates the number of characters inbetween the quotes two lines above. 'bitrate is 7 plus the equals and plus the quote. the slash doesnt count because its an escape character
                     bitRate2 = bitRate2.slice(0, bitRate2.indexOf("\""));
                     bitRate2 = ((parseInt(bitRate2, 10))/1024).toFixed(2);
                     //alert('bitrate2 = ' + bitRate2);    //The Movie bitrate in Plex  
                     var audioCodec = (newXML.indexOf('audioCodec=\"'))
                     var audioCodec2 = newXML.substring(audioCodec);
                     audioCodec2 = audioCodec2.substring(12);
                     audioCodec2 = audioCodec2.slice(0, audioCodec2.indexOf("\""));
                     //alert('audioCodec2 = ' + audioCodec2);    //The Movie AudioCodec in Plex  
                     var videoCodec = (newXML.indexOf('videoCodec=\"'))
                     var videoCodec2 = newXML.substring(videoCodec);
                     videoCodec2 = videoCodec2.substring(12);
                     videoCodec2 = videoCodec2.slice(0, videoCodec2.indexOf("\""));
                     //alert('videoCodec2 = ' + videoCodec2);    //The Movie VideoCodec in Plex 
                     var videoResolution = (newXML.indexOf('videoResolution=\"'))
                     var videoResolution2 = newXML.substring(videoResolution);
                     videoResolution2 = videoResolution2.substring(17);
                     videoResolution2 = videoResolution2.slice(0, videoResolution2.indexOf("\""));
                     //alert('videoResolution2 = ' + videoResolution2);    //The Movie Video Resolution in Plex 
                     var partKey = (newXML.indexOf('key=\"'))
                     var partKey2 = newXML.substring(partKey);
                     partKey2 = partKey2.substring(5);
                     partKey2 = partKey2.slice(0, partKey2.indexOf("\""));
                     //alert('partKey2 = ' + partKey2);    //The Movie Part Key in Plex 
                     var duration = (newXML.indexOf('duration=\"'))
                     var duration2 = newXML.substring(duration);
                     duration2 = duration2.substring(10);
                     duration2 = duration2.slice(0, duration2.indexOf("\""));
                     duration2 = ((parseInt(duration2, 10))/60000);
                     //alert('duration2 = ' + duration2);    //The Movie Duration in Plex 
                    
                     var fileName = (newXML.indexOf(' file=\"'))
                     var fileName2 = newXML.substring(fileName);
                     fileName2 = fileName2.substring(7);
                     fileName2 = fileName2.slice(0, fileName2.indexOf("\""));
                     //alert('fileName2 = ' + fileName2);    //The Movie FileName in Plex 
                     var fileSize = (newXML.indexOf('size=\"'))
                     var fileSize2 = newXML.substring(fileSize);
                     fileSize2 = fileSize2.substring(6);
                     fileSize2 = fileSize2.slice(0, fileSize2.indexOf("\""));


 
                     if((fileSize2 < 22548578304)){
                     	var final = ('<p> <a href="nplayer-https://plex3.herokuapp.com/cdn/' + decode11.slice(0, -14) + partKey2 + '?' + decode22.slice(1) + '" style="color:orange;">' + fileName2  + '</a>   || <p  style="color:orange;">     FileSize: ' + (fileSize2/1024/1024/1024).toFixed(2) + 'GB  ||  Duration:  ' + Math.round(duration2/60000) + ' mins   ||  BitRate: ' + bitRate2  + ' Mb/s || Video Codec: ' + videoCodec2 + ' ||  Video Resolution: ' + videoResolution2 + '</p>');
                        var remember = '22'; 
                     }

                     var newXML = body.substring((body.indexOf('size=\"')));

        }}}}





















  res.send(final);
});


 
  
});

app.listen(PORT, () => {
  console.log(`Listening on ${ PORT }`)
})
