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
			<h1 style="font-weight: bold; font-size: 40px;font-family= Lucida Console, monospace; color: darkslategray;">Solving computational problems through Algoritms.</h1>
			<br><br>
			<a href="showvideo.php"><div class="idea1"><p style="font-size: 40;">Video</p></div></a>

		</td>
		<td>
			<img src="images/idea2a.jpg">
		
			<img src="images/idea2b.png">
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
					An algorithm is a well defined process that acts on data to solve some problem i.e. to achieve a result, such as finding the shortest route on a map, matching two strands of DNA, or changing the brightness of a photo.  
 
An algorithm can only include steps that a conventional computer could do; for example, you couldn't just put in a step that says "find the most efficient solution". Remarkably, the full power of a conventional digital device can be realised by an algorithm using just three structures to control program flow: sequencing (putting instructions one after the other), selection (choosing which part of the algorithm to execute based on some 
values, usually using an "if" statement), and iteration (repeating part of the algorithm with a loop). Apart from these three basic types of instruction, a computer is able to read in information (input), give out information (output) and store data to use later on. These basic components can be used to define every algorithm, as they define exactly what can (and can't) be done on conventional devices. </b></div>
              
          </div>
				</td>
				<td>
					<div id="p2"><b>
          	Digging deeper: ● Algorithms can be expressed as a static (finite) representation that describes a dynamic (potentially infinite) process. ● The "conventional" computer referred to here is the kind of processor found in typical digital devices, including personal computers, smartphones, supercomputers, cloud services, internet devices, and digital watches. Examples of un
 conventional computers would be quantum computers and analogue computers. ● The kind of algorithm that can be used in a given situation depends on the way that data is stored and organised (the organisation is referred to as data structures). For example, finding the smallest file in a list sorted in ascending order of size has a simple algorithm (just pick the first file!), while finding the smallest file in a huge disorganised list requires a different algorithm. There is a close relationship between algorithms and data; designing computer systems often involves tackling the tradeoff between efficient data storage and efficient algorithms to process the data, so it is therefore very important to be aware of the advantages and disadvantages of different ways of storing data. ● The term "computational problem", "algorithmic problem", or simply "problem" in this context is often used to refer to the task that needs to be computed e.g. searching for a word, sorting values into order, finding the shortest route on a map, or finding a face in a photo. These kinds of problems are different from, say, a maths problem, where students might be expected to find a single correct solution. A computational problem can have several correct solutions (algorithms), and an algorithm is a general process for solving that type of problem. For example, if the problem is how to search for any given word in any given document, there are several possible algorithms (e.g. a sequential search comparing every word; or sorting the words into alphabetical order and then searching the alphabetical list); these computational solutions contrast with a specific outcome, such as "where is the word 'score' in the Gettysburg address?", which has the simple answer that it is the second word. ● Algorithms should solve for all possible inputs that might be given in the future (such as finding the high score in any
 list of scores); this contrasts with other human problem solving that solves for just one instance at a time e.g. design a bridge for a particular river crossing. ● The model for a conventional device (using sequence, selection, iteration, input, output and storage) goes back to the first electronic computers, and is based on work done by Alan Turing and Alonzo Church; conventional devices and programming languages that meet these criteria are often (loosely) referred to as "Turing-complete". Because all conventional digital devices that we work with meet these criteria, it means that designing algorithms using this model has very broad applicability. The concept is 
explored further by Guzdial here https://computinged.wordpress.com/2012/05/24/defining-what-does-it-mean-to-understa nd-computing/. 
 Turing's model can also be expressed using an equivalent approach called recursion, which can make an algorithm easier to reason about how it works. ● Algorithm correctness is important - we need to be sure that it achieves exactly what we expect it to achieve. This includes heuristics (near enough solutions that may not be perfect, but can be computed faster than the optimal solution); heuristics can be considered to be the correct solution if the desire is for a solution that is fast enough and near enough to the best possible solution. ● The interaction of algorithms with data is crucial; we can choose between various ways to arrange data in computer storage (through "data structures"), which affect how quickly it can be accessed. Whenever the form of data is changed, there is typically a tradeoff between time and space e.g. a search data structure such as a "hash table" is faster than an unstructured list, but wastes space. Data structures can give faster access to data for purposes like searching for information, finding patterns, and calculating paths through maps. There are many kinds of data structures used on computers, ranging from variations on lists, to trees and "graphs", which can represent general networks such as road maps. The relationship between data structures and algorithms is seen, for example, between searching and lists; a sorted list can be searched more efficiently than an unsorted list because it makes a better algorithm possible, but it requires more computation in advance to ensure the list is in sorted order. ● The data can also have the fundamental bit-level structure of how it is stored changed to make it take less space (compression), to make it meaningless to eavesdroppers (encryption) or to make it useful even if a few of the bits get messed up (error control). This also presents tradeoffs; for example, a JPEG file is smaller than a raw image file, but requires processing to make it smaller, and there will be a tradeoff in quality. The technical word for changing the bit-level representation of data is "coding", although the meaning in this context is quite different to the meaning of "coding" in the context of programming.  Coding changes the form of representation for encryption, compression or error control to better suit how we wish to use it. ○ Encryption can allow us to transmit data while someone observes all transmissions (including setting up the encryption keys), yet the eavesdropper is still unable to decode anything from the data. This enables a secure connection to be set up with a bank or online shop. ○ Compression has the potential to reduce the size of files so they use less storage and are transmitted faster; some methods however can expand the files rather than compress them, and it is impossible to achieve infinite compression. Compression is particularly important for large media files such as photos (e.g. JPEG, GIF, PNG), video (e.g. MPEG) and audio (e.g. MP3). ○ Error control enables us to detect when data has been corrupted, to any level of confidence required. All data stored long-term on disks and flash memory, and all data sent over wireless, wired and fibre networks has error control added to it to make sure that the user doesn't accidentally end up working with incorrect data. 
● Many algorithms rely on decomposition using "divide and conquer" techniques, where the problem being solved is being reduced in size until it is small enough to deal with easily (e.g. sorting one item into alphabetical order is trivial!) A key idea here is recursion - expressing a problem as the combination of smaller problems, which themselves can be broken into smaller problems, and so on until you reach a trivial "base case". The problem might have millions of items in it to process (such as searching for a word in a list of a billion words), but the base case typically has only one, or even zero, items in it (such as searching for a word in a list of just one word). 
          </b></div>
				</td>
			</tr>
			
	</table>
	
	
	

          




                                                                    

</body>
</html>