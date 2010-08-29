<? $model = \Glg\Mvc\Model\ModelHelper::getModelForView("statsView"); ?>

<div>
	<h2>Statistics</h2>
	<ul>
		<li><? echo $model->name; ?></li>
		<li><? echo $model->description; ?></li>
	</ul>
</div>