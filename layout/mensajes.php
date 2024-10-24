<?php

if ( (isset($_SESSION['mensaje'])) && (isset($_SESSION['icono'])) ) {
  $respuesta = $_SESSION['mensaje'];
  $icono = $_SESSION['icono']; ?>
    echo "
      <script>
        Swal.fire({
          position: 'center',
          icon: '<?php echo $icono;?>',
          title: '<?php echo $respuesta;?>',
          showConfirmButton: false,
          timer: 1000
        });
      </script>
    ";
    <?php
    unset($_SESSION['mensaje']);
    unset($_SESSION['icono']);
}
?>