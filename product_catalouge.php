<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once __DIR__ . '/components/head.php' ?>
</head>

<body>
	<?php require_once __DIR__ . '/components/header.php' ?>

	<main id="product_catalouge">
		<div class="product-catalouge">
			<div class="containter-fluid px-xl-5 px-lg-1 my-5">
				<?php include __DIR__ . '/components/breadcumb.php' ?>
				<div class="product-catalouge-wrapper my-5">
					<div class="product-catalouge-banner">
						<span>
							<img class="object-fit-cover" src="/resources/img/banner.webp" alt="">
						</span>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<?php include __DIR__ . '/components/aside-category.php' ?>
					</div>
					<div class="col-9">
						2
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php require_once __DIR__ . '/components/footer.php' ?>
	<?php require_once __DIR__ . '/components/script.php' ?>
</body>

</html>