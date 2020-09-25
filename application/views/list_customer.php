
<div class="table-responsive" id="datax">
  <table class="table table-bordered">
    <tr>
      <th class="text-center">NO</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>GENDER</th>
      <th>IS MARRIED</th>
      <th>ADDRESS</th>
      <th colspan="2" class="text-center"><span class="glyphicon glyphicon-cog"></span></th>
    </tr>
    <?php
        $no = 1;
        foreach($model as $data){
    ?>
    
      
      <tr>
        <td class="align-middle text-center"><?php echo $no; ?></td>
        <td class="align-middle"><?php echo $data->Name; ?></td>
        <td class="align-middle"><?php echo $data->Email; ?></td>
        <td class="align-middle"><?php echo $data->Gender; ?></td>
        <td class="align-middle"><?php echo $data->Is_married; ?></td>
        <td class="align-middle"><?php echo $data->Address; ?></td>
        <td class="align-middle text-center">
          <a data-id="<?php echo $data->ID; ?>" class="btn btn-default btnformubah"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
        <td class="align-middle text-center">
          <a data-id="<?php echo $data->ID; ?>" class="btn btn-danger btnhapus"><span class="glyphicon glyphicon-trash"></span></a>
        </td>
      </tr>
    <?php
      $no++; 
    }
    ?>
  </table>
</div>

