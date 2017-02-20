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
                    <?php foreach($page->ctas()->yaml() as $cta): ?>
                        <div class="col-md-4 column">
                            <h4><i class="fa fa-<?php echo $cta['fa'] ?>"></i><?php echo $cta['titre'] ?></h4>
                            <p><?php echo $cta['letexte'] ?></p>
                            <?php if ($cta['link'] != '') : ?>
                                <a class="btn btn-danger btn-simple" href="<?php echo $cta['link'] ?>">En savoir plus <i class="fa fa-chevron-right"></i></a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
	</div>


    <div class="container mt"> <!-- programme et modules --> 
        
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
            <div class="col-sm-4">
                <?php snippet('faq') ?>
            </div>
            <div class="col-sm-4">
                <?php foreach (page('/impact8/modules')->children() as $m) : ?>
                    <a href="<?php echo $m->url() ?>"><?php echo $m->num() ?> - <?php echo $m->title() ?></a><br>
                <?php endforeach ?>
            </div>
        </div>
    </div>



<?php snippet('footer') ?>