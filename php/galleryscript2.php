<?php
  # zdjęcia z tej samej tablicy
	for ($i = 0; $i < count($files); $i++){
    # dodanie zdjęć do karuzeli
    echo <<<EEE
      <div class='carousel-item'>
        <img
          class='d-block w-100'
          src='$dir/$files[$i]'
          alt=''
          id='$i'
        />
        <div class="carousel-caption">
          <h6>$files[$i]</h6>
        </div>
      </div>
EEE;
	}
?>