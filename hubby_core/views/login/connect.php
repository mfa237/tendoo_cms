<section id="content" class="m-t-lg wrapper-md animated fadeInDown scrollable wrapper">
    <div class="row">
        <div class="col-lg-4 col-sm-offset-4">
            <div class="list-group m-b-sm bg-white m-b-lg">
                <header class="panel-heading bg bg-color-green text-center">Connexion</header>
                <div class="panel-body">
                    <form method="post" class="panel-body">
                        <div class="form-group">
                            <label class="control-label">Pseudo</label>
                            <input type="text" name="admin_pseudo" placeholder="Pseudo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mot de passe</label>
                            <input type="password" name="admin_password" placeholder="Mot de passe" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-info">Connexion</button>
                        <input type="reset" class="btn btn-danger" value="Annuler" />
                        <?php
						if($options[0]['ALLOW_REGISTRATION'] == '1')
						{
							?>
                        <div class="line line-dashed"></div>
                        <a type="button" onclick="window.location	=	'<?php echo $this->core->url->site_url(array('registration'));?>'" class="btn btn-white btn-lg btn-block" id="btn-1"> <i class="icon-group text"></i> <span class="text">Cr&eacute;er un nouveau compte</span> <i class="icon-ok text-active"></i></a>
                        <?php
						}
						?>
                    </form>
                    <?php echo notice_from_url();?>
                    <?php echo form_error('admin_pseudo');?><br />
                    <?php echo form_error('admin_password');?><br />
                    <?php echo $this->core->notice->parse_notice();?> </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-offset-4">
            <div class="list-group m-b-sm bg-white m-b-lg">
                <header class="panel-heading bg bg-color-red text-center">Soyez &agrave; jour</header>
                <div class="panel-body">
                    <p>Avez-vous la derni&egrave;re version d'Hubby ? connectez-vous au <a href="#" class="fg-color-orange">Store</a> et t&eacute;l&eacute;charger gratuitement la derni&egrave;re version d'Hubby.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-offset-4">
            <div class="list-group m-b-sm bg-white m-b-lg">
                <header class="panel-heading bg bg-color-blue text-center">T&eacute;l&eacute;charger des applications</header>
                <div class="panel-body">
                    <p>Besoin de modules et de th&egrave;mes ? connectez-vous au <a href="#" class="fg-color-orange">Store</a> et t&eacute;l&eacute;charger des applications pour votre site web.</p>
                </div>
            </div>
        </div>
    </div>
</section>