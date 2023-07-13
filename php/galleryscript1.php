<?php
  $dir = '../images/gallery';
  # nazwy plików ze zdjęciami, wyłączając kropki
  $filesAtoZ = array_diff(scandir($dir), array(".",".."));

  # posortowane wg. daty modyfikacji
  $files = array();
  foreach ($filesAtoZ as $file) {
    $files[$file] = filemtime("$dir/$file");
  }

  arsort($files);
  $files = array_keys($files);

  # wyświetlenie zdjęć w głównej galerii
  for ($i = 0; $i < count($files); $i++){
    echo <<<EEE
      <figure
        class='mb-4 mb-md-3 px-md-2'
        data-bs-toggle='modal'
        data-bs-target='#galleryModal'
      >
        <img
          class='img-fluid mb-1'
          data-bs-toggle='carousel'
          data-bs-target='#galleryCarousel'
          data-bs-slide-to='$i'
          src='$dir/$files[$i]'
          aria-label='$files[$i]'
          alt='Nie znaleziono obrazu'
        />
      </figure>
EEE;
	}
?>