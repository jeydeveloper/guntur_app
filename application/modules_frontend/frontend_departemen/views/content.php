<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Daftar Departemen</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No.</th>
                    <th> Nama Dept.</th>
                    <th> Manager</th>
                    <th> Tugas</th>
                    <th> Status</th>
                    <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['departemen']['update'])) OR (!empty($role_access['departemen']['delete'])))): ?>
                    <th class="td-actions">Action</th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['dprt_nama']; ?></td>
                      <td><?php echo $value['dprt_manager']; ?></td>
                      <td><?php echo $value['dprt_tugas']; ?></td>
                      <td><?php echo $label_status[$value['dprt_status']]; ?></td>
                      <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['departemen']['update'])) OR (!empty($role_access['departemen']['delete'])))): ?>
                      <td class="td-actions">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['departemen']['update']))): ?>
                        <a href="<?php echo ($module_base_url.'/edit/'.$value['dprt_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> 
                        <?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['departemen']['delete']))): ?>
                        <a href="<?php echo ($module_base_url.'/delete/'.$value['dprt_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a>
                        <?php endif; ?>
                      </td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <!--<tr>
                      <td colspan="6" style="background: red;color: white;">Module ini belum terisi!</td>
                    </tr>-->
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span8 -->
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->