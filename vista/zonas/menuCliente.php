<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<!-- Brand/logo -->
	<a class="navbar-brand" href="">Logo</a>
	<ul class="navbar-nav">



		<!-- Dropdown cliente -->
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
				Cliente
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item">
					<input type="submit" name="btnAccionUsr" value="Ver" class="btn">
				</a>

				<a class="dropdown-item">
					<input type="submit" name="btnAccionUsr" value="Movimientos" class="btn">
				</a>
				
			</div>
		</li>


		<li class="nav-item">
			<a class="nav-link">
				<?php
				echo '<img src="recursos/'.$_SESSION['foto'].'" width="30" height="30">';
				?>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link"> <?php echo $_SESSION['nickname'] ?> </a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="">Salir</a>
		</li>

	</ul>
</nav>