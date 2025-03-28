	<script src="<?php echo base_url(); ?>js/vendor.min.js"></script>
	<script src="<?php echo base_url(); ?>js/elephant.min.js"></script>
	<script src="<?php echo base_url(); ?>js/application.min.js"></script>
	<script src="<?php echo base_url(); ?>js/demo.min.js"></script>
	<script src="<?php echo base_url(); ?>js/datatables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
	<script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>js/croppie.js"></script>
	<script src="<?php echo base_url(); ?>tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			var numberFormat = /^(?:[1-9]\d*|\d)$/;
			var alphabetFormat = /^[a-zA-Z]+$/;
			var webUrl = "http://localhost/trekveda/";

			var userData = JSON.parse(localStorage.getItem("user"));
			if ($(".login").length == 0) {
				if (userData == null || userData == undefined || userData == "") {
					window.location.replace('<?php echo base_url();?>');
				}
			}

			if ($('.addTrekPage').length > 0) {

				function initEditor(selector) {
					tinymce.init({ 
						selector: selector,
						theme : "modern",
						width: "100%",
						height: 250,
						paste_data_images: true,
					    plugins: [
					      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
					      "searchreplace wordcount visualblocks visualchars code fullscreen",
					      "insertdatetime media nonbreaking save table contextmenu directionality",
					      "emoticons template paste textcolor colorpicker textpattern"
					    ],
					    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
					    toolbar2: "print preview media | forecolor backcolor emoticons",
					    image_advtab: true,
					    file_picker_callback: function(callback, value, meta) {
					      if (meta.filetype == 'image') {
					        $('#uploadTrekDetails').trigger('click');
					        $('#uploadTrekDetails').on('change', function() {
								var file = this.files[0];
								console.log(value);
								// var reader = new FileReader();
								// reader.onload = function(e) {
								//   callback(e.target.result, {
								//     alt: ''
								//   });
								// };
								// reader.readAsDataURL(file);
								var formData =  new FormData();
								formData.append('trek_image', file);

								var request = $.ajax({
									url: "<?php echo base_url();?>admin/uploadTrekImage",
									type: "POST",
									data: formData,
									processData: false,
			    					contentType: false,
								});
								// End Croppie

								request.done(function(data){
									console.log(data);
									var dataS = '/trekAdmin/uploads/trek/'+data;
									console.log(data);
									callback(dataS, {
									    alt: ''
									});
								});
								request.fail(function(error){
									console.log(error);
								});
					        });
					      }
					    },
					    templates: [{
					      title: 'Test template 1',
					      content: 'Test 1'
					    }, {
					      title: 'Test template 2',
					      content: 'Test 2'
					    }]
					});
				}

				initEditor('.add-trek-description');
				initEditor('.why-trek-description');
				initEditor('.ssecurity-trek-description');
				initEditor('.mroute-trek-description');
				initEditor('.fitness-trek-description');
				initEditor('.policy-trek-description');
				initEditor('.trek-highlight-description');
				initEditor('.trek-inclusion-description');
				initEditor('.trek-exclusion-description');
				
				// For Croppie
				var $uploadCrop;
				function readFile(input) {
					if (input.files && input.files[0]) {
						var reader = new FileReader();
						
						reader.onload = function (e) {
							$('.upload-trek-featured-image').addClass('ready');
							$uploadCrop.croppie('bind', {
								url: e.target.result
							}).then(function(){
								console.log('jQuery bind complete');
							});
						}
						reader.readAsDataURL(input.files[0]);
					}
					else {
						console.log("Sorry - you're browser doesn't support the FileReader API");
					}
				}

				$uploadCrop = $('#upload-trek-featured-image').croppie({
					viewport: {
						width: 358,
						height: 300
					},
					enableExif: true
				});

				$('#upload').on('change', function () { 
					readFile(this); 
					$('.upload-trek-featured-image-wrap').show();
					$(this).parents('.show-image-upload-wrap').hide();
				});
				$('.upload-feautred-result').on('click', function (ev) {
					$uploadCrop.croppie('result', {
						type: 'canvas',
						size: 'viewport'
					}).then(function (resp) {
						$('.upload-trek-featured-image-wrap').hide();
						$('.upload-trek-featured-image-show').html('<img src='+resp+' />');
						$('.upload-trek-featured-image-show').show();
						$('.save_trek').attr("disabled", false);
					});
				});

				$('.upload-feautred-back').click(function(){
					$('.upload-trek-featured-image-wrap').hide();
					$('.show-image-upload-wrap').show();
				});

				$('.save_trek').click(function(e){
					var trek_description = tinyMCE.editors[$('.add-trek-description').attr('id')].getContent();
					var imgData = $('.upload-trek-featured-image-show img').attr('src');
					var trek_name = $('.trek_name').val();
					var trek_location = $('.trek_location').val();
					var trek_price = $('.trek_price').val();
					var trek_height = $('.trek_height').val();
					var trek_duration = $('.trek_duration').val();
					var trek_difficulty = $('.trek_difficulty').val();
					var trek_slug = $('.trek_slug').val();
					var trek_distance = $('.trek_distance').val();
					var trek_meta_description = $('.trek_meta_description').val();
					var trek_meta_keyword = $('.trek_meta_keyword').val();

					if ( trek_name.length != 0 && trek_location.length != 0 && trek_price.length != 0
						&& trek_height.length != 0 && trek_duration.length != 0 && trek_difficulty.length != 0
						&& trek_slug.length != 0 && trek_distance.length != 0
						&& trek_meta_description.length != 0 && trek_meta_keyword.length != 0) {

						var dataObject = {
							trek_name: trek_name,
							trek_location: trek_location,
							trek_price: trek_price,
							trek_height: trek_height,
							trek_duration: trek_duration,
							trek_difficulty: trek_difficulty,
							trek_slug: trek_slug,
							trek_distance: trek_distance,
							trek_meta_description: trek_meta_description,
							trek_meta_keyword: trek_meta_keyword,
							trek_featured_image: imgData,
							trek_description: trek_description
						}

						var tb_trek_id = $('.add_trek_tab_2').attr('data-trekId');
						console.log(tb_trek_id);
						if (tb_trek_id != undefined ) {
							dataObject.tb_trek_id = tb_trek_id;
							var request = $.ajax({
								url: "<?php echo base_url();?>admin/updateTrek",
								type: "POST",
								data: dataObject
							});

							request.done(function(data){
								var responseData = JSON.parse(data);
								$('.add_trek_tab').removeClass('active');
								$('.add_trek_tab_2').addClass('active');
								$('.add_trek_tab_2').attr('data-trekId', responseData.response);	
							});
							request.fail(function(err){
								console.log(err);
							});
						} else {
							var request = $.ajax({
								url: "<?php echo base_url();?>admin/addtrek",
								type: "POST",
								data: dataObject
							});

							request.done(function(data){
								var responseData = JSON.parse(data);
								$('.add_trek_tab').removeClass('active');
								$('.add_trek_tab_2').addClass('active');
								$('.add_trek_tab_2').attr('data-trekId', responseData.response);	
							});
							request.fail(function(err){
								console.log(err);
							});
						}
					}
				});

				$('.save_why_trek').click(function(e){
					e.preventDefault();
					var why_trek_description = tinyMCE.editors[$('.why-trek-description').attr('id')].getContent();
					var ssecurity_trek_description = tinyMCE.editors[$('.ssecurity-trek-description').attr('id')].getContent();
					var mroute_trek_description = tinyMCE.editors[$('.mroute-trek-description').attr('id')].getContent();
					var fitness_trek_description = tinyMCE.editors[$('.fitness-trek-description').attr('id')].getContent();
					var policy_trek_description = tinyMCE.editors[$('.policy-trek-description').attr('id')].getContent();
					var trek_highlight_description = tinyMCE.editors[$('.trek-highlight-description').attr('id')].getContent();
					var trek_inclusion_description = tinyMCE.editors[$('.trek-inclusion-description').attr('id')].getContent();
					var trek_exclusion_description = tinyMCE.editors[$('.trek-exclusion-description').attr('id')].getContent();

					var dataObject = {
						why_trek_description: why_trek_description,
						ssecurity_trek_description: ssecurity_trek_description,
						mroute_trek_description: mroute_trek_description,
						fitness_trek_description: fitness_trek_description,
						policy_trek_description: policy_trek_description,
						trek_highlight_description: trek_highlight_description,
						trek_inclusion_description: trek_inclusion_description,
						trek_exclusion_description: trek_exclusion_description,
						tb_trek_id: $('.add_trek_tab_2').attr('data-trekId').trim()
					}

					var request = $.ajax({
						url: "<?php echo base_url();?>admin/updateTrek1",
						type: "POST",
						data: dataObject
					});

					request.done(function(data){
						$('.add_trek_tab').removeClass('active');
						$('.add_trek_tab_2').addClass('active');	
					});
					request.fail(function(err){
						console.log(err);
					});
				});

				$('.back_why_trek').click(function(e){
					e.preventDefault();
					$('.add_trek_tab').removeClass('active');
					$('.add_trek_tab_1').addClass('active');
				});
			}

			if ($('.editTrekPage').length > 0) {
				var trek_id = $('.editTrekPage').attr("data-trekId").trim();

				var image_url = "http://localhost/trekAdmin/"
				var request = $.ajax({
					url: "<?php echo base_url();?>trek_managment/getTrekDetails",
					type: "POST",
					data: {
						"tb_trek_id": trek_id
					}
				});
				// End Croppie

				request.done(function(data){
					var responseData = JSON.parse(data);
					if(responseData.status == 1) {
						var trekData = responseData.response;
						// var imgData = $('.upload-trek-featured-image-show img').attr('src');
						$('.trek_name').val(trekData[0]["tb_trek_name"]);
						$('.trek_location').val(trekData[0]["tb_trek_location"]);
						$('.trek_price').val(trekData[0]["tb_trek_price"]);
						$('.trek_height').val(trekData[0]["tb_trek_height"]);
						$('.trek_duration').val(trekData[0]["tb_trek_duration"]);
						$('.trek_difficulty').val(trekData[0]["tb_trek_difficulty"]);
						$('.trek_slug').val(trekData[0]["tb_trek_slug"]);
						$('.trek_distance').val(trekData[0]["tb_trek_distance"]);
						$('.trek_meta_description').val(trekData[0]["tb_trek_meta_description"]);
						$('.trek_meta_keyword').val(trekData[0]["tb_trek_meta_keyword"]);

						var img_container = $(trekData[0]["tb_trek_description"]).find('img');
						console.log(img_container);
						for (var i = 0; i < img_container.length; i++) {
							console.log(img_container[i].attributes[0].value.split('/')[3]);
							img_container[i].attributes[0].value = 'http://localhost/trekAdmin/uploads/trek/'+img_container[i].attributes[0].value.split('/')[3]
						}

						console.log(img_container);

						$('.add-trek-description').val(trekData[0]["tb_trek_description"]);
					}
				});
				request.fail(function(error){
					console.log(error);
				});

				function initEditor(selector) {
					tinymce.init({ 
						selector: selector,
						theme : "modern",
						width: "100%",
						height: 250,
						paste_data_images: true,
					    plugins: [
					      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
					      "searchreplace wordcount visualblocks visualchars code fullscreen",
					      "insertdatetime media nonbreaking save table contextmenu directionality",
					      "emoticons template paste textcolor colorpicker textpattern"
					    ],
					    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
					    toolbar2: "print preview media | forecolor backcolor emoticons",
					    image_advtab: true,
					    file_picker_callback: function(callback, value, meta) {
					      if (meta.filetype == 'image') {
					        $('#uploadTrekDetails').trigger('click');
					        $('#uploadTrekDetails').on('change', function() {
								var file = this.files[0];
								console.log(value);
								// var reader = new FileReader();
								// reader.onload = function(e) {
								//   callback(e.target.result, {
								//     alt: ''
								//   });
								// };
								// reader.readAsDataURL(file);
								var formData =  new FormData();
								formData.append('trek_image', file);

								var request = $.ajax({
									url: "<?php echo base_url();?>admin/uploadTrekImage",
									type: "POST",
									data: formData,
									processData: false,
			    					contentType: false,
								});
								// End Croppie

								request.done(function(data){
									console.log(data);
									var dataS = '/trekAdmin/uploads/trek/'+data;
									console.log(data);
									callback(dataS, {
									    alt: ''
									});
								});
								request.fail(function(error){
									console.log(error);
								});
					        });
					      }
					    },
					    templates: [{
					      title: 'Test template 1',
					      content: 'Test 1'
					    }, {
					      title: 'Test template 2',
					      content: 'Test 2'
					    }]
					});
				}

				initEditor('.add-trek-description');
				initEditor('.why-trek-description');
				initEditor('.ssecurity-trek-description');
				initEditor('.mroute-trek-description');
				initEditor('.fitness-trek-description');
				initEditor('.policy-trek-description');
				initEditor('.trek-highlight-description');
				initEditor('.trek-inclusion-description');
				initEditor('.trek-exclusion-description');
				
				// For Croppie
				var $uploadCrop;
				function readFile(input) {
					if (input.files && input.files[0]) {
						var reader = new FileReader();
						
						reader.onload = function (e) {
							$('.upload-trek-featured-image').addClass('ready');
							$uploadCrop.croppie('bind', {
								url: e.target.result
							}).then(function(){
								console.log('jQuery bind complete');
							});
						}
						reader.readAsDataURL(input.files[0]);
					}
					else {
						console.log("Sorry - you're browser doesn't support the FileReader API");
					}
				}

				$uploadCrop = $('#upload-trek-featured-image').croppie({
					viewport: {
						width: 358,
						height: 300
					},
					enableExif: true
				});

				$('#upload').on('change', function () { 
					readFile(this); 
					$('.upload-trek-featured-image-wrap').show();
					$(this).parents('.show-image-upload-wrap').hide();
				});
				$('.upload-feautred-result').on('click', function (ev) {
					$uploadCrop.croppie('result', {
						type: 'canvas',
						size: 'viewport'
					}).then(function (resp) {
						$('.upload-trek-featured-image-wrap').hide();
						$('.upload-trek-featured-image-show').html('<img src='+resp+' />');
						$('.upload-trek-featured-image-show').show();
						$('.save_trek').attr("disabled", false);
					});
				});

				$('.upload-feautred-back').click(function(){
					$('.upload-trek-featured-image-wrap').hide();
					$('.show-image-upload-wrap').show();
				});

				$('.save_trek').click(function(e){
					var trek_description = tinyMCE.editors[$('.add-trek-description').attr('id')].getContent();
					var imgData = $('.upload-trek-featured-image-show img').attr('src');
					var trek_name = $('.trek_name').val();
					var trek_location = $('.trek_location').val();
					var trek_price = $('.trek_price').val();
					var trek_height = $('.trek_height').val();
					var trek_duration = $('.trek_duration').val();
					var trek_difficulty = $('.trek_difficulty').val();
					var trek_slug = $('.trek_slug').val();
					var trek_distance = $('.trek_distance').val();
					var trek_meta_description = $('.trek_meta_description').val();
					var trek_meta_keyword = $('.trek_meta_keyword').val();

					if ( trek_name.length != 0 && trek_location.length != 0 && trek_price.length != 0
						&& trek_height.length != 0 && trek_duration.length != 0 && trek_difficulty.length != 0
						&& trek_slug.length != 0 && trek_distance.length != 0
						&& trek_meta_description.length != 0 && trek_meta_keyword.length != 0) {

						var dataObject = {
							trek_name: trek_name,
							trek_location: trek_location,
							trek_price: trek_price,
							trek_height: trek_height,
							trek_duration: trek_duration,
							trek_difficulty: trek_difficulty,
							trek_slug: trek_slug,
							trek_distance: trek_distance,
							trek_meta_description: trek_meta_description,
							trek_meta_keyword: trek_meta_keyword,
							trek_featured_image: imgData,
							trek_description: trek_description
						}

						var tb_trek_id = $('.add_trek_tab_2').attr('data-trekId');
						console.log(tb_trek_id);
						if (tb_trek_id != undefined ) {
							dataObject.tb_trek_id = tb_trek_id;
							var request = $.ajax({
								url: "<?php echo base_url();?>admin/updateTrek",
								type: "POST",
								data: dataObject
							});

							request.done(function(data){
								var responseData = JSON.parse(data);
								$('.add_trek_tab').removeClass('active');
								$('.add_trek_tab_2').addClass('active');
								$('.add_trek_tab_2').attr('data-trekId', responseData.response);	
							});
							request.fail(function(err){
								console.log(err);
							});
						} else {
							var request = $.ajax({
								url: "<?php echo base_url();?>admin/addtrek",
								type: "POST",
								data: dataObject
							});

							request.done(function(data){
								var responseData = JSON.parse(data);
								$('.add_trek_tab').removeClass('active');
								$('.add_trek_tab_2').addClass('active');
								$('.add_trek_tab_2').attr('data-trekId', responseData.response);	
							});
							request.fail(function(err){
								console.log(err);
							});
						}
					}
				});

				$('.save_why_trek').click(function(e){
					e.preventDefault();
					var why_trek_description = tinyMCE.editors[$('.why-trek-description').attr('id')].getContent();
					var ssecurity_trek_description = tinyMCE.editors[$('.ssecurity-trek-description').attr('id')].getContent();
					var mroute_trek_description = tinyMCE.editors[$('.mroute-trek-description').attr('id')].getContent();
					var fitness_trek_description = tinyMCE.editors[$('.fitness-trek-description').attr('id')].getContent();
					var policy_trek_description = tinyMCE.editors[$('.policy-trek-description').attr('id')].getContent();
					var trek_highlight_description = tinyMCE.editors[$('.trek-highlight-description').attr('id')].getContent();
					var trek_inclusion_description = tinyMCE.editors[$('.trek-inclusion-description').attr('id')].getContent();
					var trek_exclusion_description = tinyMCE.editors[$('.trek-exclusion-description').attr('id')].getContent();

					var dataObject = {
						why_trek_description: why_trek_description,
						ssecurity_trek_description: ssecurity_trek_description,
						mroute_trek_description: mroute_trek_description,
						fitness_trek_description: fitness_trek_description,
						policy_trek_description: policy_trek_description,
						trek_highlight_description: trek_highlight_description,
						trek_inclusion_description: trek_inclusion_description,
						trek_exclusion_description: trek_exclusion_description,
						tb_trek_id: $('.add_trek_tab_2').attr('data-trekId').trim()
					}

					var request = $.ajax({
						url: "<?php echo base_url();?>admin/updateTrek1",
						type: "POST",
						data: dataObject
					});

					request.done(function(data){
						$('.add_trek_tab').removeClass('active');
						$('.add_trek_tab_2').addClass('active');	
					});
					request.fail(function(err){
						console.log(err);
					});
				});

				$('.back_why_trek').click(function(e){
					e.preventDefault();
					$('.add_trek_tab').removeClass('active');
					$('.add_trek_tab_1').addClass('active');
				});
			}

			// For Login
			$('.loginBtn').click(function(e){

				var email = $('.loginEmailField').val();
				var password = $('.loginPasswordField').val();
				
				if ( email.length != 0 && password.length != 0 ) {
					var request = $.ajax({
						url: "<?php echo base_url(); ?>admin/login",
						type : "POST",
						data : {"email": email, "password": password}
					});

					request.done(function( message ) {
						// console.log(message);
						var message = $.parseJSON(message);
						console.log(message);

						if ( message.status == '1' ) {
							var loginData = message.response;
							localStorage.setItem('user', JSON.stringify(loginData));
							window.location.replace('<?php echo base_url();?>dashboard');
						} else {
							$('.login .errorContainerWrap').empty();
							$('.login .errorContainerWrap').append('<div class="alert alert-danger alert-dismissable fade in">\
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
								<strong>Error! </strong><span class="errorContainer"> '+message.response+'</span>\
							</div>');
						}
					});
					request.fail(function() {
						//console.log( "Request failed" );
					});
				}
			});

			if ($('.profilePage').length > 0) {
				$('.profile-name').empty();
				$('.profile-name').html(userData[0].name);
				$('.profile-email').empty();
				$('.profile-email').html(userData[0].email);
				$('.profile-phone').empty();
				$('.profile-phone').html(userData[0].phone_number);
				$('.profile-address').empty();
				$('.profile-address').html(userData[0].address);
			}

			$(".carouse").owlCarousel({
				singleItem:true,
				responsive:true,
				autoHeight : true,
				transitionStyle:"fade"
			});

			if ( $('.trek_managment_wrap').length > 0 ) {
				var image_url = "http://localhost/trekAdmin/"
				var request = $.ajax({
					url: "<?php echo base_url();?>trek_managment/getTrekListDetails",
					type: "POST"
				});
				// End Croppie

				request.done(function(data){
					var responseData = JSON.parse(data);
					if(responseData.status == 1) {
						var trekListData = responseData.response;
						console.log(trekListData);
						$('.trek_list_wrap').empty();
						for (var i = 0; i < trekListData.length; i++) {
							trekListData[i]["tb_trek_featured_image"] = image_url+"uploads/trek/"+trekListData[i]["tb_trek_featured_image"];
							$('.trek_list_wrap').append('<div class="col-md-4">\
								<div class="actionTrekListWrap">\
									<a href="<?php echo base_url();?>trek_managment/edit/'+trekListData[i]["tb_trek_id"]+'"><i class="icon icon-pencil"></i></a>\
								</div>\
								<div class="card text-center">\
									<div class="card-image">\
										<a class="card-link" href="'+webUrl+'trek/category/'+trekListData[i]["tb_trek_slug"]+'" target="_blank">\
											<img class="card-img-top img-responsive" src="'+trekListData[i]["tb_trek_featured_image"]+'" alt="'+trekListData[i]["tb_trek_name"]+'">\
										</a>\
									</div>\
									<div class="card-body">\
										<h3 class="card-title">'+trekListData[i]["tb_trek_name"]+'</h3>\
								  		<h6 class="card-subtitle"></h6>\
								  	</div>\
							  	</div>\
							</div>');
						}
					}
				});
				request.fail(function(error){
					console.log(error);
				});
			}
		});

		$(window).on('load', function(){
			var userData = JSON.parse(localStorage.getItem("user"));
			if ($(".login").length == 0) {
				if (userData == null || userData == undefined || userData == "") {
					window.location.replace('<?php echo base_url();?>');
				}
			}

			if ($('.profilePage').length > 0) {
				$('.sidenav-item').removeClass('active');
				$('.profilePageNav').addClass('active');
			}
		});
	</script>
</body>
</html>