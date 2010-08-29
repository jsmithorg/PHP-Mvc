<? $model = \Glg\Mvc\Model\ModelHelper::getModelForView("moviesView"); ?>

<h2>Movies</h2>
<ul>
<? for($i = 0;$i<count($model);$i++) { ?>
	<li><? echo $model[$i]->title; ?></li>
<? } ?>
</ul>