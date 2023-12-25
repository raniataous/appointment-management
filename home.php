<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width:100%
}
h5{
    text-align: center;
}
</style>
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4 page-title"><br/>
                    	<h3 class="text-white">Welcome to  RDV Santé</h3>
                        
                        <hr class="divider my-4" />
                     

                    </div>
                    
                </div>
            </div>
        </header>
	
    <div id="portfolio" class="container"><br/><br/><br/>

    <h5>Bienvenue dans cet espace santé, nous vous proposons un aperçu du cadre médical existant</h5><br/>
    <h5>RDV Sante Le Centre Hospitalier de la Ciotat est un établissement public de santé de proximité assurant une action sanitaire de premier plan sur le Territoire dont il a la charge, grâce à l'implication quotidienne de plus de 60 médecins et de 400 agents soignants, médico-techniques, ouvriers et administratifs.</h5>
              <br/><br/>  <div class="row no-gutters">
              
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="index.php?page=doctors&sid=<?php echo $row['id'] ?>">
                            <img class="img-fluid" src="assets/img/13.jfif" alt="" />
                            <div class="portfolio-box-caption">
                               
                                <div class="project-category text-white">Find Doctor</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="index.php?page=doctors&sid=<?php echo $row['id'] ?>">
                            <img class="img-fluid" src="assets/img/12.jpg" alt="" />
                            <div class="portfolio-box-caption">
                               
                                <div class="project-category text-white">Find Doctor</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="index.php?page=doctors&sid=<?php echo $row['id'] ?>">
                            <img class="img-fluid" src="assets/img/11.jfif" alt="" />
                            <div class="portfolio-box-caption">
                               
                                <div class="project-category text-white">Find Doctor</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="index.php?page=doctors&sid=<?php echo $row['id'] ?>">
                            <img class="img-fluid" src="assets/img/15.png" alt="" />
                            <div class="portfolio-box-caption">
                               
                                <div class="project-category text-white">Find Doctor</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="index.php?page=doctors&sid=<?php echo $row['id'] ?>">
                            <img class="img-fluid" src="assets/img/16.jpg" alt="" />
                            <div class="portfolio-box-caption">
                               
                                <div class="project-category text-white">Find Doctor</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="index.php?page=doctors&sid=<?php echo $row['id'] ?>">
                            <img class="img-fluid" src="assets/img/14.jpg" alt="" />
                            <div class="portfolio-box-caption">
                               
                                <div class="project-category text-white">Find Doctor</div>
                            </div>
                        </a>
                    </div>

                    
                    
                </div>
            </div>
        </div>
    <script>
        
        $('.view_prod').click(function(){
            uni_modal_right('Product','view_prod.php?id='+$(this).attr('data-id'))
        })
    </script>
	
