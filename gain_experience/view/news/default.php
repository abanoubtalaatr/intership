<!-- here slider  -->
<div class="gain_slider">
  <div class="gain_container">
	test
  </div>
</div> <!-- End the gain_slider class -->


<div class="staticties">
	<div class="gain_container  col-xl-12 col-xl-12 col-md-12 col-sm-12">
		<h2>stactics</h2>
		<div class="info_teams">
		    <h2>about teams</h2>	
			<h3> Number of teams in the site is : <strong>30</strong></h3>
		</div><!--  End info team  -->


		<div class="info_project">
			<!-- number of project available now -->
			<h2>about project</h2>
			<div class="number_project">
				<h3>Number of project is : 3</h3>
			</div>
			<div class="name_of_project">
	          <h5> <strong>facebook</strong> number of teams work in it is 4</h5>
	          <h5> <strong>youtube</strong> number of teams work in it is 6</h5> 
	          <h5> <strong>amazon</strong> number of teams work in it is 8</h5> 
			</div>
		</div><!--  End info project -->

	</div><!--  End class gain_contaier -->
</div>  <!-- End class statics -->

<div class="posts xl-col-12 sm-colo-6">
	<div class="gain_container">



      <?php 
       $date = $this->data['posts'];
       $chunck = array_chunk($date, 2);
       for ($i=0; $i < count($chunck) ; $i++) { 
       	 echo "<div class='row'>";
       	  foreach ($chunck as $key => $value) {
       	  	   echo "<div class='item'>
						<h3>{$value[$key]['title']}</h3>
						<p>{$value[$key]['description']} </p>
		            </div>";
       	  }
       	  echo "</div>";
       }

      ?>
      <!--  <div class="row">

       	<div class="item">
			<h3>title of post</h3>
			<p>this for test only to appear </p>
		</div>

		<div class="item">
			<h3>title of post</h3>
			<p>this for test only to appear </p>
		</div>

       </div>


       <div class="row">

       	<div class="item">
			<h3>title of post</h3>
			<p>this for test only to appear </p>
		</div>

		<div class="item">
			<h3>title of post</h3>
			<p>this for test only to appear </p>
		</div>

       </div>
		

 -->
	</div> <!--  End gain_container -->
</div> <!--  End posts  -->


