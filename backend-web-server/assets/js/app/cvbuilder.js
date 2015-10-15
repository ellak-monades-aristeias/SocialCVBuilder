var CVBuild = {

	experiences: 1,
	educations: 1,
	languages : 1,
	skills : 1,
	
	workExpEl : false,

	init : function() {
		CVBuild.workExpEl = $('#work-experience');
		CVBuild.educationEl = $('#education-list');
		CVBuild.languagesEl = $('#language-list');
		CVBuild.skillsEl = $('#skill-list');
		
		$('.btn-add-experience').on('click', CVBuild.addExperience);
		$('.btn-add-education').on('click', CVBuild.addEducation);
		$('.btn-add-language').on('click', CVBuild.addLanguage);
		$('.btn-add-skill').on('click', CVBuild.addSkill);
		
		/*
		$('#qst-form').on('submit', function(e) {
		
			var err = false;
		
			CVBuild.questionsEl.find('.qst').each(function() {
				if ($(this).val() == '') {
					err = true;
					$(this).parents('.form-group').addClass('has-error');
				}
			});
			if (err == true) {
				if (! confirm('Some of the questions is left empty, click Ok to Finish and ignore those questions, or click Cancel to continue editing')) {
					e.preventDefault();
					e.stopPropagation();
				}
			}
		
		});
		* */
		
		/*
		if (CVBuild.questionsEl.find('.question').length == 0) {
			CVBuild.addQuestion();
		} else {
		
			//allow adding more answers
			CVBuild.questionsEl.find('.btn-add-answer').on('click', function() {
				var qEl = $(this).parents('.question');
				
				var answer = qEl.find('.qst-answer:last').clone(true);
				answer.find(':text').val('');
				answer.insertAfter(qEl.find('.qst-answer:last'));
			
			});
		
		}
		* */
		
	},

	addExperience : function() {
	
		var el = $('#experience-proto').clone(true);
		
		el.removeClass('hidden');
		el.removeProp('id');
		
		el = CVBuild.updateExperienceNumber(el, CVBuild.experiences);

		CVBuild.workExpEl.append(el);
		
		CVBuild.experiences++;
	
	},
	
	updateExperienceNumber : function(el, newNo) {
		el.attr('data-experience', newNo);

		el.find('.lw-employer input').prop('id', 'cv-employer-'+newNo).prop('name', 'cv[pastwork]['+newNo+'][employer]');
		el.find('.lw-employer label').prop('for', 'cv-employer-'+newNo);
		
		el.find('.lw-position input').prop('id', 'cv-position-'+newNo).prop('name', 'cv[pastwork]['+newNo+'][position]');
		el.find('.lw-position label').prop('for', 'cv-position-'+newNo);
		
		el.find('.lw-from label').prop('for', 'cv-from-'+newNo);
		el.find('.lw-from input').prop('id', 'cv-from-'+newNo).prop('name', 'cv[pastwork]['+newNo+'][from]').datepicker({
			format: 'yyyy-mm-dd'
		});
		
		el.find('.lw-to label').prop('for', 'cv-to-'+newNo);
		el.find('.lw-to input').prop('id', 'cv-to-'+newNo).prop('name', 'cv[pastwork]['+newNo+'][to]').datepicker({
			format: 'yyyy-mm-dd'
		});
		
		el.find('.lw-activities label').prop('for', 'cv-act-'+newNo);
		el.find('.lw-activities textarea').prop('id', 'cv-act-'+newNo).prop('name', 'cv[pastwork]['+newNo+'][activities]');
		
		return el;
	},
	
	addEducation : function() {
	
		var el = $('#education-proto').clone(true);
		
		el.removeClass('hidden');
		el.removeProp('id');
		
		el = CVBuild.updateEducationNumber(el, CVBuild.educations);

		CVBuild.educationEl.append(el);
		
		CVBuild.educations++;
	
	},
	
	updateEducationNumber : function(el, newNo) {
		el.attr('data-experience', newNo);

		el.find('.le-title input').prop('id', 'cv-title-'+newNo).prop('name', 'cv[education]['+newNo+'][title]');
		el.find('.le-title label').prop('for', 'cv-title-'+newNo);
		
		el.find('.le-level input').prop('id', 'cv-edulevel-'+newNo).prop('name', 'cv[education]['+newNo+'][level]');
		el.find('.le-level label').prop('for', 'cv-edulevel-'+newNo);
		
		el.find('.le-org input').prop('id', 'cv-org-'+newNo).prop('name', 'cv[education]['+newNo+'][organisation]');
		el.find('.le-org label').prop('for', 'cv-org-'+newNo);
		
		el.find('.le-from label').prop('for', 'cv-edufrom-'+newNo);
		el.find('.le-from input').prop('id', 'cv-edufrom-'+newNo).prop('name', 'cv[education]['+newNo+'][from]').datepicker({
			format: 'yyyy-mm-dd'
		});
		
		el.find('.le-to label').prop('for', 'cv-eduto-'+newNo);
		el.find('.le-to input').prop('id', 'cv-eduto-'+newNo).prop('name', 'cv[education]['+newNo+'][to]').datepicker({
			format: 'yyyy-mm-dd'
		});
		
		el.find('.le-skills label').prop('for', 'cv-eduskills-'+newNo);
		el.find('.le-skills textarea').prop('id', 'cv-eduskills-'+newNo).prop('name', 'cv[education]['+newNo+'][skills]');
		
		return el;
	},
	
	
	addLanguage : function() {
	
		var el = $('#language-proto').clone(true);
		
		el.removeClass('hidden');
		el.removeProp('id');
		
		el = CVBuild.updateLanguageNumber(el, CVBuild.languages);

		CVBuild.languagesEl.append(el);
		
		CVBuild.languages++;
	
	},
	
	updateLanguageNumber : function(el, newNo) {
		el.attr('data-language', newNo);

		el.find('.ll-lang input').prop('id', 'cv-language-'+newNo).prop('name', 'cv[languages]['+newNo+'][language]');
		el.find('.ll-title label').prop('for', 'cv-language-'+newNo);
		
		el.find('.ll-type select').prop('id', 'cv-langtype-'+newNo).prop('name', 'cv[languages]['+newNo+'][type]');
		el.find('.ll-type label').prop('for', 'cv-langtype-'+newNo);
		
		el.find('.ll-listening select').prop('id', 'cv-llistening-'+newNo).prop('name', 'cv[languages]['+newNo+'][level][listening]');
		el.find('.ll-listening label').prop('for', 'cv-llistening-'+newNo);
		
		el.find('.ll-reading select').prop('id', 'cv-lreading-'+newNo).prop('name', 'cv[languages]['+newNo+'][level][reading]');
		el.find('.ll-reading label').prop('for', 'cv-lreading-'+newNo);
		
		el.find('.ll-sinteraction select').prop('id', 'cv-lsinteraction-'+newNo).prop('name', 'cv[languages]['+newNo+'][level][spoken_interaction]');
		el.find('.ll-sinteraction label').prop('for', 'cv-lsinteraction-'+newNo);
		
		el.find('.ll-sproduction select').prop('id', 'cv-lsproduction-'+newNo).prop('name', 'cv[languages]['+newNo+'][level][spoken_production]');
		el.find('.ll-sproduction label').prop('for', 'cv-lsproduction-'+newNo);
		
		el.find('.ll-writing select').prop('id', 'cv-lwriting-'+newNo).prop('name', 'cv[languages]['+newNo+'][level][writing]');
		el.find('.ll-writing label').prop('for', 'cv-lwriting-'+newNo);
		
		return el;
	},
	
	addSkill : function() {
	
		var el = $('#skill-proto').clone(true);
		
		el.removeClass('hidden');
		el.removeProp('id');
		
		el = CVBuild.updateSkillNumber(el, CVBuild.skills);

		CVBuild.skillsEl.append(el);
		
		CVBuild.skills++;
	
	},
	
	updateSkillNumber : function(el, newNo) {
		el.attr('data-skill', newNo);

		el.find('.ls-type input').prop('id', 'cv-skilltype-'+newNo).prop('name', 'cv[skills]['+newNo+'][type]');
		el.find('.ls-type label').prop('for', 'cv-skilltype-'+newNo);
		
		el.find('.ls-skill input').prop('id', 'cv-skill-'+newNo).prop('name', 'cv[skills]['+newNo+'][skill]');
		el.find('.ls-skill label').prop('for', 'cv-skill-'+newNo);
		
		return el;
	},
	
	loadLinkedinData : function(data) {
		
		var res = data.values[0];
		
		console.log(res);
		
		$('#cvName').val(res.firstName);
		$('#cvSname').val(res.lastName);
		$('#cvCountry').val(res.location.name);
		$('#cvEmail').val(res.emailAddress);
		
		for (var p in res.positions.values) {
			var pos = res.positions.values[p];
			CVBuild.addExperience();
			$('#cv-employer-'+(CVBuild.experiences - 1)).val(pos.company.name);
			$('#cv-position-'+(CVBuild.experiences - 1)).val(pos.title);
			$('#cv-from-'+(CVBuild.experiences - 1)).val(pos.startDate.year + '-' + pos.startDate.month + '-' + (pos.startDate.day == undefined ? '01' : pos.startDate.day));
			
			if (pos.isCurrent) {
				$('#cv-to-'+(CVBuild.experiences - 1)).val(new Date().getFullYear() + '-' + ((new Date().getMonth() + 1) < 10 ? '0' : '')+(new Date().getMonth() + 1) + '-' +(new Date().getDate() < 10 ? '0' : '')+new Date().getDate());
			}
			
			$('#cv-act-'+(CVBuild.experiences - 1)).val(pos.summary);
			
		}
		
	}
	
}

$(document).ready(function() {
	$('.date-picker').datepicker({
		format : 'yyyy-mm-dd'
	});
	
	$('.input-group-addon').on('click', function() {
		$(this).siblings(':input').focus().click();
	});
	
	CVBuild.init();
	
});

function linkedinReady() {	
	$('#linkedin-btn').removeClass('hidden').tooltip();
	
	$('#linkedin-btn').on('click', function() {
		IN.User.authorize(function(data) {
			//IN.API.Raw("/people/~(skills)").result(CVBuild.loadLinkedinData).error(linkedinError);
			console.log(IN.API.Profile("me").fields(["id", 'firstName','lastName', 'email-address', "positions:(company,title,summary,start-date,end-date,is-current)", 'languages', 'location:(name)', 'educations', 'skills', 'picture-url']).result(CVBuild.loadLinkedinData));
		});
	});
}

function linkedinError() {
	alert('Something went wrong while trying to get your data');
}
