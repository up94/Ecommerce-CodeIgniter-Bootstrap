<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3><?= lang('about_us') ?></h3>
                    <p>Lorem Ipsum</p>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3><?= lang('information') ?></h3>
                    <ul>
                        <li> <a href="#">» Lorem Ipsum </a> </li>
                        <li> <a href="#">» Lorem Ipsum </a> </li>
                        <li> <a href="#">» Lorem Ipsum </a> </li>
                        <li> <a href="#">» Lorem Ipsum </a> </li>
                    </ul>
                </div>
				<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3><?= lang('categories') ?></h3>
                    <?php if(!empty($footerCategories)) { ?>
					<ul>
					<?php foreach($footerCategories as $key=>$categorie) { ?>
                        <li><a href="javascript:void(0);" data-categorie-id="<?= $key ?>" class="go-category"><?= $categorie ?></a></li>
					<?php } ?>
                    </ul>
					<?php } else { ?>
					 <p><?= lang('no_categories') ?></p>
					<?php } ?>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3><?= lang('contacts') ?></h3>
                    <ul class="footer-icon">
                        <li><span><i class="fa fa-map-marker"></i></span> Lorem Ipsum</li>
                        <li><span><i class="fa fa-phone"></i></span> Lorem Ipsum</li>
                        <li><span><i class="fa fa-envelope"></i></span> Lorem Ipsum</li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3><?= lang('newsletter') ?></h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> <?= lang('subscribe') ?> <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div> 
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"><?= $footerCopyright ?></p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                	<li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<div id="notificator" class="alert"></div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/bootstrap-confirmation.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/js/bootstrap-select.min.js"></script>
<script src="<?= base_url('assets/js/placeholders.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
<script src="<?= base_url('assets/js/mine.js') ?>"></script>
</body>
</html>
