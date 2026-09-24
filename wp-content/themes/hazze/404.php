<?php
get_header();
?>

	<div class="container">
    <h1 class="h1-404">Ошибка 404, страница не найдена</h1>
  </div>

    <script>
      setTimeout(function() {
        window.location.href = "/";
      }, 5000);
    </script>

<?php
get_footer();
