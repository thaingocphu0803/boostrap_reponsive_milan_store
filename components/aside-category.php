<div class="aside d-flex flex-column row-gap-4">
	<div class="aside-panel aside-category border rounded">
		<div class="aside-head border-bottom p-3">
			<h3 class="fs-5">Categories</h3>
		</div>
		<div class="aside-body">
			<div class="accordion accordion-flush" id="accordion">
				<?php
				$categories = ['Match Kit', 'Shop By Player', 'Training', 'Apparel', 'Accessories', 'Collections', '125th', 'Sale'];
				foreach ($categories as $category) {
				?>
					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo str_replace(' ', '_', $category); ?>" aria-expanded="false" aria-controls="<?php echo str_replace(' ', '_', $category); ?>">
								<?= $category ?>
							</button>
						</h2>
						<div id="<?php echo str_replace(' ', '_', $category); ?>" class="accordion-collapse collapse" data-bs-parent="#accordion">
							<div class="accordion-body">
								<ul class="ps-0">
									<li class="list-unstyled">
										<span><i class="bi bi-caret-right-fill"></i></span>
										<a class="text-decoration-none text-black-50" href="" title="">sub category 1 (0)</a>
									</li>
									<li class="list-unstyled">
										<span><i class="bi bi-caret-right-fill"></i></span>
										<a class="text-decoration-none text-black-50" href="" title="">sub category 2 (0)</a>
									</li>
									<li class="list-unstyled">
										<span><i class="bi bi-caret-right-fill"></i></span>
										<a class="text-decoration-none text-black-50" href="" title="">sub category 3 (0)</a>
									</li>
									<li class="list-unstyled">
										<span><i class="bi bi-caret-right-fill"></i></span>
										<a class="text-decoration-none text-black-50" href="" title="">sub category 4 (0)</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				<?php } ?>
			</div>
		</div>
	</div>

	<div class="aside-panel aside-price border rounded">
		<div class="aside-head border-bottom p-3">
			<h3 class="fs-5">Price</h3>
		</div>
		<div class="aside-body p-3">
			<div class="slider-range"></div>
			<p class="mt-3">
				<label for="amount" class="fw-semibold">Price range:</label>
				<input type="text" id="amount" class="amount border-0 text-black-50" readonly="">
			</p>
		</div>
	</div>

	<div class="aside-panel aside-price border rounded">
		<div class="aside-head border-bottom p-3">
			<h3 class="fs-5">Colors</h3>
		</div>
		<div class="aside-body p-3 d-flex justify-content-start align-items-center gap-3">
			<span class="color-item position-relative" style="background-color: #52b745;">
				<input class="position-absolute top-50 start-50 translate-middle" type="checkbox" name="" value="">
			</span>
			<span class="color-item position-relative" style="background-color: #dd9933;">
				<input class="position-absolute top-50 start-50 translate-middle" type="checkbox" name="" value="">
			</span>
			<span class="color-item position-relative" style="background-color: #f45a8d;">
				<input class="position-absolute top-50 start-50 translate-middle" type="checkbox" name="" value="">
			</span>
			<span class="color-item position-relative" style="background-color: #dd3333;">
				<input class="position-absolute top-50 start-50 translate-middle" type="checkbox" name="" value="">
			</span>
		</div>
	</div>

	<div class="aside-panel aside-price border rounded">
		<div class="aside-head border-bottom p-3">
			<h3 class="fs-5">Brands</h3>
		</div>
		<div class="aside-body p-3 d-flex justify-content-start align-items-center gap-3">
			<span class="color-item" style="background-color: #52b745;">
				<input type="hidden" name="" value="">
			</span>
			<span class="color-item" style="background-color: #dd9933;">
				<input type="hidden" name="" value="">
			</span>
			<span class="color-item" style="background-color: #f45a8d;">
				<input type="hidden" name="" value="">
			</span>
			<span class="color-item" style="background-color: #dd3333;">
				<input type="hidden" name="" value="">
			</span>
		</div>
	</div>
</div>