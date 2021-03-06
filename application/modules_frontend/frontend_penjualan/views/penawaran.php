<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_penawaran.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>List Penawaran Penjualan</h3>
              <!-- <div style="float:right; margin-top:5px; margin-right:5px;">
                <input type="checkbox">Menunggu
                <input type="checkbox">Diproses
                <input type="checkbox">Ditutup
              </div> -->
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No. </th>
                    <th> No. Penawaran </th>
                    <th> No. Daftar Akun </th>
                    <th> Dipesan Oleh </th>
                    <th> Status </th>
                    <th> Diskon </th>
                    <th> Pajak </th>
                    <th> Biaya Kirim </th>
                    <th> Nilai Pekerjaan </th>
                    <th> Perihal</th>
                    <th> PRINT</th>
                    <th class="td-actions">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['ppnw_no_penawaran']; ?></td>
                      <td><?php echo $value['ppnw_dftrakun']; ?></td>
                      <td><?php echo $value['clnt_nama']; ?></td>
                      <td><?php echo $static_data_source['status_penjualan'][$value['ppnw_status']]['name']; ?></td>
                      <td><?php echo $value['ppnw_diskon']; ?></td>
                      <td><?php echo $value['ppnw_pajak']; ?></td>
                      <td><?php echo add_numberformat($value['ppnw_biaya_kirim']); ?></td>
                      <td><?php echo add_numberformat($value['ppnw_nilai_faktur']); ?></td>
                      <td><?php echo $value['ppnw_keterangan']; ?></td>
                      <td><a href="<?php echo ($module_base_url_penawaran.'/pdf/'.$value['ppnw_id']); ?>" target="_blank">View</a></td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url_penawaran.'/edit/'.$value['ppnw_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url_penawaran.'/delete/'.$value['ppnw_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <!--<tr>
                      <td colspan="12" style="background: red;color: white;">Module ini belum terisi!</td>
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