<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Child and Youth </title>
	<!--	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="./assets/custom.css" rel="stylesheet">
	<!--	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>-->

	<style>
		.main_div {
			padding: 30px 122px;

		}

		* {
			font-family: Arial, Helvetica, sans-serif;
		}

		.heading {
			font-size: 22px;
			color: #2a4a7e;
			font-weight: bold;
		}


		.para_sec1 {
			padding: 3px 2px;
			font-weight: 500;
			font-size: 16px;
		}

		p {
			line-height: 1.3;
		}

		@media screen and (min-width: 768px) {
			.main_div .right {
				padding-left: 50px;
			}
		}

		@media screen and (min-width: 1025px) {
			.main_div .right {
				padding-left: 40 px;

			}
		}
	</style>
</head>

<body>
	<div class="m-container">
		<div class="header">
			<div class="logo">
				<div class="img">
					<a href="./index.php">
						<img src="./assets/logo.png" width="350" alt="City of Toronto Public Health logo.">
					</a>
				</div>
				<div class="icons_wrapper">
					<div class="menu-icon" id="menu-icon">Menu</div>
					<div class="menu-icon-mega" id="menu-icon-mega">Menu</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="mega_menu">
					<div>
						<ul>
							<li class="menu-list-item">
								<a href="reproductive-and-infant-health.php"> Reproductive and Infant Health</a>
							</li>
							<li class="menu-list-item">
								<a href="child&youth.php"> Child & Youth Health </a>
							</li>
						</ul>
					</div>
					<div>
						<ul>
							<li class="menu-list-item">
								<a href="mental-health-and-substance-use.php">Mental Health and Substance Use</a>
							</li>
							<li class="menu-list-item">
								<a href="adult-health-behaviours-and-risk-factors.php"> Adult Health Behaviours and
									Risk
									Factors</a>
							</li>
						</ul>
					</div>
					<div>
						<ul>
							<li class="menu-list-item">
								<a href="adult-chronic-conditions.php"> Adult Chronic Conditions</a>
							</li>
							<li class="menu-list-item">
								<a href="injury.php"> Injury</a>
							</li>
						</ul>
					</div>
					<div>
						<ul>
							<li class="menu-list-item">
								<a href="oral-health.php">Oral Health </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- mobile menu  -->

			<div class="menu" id="menu">
				<div class="menu-header">
					<h2>Menu</h2>
					<button id="close-btn" class="close-btn">&times;</button>
				</div>
				<ul>
					<li>
						<a href="reproductive-and-infant-health.php"> Reproductive and Infant Health</a>
					</li>
					<li>
						<a href="child&youth.php"> Child & Youth Health </a>
					</li>
					<li>
						<a href="mental-health-and-substance-use.php">Mental Health and Substance Use</a>
					</li>
					<li>
						<a href="adult-health-behaviours-and-risk-factors.php"> Adult Health Behaviours and Risk
							Factors</a>
					</li>
					<li>
						<a href="adult-chronic-conditions.php"> Adult Chronic Conditions</a>
					</li>
					<li>
						<a href="injury.php"> Injury</a>
					</li>
					<li>
						<a href="oral-health.php">Oral Health </a>
					</li>
				</ul>
			</div>



		</div>
	</div>
	<div class="main_div">
		<div class="text_section1">

			<p class="heading">Child and Youth</p>

			<p class="para_sec1">This dashboard summarizes data on child and youth health in Toronto. For
				data on self-harm among children and youth, see the Mental Health and
				Substance Use dashboard [LINK].</p>
			<p>Indicators are analyzed over time, by geography and socio-demographic
				characteristics where possible to help monitor, identify, and respond to health
				inequities. Differences in income, housing, education, employment and
				experiences of racism and discrimination can contribute to unfair and
				preventable differences in health between population groups.</p>
			<br>
			<br>
			<hr>
			<br>
		</div>
		<div class="right">
			<div class='tableauPlaceholder' id='viz1707335507800' style='position:relative'><noscript><a href='#'><img
							alt='ChildandYouth '
							src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;PH&#47;PHSI_DashboardDraft_ChildandYouth&#47;ChildandYouth&#47;1_rss.png'
							style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
					<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
					<param name='embed_code_version' value='3' />
					<param name='site_root' value='' />
					<param name='name' value='PHSI_DashboardDraft_ChildandYouth&#47;ChildandYouth' />
					<param name='tabs' value='no' />
					<param name='toolbar' value='yes' />
					<param name='static_image'
						value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;PH&#47;PHSI_DashboardDraft_ChildandYouth&#47;ChildandYouth&#47;1.png' />
					<param name='animate_transition' value='yes' />
					<param name='display_static_image' value='yes' />
					<param name='display_spinner' value='yes' />
					<param name='display_overlay' value='yes' />
					<param name='display_count' value='yes' />
					<param name='language' value='en-US' />
					<param name='filter' value='publish=yes' />
				</object></div>



		</div>
	</div>

	</div>
	<script type='text/javascript'>
		var divElement = document.getElementById('viz1707335507800');
		var vizElement = divElement.getElementsByTagName('object')[0];
		if (divElement.offsetWidth > 800) {
			vizElement.style.width = '1000px';
			vizElement.style.height = '2827px';
		} else if (divElement.offsetWidth > 500) {
			vizElement.style.width = '1000px';
			vizElement.style.height = '2827px';
		} else {
			vizElement.style.width = '100%';
			vizElement.style.height = '6377px';
		}
		var scriptElement = document.createElement('script');
		scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
		vizElement.parentNode.insertBefore(scriptElement, vizElement);

		document.addEventListener('DOMContentLoaded', () => {
			const menuIcon = document.getElementById('menu-icon');
			const menu = document.getElementById('menu');
			const closeBtn = document.getElementById('close-btn');

			const menuIconMega = document.getElementById('menu-icon-mega');
			const menuMega = document.querySelector('.mega_menu');

			menuIcon.addEventListener('click', () => {
				menu.classList.toggle('open');
				menuIcon.style.display = 'none';
			});
			menuIconMega.addEventListener('click', () => {
				menuMega.classList.toggle('open');
				// menuIcon.style.display = 'none';
			});

			closeBtn.addEventListener('click', () => {
				menu.classList.remove('open');
				menuIcon.style.display = 'block';
			});
		});
	</script>
</body>

</html>