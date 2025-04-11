<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once __DIR__ . '/components/head.php' ?>
</head>

<body>
	<?php require_once __DIR__ . '/components/header.php' ?>

	<main id="homepage">
		<div class="panel-banner mt-3">
			<div class="row pe-0 container-fluid px-xl-5 px-lg-1 row-gap-3">
				<div class="col-lg-8 col-12 pe-0 pe-lg-3">
					<div class="panel-slide">
						<div class="swiper">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="swiper-slide">
									<div class="slide-item position-relative">
										<span class="d-block">
											<img class="object-fit-cover slide-img" src="./resources/img/slide1.webp" alt="">
										</span>
										<div class="content-overlay position-absolute">
											<div class="content-title mb-4">
												Heavy on <br>
												features. <br>
												Light on Price.
											</div>
											<div class="content-description mb-4">
												Start from $399
											</div>
											<div class="content-readmore">
												<a class="btn btn-light rounded-pill" href="#" title="">
													<span>Learn more</span>
													<span class="bg-chevron-icon">
														<i class="bi bi-chevron-compact-right"></i>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="slide-item position-relative">
										<span class="d-block">
											<img class="object-fit-cover slide-img" src="./resources/img/slide2.webp" alt="">
										</span>
										<div class="content-overlay position-absolute">
											<div class="content-title mb-4">
												Heavy on <br>
												features. <br>
												Light on Price.
											</div>
											<div class="content-description mb-4">
												Start from $399
											</div>
											<div class="content-readmore">
												<a class="btn btn-light rounded-pill" href="#" title="">
													<span>Learn more</span>
													<span class="bg-chevron-icon">
														<i class="bi bi-chevron-compact-right"></i>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="slide-item position-relative">
										<span class="d-block">
											<img class="object-fit-cover slide-img" src="./resources/img/slide3	.webp" alt="">
										</span>
										<div class="content-overlay position-absolute">
											<div class="content-title mb-4">
												Heavy on <br>
												features. <br>
												Light on Price.
											</div>
											<div class="content-description mb-4">
												Start from $399
											</div>
											<div class="content-readmore">
												<a class="btn btn-light rounded-pill" href="#" title="">
													<span>Learn more</span>
													<span class="bg-chevron-icon">
														<i class="bi bi-chevron-compact-right"></i>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- If we need pagination -->
							<span class="swiper-pagination position-absolute swiper-pagination-clickable"></span>

							<!-- If we need navigation buttons -->
							<!-- <div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div> -->

							<!-- If we need scrollbar -->
							<!-- <div class="swiper-scrollbar"></div> -->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12 px-lg-0 pe-0">
					<div class="banner-wrapper d-flex flex-column flex-sm-row flex-lg-column gap-3">
						<div class="banner-item position-relative">
							<a href="" title="">
								<img class="object-fit-cover banner-img" src="/resources/img/kit1.webp" alt="">
							</a>
							<div class="content-overlay position-absolute">
								<div class="content-title mb-4">
									Heavy on <br>
									features. <br>
									Light on Price.
								</div>
								<div class="content-description mb-4">
									Start from $399
								</div>
								<?php include __DIR__ . '/components/content_readmore.php'; ?>
							</div>
						</div>

						<div class="banner-item position-relative">
							<a href="" title="">
								<img class="object-fit-cover banner-img" src="/resources/img/kit2.webp" alt="">
							</a>
							<div class="content-overlay position-absolute">
								<div class="content-title mb-4">
									Heavy on <br>
									features. <br>
									Light on Price.
								</div>
								<div class="content-description mb-4">
									Start from $399
								</div>
								<?php include __DIR__ . '/components/content_readmore.php'; ?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="panel-commit d-none d-sm-block">
			<div class="containter-fluid px-xl-5 px-lg-1 my-5">
				<div class="panel-body">
					<div class="row row-gap-3 mx-1 mx-lg-0">
						<div class="col-12 col-sm-6 col-lg-3 px-0">
							<div class="commit-item">
								<div class="d-flex justify-content-lg-start ps-2 ps-lg-0 align-items-center gap-3">
									<span class="fs-lg-1 fs-3 text-orange">
										<i class="bi bi-truck"></i>
									</span>
									<div class="infor">
										<h5 class="title">Delivery</h5>
										<span class="description text-secondary">when ordering from $500.</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 px-0">
							<div class="commit-item">
								<div class="d-flex justify-content-lg-start ps-2 ps-lg-0 align-items-center gap-3">
									<span class="fs-lg-1 fs-3 text-orange">
										<i class="bi bi-credit-card"></i> </span>
									<div class="infor">
										<h5 class="title">90 DAYS RETURN</h5>
										<span class="description text-secondary">If goods have problems</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 px-0">
							<div class="commit-item">
								<div class="d-flex justify-content-lg-start ps-2 ps-lg-0 align-items-center gap-3">
									<span class="fs-lg-1 fs-3 text-orange">
										<i class="bi bi-shield-check"></i> </span>
									<div class="infor">
										<h5 class="title">SECURE PAYMENT</h5>
										<span class="description text-secondary">100% secure payment</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 px-0">
							<div class="commit-item">
								<div class="d-flex justify-content-lg-start ps-2 ps-lg-0 align-items-center gap-3">
									<span class="fs-lg-1 fs-3 text-orange">
										<i class="bi bi-headset"></i> </span>
									<div class="infor">
										<h5 class="title">24/7 SUPPORT</h5>
										<span class="description text-secondary">Delicated support</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-category">
			<div class="containter-fluid px-xl-5 px-lg-1 my-5 px-3 me-lg-3">
				<div class="panel-head">
					<h2 class="heading-1">Top Categories</h2>
				</div>
				<div class="panel-body">
					<div class="row row-gap-3">
						<div class="col-xl-4 col-md-6 col-12">
							<div class="d-flex border rounded p-3 gap-3">
								<a class="text-decoration-none" href="" title="">
									<img class="img-scaledown object-fit-scale" src="/resources/img/category/category2.webp" alt="">
								</a>
								<div class="card-infor">
									<div class="title">
										<a class="text-decoration-none text-black fs-5" href="" title="">Accessories</a>
									</div>
									<ul class="list ps-0">
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary " href="" title="">Hat and beanies</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Socks</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Gift Card</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Footballs</a>
										</li>
									</ul>
									<div class="content-readmore">
										<a class="btn btn-light rounded-pill" href="#" title="">
											<span>View more</span>
											<span class="bg-chevron-icon">
												<i class="bi bi-chevron-compact-right"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12">
							<div class="d-flex border rounded p-3 gap-3">
								<a class="text-decoration-none" href="" title="">
									<img class="img-scaledown object-fit-scale" src="/resources/img/category/category1.webp" alt="">
								</a>
								<div class="card-infor">
									<div class="title">
										<a class="text-decoration-none text-black fs-5" href="" title="">Match Kit</a>
									</div>
									<ul class="list ps-0">
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Home 2024/25</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Away 2024/25</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Third 2024/25</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Fourth 2024/25</a>
										</li>
									</ul>
									<div class="content-readmore">
										<a class="btn btn-light rounded-pill" href="#" title="">
											<span>View more</span>
											<span class="bg-chevron-icon">
												<i class="bi bi-chevron-compact-right"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12">
							<div class="d-flex border rounded p-3 gap-3">
								<a class="text-decoration-none" href="" title="">
									<img class="img-scaledown object-fit-scale" src="/resources/img/category/category3.webp" alt="">
								</a>
								<div class="card-infor">
									<div class="title">
										<a class="text-decoration-none text-black fs-5" href="" title="">Shop By Player</a>
									</div>
									<ul class="list ps-0">
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Santiago Gimenez</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Mike Maignan</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Christan Pulisic</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">kyle Walker</a>
										</li>
									</ul>
									<div class="content-readmore">
										<a class="btn btn-light rounded-pill" href="#" title="">
											<span>View more</span>
											<span class="bg-chevron-icon">
												<i class="bi bi-chevron-compact-right"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12">
							<div class="d-flex border rounded p-3 gap-3">
								<a class="text-decoration-none" href="" title="">
									<img class="img-scaledown object-fit-scale" src="/resources/img/category/category4.webp" alt="">
								</a>
								<div class="card-infor">
									<div class="title">
										<a class="text-decoration-none text-black fs-5" href="" title="">Apparel</a>
									</div>
									<ul class="list ps-0">
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Jackets</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Sweatshirts</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Knitwear</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Retro Jersey</a>
										</li>
									</ul>
									<div class="content-readmore">
										<a class="btn btn-light rounded-pill" href="#" title="">
											<span>View more</span>
											<span class="bg-chevron-icon">
												<i class="bi bi-chevron-compact-right"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12">
							<div class="d-flex border rounded p-3 gap-3">
								<a class="text-decoration-none" href="" title="">
									<img class="img-scaledown object-fit-scale" src="/resources/img/category/category5.webp" alt="">
								</a>
								<div class="card-infor">
									<div class="title">
										<a class="text-decoration-none text-black fs-5" href="" title="">Training</a>
									</div>
									<ul class="list ps-0">
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">T-shirt</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Sweatshirts</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Jackets</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Footballs</a>
										</li>
									</ul>
									<div class="content-readmore">
										<a class="btn btn-light rounded-pill" href="#" title="">
											<span>View more</span>
											<span class="bg-chevron-icon">
												<i class="bi bi-chevron-compact-right"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12">
							<div class="d-flex border rounded p-3 gap-3">
								<a class="text-decoration-none" href="" title="">
									<img class="img-scaledown object-fit-scale" src="/resources/img/category/category6.webp" alt="">
								</a>
								<div class="card-infor">
									<div class="title">
										<a class="text-decoration-none text-black fs-5" href="" title="">Collections</a>
									</div>
									<ul class="list ps-0">
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">125th Anniversary</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Kids Collection</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Club 1899</a>
										</li>
										<li class="list-unstyled">
											<a class="text-decoration-none fs-6 text-secondary" href="" title="">Back to School</a>
										</li>
									</ul>
									<div class="content-readmore">
										<a class="btn btn-light rounded-pill" href="#" title="">
											<span>View more</span>
											<span class="bg-chevron-icon">
												<i class="bi bi-chevron-compact-right"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
		<div class="panel-advertise">
			<div class="containter-fluid px-xl-5 px-lg-1 my-5 px-3 me-lg-3">
				<div class="panel-body">
					<div class="row row-gap-3">
						<div class="col-sm-6 col-12">
							<div class="advertise-item position-relative" href="" title="">
								<div class="img-advertise">
									<img class="object-fit-cover" src="./resources/img/advertise/advertise1.webp" alt="">
								</div>
								<div class="content-overlay position-absolute">
									<div class="content-description">
										Start from $399
									</div>
									<div class="content-title mb-4">
										Red Jersey <br>
										Puma x AC Milan
									</div>
									<?php include __DIR__ . '/components/content_readmore.php'; ?>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-12">
							<div class=" advertise-item position-relative" href="" title="">
								<div class="img-advertise">
									<img class="object-fit-cover" src="./resources/img/advertise/advertise2.webp" alt="">
								</div>
								<div class="content-overlay position-absolute">
									<div class="content-description">
										Start from $399
									</div>
									<div class="content-title mb-4">
										Black Jersey <br>
										Puma x AC Milan
									</div>
									<?php include __DIR__ . '/components/content_readmore.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-product">
			<div class="containter-fluid px-xl-5 px-lg-1 my-5 px-3 me-lg-3">
				<div class="panel-body">
					<div class="row">
						<div class="col-xxl-4 col-xl-3">
							<div class="special-offer border border-2 border-orange rounded px-4 py-3 d-flex flex-column row-gap-5">
								<div class="heading-1">
									<span class="position-relative">Special offer</span>
								</div>

								<div class="swiper">
									<!-- Additional required wrapper -->
									<div class="swiper-wrapper">
										<!-- Slides -->
										<div class="swiper-slide">
											<div class="product-item">
												<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
												<a href="" title="">
													<img class="object-fit-scale" src="/resources/img/offer/offer1.webp" alt="">
												</a>
												<?php include __DIR__ . '/components/product_toolbox.php' ?>
												<div class="infor text-center mt-2">
													<?php include __DIR__ . '/components/product_review.php' ?>
													<div class="product-name mt-1">
														<a class="text-decoration-none fs-5 fw-semibold" href="" title=""><span>Goalkeeper 125th Aniversary</span></a>
													</div>
													<div class="product-price mt-1">
														<div class="d-flex justify-content-center gap-2 align-items-end">
															<span class="price-main text-decoration-line-through">
																$196
															</span>
															<span class="price-sale fs-4 text-orange fw-medium">
																$174
															</span>

														</div>
													</div>
													<div class="product-sold mt-4">
														<div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
															<div class="progress-bar bg-success" style="width:25%;"></div>
														</div>
														<div class="d-flex justify-content-between mt-2">
															<span class="text-black-50 fw-bold">Available:</span>
															<span class="text-black-50 fw-bold">Sold: <span class="text-danger">3</span></span>
														</div>
													</div>
													<?php include __DIR__ . '/components/countdown.php' ?>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="product-item">
												<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
												<a href="" title="">
													<img class="object-fit-scale" src="/resources/img/offer/offer2.webp" alt="">
												</a>
												<?php include __DIR__ . '/components/product_toolbox.php' ?>
												<div class="infor text-center mt-2">
													<?php include __DIR__ . '/components/product_review.php' ?>
													<div class="product-name mt-1">
														<a class="text-decoration-none fs-5 fw-semibold" href="" title=""><span>Jersey 125th Aniversary</span></a>
													</div>
													<div class="product-price mt-1">
														<div class="d-flex justify-content-center gap-2 align-items-end">
															<span class="price-main text-decoration-line-through">
																$196
															</span>
															<span class="price-sale fs-4 text-orange fw-medium">
																$174
															</span>

														</div>
													</div>
													<div class="product-sold mt-4">
														<div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
															<div class="progress-bar bg-success" style="width:25%;"></div>
														</div>
														<div class="d-flex justify-content-between mt-2">
															<span class="text-black-50 fw-bold">Available:</span>
															<span class="text-black-50 fw-bold">Sold: <span class="text-danger">3</span></span>
														</div>
													</div>
													<?php include __DIR__ . '/components/countdown.php' ?>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="product-item">
												<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
												<a href="" title="">
													<img class="object-fit-scale" src="/resources/img/offer/offer3.webp" alt="">
												</a>
												<?php include __DIR__ . '/components/product_toolbox.php' ?>
												<div class="infor text-center mt-2">
													<?php include __DIR__ . '/components/product_review.php' ?>
													<div class="product-name mt-1">
														<a class="text-decoration-none fs-6 fw-semibold" href="" title=""><span>Shorts 125th Aniversary</span></a>
													</div>
													<div class="product-price mt-1">
														<div class="d-flex justify-content-center gap-2 align-items-end">
															<span class="price-main text-decoration-line-through">
																$60
															</span>
															<span class="price-sale fs-4 text-orange fw-medium">
																$54
															</span>

														</div>
													</div>
													<div class="product-sold mt-4">
														<div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
															<div class="progress-bar bg-success" style="width:25%;"></div>
														</div>
														<div class="d-flex justify-content-between mt-2">
															<span class="text-black-50 fw-bold">Available:</span>
															<span class="text-black-50 fw-bold">Sold: <span class="text-danger">3</span></span>
														</div>
													</div>
													<?php include __DIR__ . '/components/countdown.php' ?>
												</div>
											</div>
										</div>
									</div>
									<!-- If we need pagination -->
									<div class="swiper-pagination position-static"></div>
								</div>
							</div>
						</div>
						<div class="col-xxl-8 col-xl-9">
							<div class="product-wrapper d-flex flex-column row-gap-5 px-3">
								<nav class="border-bottom">
									<ul class="nav nav-underline justify-content-center gap-5" id="nav-tab" role="tablist">
										<li class="nav-item">
											<button class="nav-link active" id="nav-latest-tab" data-bs-toggle="tab" data-bs-target="#nav-latest" role="tab" aria-controls="nav-latest" aria-selected="true">
												<span class="fs-5 fw-semibold text-black-50">Latest Products</span>
											</button>
										</li>
										<li class="nav-item">
											<button class="nav-link" id="nav-rating-tab" data-bs-toggle="tab" data-bs-target="#nav-rating" role="tab" aria-controls="nav-rating" aria-selected="false">
												<span class="fs-5 fw-semibold text-black-50">Top Rating</span>
											</button>
										</li>
										<li class="nav-item">
											<button class="nav-link" id="nav-selling-tab" data-bs-toggle="tab" data-bs-target="#nav-selling" role="tab" aria-controls="nav-selling" aria-selected="false">
												<span class="fs-5 fw-semibold text-black-50">Best Selling</span>
											</button>
										</li>
									</ul>
								</nav>
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab" tabindex="0">
										<div class="row row-gap-3">
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="/product.php" title="">
														<img class="img-default object-fit-scale" src="/resources/img/latest/latest1.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/latest/latest1-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Red Authentic Jersey 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$245
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$221
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/latest/latest2.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/latest/latest2-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Black Authentic Jersey 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$245
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$221
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/latest/latest3.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/latest/latest3-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Red Shorts 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$80
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$72
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/latest/latest4.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/latest/latest4-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Red Socks 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$55
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$50
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/latest/latest5.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/latest/latest5-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Black Socks 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$55
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$50
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/latest/latest6.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/latest/latest6-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Jersey 125th Aniversary</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$196
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$174
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/latest/latest7.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/latest/latest7-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Jersey Shorts 125th Aniversary</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$60
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$54
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/latest/latest8.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/latest/latest8-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Goalkeeper 125th Aniversary</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$196
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$174
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-rating" role="tabpanel" aria-labelledby="nav-rating-tab" tabindex="0">
										<div class="row row-gap-3">
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/rating/rating1.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/rating/rating1-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Goalkeeper Shorts 125th Aniversary</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$60
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$54
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/rating/rating2.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/rating/rating2-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span> Socks 125th Aniversary</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$25
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$23
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/rating/rating3.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/rating/rating3-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Home Jersey 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$196
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$174
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/rating/rating4.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/rating/rating4-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Home Shorts 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$60
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$54
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/rating/rating5.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/rating/rating5-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Away Jersey 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$196
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$174
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/rating/rating6.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/rating/rating6-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Away Long Sleeve 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$100
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$90
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/rating/rating7.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/rating/rating7-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Track Pants 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$400
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$360
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/rating/rating8.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/rating/rating8-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Away Shorts 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$60
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$54
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-selling" role="tabpanel" aria-labelledby="nav-selling-tab" tabindex="0">
										<div class="row row-gap-3">
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/selling/selling1.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/selling/selling1-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Away Socks 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$20
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$18
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/selling/selling2.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/selling/selling2-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Third Jersey 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$196
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$174
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/selling/selling3.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/selling/selling3-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Third Shorts 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$60
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$54
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/selling/selling4.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/selling/selling4-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Third Socks 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$30
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$27
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/selling/selling5.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/selling/selling5-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Third long Sleeve 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$100
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$90
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/selling/selling6.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/selling/selling6-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Home Shorts 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$60
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$54
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/selling/selling7.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/selling/selling7-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Pre-Match T-Shirt 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$115
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$104
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content-product col-lg-3 col-md-4 col-sm-6 col-12 border-end">
												<div class="product-item">
													<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
													<a href="" title="">
														<img class="img-default object-fit-scale" src="/resources/img/selling/selling8.webp" alt="">
														<img class="img-hover object-fit-scale" src="/resources/img/selling/selling8-2.webp" alt="">
													</a>
													<?php include __DIR__ . '/components/countdown.php' ?>
													<?php include __DIR__ . '/components/product_toolbox.php' ?>
													<div class="infor text-center mt-2">
														<?php include __DIR__ . '/components/product_review.php' ?>
														<div class="product-name mt-1">
															<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Pre-Match Zip 2024/25</span></a>
														</div>
														<div class="product-price mt-1">
															<div class="d-flex justify-content-center gap-2 align-items-end">
																<span class="price-main text-decoration-line-through">
																	$215
																</span>
																<span class="price-sale fs-4 text-orange fw-medium">
																	$194
																</span>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-banner">
			<div class="containter-fluid px-xl-5 px-lg-1 my-5 px-3 me-lg-3">
				<span class="position-relative">
					<img class="object-fit-cover" src="/resources/img/banner.webp" alt="">
					<div class="position-absolute top-50 start-50 translate-middle text-center d-flex flex-column row-gap-3">
						<div class="banner-title">
							<span class="fs-1 fw-bold text-white">New Collection for new year.</span>
						</div>
						<div class="banner-description">
							<span class="fs-3 fw-semibold text-white">Up to 60% off Accessories.</span>
						</div>
						<?php include __DIR__ . '/components/content_readmore.php'; ?>
					</div>
				</span>
			</div>
		</div>
		<div class="panel-categories">
			<div class="containter-fluid px-xl-5 px-lg-1 my-5 px-3 me-lg-3">
				<div class="panel-head border-bottom">
					<div class="d-flex justify-content-between align-items-center">
						<div class="heading-2 fs-sm-3 fs-12 border-bottom border-3 border-warning">
							<a class="text-decoration-none text-black" href="" title="">Apparel</a>
						</div>
						<div class="categories-children">
							<div class="d-flex justify-content-center gap-lg-5 gap-2">
								<a class="text-decoration-none text-black-50 px-sm-3 px-1 fs-12 fs-sm-6 rounded-pill active" href="" title="">Man</a>
								<a class="text-decoration-none text-black-50 px-sm-3 px-1 fs-12 fs-sm-6 rounded-pill" href="" title="">Women</a>
								<a class="text-decoration-none text-black-50 px-sm-3 px-1 fs-12 fs-sm-6 rounded-pill" href="" title="">Baby</a>
								<a class="text-decoration-none text-black-50 px-sm-3 px-1 fs-12 fs-sm-6 rounded-pill" href="" title="">Collections</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body position-relative">
					<div class="swiper freemode">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<div class="badge rounded-pill text-bg-secondary px-3 py-2 position-absolute end-0">Out Of Stock</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/apparel/apparel1.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/apparel/apparel1-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Women White Sweatshirts</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$74
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$67
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/apparel/apparel2.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/apparel/apparel2-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Women White Long Sleeve Polo</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$82
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$74
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/apparel/apparel3.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/apparel/apparel3-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>T-Shirt City</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$42
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$38
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/apparel/apparel4.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/apparel/apparel4-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>T-Shirt Back Print City</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$47
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$43
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/apparel/apparel5.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/apparel/apparel5-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Women White Crop Top</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$28
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$26
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/apparel/apparel6.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/apparel/apparel6-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Women White Shorts</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$46
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$42
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/apparel/apparel7.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/apparel/apparel7-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Women White T-Shirt Embroidery</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$40
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$36
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/apparel/apparel8.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/apparel/apparel8-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Women White Denim Jacket</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$125
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$113
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-categories">
			<div class="containter-fluid px-xl-5 px-lg-1 my-5 px-3 me-lg-3">
				<div class="panel-head border-bottom">
					<div class="d-flex justify-content-between align-items-center">
						<div class="heading-2 fs-sm-3 fs-12 border-bottom border-3 border-warning">
							<a class="text-decoration-none text-black" href="" title="">Accessories</a>
						</div>
						<div class="categories-children">
							<div class="d-flex justify-content-center gap-lg-5 gap-2">
								<a class="text-decoration-none text-black-50 px-sm-3 px-1 fs-12 fs-sm-6 rounded-pill active" href="" title="">Souvenirs</a>
								<a class="text-decoration-none text-black-50 px-sm-3 px-1 fs-12 fs-sm-6 rounded-pill" href="" title="">Toys</a>
								<a class="text-decoration-none text-black-50 px-sm-3 px-1 fs-12 fs-sm-6 rounded-pill" href="" title="">Home</a>
								<a class="text-decoration-none text-black-50 px-sm-3 px-1 fs-12 fs-sm-6 rounded-pill" href="" title="">Occasion</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body position-relative">
					<div class="swiper freemode">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<div class="badge rounded-pill text-bg-secondary px-3 py-2 position-absolute end-0">Out Of Stock</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/accessories/accessories1.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/accessories	/accessories1-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Milan Fuchsia Trucker</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$31
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$28
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/accessories/accessories2.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/accessories/accessories2-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Milan Graffiti Cap</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$38
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$35
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/accessories/accessories3.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/accessories/accessories3-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Van Basten Signed and Frame</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$115
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$104
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/accessories/accessories4.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/accessories/accessories4-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Gullit Signed and Frame</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$115
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$104
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/accessories/accessories5.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/accessories/accessories5-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Black Cap City</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$115
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$104
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/accessories/accessories6.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/accessories/accessories6-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Trucker Cap City</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$115
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$104
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/accessories/accessories7.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/accessories/accessories7-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Cap Logo And Graffiti</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$115
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$104
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="product-item border-end">
									<div class="badge bg-danger rounded-pill px-3 py-2">-10%</div>
									<a href="" title="">
										<img class="img-default object-fit-scale" src="/resources/img/accessories/accessories8.webp" alt="">
										<img class="img-hover object-fit-scale" src="/resources/img/accessories/accessories8-2.webp" alt="">
									</a>
									<?php include __DIR__ . '/components/countdown.php' ?>
									<?php include __DIR__ . '/components/product_toolbox.php' ?>
									<div class="infor text-center mt-2">
										<?php include __DIR__ . '/components/product_review.php' ?>
										<div class="product-name mt-1">
											<a class="text-decoration-none fs-12 fw-semibold" href="" title=""><span>Milan Orange Cap</span></a>
										</div>
										<div class="product-price mt-1">
											<div class="d-flex justify-content-center gap-2 align-items-end">
												<span class="price-main text-decoration-line-through">
													$26
												</span>
												<span class="price-sale fs-4 text-orange fw-medium">
													$24
												</span>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel-brand bg-secondary-subtle mt-5 py-3">
			<div class="containter-fluid px-xl-5 px-lg-1 my-sm-5 px-3 me-lg-3">
				<div class="panel-head text-center">
					<div class="heading-1 fs-1 fw-semibold">
						<span>Top Brands</span>
					</div>
				</div>
				<div class="panel-body mt-5">
					<div class="swiper freemode">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="brand-item border-end">
									<span href="" title="">
										<img class="object-fit-scale" src="/resources/img/brands/brands1.webp" alt="">
									</span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="brand-item border-end">
									<span href="" title="">
										<img class="object-fit-scale" src="/resources/img/brands/brands2.webp" alt="">
									</span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="brand-item border-end">
									<span href="" title="">
										<img class="object-fit-scale" src="/resources/img/brands/brands3.webp" alt="">
									</span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="brand-item border-end">
									<span href="" title="">
										<img class="object-fit-scale" src="/resources/img/brands/brands4.webp" alt="">
									</span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="brand-item border-end">
									<span href="" title="">
										<img class="object-fit-scale" src="/resources/img/brands/brands5.webp" alt="">
									</span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="brand-item border-end">
									<span href="" title="">
										<img class="object-fit-scale" src="/resources/img/brands/brands6.webp" alt="">
									</span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="brand-item border-end">
									<span href="" title="">
										<img class="object-fit-scale" src="/resources/img/brands/brands7.webp" alt="">
									</span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="brand-item border-end">
									<span href="" title="">
										<img class="object-fit-scale" src="/resources/img/brands/brands8.webp" alt="">
									</span>
								</div>
							</div>
						</div>
						<div class="swiper-button-next d-none"></div>
						<div class="swiper-button-prev  d-none"></div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<?php require_once __DIR__ . '/components/footer.php' ?>
	<?php require_once __DIR__ . '/components/script.php' ?>
</body>

</html>