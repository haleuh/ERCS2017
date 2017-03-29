<?php 
$pageTitle='welcome'; //THIS MUST BE SET FOR EACH PAGE
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

 
<?php 
	echo '<script>var config='.file_get_contents('configuration/config.json').'</script>';
?>

<script type="text/javascript">
	$(document).ready(function(){
		
		var newsCounter = 0

		setInterval(function(){
			
			if(newsCounter + 1 > config.newsTicker.length-1){
				newsCounter = 0
			}else{
				newsCounter++
			}
			
			$('#news-ticker-link').fadeOut(500, function(){
				$('#news-ticker-link').attr('href', config.newsTicker[newsCounter].link)
				$('#news-ticker-link').html(config.newsTicker[newsCounter].content)
				$('#news-ticker-link').fadeIn(500, function(){
				})
			})
			
		}, 5000)

		
	})
</script>

<!-- <div id="news-ticker" style="color:gray;background:white;padding:15px;margin:10px;border-radius:10px;box-shadow:2px 2px 2px 2px #ccc;margin-top:-20px;margin-bottom:20px; ">
		<p style="padding:0;margin:0;font-size:smaller">
			<i style="color:red;margin-right:10px" class="fa fa-1x fa-newspaper-o"></i> 
			<span id="news-ticker-content">
				<a id="news-ticker-link" href="#">Click here for nomination for best student papers</a>
			</span>
		</p>
</div> -->

<div class="text">

<!-- 	<div style="font-size:30px;color:red;padding:20px; line-height: 30px;"> Paper Submission Deadline Extended to March 10!</div> -->

ERCS 2017: Emerging Research in Computer Science is a forum for students to
perfect their research publication skills, and share and demonstrate their work. It
encompasses a broad range of topics in an attempt to cover a wide variety of
students' research interests. ERCS provides an insight into organization and
function of academic conferences, what goes into making one, how decisions are
made, and how research is evaluated. The goal of ERCS is to advance students'
understanding of all aspects enveloping publication and promotion of their
research.<br>
Specific topics of interest include (but are not limited to):<br>
<li> Artificial Intelligence </li>
<li> Image Processing </li>
<li> Computer Vision </li>
<li> Compilers </li>
<li> Database Systems </li>
<li> Computer Graphics </li>
<li> Human Computer Interaction </li>
<li> Machine Learning </li>
<li> Networking </li>
<li> Operating Systems </li>
<li> Parallel Computing </li>
<li> Distributed Computing </li>
<li> Computer Security </li>
We invite technical papers reporting on original research, ground-breaking results
and/or real-world experiences. It should contain enough background material to
make them accessible. Submissions will be evaluated based on their quality,
originality, clarity, relevance and correctness. A strong submission is characterized
by clarity of presentation, rigor of experiment performed, as well as contribution to
the scientific community and potential impact. The papers can describe results
from collaborative project with other students, groups, or advisors, but the write-up
should be done entirely by the student. In addition to citing relevant work, the
authors must relate their submission to prior relevant publications.
<br><br>
</div>


<?php 
// replace the image files below with your own (you can keep the filenames if you want and rename your own).  Or, just delete the entire <div> below
?>
<div id="images" class="flex flex-wrap justify-center">
	<div class="about-image" style="background: url(images/hotel/hotel1.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel2.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel3.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel4.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel5.jpg) 150px 150px"></div>
</div>	


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>