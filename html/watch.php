<?php
include('head.php');
?>
    <div class="container">
      <h1 class="text-light p-2">Watch <?=$hasil['data']['title']?></h1>
      <div class="ratio ratio-16x9">
        <iframe class="border border-dark rounded" width="100%" src="<?=$hasil['data']['iframe']?>" title="<?=$hasil['data']['title']?>" allowfullscreen scrolling="no"></iframe>
      </div>
      <div class="p-4 text-light">
        <p class="lh-1"><?=nl2br($hasil['data']['description'])?></p>
      </div>
    </div>
    <div class="p-3 container list-group">
      <h2 class="p-1 text-light">List Episodes</h2>
<?php foreach ($hasil['data']['list_eps'] as $key => $value): ?>
      <a id="check_eps" href="<?=DOMAIN.$value['url']?>" class="bg-dark text-light list-group-item d-flex justify-content-between align-items-center">
        <?=$value['title']?>
        <span class="badge badge-primary badge-pill"></span>
      </a>
<?php endforeach ?>
    </div>
    <div class="container">
      <h2 class="m-3 text-light">Latest Updates</h2>
      <div class="p-3 row row-cols-2 row-cols-md-5" style="background-color: #393E46">
<?php foreach ($hasil['data']['latest'] as $key => $value): ?>        
        <div class="p-1 col">
          <div class="card__content">
          	<a id='check_eps' href="<?=DOMAIN.$value['url']?>">
	            <img class="img-fluid-content rounded" src="<?=$value['image']['url']?>?w=300" alt="<?=explode(' Episode',$value['title'])[0]?>">
	            <p class="card__text p-1 lh-1 text-light text-truncate"><?=$value['title']?><br><sub><?=$value['time']?></sub></p>
	            <p class="card__text__watched text-light"></p>
        	</a>
          </div>
        </div>
<?php endforeach; ?>
      </div>
    </div>
<?php
include('foot.php');
?>
