<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Constitution groupe</title>
	<link rel="stylesheet" href="../public/assets/style.css">
	<script src="script.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js" rel="stylesheet">
</head>
<!-- Editable table -->
<body id="body">
<!-- Editable table -->
<div class="container-fluid" id="container">
	<div class="row">
		<div class="col"></div>
		<div class="col-8">
			<div>
				<img id="image" class="rounded mx-auto d-block" src="../public/assets/img/cropped-logo-school-2.png">
			</div>
		</div>

		<div class="col"></div>

	</div>
</div>
<div class="container" id="container2">
	<div class="row">
		<div class="col"></div>
		<div class="col-10">

			<div class="card">
				<h3 class="card-header text-center font-weight-bold text-uppercase py-4">Auto-évaluation</h3>
				<div class="card-body">
					<div  class="table-editable">
						<div class="form-row mb-4">

							<div class="col">

								<input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nom">
							</div>
							<div class="col">
								<!-- Last name -->
								<input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Prénom">
							</div>
						</div>
						</form>
                        <input type="" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Type de personnalité">

                        <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success" style="margin-bottom: 6%"><i
                                        class="fas fa-plus fa-2x" onclick="duplicate()" aria-hidden="true"></i></a></span>
                        <div style="height: 51px; width: 100%"></div>
                        <div id="duplicater" class="duplicater0">
                            <div class="form-row mb-4">
                                <div class="col">
                                    <label>Matière</label>
                                    <select class="browser-default custom-select mb-4">
                                        <option value="">PHP</option>
                                        <option value="1">JAVA</option>
                                        <option value="2">LARAVEL</option>
                                        <option value="3">SYMFONY</option>
                                        <option value="4">SQL</option>
                                        <option value="4">ORACLE</option>
                                        <option value="4">C++</option>
                                        <option value="4">C#</option>
                                        <option value="5">RUBY</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label class="text-center">Note de 0 à 10</label>
                                    <select class="browser-default custom-select mb-4">
                                        <option value="">0</option>
                                        <option value="">1</option>
                                        <option value="1">2</option>
                                        <option value="2">3</option>
                                        <option value="3">4</option>
                                        <option value="4">5</option>
                                        <option value="4">6</option>
                                        <option value="4">7</option>
                                        <option value="4">8</option>
                                        <option value="4">9</option>
                                        <option value="4">10</option>
                                    </select>

                                </div>

                            </div>
                        </div>

					</div>
                    <span class="table-add mb-3 mr-2 rounded mx-auto d-block" id="span"><a href="#!" class="text-success "><button type="button" class="btn btn-success btn-rounded btn-lg rounded mx-auto d-block">Enregistrer les informations</button></a></span>

                </div>
			</div>
		</div>
		<div class="col"></div>
	</div>
</div>

</body>

<script>
    var i = 0;
    var original = document.getElementById('duplicater');

    function duplicate() {
        var clone = original.cloneNode(true); // "deep" clone
        clone.id = "duplicater" + ++i;
        // or clone.id = ""; if the divs don't need an ID
        original.parentNode.appendChild(clone);
    }

</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
</html>
