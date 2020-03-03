<!DOCTYPE html>
<html>
<head>
	<title>CS-Explained Ideas</title>
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
        	text-align: center;


        }
        div{
        	
        }
		
	</style>
</head>
	
<body>

<ul>
  <li><a class="active" href="#home">CS-Explained</a></li>
  <li><a href="#contact" style = "float:right;">Username</a></li>
</ul>
<br>
<br>


<center>
	<h1 style="font-weight: bold; font-size: 40px;font-family= Lucida Console, monospace; color: darkslategray;">Evaluating performance of Algoritms.</h1>
	</center>
	<div >
		<table style="width:100%">
			<tr>
				<td rowspan=2>
					
				<div id="intro" class="idea1">Introduction</div>
				<br>
				<div id="explain" class="idea1">Explanation</div>
				
			    </td>
				<td>
					
					<img src="images/idea3a.jpg">
									</td>
				
			</tr>
			

		
<tr>
	
<td >
	
	<img src="images/idea3b.png">
	
</td></tr>

	</table>
	
	
	

<div id="p1" > The main resources that an algorithm uses are time and space (memory). Time is a key factor because slow programs are annoying to users, and if a program is going to take decades to complete a calculation, it's better to work that out before you go to the trouble of implementing it! Using an unnecessarily inefficient algorithm will also lead to devices wasting power or needing cooling, which have an environmental impact; or it could make the battery on a device go flat too quickly. Some algorithms also need a lot of spare memory or storage while they are running. This may make the algorithm infeasible in some cases, while in other cases it might be an excellent tradeoff if the algorithm is faster. 
 
The time taken to solve a problem with an algorithm (and therefore programs that run the algorithm) isn't necessarily proportional to the size of the input; sometimes it's better than that, and sometimes it's a (lot) worse. The time taken by an algorithm is usually estimated based on the size of the input (such as the number of items being searched through, the number of streets in a map, or the number of pixels in an image). It's important to at least estimate the speed of an algorithm before implementing it, as it might be very sensitive to the size of the input; perhaps a program works satisfactorily in tests, but with a larger input it might take a ​lot longer. 
 
          </div>
          <div id="p2">
          Digging deeper: ● There can be many different algorithms for solving the same problem, but some are more efficient than others (for example, you could look for a book in a library by starting at the first shelf and checking every book, but it's better to take advantage of the order that the books have been shelved).  ● The time taken by an algorithm on particular input is often measured as a function of the amount of input to the algorithm. Sometimes the time taken by an algorithm is proportional to the amount of data (given twice as much data, such an algorithm would take roughly twice as long to process it), but very often the time taken is ​not 
​ proportional. Many  algorithms take more time than would be predicted from an assumption of taking 
proportional time (for example, sorting algorithms generally take more than twice as long to sort twice as much data); there are also some algorithms (such as binary search and hashing) that hardly take any extra time even to process a problem that is 10 times as big. Some algorithms become completely infeasible if even a little more data is added to the problem because they require exponential time in the amount of data they are processing; for example, there are algorithms where adding one extra item of data can double the processing time. Such problems that don't have feasible algorithms are referred to as "intractable" (see the next big idea). ● The rate of growth of the resources needed by algorithm is referred to as its ​complexity. Complexity measures are not usually made precisely, since the time taken will depend on the particular computer and other details, so instead they consider the rate of growth; for example, the notation O(n) is used to indicate that an algorithm solving a problem of size n takes and amount of time proportional to n, whereas O(n​2​) indicates that it will take time proportional to the square of the amount of input (doubling the amount of input will take approximately 4 times as long to process). ● Choosing the wrong algorithm for a situation can lead to unnecessary computation, which uses power (e.g. battery life on a portable device, or expensive energy in a large data centre); this in turn can have environmental impacts. ● It is possible to quantify a lower bound on the amount of time that a problem may take to solve even if we don't have an algorithm in mind; as a trivial example, for most problems, if a program is processing ​n
​ values, then it at least needs to take the time to read in all ​n values. An algorithm gives an upper bound for how long the problem will take to solve (since it solves the problem, but we might not yet know if a faster algorithm exists). For some problems we have a large gap between the known upper and lower bounds, while for others we know what the best possible algorithm is. ● Computer science routinely deals with very large and very small quantities. Online systems can deal with billions of customers or transactions, cheap cameras capture millions of pixels in a fraction of a second, personal computers store billions of binary digits, data usually travels at the speed of light, and a step in a computer instruction happens in a billionth of a second, yet some algorithms can take billions of years to complete. It is important to be able to evaluate these situations, as sometimes they work in our favour (e.g. a code that takes billions of years to crack) and sometimes against us (e.g. an image enhancement algorithm that takes hours to complete). 
          </div>




                                                                    

</body>
</html>