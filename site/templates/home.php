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
        			<p><a class="btn btn-danger btn-fill" href="/about" role="button">En savoir plus</a></p>
        		</div>
                <div class="col-sm-6 smt">
                    <?php if ($page->cover() != '') : ?>
                        <?php $img = $page->cover()->toFile() ?>
                        <img src="<?php echo $img->url() ?>">
                    <?php endif ?>
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
                                <a class="btn btn-simple" href="<?php echo $site->url().$cta['link'] ?>">En savoir plus <i class="fa fa-chevron-right"></i></a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
	</div>
   
    <div class="container">
        <div class="row">
            <?php $mentors = page('ecosystem')->children()->limit(4) ?>
            <?php foreach ($mentors as $mentor) : ?>
                <?php snippet('mentor', array('mentor'=>$mentor)) ?>
            <?php endforeach ?>
        </div>
        <div class="row center mb">
            <a class="btn btn-default" href="/ecosystem">Voir tout l'écosystème</a>
        </div>
    </div>

    <div class="container mt"><!-- événements à venir -->
        <div class="row">
            <div class="col-sm-4">
                <ul class="media-list">
                <?php foreach (page('blog')->children()->limit(2) as $post) : ?>
                    <li class="media">
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="<?= getPostUrl($post) ?>">
                                    <?php echo $post->title() ?>
                                </a>
                            </h4>
                            <?= getPostExcerpt($post, 20) ?>
                        </div>
                    </li>
                <?php endforeach ?>
                </ul>
            </div>
            <div class="col-sm-4">
                <?php snippet('faq') ?>
            </div>
            <div class="col-sm-4">
                <?php snippet('calendar', array('limit'=>1)) ?>
            </div>
        </div>
    </div>



<!-- Google map -->
    <div class="mt embed-container maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.0183244907944!2d-73.61575338703426!3d45.5298367982346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedc9b94d219619b!2sEsplanade+Montr%C3%A9al!5e0!3m2!1sen!2sca!4v1488227972643" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

<?php snippet('footer') ?>