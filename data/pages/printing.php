<?php $page['TITLE'] = "Printing at the BCM";
$page['CONTNENT'] = " 
<div class='container'>
	<h3>I Am on a...</h3>
	<!-- begin accordian group -->
	<div class=\"panel-group\" id=\"accordion\">
		<!-- WINDOWS ACCORDIAN-->
		<div class=\"panel panel-default\">
			<div class=\"panel-heading\">
				<h4 class=\"panel-title\">
					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#href-0\">
						Windows Computer
					</a>
				</h4>
			</div>
			<!-- begin windows content -->
			<div id=\"href-0\" class=\"panel-collapse collapse\">
				<div class=\"panel-body\">
					<ol>
						<li>
							<div class='printerbdy'>
								<?php echo \"<img class='printerimg' src='".$conf['IMGPATH']."/printer/step-0.png'>\"; ?>
								<p>Go to \"Start\"->\"Devices and Printers\"->\"Add a Printer\" .</p>
							</div>
							<br>
						</li>
						<li>
							<div class='printerbdy'>
								<?php echo \"<img class='printerimg' src='".$conf['IMGPATH']."/printer/step-1.png'>\"; ?>
								Select \"Add a network, wireless or bluetooth printer\" .
							</div>
							<br>
						</li>
						<li>
							<div class='printerbdy'>
								<?php echo \"<img class='printerimg' src='".$conf['IMGPATH']."/printer/step-2.png'>\"; ?>
								Select \"The printer I want wasn't listed\" (do not wait for Windows to find the printer, it never will).
							</div>
							<br>
						</li>
						<li>
							<div class='printerbdy'>
								<?php echo \"<img class='printerimg' src='".$conf['IMGPATH']."/printer/step-3.png'>\"; ?>
								Select the second option \"Select a shared printer by name\" bubble. Do not select the \"Browse..." button. In the text box below type in the following: 
								<pre>http://192.168.1.100:631/printers/Samsung_ML-2250</pre>
								Then click \"Next\". A loading box should appear. Windows is searching for the printer, please wait and be patient.
							</div>
							<br>
						</li>
						<li>
							<div class='printerbdy'>
								<?php echo \"<img class='printerimg' src='".$conf['IMGPATH']."/printer/step-4.png'>\"; ?>
								<br>
								<?php echo \"<img class='printerimg' src='".$conf['IMGPATH']."/printer/step-5.png'>\"; ?>
								If all goes well then there should appear another window as above. In the left box scroll down and select \"Samsung\". In the right box scroll down and select \"Samsung ML-2250 Series\". Click \"Ok\" to move along. 
							</div>
							<br>
						</li>
						<li>
							<div class='printerbdy'>
								<?php echo \"<img class='printerimg' src='".$conf['IMGPATH']."/printer/step-6.png'>\"; ?>
								If you have gotten this far then HURRAY! You're done. Select \"Next\" to pass Go and collect 200 cookie points...
							</div>
						</li>
						<li>
							<div class='printerbdy'>
							<?php echo \"<img class='printerimg' src='".$conf['IMGPATH']."/printer/step-7.png'>\"; ?>
								<br>
								Here are the 200 cookie points promised. You can make this your default printer, or send a test page to the printer just to be sure that everything works. If it doesn't then you can send an email to: noah.harvey247@gmail.com describing your problem.
								<br>
								Select \"finish\"
							</div>
						</li>
					</ol>
				</div>
			</div><!--end windows content -->
		</div><!-- WINDOWS ACCORDIAN-->
	</div><!-- end accordian groups -->
</div><!-- end container -->
";
?>
