<?php
require("base.php");
site_header("Resume");
?>

<div id="resume-head">
Also available in
<a href="ScottHilbertWebResume-2010.pdf" onclick="pageTracker._trackEvent('Resume','Download Resume PDF');"><img class="fileicon" src="images/pdf.gif" alt="PDF icon"/> PDF</a> and 
<a href="ScottHilbertWebResume-2010.doc" onclick="pageTracker._trackEvent('Resume','Download Resume DOC');"><img class="fileicon" src="images/word.png" alt="DOC icon"/> Microsoft Word</a> formats.
<br/>
<br/>
</div>

<div id="resume">


<h1>Contact Information</h1>
Email: scott at shilbert dot com<br/>
Phone: (919) 602-7337<br/>

<h1>Professional Experience</h1>


<b>Corsair EDA, Inc.</b> - January 2010 - Present<br/>
Contractor
<ul>
	<li>Developed custom web application for managing lottery tickets for individuals and lottery pools, including aggregating winning number feeds and notifying users of their winnings</li>
	<li>~16,000 lines of Python</li>
</ul>

<b>Skytrex Systems, LLC</b> - August 2009 - July 2010<br/>
Contractor
<ul>
	<li>Contributed to development of flight planning iPhone application for general aviation pilots</li>
	<li>Implemented feature to fetch, parse, and display temporary flight restriction zones defined by the FAA, involving boolean operations on arbitrary 2D shapes (Objective-C / iPhone)</li>
	<li>Implemented tool to define boundaries and projection basis information for chart images (C# / PC)</li>
</ul>

<b>Vicious Cycle Software, Inc.</b> - Summer 2007, 2008, 2009<br/>
Junior Engine/Tools Programmer
<ul>
	<li>Wrote photon mapping system for real-time global illumination prototype</li>
	<li>Implemented mesh level-of-detail system for Vicious Engine 2</li>
	<li>Implemented 3D modeler-style transform widgets in Vicious Editor</li>
	<li>Added polish features (e.g. undo, multiple selection) to shader graph editor</li>
	<li>Wrote faster UV unwrapping system for map geometry</li>
	<li>Implemented state transition system for destructible physics objects</li>
	<li>Implemented asset reporting system to track down wasteful models, textures, shaders and sounds</li>
</ul>

<h1>Personal Projects</h1>
<b>Platformer</b> (Untitled)
<ul>
	<li>XNA sidescroller game</li>
	<li>Runs on PC or Xbox 360</li>
	<li>WinForms editor with tile &amp; entity editing, full undo/redo, automatic image reloading</li>
	<li>~25,000 lines of C#</li>
</ul>

<b>Fallen Elements II</b>
<ul>
	<li>First-person shooter</li>
	<li>Integrates OGRE for rendering, Newton physics, Python scripting, OpenAL sound</li>
	<li>~30,000 lines of C++ and Python</li>
</ul>

<b>SHilScript</b>
<ul>
	<li>Embedded scripting engine with C-like syntax</li>
	<li>Used in several games and applications released by others</li>
</ul>

<h1>Education</h1>
<b>North Carolina State University</b> - December 2009
<ul>
	<li>B.S., Computer Engineering &amp; B.S., Electrical Engineering</li>
	<li>Major GPA: 4.0/4.0; Overall GPA 3.45/4.0</li>
	<li>Graduated Cum Laude; Dean's List (Perfect 4.0) Spring 2007 - Fall 2009</li>
	<li>Senior project: Wireless digital water flow controller using 802.15.4 and variable-speed Pentair pool pump</li>
</ul>

<h1>Technical</h1>
<ul>
	<li>Languages: C/C++ (12 years), Python (8 years), C# (7 years), Cg/HLSL, Java</li>
	<li>Technologies: STL, Direct3D, OpenGL, Win32 API, networking (sockets), .NET, XNA, Python C API, Newton physics, OGRE, OpenAL, wxWidgets</li>
	<li>Tools: Visual Studio, Subversion, 3D Studio MAX, Photoshop, SWIG, Yacc/Bison, ANTLR</li>
	<li>Platforms: Windows, Linux, Xbox 360</li>
	<!-- <li>Mathematics: Calculus, differential equations, linear algebra, linear systems</li> -->
</ul>

</div>

<?php site_footer(); ?>