<!DOCTYPE html>
<html>
	<head>
		<title>CV Generator</title>
		<link rel="StyleSheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="StyleSheet" type="text/css" href="assets/css/bootstrap-social.css">
		<link rel="StyleSheet" type="text/css" href="assets/css/font-awesome.css">
		<link rel="StyleSheet" type="text/css" href="assets/css/app/style.css">
		<link rel="StyleSheet" type="text/css" href="assets/css/datepicker.css">
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="assets/js/app/cvbuilder.js"></script>
	</head>

	<body>

		<!-- linkedin SDK -->
		<script type="text/javascript" src="//platform.linkedin.com/in.js">
		    api_key:   77x4ynmv5b6cio
		    onLoad:    linkedinReady
		    authorize: true
		    lang:      en_US
		</script>
	
		<div class="container cv-wrapper">
		
			<h1>CV Generator</h1>
		
			<br>
			
			<div>Share: 
			
				<a class="btn btn-sm btn-facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?=urlencode("http://{$_SERVER[HTTP_HOST]}{$_SERVER[REQUEST_URI]}");?>">
					<i class="fa fa-facebook"></i>
				</a>

				<a href="http://twitter.com/home?status=<?=urlencode("http://{$_SERVER[HTTP_HOST]}{$_SERVER[REQUEST_URI]}");?>" class="btn btn-sm btn-twitter" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>
				
				<a href="https://plus.google.com/share?url=<?=urlencode("http://{$_SERVER[HTTP_HOST]}{$_SERVER[REQUEST_URI]}");?>" class="btn btn-sm btn-google-plus" target="_blank">
					<i class="fa fa-google-plus"></i>
				</a>
				
				<a href="https://www.linkedin.com/shareArticle?url=<?=urlencode("http://{$_SERVER[HTTP_HOST]}{$_SERVER[REQUEST_URI]}").'&mini=true&title='.urlencode('CV generator').'&summary='.urlencode('Online CV generator');?>" class="btn btn-sm btn-linkedin" target="_blank">
					<i class="fa fa-linkedin"></i>
				</a>
				
				<img src="assets/img/linkedin48px.png" alt="Get LinkedIn data" title="Use data from my LinkedIn account" id="linkedin-btn" class="hidden pull-right">
			
				<div class="claerfix"></div>
			
			</div>
			
			
			<br>
		
			<form action="cvxml.php" method="POST" enctype="multipart/form-data">
			
				<h4 class="text-info cv-heading">1) Personal</h4>
			
				<div class="row">
				
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="form-group">
							<label class="control-label" for="cvName">First name</label>
							<input type="text" class="form-control" id="cvName" name="cv[name]">
						</div>
					</div>
					
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="form-group">
							<label class="control-label" for="cvSname">Last name</label>
							<input type="text" class="form-control" id="cvSname" name="cv[surname]">
						</div>
					</div>
					
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="form-group">
							<label class="control-label" for="cvDOB">Birth date</label>
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</div>
								<input type="text" class="form-control date-picker" id="cvDOB" name="cv[dob]">
							</div>
						</div>
					</div>
				
				</div>
				
				<div class="form-group">
					<label for="cvPhoto">Photo</label>
					<input type="file" name="photo" id="cvPhoto">
				</div>
				
				<hr>
				
				<h4 class="text-info cv-heading">2) Address &amp; Contact</h4>
				
				<div class="row">
				
					<div class="col-xs-12 col-md-8">
						<div class="form-group">
							<label class="control-label" for="cvStreet">Street</label>
							<input type="text" class="form-control" id="cvStreet" name="cv[street]">
						</div>
					</div>
					
					<div class="col-xs-12 col-md-4">
						<div class="form-group">
							<label class="control-label" for="cvPostcode">Post code</label>
							<input type="text" class="form-control" id="cvPostcode" name="cv[post_code]">
						</div>
					</div>
				
				</div>
			
				<div class="row">
				
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="control-label" for="cvCity">City</label>
							<input type="text" class="form-control" id="cvCity" name="cv[city]">
						</div>
					</div>
					
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="control-label" for="cvCountry">Country</label>
							<input type="text" class="form-control" id="cvCountry" name="cv[country]">
						</div>
					</div>
				
				</div>
				
				
				<div class="row">
				
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="control-label" for="cvPhone">Phone</label>
							<input type="text" class="form-control" id="cvPhone" name="cv[phone]">
						</div>
					</div>
					
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="control-label" for="cvMobile">Mobile</label>
							<input type="text" class="form-control" id="cvMobile" name="cv[mobile]">
						</div>
					</div>
				
				</div>
			
				<div class="row">
				
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="control-label" for="cvEmail">Email</label>
							<input type="text" class="form-control" id="cvEmail" name="cv[email]">
						</div>
					</div>
					
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="control-label" for="cvFax">Fax</label>
							<input type="text" class="form-control" id="cvFax" name="cv[fax]">
						</div>
					</div>
				
				</div>
			
				<hr>
				
				<h4 class="text-info cv-heading">3) Work experiences</h4>
				
				
				<div id="work-experience"></div>

				<p>
					<button type="button" class="btn btn-primary btn-xs btn-add-experience">
						<span class="glyphicon glyphicon-plus"></span> Add work experience
					</button>
				</p>
				
				<br>

				<h4 class="text-info cv-heading">4) Education</h4>
				
				<div id="education-list"></div>
				
				<p>
					<button type="button" class="btn btn-primary btn-xs btn-add-education">
						<span class="glyphicon glyphicon-plus"></span> Add education
					</button>
				</p>

				<br>

				<h4 class="text-info cv-heading">5) Languages spoken</h4>
				
				<div id="language-list"></div>
				
				<p>
					<button type="button" class="btn btn-primary btn-xs btn-add-language">
						<span class="glyphicon glyphicon-plus"></span> Add language
					</button>
				</p>
				
				<br>
				
				<h4 class="text-info cv-heading">6) Skills</h4>
				
				<div id="skill-list"></div>
				
				<p>
					<button type="button" class="btn btn-primary btn-xs btn-add-skill">
						<span class="glyphicon glyphicon-plus"></span> Add skill
					</button>
				</p>
				
				
				<p class="text-center">
				
					<button type="submit" class="btn btn-success btn-lg">
						<span class="glyphicon glyphicon-ok"></span> Save
					</button>
				
				</p>
			
			</form>
		
		</div>
		
		
		<div class="experience well hidden" id="experience-proto" data-experience="">
		
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="form-group lw-employer">
						<label for="">Employer</label>
						<input type="text" class="form-control" id="" name="">
					</div>
				</div>
				
				<div class="col-xs-12 col-md-6">
					<div class="form-group lw-position">
						<label for="">Position</label>
						<input type="text" class="form-control" id="" name="">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-6 col-md-3">
					<div class="form-group lw-from">
						<label for="">From</label>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
							<input type="text" class="form-control" id="" name="">
						</div>
					</div>
				</div>
				
				<div class="col-xs-6 col-md-3">
					<div class="form-group lw-to">
						<label for="">To</label>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
							<input type="text" class="form-control" id="" name="">
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-6">
					<div class="form-group lw-activities">
						<label for="" class="lw-activities">Activities</label>
						<textarea class="form-control" id="" name=""></textarea>
					</div>
				</div>
			</div>
		
		</div>
		
		
		<div class="education well hidden" id="education-proto" data-experience="">
		
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="form-group le-title">
						<label for="">Title</label>
						<input type="text" class="form-control" id="" name="">
					</div>
				</div>
				
				<div class="col-xs-12 col-md-2">
					<div class="form-group le-level">
						<label for="">Level</label>
						<input type="text" class="form-control" id="" name="">
					</div>
				</div>
				
				<div class="col-xs-12 col-md-4">
					<div class="form-group le-org">
						<label for="">Organisation</label>
						<input type="text" class="form-control" id="" name="">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-6 col-md-3">
					<div class="form-group le-from">
						<label for="">From</label>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
							<input type="text" class="form-control" id="" name="">
						</div>
					</div>
				</div>
				
				<div class="col-xs-6 col-md-3">
					<div class="form-group le-to">
						<label for="">To</label>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
							<input type="text" class="form-control" id="" name="">
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-6">
					<div class="form-group le-skills">
						<label for="" class="le-activities">Skills</label>
						<textarea class="form-control" id="" name=""></textarea>
					</div>
				</div>
				
			</div>
		
		</div>
		
		
		<div class="language well hidden" id="language-proto">
		
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="form-group ll-lang">
						<label for="">Language</label>
						<input type="text" class="form-control" id="" name="">
					</div>
				</div>
				
				<div class="col-xs-12 col-md-6">
					<div class="form-group ll-type">
						<label for="">Type</label>
						<select name="" class="form-control">
							<option value="mother">Mother</option>
							<option value="foreign">Foreign</option>
						</select>
					</div>
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="col-xs-12 col-md-2">
					<br>
					<h4 class="text-center">Level</h4>
				</div>
			
				<div class="col-xs-6 col-md-2">
					<div class="form-group ll-listening">
						<label for="">Listening</label>
						<select name="" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>
				
				<div class="col-xs-6 col-md-2">
					<div class="form-group ll-reading">
						<label for="">Reading</label>
						<select name="" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>
				
				<div class="col-xs-6 col-md-2">
					<div class="form-group ll-sinteraction">
						<label for="">Spoken interaction</label>
						<select name="" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>
				
				<div class="col-xs-6 col-md-2">
					<div class="form-group ll-sproduction">
						<label for="">Spoken production</label>
						<select name="" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>
				
				<div class="col-xs-6 col-md-2">
					<div class="form-group ll-writing">
						<label for="">Writing</label>
						<select name="" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>
				
			</div>
		
		</div>
		
		<div class="skill well hidden" id="skill-proto">
		
			<div class="row">
				<div class="col-xs-12 col-md-5 col-lg-4">
					<div class="form-group ls-type">
						<label for="">Skill type</label>
						<input type="text" class="form-control" id="" name="">
					</div>
				</div>
				
				<div class="col-xs-12 col-md-7 col-lg-8">
					<div class="form-group ls-skill">
						<label for="">Skill</label>
						<input type="text" class="form-control" id="" name="">
					</div>
				</div>

			</div>
		
		</div>
		
	
	</body>
</html>
