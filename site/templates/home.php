<?php snippet('header') ?>

    <div id="intro">
        <div id="intro-blurb">
            <?php echo $page->intro()->kirbytext() ?>
        </div>
    </div>

    <?php if ($page->notif() != '') : ?>
    	<div class="alert alert-danger landing-alert">
             <div class="container text-center">
                 <h5><?php echo $page->notif() ?>
                 <?php if ($page->notifbtn() != '') : ?>
                    <a href="<?php echo $page->notifbtn() ?>"><i class="fa fa-external-link ml"></i></a>
                 <?php endif ?>
                 </h5>
            </div>
        </div>	
    <?php endif ?>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
            <div class="row">
                <div class="col-sm-6">
        			<?php echo $page->text()->kirbytext() ?>
        			<p><a class="btn btn-danger btn-fill" href="/about" role="button">En savoir plus &raquo;</a></p>
        		</div>
                <div class="col-sm-6">
                    <img src="<?php echo $site->url() ?>/assets/images/hands.jpg">
                </div>
        	</div>
        </div>
    </div>

	<div class="main">
		<div class="section section-light-brown landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 column">
                        <h4><i class="fa fa-cogs"></i>Méthodologie précise</h4>
                        <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        <a class="btn btn-danger btn-simple" href="#">En savoir plus <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <div class="col-md-4 column">
                        <h4><i class="fa fa-exchange"></i>Apprentissage pair-à-pair</h4>
                        <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        <a class="btn btn-danger btn-simple" href="#">En savoir plus <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <div class="col-md-4 column">
                        <h4><i class="fa fa-group"></i>Incroyable écosystème</h4>
                        <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        <a class="btn btn-danger btn-simple" href="#">En savoir plus <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
	</div>

    <div class="container mt"> <!-- programme et modules --> 
        <?php foreach (page('/impact8/modules')->children() as $m) : ?>

            <nav class="navbar navbar-ct-danger smt smb" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <a class="navbar-brand" href="<?php echo $m->url() ?>"><?php echo $m->num() ?> - <?php echo $m->title() ?></a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="" id="">
                  <ul class="nav navbar-nav">
                    <li><a href="#">Work in progress...</a></li>
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                  </ul>
                </div>              
              </div><!-- /.container-fluid -->
            </nav>
        
        <?php endforeach ?>
    </div>
   
   

    <div class="container"><!-- événements à venir -->
        <div class="row">
            <div class="col-sm-4">
                <div class="bs-callout bs-callout-event">
                    <div class="date">
                        <div class="event-num">25</div>
                        <div class="event-month">Jan</div>
                    </div>
                    <div class="event-desc">
                        <strong>Un super événement</strong><span class="event-hours">19h > 21h</span>
                        <p>Un genre de texte de description</p>
                        <a class="btn btn-warning btn-simple" href="#">En savoir plus <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php snippet('footer') ?>