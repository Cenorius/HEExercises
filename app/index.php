<?php 

include "./config/config.php";
include "./lang/lang.php";
include "./lang/functions.php";
$lang = getLang();
$tr = tr('./lang');
require "./head.php";

$Raw_Json = file_get_contents("./main.json");

$data = json_decode($Raw_Json,true);


?>
<script>
  function setLanguage(lang) {
    document.cookie = "lang="+lang+";path=/";
    location.reload();
  }
</script>
    <!--    Main Content-->
      <section id="labs">
        <div class="container">
          <h1 class="display-6 fw-semi-bold"> <?php echo $tr["vulns"]; ?></h1>
          <p class="fs-2">Laboratorio de Bob</p>

          <div class="row mb-4 mt-6">
          <?php foreach ($data as $key=> $val) { ?>
            <div class="col-md-6 mb-4">
              <a href="/vuln/<?=$val['id'] ?>" class="text-decoration-none text-muted">
              <div class=" border border-items rounded-1 h-100 features-items">
                <div class="p-5">
                <img src="<?=$val['imgURL']; ?>" alt="Dashboard" />
                  <h3 class="pt-3 lh-base" ><?=$val['title'][$lang]; ?>
                  <span class="badge bg-success"><?=count($val["labs"]); ?> lab</span>
                  </h3>
                  <p class="mb-0"><?=$val['description'][$lang]; ?></p>
                </div>
              </div>
            </a>
            </div>
            <?php } ?>  
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      
        <!-- ============================================-->
<?php
  require "./footer.php";
?>