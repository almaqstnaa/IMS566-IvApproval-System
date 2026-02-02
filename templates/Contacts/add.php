<?php
//echo $this->Html->css('select2/css/select2.css');
//echo $this->Html->script('select2/js/select2.full.min.js');
//echo $this->Html->script('tinymce/tinymce.min.js');
//echo $this->Html->script('ckeditor/ckeditor');
?>
<script src="https://js.hcaptcha.com/1/api.js" async defer></script>
<!--Header-->
<div class="row text-body-secondary">
    <div class="col-10">
        <h1 class="my-0 page_title"><?php echo $title; ?></h1>
        <h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
    </div>
</div>
        <div class="tricolor_line mb-3"></div>
<!--/Header-->
<div class="card bg-body-tertiary border-0 shadow mb-4">
    <div class="card-body m-0 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.2000131893815!2d101.61876301525233!3d3.0409885546548754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4bcd2e2268f9%3A0x18a6873c8e308d42!2sPuchong%2C%20Selangor%2C%20Malaysia!5e0!3m2!1sen!2smy!4v1632231729035!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <div class="card-body">
            <?php
            $length =   7;
            $chrDb  =   array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '2', '3', '4', '5', '6', '7', '8', '9');

            $str = '';
            for ($count = 0; $count < $length; $count++) {

                $chr = $chrDb[rand(0, count($chrDb) - 1)];

                if (rand(0, 1) == 0) {
                    $chr = strtolower($chr);
                }
                if (3 == $count) {
                    $str .= '-';
                }
                $str .= $chr;
            }
            ?>

<style>
    /* Tambah sedikit effect bila mouse lalu */
    .contact-row:hover {
        background-color: rgba(255, 255, 255, 0.05);
        transition: 0.3s;
    }
    .btn-chat {
        font-size: 0.7rem;
        padding: 2px 10px;
        border-radius: 50px;
        background-color: #198754;
        color: white !important;
        text-transform: uppercase;
        font-weight: bold;
    }
</style>

<div class="card bg-dark border-0 shadow mb-4"> 
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="card-title mb-0 text-white fw-bold">Contact Information</div>
            <i class="fa-solid fa-headset text-secondary"></i>
        </div>
        <div class="tricolor_line mb-3"></div>
        
        <div class="table-responsive">
            <table class="table table-sm table-borderless mb-0">
                <tbody>
                    <?php
                    $team = [
                        ['name' => 'Alma Qistina', 'phone' => '60128700748'],
                        ['name' => 'Farisya Hanis', 'phone' => '60175813844'],
                        ['name' => 'Syifa Amira', 'phone' => '601151646248'],
                        ['name' => 'Salsabila Suhaime', 'phone' => '60133031834'],
                    ];

                    foreach ($team as $member) : ?>
                        <tr class="border-bottom border-secondary contact-row">
                            <td class="py-3 align-middle">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 text-secondary">
                                        <i class="fa-solid fa-circle-user fa-2xl"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold text-white mb-0" style="font-size: 0.95rem; letter-spacing: 0.5px;">
                                            <?= h($member['name']) ?>
                                        </div>
                                        <div class="mt-1">
                                            <a href="https://wa.me/<?= $member['phone'] ?>?text=IVAPPROVAL%20Inquiries" target="_blank" class="text-decoration-none small d-flex align-items-center">
                                                <i class="fa-brands fa-whatsapp text-success me-1"></i> 
                                                <span class="text-white opacity-75">+<?= $member['phone'] ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end align-middle">
                                <a href="https://wa.me/<?= $member['phone'] ?>?text=IVAPPROVAL%20Inquiries" target="_blank" class="text-decoration-none btn-chat">
                                    Chat
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>