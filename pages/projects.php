<?php 

include '../includes/header.php';
include '../includes/navbar.php';
?>

    
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
		  <a name="year1"> </a>
          <div class="jumbotron" >
            <h1>Freshman Year</h1> 
          </div>
			<div class="row">
            <div class="col-sm-12">
              <h2>CSCI101</h2>
             <p>    This is an introductory course in C++ which emphasizes the design and
					development of structured programs. All standard C++ topics are considered
					ncluding input/output functions, logical constructs of sequence, selection and
					repetition, user-defined functions, parameter passing by value and by reference,
					and the use of simple variables, arrays and structures.
			 </p>
				<h3> Final Project: </h3>
			 <p>
					Create a menu driven program to simulate a simple baking system. 
					The program will open a file and reads the data and store them in 
					an array/vector of objects to represent the bank customers information, 
					including customer name, address, city, state, account number, and account balance. 
					The format and a sample of the file are provided below. If you are using arrays make 
					the size 20 and if there are more customers in the file print a message and only process 
					the 20 that are stored in the array. Assume all the data stored in the file are correct, 
					no need to verify them.
			 </p>
			 
              <p><a class="btn btn-default" href="Files/Freshman_Year/CS101FinalProject.pdf" role="button">View details »</a></p>
            </div><!--/span-->
  
         </div><!--/span-->
		 <div class="row">
            <div class="col-sm-12">
              <h2>EE101</h2>
              <p> This course  introduces  digital logic design  basics  which  are fundamental to all computers and other digital hardware. 
			  Boolean algebra, analysis and synthesis of combinational and sequential circuits, and binary arithmetic circuits are covered. 
			  Theory and principles are taught and a paper pencil design approach is followed. This is a required course to all electrical 
			  engineering and computer engineering/computer science students. In the next course, EE201L, laboratory experience in building 
			  and testing digital circuits will be provided. Students will use software tools at this time. </p>
			  
			  <h3> Carry-Lookahead Adder Design: </h3>
		      <p>
				Ripple-carry adders are slow, especially for large bit-widths, because the carry generation delay is proportional to the length 
				of the chain, n. Carry-lookahead adders seek to compute the carries for a group of columns all at once. By using this idea and 
				implementing it hierarchically, we can create a carry chain that is proportional to the logarithm of the length of the chain (logm n).
			  </p>
			 
              <p><a class="btn btn-default" href="Files/Freshman_Year/EE101FinalProject.pdf" role="button">View details »</a></p>
            </div><!--/span-->
         </div><!--/span-->
		 
		  <div class="row">
            <div class="col-sm-12">
              <h2>CS102</h2>
              <p> The first portion of the class discusses topics that give students with a solid programming foundation in C++:
			  Basic DAta Structures, Memory Management, Input/Output Streams, Exceptino Handling, Objected-Oriented
			  Design. The 2nd portion focuse almost entirely on data structures and programming efficiency: Recursion, Algorithm 
			  Design, and Data Structures. </p>
			  
			  <h3> Final Project: </h3>
		      <p>
					Create a game. 
			  </p>
			 
              <p><a class="btn btn-default" href="Files/Freshman_Year/CS102FinalProject.pdf" role="button">View details »</a></p>
            </div><!--/span-->
         </div><!--/span-->
			
			<a name="year2"> </a>
		  <div class="jumbotron">
            <h1> Sophomore Year </h1>
            
          </div>
		     <div class="row">
			 
				<div class="col-sm-12">
				<h2>CSCI200</h2>
				<p>TThis course focuses on extending the use of the data structures concepts that you learned in CSCI 102, by giving you 
				ample opportunity to build more complex software systems requiring lots of data structures and more sophisticated user interfaces. 
				For this purpose we use the Java programming language. Java Swing provides many classes for the construction of complex graphical 
				user interfaces. You will become very good with Swing by the end of the course.</p>
				<h3> Final Project: </h3>
				<p>
					The kitting cell is a sophisticated real-time control application. 
					The kitting cell assembles kits full of parts for use by other assembly cells. 
					It has many devices (robots, cameras, etc.) that must be controlled to perform its kitting application. 
					In the factory, each device has its own controller and sensors, which are native to it. 
					A cell control program (a collection of agents) runs on its own computer. 
					The agents “communicate” with the device controllers using wires and/or proprietary networks.
				</p>
				<p><a class="btn btn-default" href="Files/Sophomore_Year/CS200FinalProject.pdf" role="button">View details »</a></p>
				
				</div><!--/span-->
			</div>
			
			<div class="row">
			 
				<div class="col-sm-12">
				<h2>EE201</h2>
				<p>Digital system design and implementation; 
				synchronous design of datapath and control; 
				schematic/Verilog-based design, simulation, 
				and implementation in Field Programmable Gate Arrays; 
				timing analysis; simple CPU design; semester-end project.</p>
				<h3> Connect Four: </h3>
				<p>
					Connect Four is a two-player game in which the players first choose a color and 
					then take turns dropping colored discs from the top into a vertically-suspended 
					grid. The pieces fall straight down, occupying the next available space within 
					the column. The object of the game is to connect four of one's own discs of the 
					same color next to each other vertically, horizontally, or diagonally before your opponent. 
				</p>
				<p>
					We will be using registers to store the states and color of the slots, determine 
					the player turn and player win, and indicate how many rows are left for each column. 
					This counter will increment 2 until it reaches 12. When the counter reaches 12, 
					the column will be full. Each switch will be used to fill its corresponding column. 
					There are 8 columns in our grid. The acknowledge input will be associated with the 
					center button of the FPGA board. The acknowledge input will be used to move to the fill state.
				</p>
				<p><a class="btn btn-default" href="Files/Sophomore_Year/EE201FinalProject.pdf" role="button">View details »</a></p>
				
				</div><!--/span-->
			</div>
			
			<div class="row">
			 
				<div class="col-sm-12">
				<h2>CSCI201</h2>
				<p>You will be taught about writing code that is part of a system by being immersing into an 
				existing body of code, which you will enhance during the semester. The result is to teach you 
				about software development in the way you will most often encounter it in industry. We will 
				cover several theoretical topics: Concurrent Programming, Software Engineering Principles,
				Operating System Principles, Concurrency, Unit Testing, Working On Teams, Using Team 
				Oriented-Tools. 
				</p>
				<h3> Final Project: </h3>
				<p>
					We will be using agents to to run a conveyor factory. In this project all the devices are simulated in an animation. 
					The agents will communicate with the animation using an asynchronous messaging interface.
				</p>
				
				</div><!--/span-->
			</div>
			
			<div class="row">
			 
				<div class="col-sm-12">
				<h2>CSCI201</h2>
				<p>You will be taught about writing code that is part of a system by being immersing into an 
				existing body of code, which you will enhance during the semester. The result is to teach you 
				about software development in the way you will most often encounter it in industry. We will 
				cover several theoretical topics: Concurrent Programming, Software Engineering Principles,
				Operating System Principles, Concurrency, Unit Testing, Working On Teams, Using Team 
				Oriented-Tools. 
				</p>
				<h3> Final Project: </h3>
				<p>
					We will be using agents to to run a conveyor factory. In this project all the devices are simulated in an animation. 
					The agents will communicate with the animation using an asynchronous messaging interface.
				</p>
				
				</div><!--/span-->
			</div>
		</div>

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="#year1" class="list-group-item active">Freshman Year</a>
            <a href="#year2" class="list-group-item"> Sophomore Year</a>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
    
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/js/jquery-1.10.2.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/offcanvas.js"></script>

</body></html>