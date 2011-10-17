<?php
require("base.php");
site_header("Personal Work");
?>

<p>Here are some of the more interesting games and tools I've made in my spare time.</p>

<a name="platformer"></a>
<h1>Platformer</h1>
<p>

<object width="560" height="340">
<param name="movie" value="http://www.youtube.com/v/yAP8taMdGyQ&amp;hl=en_US&amp;fs=1&amp;"></param>
<param name="allowFullScreen" value="true"></param>
<param name="allowscriptaccess" value="always"></param>
<embed src="http://www.youtube.com/v/yAP8taMdGyQ&amp;hl=en_US&amp;fs=1&amp;" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="560" height="340"></embed>
</object>

</p>
<p>This currently unnamed game is a retro-style platformer. It's written using C# and XNA, so it runs on both PC and Xbox 360.
It is essentially an homage to the kind of games I played on my Super Nintendo while growing up. The level editor, which is somewhat fancy, is detailed below.
</p>

<a name="platformer_editor"></a>
<h1>Platformer Editor</h1>
<p><a href="images/platformer_editor.png"><img class="screenshot" src="images/platformer_editor_sm.jpg" alt="Editor Screenshot"/> </a></p>
<p>The level editor supports some neat features:</p>
<ul>
<li>Multi-layer tile editing</li>
<li>Entity placement and property editing</li>
<li>Unlimited undo/redo</li>
<li>Automatic reloading of changed tile set images and entity definition files</li>
</ul>
<p>Like the game, it is written in C#.
</p>

<a name="emu"></a>
<h1>NES Emulator</h1>
<p>
<a href="images/nes2.png"><img class="screenshot"  src="images/nes2_sm.png" alt="Emulator Screenshot"/></a>
<a href="images/nes1.png"><img class="screenshot" src="images/nes1_sm.png" alt="Emulator Screenshot"/></a> 
</p>
<p>
This is an emulator for the Nintendo Entertainment System. I got basic emulation up and running within a week after final exams ended one semester. It includes emulation of the
6502-derived CPU, the PPU (the NES's graphics chip), and several of the most common cartridge memory mapper chips. It has a debugger as well as hardware-accelerated video output
for efficient scaling. Xbox 360 gamepads are supported as input devices. Written in C#.
</p>

<a name="cram"></a>
<h1>Sprite Crammer</h1>
<p>
<a href="images/cram.png"><img class="screenshot" src="images/cram_sm.png" alt="Screenshot"/></a> 
<a href="images/crammed.jpg"><img class="screenshot" src="images/crammed_sm.png" alt="Screenshot"/></a>
</p>
<p>
This is a tool that compacts multiple source images into a small set of atlases. It also trims transparent pixels from the edges of the source sprite images, saving the necessary offset information
to render the image properly later.
Compacting can result in significant savings in VRAM, as well as improving render speeds by enabling batching. This tool is also written in C#, and includes a command line
interface that can be integrated into build processes. Test images courtesy of <a href="http://www.ravuya.com/">Mike Stedman</a>.
</p>

<a name="fe2"></a>
<h1>Fallen Elements II</h1>
<p style="text-align:left;">
<a href="images/fe_postprocess.jpg"><img src="images/fe_postprocess_sm.png" alt="Screenshot" /></a>
<a href="images/fe_fancyshader.jpg"><img src="images/fe_fancyshader_sm.png" alt="Screenshot" /></a>
<a href="images/fe_ragdolls.png"><img src="images/fe_ragdolls_sm.png" alt="Screenshot" /></a><br />
<a href="images/fe_linux.png"><img src="images/fe_linux_sm.png" alt="Screenshot" /></a>
<a href="images/fe_skyview.png"><img src="images/fe_skyview_sm.png" alt="Screenshot" /></a>
<a href="images/fe_entity_edit.png"><img src="images/fe_entity_edit_sm.png" alt="Screenshot" /></a>
</p>
<p>
This is a game I worked on with <a href="http://deliciousdesign.net/">Timothy Barnes</a>, originally for the purpose of entering a contest. The story involves San Diego being
invaded by genetically engineered Soviet penguins (don't ask.) I did programming, and Tim did art; he modeled out a huge chunk of downtown San Diego.
The game quickly got beyond the scope where we could finish it for the contest, so we ended up not entering but worked on it for many months afterwards. It uses 
<a herf="http://www.ogre3d.org/">OGRE</a> for rendering, <a href="http://newtondynamics.com/forum/newton.php">Newton</a> for physics, <a href="http://www.python.org/">Python</a>
for scripting, and <a href="http://connect.creativelabs.com/openal/default.aspx">OpenAL</a> for audio. There is also a level exporter for 3ds Max. The game is written in C++ and Python.
I may put up a video if I dig out the source again.
</p>

<a name="ss"></a>
<h1>SHilScript</h1>
<a href="images/ss.png"><img class="screenshot" src="images/ss_sm.png" alt="Screenshot"/></a> 
<p>
SHilScript is a simple, C-like embedded scripting language that I wrote while I was in high school.
Because it is very lightweight and easy to integrate, a few friends of mine used it in their own game projects.
It is written in C++. I consider it rather dated, and I would make several design and implementation
choices differently today. Its main web site is located <a href="http://www.shilbert.com/shilscript">here</a>.
A more advanced, object-oriented version has been under on-and-off development recently.
</p>

<?php site_footer(); ?>