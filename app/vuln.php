<?php 

include "./lang/lang.php";
require "./functions.php";

$vulnID = $_GET["id"];
$lang = getLang();
$tr = tr('./lang');
$labs = getLabs($vulnID);
$vuln = getVuln($vulnID);
$resources = getRes($vulnID);

require_once("head.php")
?>


        <!-- NAV END -->

<script>
  function setLanguage(lang) {
    document.cookie = "lang="+lang+";path=/";
    location.reload();
  }
</script>
    
<section id="labs">
        <div class="container">
          <h1 class="display-6 fw-semi-bold"> <?= $vuln["title"][$lang]; ?> </h1>
          <p class="fs-2"> <?= $vuln["description"][$lang]; ?> </p>
          
          <div class="accordion-res">        
            <div class="accordion__item">
              <button class="accordion__btn">
          
                <span class="accordion__caption"><i class="far fa-lightbulb"></i><?php 
                    if ($lang == "tr"){
                      echo 'Öğrenmek İçin Kaynaklar';
                    }elseif ($lang =="en"){
                      echo 'Sources to Learn.';
                    }else {
                      echo 'Sources pour apprendre.';
                    }
                    ?></span>
                <span class="accordion__icon"><i class="fa fa-plus"></i></span>
              </button>
          
              <div class="accordion__content">
                <ul>
                  <?php foreach ($resources as  $res) {
                    echo '<li><a href="'.$res.'" target="_blank"> '.$res.'</a></li>';
                    }?>
                </ul>
              </div>
            </div>
          </div>
          <script>
                            // select all accordion items
                const accItems = document.querySelectorAll(".accordion__item");

                // add a click event for all items
                accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

                function toggleAcc() {
                // remove active class from all items exept the current item (this)
                accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
                );

                // toggle active class on current item
                if (this.classList != "accordion__item--active") {
                    this.classList.toggle("accordion__item--active");
                }
                }

          </script>
          
          <div class="row mb-4 mt-6">

            <?php foreach ($labs as  $lab) {
              ?>
              <div class="row mb-3">
                <div class="col-md-12">
                <a href="<?=$lab['url'] ?>" class="text-decoration-none text-muted">
                  <div class="border rounded-1 border-700 h-100 features-items">
                    <div class="p-4">
                      <h3 class="lh-base"><?= $lab["title"][$lang] ?></h3>
                      <p class="mb-0"><?= $lab["description"][$lang] ?></p>
                    </div>
                  </div>
            </a>
                </div>
              </div>
              <?php }?>
       
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      
            <!-- ============================================-->
<!-- <section> begin ============================-->
<?php
    require_once("footer.php");

?>