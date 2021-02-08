<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="alert bg-primary text-center p-4">
					<p class="lead font-weight-bold text-white" >Soal soal Matematika dan pembahasan <br>
						FYKA NUR H. IK2 2020120072
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
							<p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Odio sed debitis ab similique nam commodi error cum dolorem perferendis dolor saepe exercitationem pariatur, ullam et, dicta rerum. Veritatis amet, eos.</p>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Collapsible Group Item #2
								</button>
							</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
								Some placeholder content for the second accordion panel. This panel is hidden by default.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Collapsible Group Item #3
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
								And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
