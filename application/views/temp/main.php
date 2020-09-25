 <div class="content-wrapper">  
    <section class="content">
      <div class="row">
        <div class="col-xs-12"> 
        <?php if (empty('content')) { 
          echo "";
        }else {
          $this->load->view($content);
        }?>
        </div> 
      </div> 
    </section> 
  </div> 