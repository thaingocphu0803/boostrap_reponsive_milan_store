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
							<button class="accordion-button collapsed px-3 py-2 fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo str_replace(' ', '_', $category); ?>" aria-expanded="false" aria-controls="<?php echo str_replace(' ', '_', $category); ?>">
								<?= $category ?>
							</button>
						</h2>
						<div id="<?php echo str_replace(' ', '_', $category); ?>" class="accordion-collapse collapse" data-bs-parent="#accordion">
							<div class="accordion-body">
								<ul class="ps-0">
									<li class="list-unstyled sub-category">
										<span class="d-inline-block"><i class="bi bi-caret-right-fill"></i></span>
										<a class="text-decoration-none text-black-50 fs-6" href="#" title="">sub category 1 (0)</a>
									</li>
									<li class="list-unstyled sub-category">
										<span class="d-inline-block"><i class="bi bi-caret-right-fill"></i></span>
										<a class="text-decoration-none text-black-50 fs-6" href="#" title="">sub category 2 (0)</a>
									</li>
									<li class="list-unstyled sub-category">
										<span class="d-inline-block"><i class="bi bi-caret-right-fill"></i></span>
										<a class="text-decoration-none text-black-50 fs-6" href="#" title="">sub category 3 (0)</a>
									</li>
									<li class="list-unstyled sub-category">
										<span class="d-inline-block"><i class="bi bi-caret-right-fill"></i></span>
										<a class="text-decoration-none text-black-50 fs-6" href="#" title="">sub category 4 (0)</a>
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
				<label for="amount" class="fw-semibold fs-6">Price range:</label>
				<input type="text" id="amount" class="amount border-0 text-black-50 fs-6 w-100" readonly="">
			</p>
		</div>
	</div>

	<div class="aside-panel aside-price border rounded">
		<div class="aside-head border-bottom p-3">
			<h3 class="fs-5">Colors</h3>
		</div>
		<div class="aside-body p-3 d-flex justify-content-start align-items-center gap-3">
			<label class="color-item position-relative" style="background-color: #52b745;">
				<input class="opacity-0" type="checkbox" name="" value="">
				<span class="check-mark text-white fs-4 position-absolute top-50 start-50 translate-middle">
					<i class="bi bi-check2"></i>
				</span>
			</label>
			<label class="color-item position-relative" style="background-color: #dd9933;">
				<input class="opacity-0" type="checkbox" name="" value="">
				<span class="check-mark text-white fs-4 position-absolute top-50 start-50 translate-middle">
					<i class="bi bi-check2"></i>
				</span>
			</label>
			<label class="color-item position-relative" style="background-color: #f45a8d;">
				<input class="opacity-0" type="checkbox" name="" value="">
				<span class="check-mark text-white fs-4 position-absolute top-50 start-50 translate-middle">
					<i class="bi bi-check2"></i>
				</span>
			</label>
			<label class="color-item position-relative" style="background-color: #dd3333;">
				<input class="opacity-0" type="checkbox" name="" value="">
				<span class="check-mark text-white fs-4 position-absolute top-50 start-50 translate-middle">
					<i class="bi bi-check2"></i>
				</span>
			</label>
		</div>
	</div>

	<div class="aside-panel aside-price border rounded">
		<div class="aside-head border-bottom p-3">
			<h3 class="fs-5">Brands</h3>
		</div>
		<div class="aside-body p-3 d-flex flex-column justify-content-start gap-3">
			<?php
			$brands = ['Puma', 'New Era', 'Off White', 'Nove25', 'Assouline'];
			foreach ($brands as  $brand) {
			?>
				<label class="brand-item d-flex align-items-center">
					<input class="opacity-0" type="radio" name="option" value="">
					<span class="check-mark">
						<i class="bi bi-circle-fill"></i>
					</span>
					<span class="brand-name ms-3 text-black-50 fs-6"><?= $brand ?></span>
				</label>

			<?php } ?>
		</div>
	</div>

	<div class="aside-panel aside-price border rounded">
		<div class="aside-head border-bottom p-3">
			<h3 class="fs-5">Rating</h3>
		</div>
		<div class="aside-body p-3 d-flex flex-column justify-content-start gap-3">
			<?php
			for ($row = 1; $row <= 5; $row++) {
			?>
				<label class="brand-item d-flex align-items-center">
					<input class="opacity-0" type="radio" name="option" value="">
					<span class="check-mark">
						<i class="bi bi-circle-fill"></i>
					</span>
					<span class="ms-3 text-black-50">
						<?php
						for ($i = 1; $i <= 5; $i++) {
							if ($i <= $row) {
						?>
								<span class="text-warning fs-lg-6 fs-12">
									<i class="bi bi-star-fill"></i>
								</span>
							<?php } else { ?>
								<span>
									<i class="bi bi-star-fill fs-lg-6 fs-12"></i>
								</span>
						<?php  }
						} ?>
						<span>(0)</span>
					</span>
				</label>

			<?php } ?>
		</div>
	</div>
</div>