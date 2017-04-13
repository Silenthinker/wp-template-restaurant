<div class="view-content" style="background-image: url('<?php echo $this->url;?>')">
	<div class="tag">
		<div class="card <?php if($this->index==1){
			echo "special";
		}?>">
				<div class="front face">
					<?php echo "<a href='#".$this->href."'>".$this->title."</a>" ?>
				</div>
		</div>
	</div>
</div>