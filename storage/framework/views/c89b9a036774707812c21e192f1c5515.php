<?php $__env->startSection('content'); ?>
    <main class="main">

        <!-- Appointment Section -->
        <section id="appointment" class="appointment section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Workspace</h2>
                <p>Ruang Kerja</p>
            </div><!-- End Section Title -->

            <div class="container">

                <?php if(session('success')): ?>
                    <div role="alert" class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>
                <?php if(session('failed')): ?>
                    <div role="alert" class="alert alert-danger"><?php echo e(session('failed')); ?></div>
                <?php endif; ?>

                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <h3>Input Jadwal Baru</h3>
                            </div>
                            <form action="/schedule" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="poly_id">Poly</label>
                                    <select name="poly_id" id="poly_id" class="form-select">
                                      <?php $__currentLoopData = $polies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poly): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($poly->id); ?>"><?php echo e($poly->name); ?></option>                                          
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['poly_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>								
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="day">Hari</label>
                                    <select name="day" id="day" class="form-select">
                                      <option value="monday">senin</option>
                                      <option value="tuesday">selasa</option>
                                      <option value="wednesday">rabu</option>
                                      <option value="thursday">kamis</option>
                                      <option value="friday">jumat</option>
                                      <option value="saturday">sabtu</option>
                                      <option value="sunday">minggu</option>
                                    </select>
                                    <?php $__errorArgs = ['day'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>								
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="start">Start / Jam Mulai</label>
                                    <input type="time" class="form-control <?php $__errorArgs = ['start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="start" id="start" required=""
                                     value="<?php echo e(old('start') ?? auth()->user()->start); ?>">
                                    <?php $__errorArgs = ['start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>								
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="finish">Finish / Jam Selesai</label>
                                    <input type="time" class="form-control <?php $__errorArgs = ['finish'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="finish" id="finish" required=""
                                     value="<?php echo e(old('finish') ?? auth()->user()->finish); ?>">
                                    <?php $__errorArgs = ['finish'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>								
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="mt-3">
                                    <div class="text-start"><button class="btn btn-primary" type="submit">Submit</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">Jadwal Praktek Anda</div>
                      <div class="card-body table-responsive p-0">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Poly</th>
                              <th>Day</th>
                              <th>Start</th>
                              <th>Finish</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($schedule->poly->name); ?></td>
                                <td><?php echo e($schedule->hari()); ?></td>
                                <td><?php echo e(waktu($schedule->start)); ?></td>
                                <td><?php echo e(waktu($schedule->finish)); ?></td>
                                <td>
                                  <form action="/schedule/switch-status" method="get" id="formStatus<?php echo e($schedule->id); ?>">
                                    <input type="hidden" name="id" value="<?php echo e($schedule->id); ?>">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input switchStatus" type="checkbox" name="status" data-id="<?php echo e($schedule->id); ?>" role="switch" <?php echo e($schedule->status ? 'checked' : ''); ?>>
                                    </div>
                                  </form>
                                </td>
                              </tr>                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">
                            <div class="card-title">Daftar Pemeriksaan</div>
                            <div class="card-tools">
                                <form action="" method="get" id="formSearch">
                                  <div class="row">
                                    <div class="col-md-6">                                          
                                      <div class="row">
                                        <div class="col-3">
                                          <div class="input-group input-group-sm" style="width: 150px;">
                                              <select name="statuses" class="form-select" id="statuses">
                                                  <option value="all">All Status</option>
                                                  <option value="checkup" <?php if(request('statuses') == 'checkup' or !request('statuses')): ?> selected <?php endif; ?>>Pemeriksaan</option>
                                                  <option value="waiting_medicine" <?php if(request('statuses') == 'waiting_medicine'): ?> selected <?php endif; ?>>Menunggu Obat</option>
                                                  <option value="done" <?php if(request('statuses') == 'done'): ?> selected <?php endif; ?>>Selesai</option>
                                                  <option value="canceled" <?php if(request('statuses') == 'canceled'): ?> selected <?php endif; ?>>Dibatalkan</option>
                                              </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">ID</th>
                                        <th>Pasien</th>
                                        <th>Schedule</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $checkups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checkup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($checkup->id); ?></td>
                                            <td><?php echo e($checkup->user->name); ?></td>
                                            <td><?php echo e($checkup->schedule->hari()); ?> <?php echo e(waktu($checkup->schedule->start)); ?> - <?php echo e(waktu($checkup->schedule->finish)); ?></td>
                                            <td><?php echo e($checkup->checkup_status()); ?></td>
                                            <td><?php echo e(tglwaktu($checkup->created_at)); ?></td>
                                            <td>
                                                <a href="/checkup/<?php echo e($checkup->id); ?>" class="btn btn-sm btn-warning mb-2">Detail</a>
                                            </td>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <?php echo e($checkups->links('admin.layouts.paginate')); ?>

                        </div>

                    </div>
                  </div>
                </div>
            </div>

        </section><!-- /Appointment Section -->

    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- jQuery -->

    
<script>
	$(document).ready(function() {
		<?php if(old('id')): ?>
			$('#editModal' + <?php echo old('id'); ?>).modal('show')
		<?php endif; ?>

    $('#statuses').on('change', function(){
        $('#formSearch').submit();
    })

    $('.switchStatus').on('change', function(){
      $('#formStatus' + $(this).data('id')).submit();
    })
	});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\rekam-medis-master\resources\views/site/workspace.blade.php ENDPATH**/ ?>