<? $model = \Glg\Mvc\Model\ModelHelper::getModelForView("statsView"); ?>

<statistics>
	<statistic><? echo $model->name; ?></statistic>
	<statistic><? echo $model->description; ?></statistic>
</statistics>