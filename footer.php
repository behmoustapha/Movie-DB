</main>
<footer class="text-body-secondary py-5">
  <div class="container">
    <?php $page = $_GET['page'];?>
    <p class="float-end mb-1">
      <button onclick="location.href= '?<?=http_build_query(array_merge($_GET, ['page' => $page + 1]))?>'">PAGE SUIVANTE</button>
    </p>
    <p>
      <button onclick="location.href= '?<?=http_build_query(array_merge($_GET, ['page' => $page - 1]))?>'">PAGE PRECEDENTE</button>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.3/getting-started/introduction/">getting started guide</a>.</p>
    <p class="float-end mb-1">
      <button onclick="location.href='#'">Retour en haut</button>
    </p>
  </div>
</footer>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>