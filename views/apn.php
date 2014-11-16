<h3>Новости</h3>
<hr>
<ul class="faq unstyled">
    <?php foreach($news as $key=>$value) { 
        static $i;
        $i++;
    ?>
    <li>
        <span class="number number_red"><?= $i; ?></span>
        <div>
            <h4><?= $value['title']; ?></h4>
            <p><?= strip_tags($value['snippet']); ?><a href="/blogs/default/view/?id=<?= $value['id']; ?>&alias=<?= $value['alias']; ?>" class="btn btn-xs btn-info">Читать далее →</a></p>
        </div>
    </li>
    <?php } ?>
</ul>
<a href="/blogs/" class="btn btn-primary btn-md">Смотреть все новости</a>
<p class="gap"></p>