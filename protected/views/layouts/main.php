<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
	<body>

		<div class="container" id="page">

			<div id="header">
				<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
			</div>

			<div id="mainmenu">
				<?php
				$this->widget('zii.widgets.CMenu', array(
					'id' => '',
					'items' => array(
						array('label' => 'Home', 'url' => array('/site/index')),
						array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
						array('label' => 'Contact', 'url' => array('/site/contact')),
						array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
						array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
					),
				));
				?>
			</div>
			<?php if (isset($this->breadcrumbs)): ?>
				<?php
				$this->widget('zii.widgets.CBreadcrumbs', array(
					'links' => $this->breadcrumbs,
				));
				?>
			<?php endif ?>

			<?php echo $content; ?>

			<div id="footer">
				<?php echo date('Y'); ?>&copy; BARVIS<br/>
				All Rights Reserved.<br/>
			</div>

		</div>

	</body>
</html>
