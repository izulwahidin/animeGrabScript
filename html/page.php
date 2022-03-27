<?php
include('head.php');
?>
    <div class="container">
      <h1 class="m-3 text-light"><?=$pageTitle?></h1>
      <div class="p-3 row row-cols-2 row-cols-md-5" style="background-color: #393E46">
<?php foreach ($hasil['data']['list'] as $key => $value): ?>        
        <div class="p-1 col">
          <div class="card__content">
          	<a id='check_eps' href="<?=DOMAIN.$value['url']?>">
	            <img class="img-fluid-content rounded" src="<?=$value['image']['url']?>?w=300" alt="<?=explode(' Episode',$value['title'])[0]?>">
	            <p class="bg-dark card__text p-1 lh-1 text-light text-truncate"><?=$value['title']?><br><small><?=$value['time']?></small></p>
	            <p id="watched" class="card__text__watched text-light" hidden></p>
        	</a>
          </div>
        </div>
<?php endforeach; ?>
      </div>
    </div>
<?php if($hasil['data']['Pagination']) { ?>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center ">
<?php foreach ($hasil['data']['Pagination'] as $key => $value){
	if($value['status'] == 'previous'){
		$text = '<<';
	}elseif ($value['status'] == 'next') {
		$text = '>>';
	}else{
		$text = $value['page'] ?? 1;
	};
	$url = $value['url'];
	$status = ($value['status'] == 'active') ? 'active' : false ;
	echo '        <li class="page-item '.$status.'"><a class="page-link " href="'.DOMAIN.$url.'">'.$text.'</a></li>'.PHP_EOL;
}
?>
      </ul>
    </nav>
<?php
}
include('foot.php');
?>