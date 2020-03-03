<!DOCTYPE html>
<html>
<head>
	<title>CS-Unplugged Ideas</title>
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_0xkcRsAVAYnlCH8GqVY98nofbc8w-TWudj_4a7veMd51JKYG&s">
	<link rel="stylesheet" href="ideasstyle.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		
		$(document).ready(function(){
 			 $("#intro").click(function(){
    			$("#p1").show("slow");
    			"<br/>"
    			"<br>"
    			"<br>"
  		});
		});

		$(document).ready(function(){
 			 $("#explain").click(function(){
    			$("#p2").show("slow");
  		});
		});
	</script>
	<style>
		td{
			padding-left: 10%;
			width:50%;
			
			
		}
        #p1,#p2{
        	display:none;
       
        	color:darkslategray;
        	font-family: Lucida Console, monospace; 
        	width:80%;
        	


        }//
        div{
        	
        }
		
	</style>
</head>
	
<body>

<ul>
  <li><a class="active" href="#home">CS-Unplugged</a></li>
  <li><a href="#contact" style = "float:right;">Username</a></li>
</ul>
<br>
<br>

<table style="width:100%">

<center>
	<tr>
		<td>
			<h1 style="font-weight: bold; font-size: 40px;font-family= Lucida Console, monospace; color: darkslategray;">Digital Representation of Information</h1>
			<br><br>
			<a href="showvideo.php"><div class="idea1"><p style="font-size: 40;">Video</p></div></a>

		</td>
		<td>
			<img src="images/idea1a.jpg">
		
			<img src="images/idea1b.png">
		</td>
	</tr>
	
</table>	
		
	</center>

	<br><br> 

	<div >
		<table style="width:100%">
			<tr>
				<td>		
				<div id="intro" class="idea1">Introduction</div>			
				</td>

				<td>
				<div id="explain" class="idea1">Explanation</div>
			    </td>
				
			</tr>

			<tr>
				<td>
					<div id="p1"><b>
					A huge variety of information is stored as data on digital devices and shared between them; the data may be as simple as the number of steps counted on a fitness tracker or as complex as the details of every transaction going through an international organisation.It includes text,images, video, sound and scientific readings. The remarkable thing is that all of this information is reduced to digits (that's the fundamental thing that makes digital devices so useful).Digital representations lead to versatile devices because the same hardware can be used for quite different purposes: a smartphone can play music, take photos, send email and show videos, because all these things are represented as digits, which are easily stored, copied,manipulated and transmitted on the same hardware. This is in contrast to non-digital (i.e.analogue) devices, which by nature are specialised (phones connect to a phone line, a TV gets a signal from a TV aerial, music is played from a vinyl disc, and video is recorded on videotape).Digital data can also be shared without loss of quality, whereas analogue devices tend to reduce the quality if the material is copied or re-transmitted.</b></div>
              
          </div>
				</td>
				<td>
					<div id="p2"><b>
          	Digging deeper: ● The digits are usually represented in binary, although the key is that they are discrete (not continuous) values. Traditionally these binary digits are written as 0 and 1, but in practice they use electric, magnetic, audio and optical representations. The choice of just two different digits is essentially an engineering tradeoff of cost and complexity (it's easier to distinguish between two different values than, say, 10 different levels), but it relates to the idea that the simplest possible number system is binary (Claude Shannon pointed this out, and suggested that "bit" might also stand for Basic Indissoluble uniT). The basic circuitry that manipulates the bits is based on Boolean logic, and the simplicity of having only two values makes reliable electronic circuitry relatively inexpensive to construct. ● Despite a bit being so simple, you need relatively few digits (bits) to represent very large numbers e.g. you can write a number larger than the number of atoms in the universe in using a few hundred bits.  ● Although the digits are represented physically, the scale is very different to what we are used to in the physical world; a Blu-Ray disk holds about 200 billion binary digits in a few square centimeters, and a Fibre-optic cable can transmit a similar number of bits in seconds, at the speed of light. This means that it is feasible to store and share useful amounts of all kinds of data on mobile or desktop devices, and for mass storage there are also very large general purpose systems (servers and cloud storage) that store data for multiple users and purposes. ● Traditionally data is converted to a series of ​b​inary digi​ts​ (bits) and represented using electrical, magnetic, audio, or optical representations.  Different approaches to representing data as bits can improve how efficiently and effectively it can be stored, transmitted, accessed, and manipulated. For example, compression methods are used to reduce the size of a file, and encryption can be used to prevent others from discovering the contents of the file, whether they are intruding onto your computer, or eavesdropping on data that you are sending through a wired or wireless network. Nevertheless, compressed and encrypted data is still stored as digits. ● Techniques for manipulating information are at the core of the discipline, and hence processing digital representations is fundamental, whether it is changing the brightness of a photo or adding up the bill on a cash register. ● Within a programming language the representations of stored information is articulated as​ data types
​ (e.g. integers, characters, strings of characters, and composite types that lead to more complex structures). They are all bits, but the programmer can decide that the purpose of the bits are in each situation. This also applies to files; in a text file the bits are interpreted as textual characters, while in a spreadsheet file most of the bits may be interpreted as numbers, and in an image they might be interpreted as representing colours. ● Programs themselves are stored as data; the same hardware that stores music or video is also used to store the app (software) that can display those files. 
          </b></div>
				</td>
			</tr>
			
	</table>
	
	
	

          




                                                                    

</body>
</html>