<!DOCTYPE html>
<html lang="en">

<head>
    <title>Application</title>
    <style>
        @page {
            margin: 0px !important;
            padding: 0px !important;
        }  
        
        .body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }

        .right{
            text-align: right;
            padding-right: 50px;
        }
        
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

        .content{
            margin-left: 70px;
            margin-right:70px;
        }

        .qr{
            width: 100px;
            height: 100px;
            display: block;
            margin-left: auto;    
        }
    </style>
</head>
<body>
     <section class="top">
                    <div class="one"></div>
                    <div class="two"></div>
                </section>
                        
    <div class="text-end my-4 me-5">
        <?php echo $this->Html->image('../img/surat/UiTM-logo.png', ['width'=>'180px', 'fullBase' => true]) ?>
    </div>

    <hr />

<div class="content">
    <table width= "230px" align="right">
        <tr>
            <td width="100px">Surat Kami</td>
            <td>:</td>
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
            <td>Tarikh</td>
            <td>:</td>
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
</div>

                <table width= "100%" style="margin-top: 30px;">
                    <tr>
                        <td width="80%">
                            Sekian, Terima kasih.
                            <br /><br />
                            <br /><br />
                            <?php if ($application->approval_status == 0) {
                                echo '<strong class="text-danger">[Dalam Proses Semakan]</strong>';
                            } elseif ($application->approval_status == 1) {
                                echo 'Jabatan Hal Ehwal Akademik<br />';
                                echo 'Universiti Teknologi MARA<br /><br />';
                                echo '<strong>CETAKAN BERKOMPUTER. TIDAK PERLU TANDATANGAN.</strong>';
                            } else
                                echo 'Rejected';
                            ?>
                            </td>
                            <td width="20%" class="right">
                                <img src="http://localhost/ivapproval/js/qr-pdf/qrcode.php?s=qrh&d=<?php echo $this->request->getUri(); ?>" class="qr" ?>
                            </td>
                        
                    </tr>
                </table> 
            </div>
</div>
            <hr />
            <div class="right">
            <div class="text-end my-4 me-5">
                <?php echo $this->Html->image('../img/surat/ISO.png', ['width' => '170px', 'fullBase' => true]) ?>
                <br />
                <?php echo $this->Html->image('../img/surat/uitmdihatiku.png', ['width' => '170px', 'fullBase' => true]) ?>
            </div>
</body>
</html>