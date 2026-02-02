<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application $application
 */
?>
<!--Header-->
<div class="row text-body-secondary">
	<div class="col-10">
		<h1 class="my-0 page_title"><?php echo $title; ?></h1>
		<h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
	</div>
	<div class="col-2 text-end">
		<div class="dropdown mx-3 mt-2">
			<button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa-solid fa-bars text-primary"></i>
			</button>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
							<li><?= $this->Html->link(__('Edit Application'), ['action' => 'edit', $application->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Application'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Application'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
							</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
	<div class="col-md-8">
		<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
			<div class="card-body text-body-secondary">

<style>
    .Top{
        width: 100%;
        margin: auto;      
    }
    .one{
        width:70%;
        height:25px;
        background-color:#292983;
        float:left;
    }
    .two{
        margin-left: 15%;
        height: 25px;
        background: #912891;

    }

    .capital{
        text-transform: uppercase;
    }

    .justify{
        text-align: justify;
    }

</style>
                <section class="top">
                    <div class="one"></div>
                    <div class="two"></div>
                </section>
                        
    <div class="text-end my-4 me-5">
        <?php echo $this->Html->image('../img/surat/UiTM-logo.png', ['width'=>'220px']) ?>
    </div>

    <hr />


    <table width= "100%">
        <tr>
            <td width="78%" class="text-end">Surat Kami &nbsp;: &nbsp;</td>
            <td>
                <?php if ($application->approval_status == 0){
                    echo '-';
                }elseif ($application->approval_status == 1){
                    echo $application->ref_no;
                }else 
                    echo 'Rejected';
                ?>
             </td>
        </tr>
        <tr>
            <td class="text-end">Tarikh &nbsp;: &nbsp;</td>
            <td>
                 <?php if ($application->approval_status == 0){
                    echo '-';
                }elseif ($application->approval_status == 1){
                    echo date('d F Y', strtotime($application->modified));
                }else 
                    echo 'Rejected';
                ?>
            </td>
        </tr>
    </table>
                <br /><br />
                <strong><?= h($application->pic_name) ?></strong><br />
                <?= h($application->company_name) ?><br />
                <?= h($application->company_street_1) ?><br />
                <?= h($application->company_street_2) ?><br />
                <?= h($application->company_poscode) ?>,
                <?= h($application->company_city) ?><br />
                <?= h($application->company_state) ?>
                <br />
                <br />
                Tuan/Puan,
                <br /><br />
                <strong>PERMOHONAN KEBENARAN UNTUK MENJALANKAN KAJIAN</strong>
                <br /><br />

                <div class="justify">
                
                <p>Dengan hormatnya perkara di atas adalah dirujuk.</p>

                <p>
                    2.  Bagi memenuhi keperluan program <?= h($application->program->name) ?>, sekumpulan pelajar daripada <?= h($application->faculty->name) ?>, <?= h($application->branch->name) ?> ingin menjalankan satu kajian dalam bentuk temubual di organisasi <strong><?= h($application->company_name) ?></strong> pada tarikh <strong><?php echo date('d F Y', strtotime($application->start_date)) ?></strong>.
                </p>

                <p>
                    3.  Untuk makluman Tuan/Puan, kajian ini bertujuan untuk mendapatkan maklumat tentang konsep asas pengurusan projek dalam konteks sistem maklumat dan hasil kerja pengurusan projek bagi setiap fasa.
                </p>

                 <p>
                    4.  Sehubungan itu, dalam usaha menyempurnakan kajian tersebut pihak kami memohon agar kebenaran bagi melaksanakan sesi temubual dapat diberikan kepada pelajar-pelajar kami.
                </p>

                <p>
                    5.  Perhatian, sokongan dan pertimbangan daripada pihak Tuan/Puan berhubung perkara ini amat dihargai dan didahului dengan ucapan terima kasih.
                </p>

                <p>
                    Sekian. Terima kasih.
                </p>
                <?php if ($application->approval_status == 0) {
                    echo '<strong class="text-danger">[Dalam Proses Semakan]</strong>';
                } elseif ($application->approval_status == 1) {
                    echo 'Jabatan Hal Ehwal Akademik<br />';
                    echo 'Universiti Teknologi MARA<br /><br />';
                    echo '<strong>CETAKAN BERKOMPUTER. TIDAK PERLU TANDATANGAN.</strong>';
                } else
                    echo 'Rejected';
                ?>
            </div>

            <hr />
            <div class="text-end my-4 me-5">
                <?php echo $this->Html->image('../img/surat/ISO.png', ['width' => '170px']) ?>
                <br />
                <?php echo $this->Html->image('../img/surat/uitmdihatiku.png', ['width' => '170px']) ?>
            </div>

			</div>
		</div>
		
		
	</div>
	<div class="col-md-4">
	  <div class="card bg-body-tertiary border-0 shadow rounded-0">
        <div class="card-body">

            <div class="card-title mb-0">Application Data</div>
            <div class="tricolor_line mb-3"></div>

            <table class="table table-sm table-hover">
                <tr>
                    <td>Application Date</td>
                    <td><?php echo date('M d, Y (h:i A)', strtotime($application->created)); ?></td>
                </tr>
                <tr>
                    <td>Approval Status</td>
                    <td><?php echo date('M d, Y (h:i A)', strtotime($application->modified)); ?></td>
                </tr>
                <tr>
                    <td>Application Status</td>
                    <td>
                        <?php if ($application->approval_status ==0){
							echo '<span class="badge bg-warning">Pending</span>';
						}elseif ($application->approval_status ==1){
							echo '<span class="badge bg-success">Approved</span>';
						}elseif ($application->approval_status ==2){
							echo '<span class="badge bg-danger">Rejected</span>';
						}else
						echo '<span class="badge bg-danger">Error</span>';
						?>
                    </td>
                </tr>
            </table>

            <?php echo $this->Form->create($application) ; ?>

            <?php echo $this->Form->control('approval_status', ['options'=> ['1'=> 'Approved','2'=> 'Rejected'], 'class' => 'form-select',
            'empty'=>'Select Action']); ?>

            <div class="text-end">
                            <?php if ($application->approval_status ==1) { ?>
                        <?php echo $this->Html->link(('Download PDF'), ['action'=>'pdf',$application->id, 'prefix' => false], ['class'=>'btn btn-sm btn-outline-primary','escapeTitle'=> false]); ?>
                        <?php } ?>
                <?php echo $this->Form->button(('Reset'), ['type'=>'reset', 'class' => 'btn btn-sm btn-outline-warning']); ?>
                <?php echo $this->Form->button(('Submit'), ['type'=>'submit', 'class' => 'btn btn-sm btn-outline-primary']); ?>
            </div>
                <?php echo $this->Form->end(); ?>            
            </div>
      </div>
	</div>
</div>




