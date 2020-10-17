<link rel="stylesheet" href="../styles/main.css">
<?php
require_once '../functions.php';
require_once VIEWS_PATH.'/header.php';
$note = $_GET['show'];
?>
<?php if (checkNote($note)): ?>
    <?php require_once '../read.php'; ?>
    <div id="content" class="" style="margin-top: 20px">
        <!-- ========== READ NOTE ========== -->
        <div id="read_note" class="">
            <h1>Note contents</h1>
            <div id="ok_content" class="">
                <div id="info_destroyed" class="warning_block">
                    This note was destroyed.
                    If you need to keep it, copy it before closing this window.
                </div>
                <textarea id="note_contents" class="" readonly=""><?= $data; ?></textarea>

                <div class="section group">
                    <div class="col span_2_of_6">
                        <button id="copy_text" class="small_button">Copy text</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/main.js"></script>
    <script>
        let copy_btn = document.getElementById('copy_text');
        copy_btn.addEventListener('click', () => copyLink('note_contents'));

    </script>

<?php else: ?>
    <h1 style="color:red;margin-top: 20px">You note does`n exists.</h1>
    <a href="/">Home</a>

<?php endif; ?>
