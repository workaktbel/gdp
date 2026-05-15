<div class="row main_info">
<div class="col-12 col-lg-6 d-flex align-items-center">
	<div class="main_info_wrap wow slideInLeft" data-wow-delay=".4s">
		<h1 class="main_info_title">
			 SEZ Stupino Quadrat
		</h1>
		<div class="main_info_desc">
			<p>
				This is the first private Special Economic Zone in Russia to be implemented with private funds
			</p>
			<p>
				A territory with a developed infrastructure, endowed with a special legal status and preferential economic conditions for entrepreneurs
			</p>
			<p>
				The personnel potential of the region makes it possible to provide highly qualified employees for production enterprises in the SEZ
			</p>
		</div>
		<div class="main_info_buttons">
            <a href="#invest_form" class="btn btn-primary">Become an investor</a>
			<a href="/upload/oez-stupino-kvadrat-prezentaciya-en.pdf" class="btn btn-secondary">Download presentation</a>
		</div>
	</div>
</div>
<div class="offset-lg-1 col-12 col-lg-5 mt-5 mt-lg-0">
	<div class="tax_info justify-content-start wow slideInRight" data-wow-delay=".4s">
		<div class="tax">
            <span class="counter_income"></span><span class="number1" data-max="20" data-min="2">0</span><span class="percent">%</span >
		</div>
		<div class="tax_desc_wrap">
			<div class="tax_img">
                <img src="/upload/images/tax1.svg">
			</div>
			<div class="tax_title">
				Income tax
			</div>
			<div class="tax_desc">
				first 5 years
			</div>
		</div>
	</div>
	<div class="tax_info justify-content-start wow slideInRight" data-wow-delay=".4s">
		<div class="tax">
            <span class="counter_transport"></span><span class="number1" data-max="15" data-min="0">0</span><span class="percent">%</span>
		</div >
		<div class="tax_desc_wrap">
			<div class="tax_img">
                <img src="/upload/images/tax2.svg"> <img src="/upload/images/tax3.svg"> <img src="/upload/images/tax4.svg">
			</div>
			<div class="tax_title">
				Transport tax land property
			</div>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
    const wow = new WOW({
        callback: function(box) {
            if ($(box).find('.number1').length > 0) {
                setTimeout(function() {
                    $(box).find('.number1').each(function() {
                        animateCounter($(this));
                    });
                }, 1000);
            }
        }
    });
    wow.init();

    function animateCounter($number) {
        const max = parseInt($number.data('max'), 10); // Get the max value from data-max attribute
        const min = parseInt($number.data('min'), 10); // Get the min value from data-min attribute
        const duration = 2000; // Duration of the animation
        const stepTime = Math.abs(Math.floor(duration / (max - min))); // Time for each step
        let current = max; // Initialize current to start from the max value

        function step() {
            $number.text(current); // Update the displayed number
            current--; // Decrement the current value
            if (current >= min) { // Continue until reaching the min value
                setTimeout(step, stepTime);
            }
        }
        step();
    }
});


</script>
</div>