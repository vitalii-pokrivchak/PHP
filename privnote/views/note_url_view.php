<link rel="stylesheet" href="../styles/main.css">
<?php
require_once '../functions.php';
require_once VIEWS_PATH.'/header.php';
$note = $_GET['note'];
if (isset($note)): ?>
    <?php if (checkNote($note)): ?>
        <div id="content" style="margin-top: 50px;padding:100px">
            <div id="created_note" class="">
                <h1>Note link ready</h1>

                <!-- link and toolbar -->
                <div class="section group">
                    <label>
                        <input id="note_link_input" type="text" readonly=""
                               value="<?= build_redirect_url('views/note_view.php', 'show', $note); ?>">
                        <span id="info_read_once" class="caption">
            The note will self-destruct after reading it.</span>
                        <span id="info_expires" class="caption hidden">
            The note will self-destruct in  <span id="info_expires_text"></span>.</span>
                    </label>
                </div>

                <div class="section group">
                    <div class="col span_1_of_6">
                        <button id="copy_link" class="small_button">Copy link</button>
                    </div>
                    <div class="col span_1_of_6">
                        <a id="mailto_link" class="small_button"
                           href="mailto:?body=<?= build_redirect_url('views/note_view.php', 'show', $note); ?>">E-mail
                            link</a>
                    </div>

                    <div class="col span_2_of_6 right">
                        <!-- only for P_READ_ONCE -->
                        <a id="destroy_link" class="danger small_button"
                           href="<?= build_redirect_url('delete.php', 'note', $note); ?>">Destroy
                            note now</a>

                        <!-- not fRor P_EAD_ONCE -->
                        <a id="show_link" class="small_button" style="margin-top: 5px"
                           href="<?= build_redirect_url('views/note_view.php', 'show', $note); ?>">Read
                            note</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="../js/main.js"></script>
        <script>
            let copy_btn = document.getElementById('copy_link');
            copy_btn.addEventListener('click', () => copyLink('note_link_input'));

        </script>

    <?php else: ?>
        <h1 style="color:red;margin-top: 20px">You note does`n exists.</h1>
        <a href="/">Home</a>

    <?php endif; ?>

<?php endif; ?>


