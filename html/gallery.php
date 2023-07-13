<!--
	Galeria zdjęć
-->
<!DOCTYPE html>
<html lang='pl'>
	<head>
		<meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
		<title>Piotr Piekański - Galeria</title>
		<meta name='description' content='Strona domowa Piotra Piekańskiego' />
		<meta name='author' content='Piotr Piekański' />
		<link href='../css/custom.min.css' rel='stylesheet' />
		<link href='../images/icon.png' rel='icon' />
	</head>

	<body class='position-relative bg-darkprimary'>
		<div class='position-fixed background-pattern'></div>

		<!-- Navbar u góry strony -->
		<header class='fixed-top'>
			<nav
				class='
					navbar
					navbar-expand-md
					navbar-dark
					bg-verydark
					bg-opacity-90
					shadow-xxxl
				'
			>
				<div class='container-fluid text-center px-3 px-sm-4 px-md-5'>
					<a class='navbar-brand spacing-1 fw-bold' href='index.html'>
						<img
							class='align-top me-1 me-md-2'
							src='../images/icon.png'
							alt=''
						/>
						Piotr Piekański
					</a>
					<button
						class='navbar-toggler'
						type='button'
						data-bs-toggle='collapse'
						data-bs-target='#menu'
						aria-controls='menu'
						aria-expanded='false'
						aria-label='Menu nawigacji'
					>
						<span class='navbar-toggler-icon'></span>
					</button>
					<div class='collapse navbar-collapse' id='menu'>
						<ul class='navbar-nav ms-auto'>
							<li class='nav-item ms-md-3'>
								<a class='nav-link' href='about.html'>
									<i class='bi bi-person-fill'></i>
									O mnie
								</a>
							</li>
							<li class='nav-item ms-md-3'>
								<a
									class='nav-link active'
									aria-current='page'
									href='javascript:void(0)'
								>
									<i class='bi bi-images me-1'></i>
									Galeria
								</a>
							</li>
							<li class='nav-item ms-md-3'>
								<a class='nav-link' href='contact.html'>
									<i class='bi bi-envelope me-1'></i>
									Kontakt
								</a>
							</li>
							<li class='nav-item dropdown ms-md-3'>
								<a
									class='nav-link dropdown-toggle'
									href='javascript:void(0)'
									id='navbarDropdown'
									role='button'
									data-bs-toggle='dropdown'
									aria-expanded='false'
								>
									<i class='bi bi-globe me-1'></i>
									Linki
								</a>
								<!-- Dropdown navbaru -->
								<ul
									class='
										dropdown-menu
										dropdown-menu-dark
										dropdown-menu-end
										text-center
										text-md-end
										shadow-lg
									'
									aria-labelledby='navbarDropdown'
								>
									<li>
										<a
											class='dropdown-item'
											href='https://steamcommunity.com'
										>
											Steam
											<i class='bi bi-steam ms-1'></i>
										</a>
									</li>
									<li>
										<a
											class='dropdown-item'
											href='https://www.facebook.com'
										>
											Facebook
											<i class='bi bi-facebook ms-1'></i>
										</a>
									</li>
									<li>
										<a
											class='dropdown-item'
											href='https://github.com'
										>
											GitHub
											<i class='bi bi-github ms-1'></i>
										</a>
									</li>
									<li>
										<a
											class='dropdown-item'
											href='https://www.linkedin.com'
										>
											Linkedin
											<i class='bi bi-linkedin ms-1'></i>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<!-- Główny kontener -->
		<main
			class='
				container
				px-3
				px-md-4
				bg-dark
				bg-opacity-90
				text-light
				shadow-xxxl
			'
		>
			<header class='mb-5 text-center'>
				<h1>Galeria</h1>
			</header>

			<!--
				Główna galeria:
				Na dużych ekranach obrazki wyświetlane w rzędach (jak w google images)
				Na małych w jednej wycentrowanej kolumnie
			-->
			<div
				class='
					d-flex
					justify-content-center
					flex-md-row
					flex-wrap
					justify-content-md-between
				'
				id='gallery'
			>
				<?php
					# obrazki generuje skrypt
					require '../php/galleryscript1.php';
				?>
			</div>

			<!--
				Po kliknięciu na dowolny obrazek pojawi się modal z karuzelą.
				Karuzela jest nastawiona na kliknięty obrazek.
				Można poruszać się między obrazkami.
			-->
			<div
				class='modal fade'
				id='galleryModal'
				tabindex='-1'
				aria-hidden='true'
			>
				<div class='modal-dialog modal-dialog-centered'>
					<div class='modal-content'>
						<button
							type='button'
							class='btn-close'
							data-bs-dismiss='modal'
							aria-label='Close'
							id='galleryCloseButton'
					></button>
						<div
							id='galleryCarousel'
							class='carousel slide'
							data-bs-interval='false'
						>
							<div class='carousel-inner' id='carouselContent'>
								<?php
									# tutaj też skrypt
									require '../php/galleryscript2.php';
								?>
							</div>
							<button
								class='carousel-control-prev carousel-dark'
								type='button'
								data-bs-target='#galleryCarousel'
								data-bs-slide='prev'
							>
								<span class='carousel-control-prev-icon' aria-hidden='true'>
								</span>
								<span class='visually-hidden'>Poprzedni obraz</span>
							</button>
							<button
								class='carousel-control-next carousel-dark'
								type='button'
								data-bs-target='#galleryCarousel'
								data-bs-slide='next'
							>
								<span class='carousel-control-next-icon' aria-hidden='true'>
								</span>
								<span class='visually-hidden'>Następny obraz</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</main>

		<!-- Stopka z linkiem do formularza -->
		<footer
			class='
				container-fluid
				position-absolute
				bottom-0
				p-1
				text-center
				bg-verydark
				bg-opacity-90
				fs-5
				fw-light
				spacing-2
				shadow-xxxl
			'
		>
			<!-- Na małych ekranach tekst wyświetlany jest w dwóch linijkach -->
			<span class='d-sm-inline d-block text-muted'>
				<span class='fw-bold'>&copy;</span>
				Piotr Piekański | 2022
				<span class='d-none d-sm-inline'>|</span>
			</span>
			<span class='d-sm-inline d-block'>
				<a class='link-light text-decoration-none' href='contact.html'>
					Napisz do mnie
				</a>
			</span>
		</footer>

		<script
			src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js'
			integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa'
			crossorigin='anonymous'
		></script>
		<!--
		<script
			src='../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
		></script>
		-->
		<script>
			const first = document.getElementsByClassName('carousel-item');
			first[0].classList.add('active');
		</script>
	</body>
</html>