<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
<div class="pcoded-content">

<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10"> Ecommerce Dashboard</h5>
						<p class="m-b-0">Welcome to Admin dashboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=""> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Pages</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="pcoded-inner-content">

		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
										<div class="row">
											<div class="col-8">
											<h4>About us</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									Tempor laborum eiusmod ut sint sit consequat enim veniam qui duis consequat nostrud exercitation velit. Irure consectetur velit cupidatat aliqua fugiat exercitation cillum enim do elit. Esse mollit exercitation est et excepteur aute culpa elit. Exercitation duis ex esse amet aute consectetur nulla adipisicing dolore eiusmod aliquip cupidatat labore amet. Laboris eiusmod incididunt laboris sint id commodo nulla esse. Aliquip tempor quis exercitation nulla occaecat tempor cillum.

                                    Sint labore incididunt culpa nulla in proident irure eu ea quis ad non. Incididunt aliquip officia deserunt commodo incididunt aute in quis nulla cupidatat esse ullamco excepteur. Aliqua voluptate reprehenderit voluptate aute sit enim do. Officia consectetur labore nisi ipsum id consectetur Lorem nisi aute et quis sint. Nulla occaecat elit sint pariatur est quis aliquip et et duis elit culpa. Aliquip labore ipsum aute Lorem duis ut eu labore mollit.

                                    Esse veniam non nostrud in. Exercitation labore nulla aute voluptate culpa magna reprehenderit amet mollit minim et cupidatat Lorem ex. Quis id amet do adipisicing laboris deserunt. Occaecat id ea exercitation sit. Officia laborum aute sint minim culpa. Irure proident ex sint nisi sint consequat veniam ex proident.

                                    Sunt proident laboris elit exercitation aliquip. Eiusmod commodo nisi esse incididunt deserunt reprehenderit do elit duis elit officia voluptate. Sunt in occaecat ut ut nostrud cupidatat laboris non reprehenderit commodo sunt cillum ullamco sit. Voluptate duis nostrud dolore reprehenderit id occaecat. Cupidatat laborum pariatur ut deserunt velit commodo laboris magna commodo nostrud irure eu pariatur.

                                    Aliqua exercitation ea est tempor minim proident est aliqua elit non elit. Nisi ipsum nulla irure sint mollit excepteur. Id officia fugiat fugiat culpa do amet magna qui. Adipisicing elit quis labore velit ea nulla ut sit sit consectetur veniam amet. Eu in veniam ex irure aute officia minim fugiat exercitation nisi dolore. Est sint est est sint eiusmod ea ex deserunt.

                                    Qui est dolore nisi non velit voluptate fugiat minim dolor eu sint deserunt excepteur. Non aute amet Lorem duis aute commodo ullamco sunt cillum fugiat. Officia sit id exercitation mollit do consectetur dolore tempor commodo esse. Cillum sint Lorem in ullamco veniam enim. Nisi consequat ex irure laboris nulla. Nisi dolore nostrud ea ad nisi excepteur adipisicing pariatur do enim cillum.

                                    Nulla anim amet quis nisi elit culpa ut enim ea dolor laborum irure aliqua. Nisi cillum et minim cupidatat elit ullamco et reprehenderit consectetur ad qui minim. Pariatur quis voluptate aliquip fugiat eiusmod eu quis nostrud. Elit aliquip tempor ea ut labore mollit exercitation laborum nostrud amet. Aliqua ex ut excepteur ex duis mollit Lorem ad commodo fugiat nostrud. Ipsum reprehenderit Lorem cupidatat adipisicing officia irure ea ut quis proident nulla laborum pariatur.

                                    Duis cillum ad qui labore labore culpa cupidatat et ut qui dolor. Voluptate duis ut laborum enim occaecat ut. Ullamco anim adipisicing nisi do. Do labore deserunt cupidatat Lorem consequat occaecat excepteur consectetur eiusmod est cillum occaecat in excepteur. Duis ex laborum nisi excepteur consequat labore elit fugiat fugiat irure mollit.

                                    Voluptate commodo id anim ea incididunt. Mollit culpa mollit non minim quis sunt officia ipsum nisi et anim esse. Minim cupidatat labore occaecat ut reprehenderit occaecat. Qui velit adipisicing esse Lorem minim pariatur culpa consectetur incididunt veniam nulla. Officia do irure veniam ex ad laborum elit incididunt eiusmod nulla pariatur reprehenderit qui.

Minim occaecat sunt commodo dolor excepteur voluptate ut in tempor. Duis excepteur incididunt nulla pariatur anim. Pariatur excepteur fugiat tempor incididunt consequat laborum qui sint mollit fugiat adipisicing ut. Minim ut aliquip consectetur laborum duis reprehenderit dolor. Cupidatat do elit occaecat id reprehenderit eiusmod officia. Commodo dolore aute ipsum sint id proident.
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
			<div id="styleSelector">
			</div>
		</div>
	</div>
</div>
<script>
	
	function Copy(id) {
  /* Get the text field */
  var copyText = document.id;

/* Select the text field */
copyText.select();
copyText.setSelectionRange(0, 99999); /*For mobile devices*/

/* Copy the text inside the text field */
document.execCommand("copy");

/* Alert the copied text */
alert("Copied the text: " + copyText.value);
}
</script>

<?php
$this->load->view('admin/includes/footer');
?>
