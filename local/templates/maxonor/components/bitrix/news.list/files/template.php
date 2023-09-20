<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section class="files" id="section_files">
	<div class="wrapper">
		<h2>Наши каталоги</h2>
		<p>
            Скачивайте и&nbsp;используйте для&nbsp;продаж материалы Maxonor
            Pure Life
        </p>
		<div class="files__grid">
			<? foreach ($arResult['ITEMS'] as $key => $item) { 
				
				$file = $item['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['SRC'];
				$size_in_bytes = intval($item['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['FILE_SIZE']);
				$mb_size = $size_in_bytes / 1024 / 1024;
				$mb_size = round($mb_size, 1);
				$file_ext = explode('.', $item['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['ORIGINAL_NAME']);
				$file_ext = end($file_ext);

				// echo '<pre>';
				// var_dump($file_ext);
				// echo '</pre>';
				?>

				<a href="<?=$file?>" target='_blank'>
					<p><?=$item['NAME']?></p><span><?=$file_ext?>,&nbsp;<?=$mb_size?>&nbsp;Mb</span>
				</a>
			<?}?>
		</div>
	</div>
</section>