<?php $__env->startSection('content'); ?>
    <main class="main">

        <!-- Appointment Section -->
        <section id="appointment" class="appointment section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Appointment</h2>
                <p>informasi riwayat pemeriksaan</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <h3>Medical Checkup</h3>
                                </div>
                                <form action="/appointment" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="rm">No.Rekam Medis</label>
                                        <input type="text" name="rm" class="form-control <?php $__errorArgs = ['rm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="rm" disabled
                                            placeholder="No.Rekam Medis" required="" value="<?php echo e(auth()->user()->rm); ?>">
                                        <?php $__errorArgs = ['rm'];
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
                                        <label for="complaint">Complaint / Keluhan</label>
                                        <textarea class="form-control <?php $__errorArgs = ['complaint'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="complaint" id="complaint"><?php echo e(old('complaint')); ?></textarea>
                                        <?php $__errorArgs = ['complaint'];
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
                                        <label for="poly_id">Pilih Poli</label>
                                        <select name="poly_id" id="poly_id" class="form-select">
                                            <?php $__currentLoopData = $polies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poly): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($poly->id); ?>" <?php echo e($poly->id == old('poly_id') ? 'selected' : ''); ?>><?php echo e($poly->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="schedule">Pilih Jadwal Periksa</label>
                                        <select name="schedule" id="schedule" class="form-select <?php $__errorArgs = ['schedule'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            
                                        </select>
                                        <?php $__errorArgs = ['schedule'];
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
                                        <div class="text-center"><button class="btn btn-primary" type="submit">Submit</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                
                                <div class="card-tools">
                                    <form action="" method="get" id="formSearch">
                                      <div class="row">
                                        <div class="col-md-6">                                          
                                          <div class="row">
                                            <div class="col-3">
                                              <div class="input-group input-group-sm" style="width: 150px;">
                                                  <select name="statuses" class="form-select" id="statuses">
                                                      <option value="">All Status</option>
                                                      <option value="checkup" <?php if(request('statuses') == 'checkup'): ?> selected <?php endif; ?>>Pemeriksaan</option>
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
                                            <th>Dokter</th>
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
                                                <td><?php echo e($checkup->schedule->user->name); ?></td>
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
<script>
    schedules();
    $('#poly_id').on('change', function(){
        schedules();
    })

    $('#statuses').on('change', function(){
        $('#formSearch').submit();
    })

    function schedules(){
        const poly_id = $('#poly_id').val();
        const schedule_id = `<?php echo e(old('schedule')); ?>`
        $('#schedule').empty();
        $('#schedule').append(`<option value="">-- PILIH JADWAL --</option>`);
        $.get("/api/schedules/" + poly_id, function(data, status){
            data.forEach(schedule => {
                $('#schedule').append(`<option value="${schedule.id}" ${schedule.id == schedule_id ? 'selected' : ''}>Dokter ${schedule.name} | ${schedule.day} | ${schedule.start} - ${schedule.finish}</option>`);
            });
            
        });
        
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\rekam-medis-master\resources\views/site/appointment.blade.php ENDPATH**/ ?>