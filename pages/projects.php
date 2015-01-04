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
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="jumbotron" >
						<h1>Freshman Year</h1> 
					</div>
				</div>

				<div class="panel-body">


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

					<p><a class="btn btn-default" href="../Files/Freshman_Year/CS101FinalProject.pdf" role="button">View details »</a></p>
					<!--/span-->

				</div><!--/span-->
				<div class="panel-body">

					<h2>EE101</h2>
					<p> This course  introduces  digital logic design  basics  which  are fundamental to all computers and other digital hardware. 
						Boolean algebra, analysis and synthesis of combinational and sequential circuits, and binary arithmetic circuits are covered. 
						Theory and principles are taught and a paper pencil design approach is followed. This is a required course to all electrical 
						engineering and computer engineering/computer science students. In the next course, EE201L, laboratory experience in building 
						and testing digital circuits will be provided. Students will use software tools at this time.
					</p>

					<h3> Carry-Lookahead Adder Design: </h3>
					<p>
						Ripple-carry adders are slow, especially for large bit-widths, because the carry generation delay is proportional to the length 
						of the chain, n. Carry-lookahead adders seek to compute the carries for a group of columns all at once. By using this idea and 
						implementing it hierarchically, we can create a carry chain that is proportional to the logarithm of the length of the chain (logm n).
					</p>

					<p><a class="btn btn-default" href="../Files/Freshman_Year/EE101FinalProject.pdf" role="button">View details »</a></p>
					<!--/span-->
				</div><!--/span-->

				<div class="panel-body">

					<h2>CS102</h2>
					<p> The first portion of the class discusses topics that give students with a solid programming foundation in C++:
						Basic DAta Structures, Memory Management, Input/Output Streams, Exceptino Handling, Objected-Oriented
						Design. The 2nd portion focuse almost entirely on data structures and programming efficiency: Recursion, Algorithm 
						Design, and Data Structures. 
					</p>

					<h3> Final Project: </h3>
					<p>
						Create a game. 
					</p>

					<p><a class="btn btn-default" href="../Files/Freshman_Year/CS102FinalProject.pdf" role="button">View details »</a></p>

				</div><!--/span-->
			</div>
			<a name="year2"> </a>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="jumbotron">
						<h1> Sophomore Year </h1>

					</div>
				</div>


				<div class="panel-body">
					<h2>CSCI200</h2>
					<p>TThis course focuses on extending the use of the data structures concepts that you learned in CSCI 102, by giving you 
						ample opportunity to build more complex software systems requiring lots of data structures and more sophisticated user interfaces. 
						For this purpose we use the Java programming language. Java Swing provides many classes for the construction of complex graphical 
						user interfaces. You will become very good with Swing by the end of the course.
					</p>
					<h3> Final Project: </h3>
					<p>
						The kitting cell is a sophisticated real-time control application. 
						The kitting cell assembles kits full of parts for use by other assembly cells. 
						It has many devices (robots, cameras, etc.) that must be controlled to perform its kitting application. 
						In the factory, each device has its own controller and sensors, which are native to it. 
						A cell control program (a collection of agents) runs on its own computer. 
						The agents “communicate” with the device controllers using wires and/or proprietary networks.
					</p>
					<p><a class="btn btn-default" href="../Files/Sophomore_Year/CS200FinalProject.pdf" role="button">View details »</a></p>

				</div><!--/span-->




				<div class="panel-body">
					<h2>EE201</h2>
					<p>Digital system design and implementation; 
						synchronous design of datapath and control; 
						schematic/Verilog-based design, simulation, 
						and implementation in Field Programmable Gate Arrays; 
						timing analysis; simple CPU design; semester-end project.
					</p>
					<h3>Final Project: </h3>
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
					<p><a class="btn btn-default" href="../Files/Sophomore_Year/EE201FinalProject.pdf" role="button">View details »</a></p>

				</div><!--/span-->




				<div class="panel-body">
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
			<a name="year3"> </a>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="jumbotron">
						<h1> Junior Year </h1>
					</div>
				</div>


				<div class="panel-body">
					<h2>EE457</h2>
					<p>This course covers computer organization and design. It provides CS/CE/EE students
						a substantial understanding of a CPU at its logic design level. Design of the control unit and the
						data path unit of a simple multi-clock-cycle CPU and a pipelined CPU is covered in detail.
						Hardware support for exceptions, dynamic scheduling of instructions (Tomasulo algorithm to
						execute instructions in an out-of-order fashion), and branch prediction are also discussed.
						Computer arithmetic and memory hierarchies (cache, main memory, virtual memory) are also covered.
						Hardware-software interface is discussed. Students design in Verilog and use ModelSim simulator to
						verify their design/simulation exercises.

					</p>
					<h3> Final Project: </h3>
					<p>
						We will be designing a simple pipeline with add,subtract, and move instructions. 
					</p>
					<p><a class="btn btn-default" href="../Files/Junior_Year/EE457FinalProject.pdf" role="button">View details »</a></p>
				</div><!--/span-->



				<div class="panel-body">
					<h2>CSCI430</h2>
					<p>Computers and networking are crucial to many aspects of our daily lives: entertainment,
						business, personal communication, healthcare, transportation, utilities, etc. Security of 
						such systems is thus of paramount importance for protecting our assets or even our lives. 
						This course will give students an overview of systems security, its workings, and its role 
						in protecting data and computing resources. Students will receive both theoretical knowledge 
						of threats and defenses and practical skills allowing them to implement some popular threats 
						and defenses in a laboratory setting.
					</p>
					<h3> Final Project: </h3>
					<p>
						We will be designing a simple pipeline with add,subtract, and move instructions. 
					</p>
					<p><a class="btn btn-default" href="../Files/Junior_Year/CSCI430FinalProject.pdf" role="button">View details »</a></p>
				</div><!--/span-->





				<div class="panel-body">
					<h2>EE454</h2>
					<p>This course covers the hardware design of a microprocessor-based system.
						Students learn interfacing of memory and I/O to 8-bit/16-bit/32-bit processors.
						Intel processors 8088, 8086, 80386 and 80486 and Intel parallel and serial
						I/O chips, 8255A and 8251A, interrupt controller 8259A, DMA controller 8237A,
						bus arbiter 8289 are some of the chips used in this course.
						Traditional (asynchronous) SRAMs, traditional (asynchronous) DRAMs, Synchronous
						SRAMs, Synchronous DRAMs, and Flash ROMs are discussed.
						Interfacing several processors with different data-bus widths to a global memory via a
						shared bus is also covered.
					</p>
					<p>Students verify their designs through simulation on a CAD tool (Cadence Virtuoso).
						In the lab, students use a microprocessor trainer system together with
						an 80-channel logic analyzer to build and test circuits interfacing I/O chips to the
						microprocessor's system bus.

					</p>
					<h3> Final Project: </h3>
					<p>
						We will be using the Direct Memory Access Controller to perform operations with the 
						Interrupt Controller, 8086,8088, and 80386 chips.  
					</p>
				</div><!--/span-->

			</div>

			<a name="year4"> </a>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="jumbotron">
						<h1> Senior Year </h1>
					</div>
				</div>
				<div class="panel-body">
					<h2>CSCI350</h2>
					<p>This is an upper-division undergraduate class in computer operating systems. 
						We will cover the principles underlying the design of various subsystems of modern 
						operating systems, ranging from process management and virtual memory to file 
						systems and security. These principles will be augmented a series of projects 
						in which students develop these subsystems within the context of an instructional 
						operating system.

					</p>
					<h3> Final Project: </h3>
					<p>
						Implement page tables, frame management, swap management, and memory mapped files.
					</p>
					<p><a class="btn btn-default" href="../Files/Senior_Year/CSCI350FinalProject.pdf" role="button">View details »</a></p>
				</div><!--/span-->

				<div class="panel-body">
					<h2>CSCI360</h2>
					<p>Artificial Intelligence (AI) seeks to understand the mechanisms underlying 
						thought and intelligent behavior, with a particular focus on their embodiment in 
						machines. Core topics include the integrating perspective of intelligent agents 
						plus how such systems can engage in: search and problem solving; symbolic and 
						probabilistic knowledge representation and reasoning; planning; and machine learning. 
						The course introduces both basic concepts and algorithms, and explores how to apply 
						these in the construction of systems that can interact intelligently with complex environments.

					</p>
					<h3> Final Project: </h3>
					<p>
						Build Bayesian networks. Write a program to find the optimal policy using value iteration.
					</p>
					<p><a class="btn btn-default" href="../Files/Senior_Year/CSCI360FinalProject.pdf" role="button">View details »</a></p>
				</div><!--/span-->

				<div class="panel-body">
					<h2>CSCI477a</h2>
					<p>Programming methodologies; intra-group and inter-group communication;
						software life-cycle; software economics. A large software project is a central
						aspect of the course. 

					</p>
					<h3> Final Project: </h3>
					<p>
						Choose a software project. Provide thorough documentation.
					</p>
					<p><a class="btn btn-default" href="../Files/Senior_Year/CSCI477aFinalProject.pdf" role="button">View details »</a></p>
				</div><!--/span-->	
			</div>
		</div>	

		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<div class="list-group">
				<a href="#year1" class="list-group-item">Freshman Year</a>
				<a href="#year2" class="list-group-item"> Sophomore Year</a>
				<a href="#year3" class="list-group-item"> Junior Year</a>
				<a href="#year4" class="list-group-item"> Senior Year</a>
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