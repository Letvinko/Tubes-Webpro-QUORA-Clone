    <!-- ANSWER SECTION -->
      <div class="container" style="margin-top:30px;">
        <h5 style="margin-left:10px;">Pertanyaan Untuk Anda</h5>
        <?php foreach($question as $question) {?>
        <form action=answer/createAnswer method='POST'>
        <div class='row'>
          <div class='col'>
            <hr>
            <small class='form-text text-muted' style='color:grey; margin-left:10px;'>Pertanyaan ditambahkan</small>
            <div style='color:black; margin-left:10px; font-size:20px;'><strong><?php echo $question->question;?></strong></div>
            <small class='form-text text-muted' style='color:grey; margin-left:10px;'>Ditambahkan <?php echo date("d M Y", strtotime($question->timestamp));?></small>
            <small class='form-text text-muted'><a href='#' style='color:grey; margin-left:10px;' data-toggle='collapse' data-target='#demo'>Jawab</a></small>
          </div>
        </div>
        <div id='demo' class='collapse' style='margin-left:10px;'>
          <input type='hidden' name='question_id' value=<?php echo $question->question_id;?> required>
          <input type='hidden' name='user_id' value=<?php echo $_SESSION['user']['user_id'];?> required>
          <textarea class='form-control' rows='5' id='comment' name='answer' placeholder="Tulis Jawaban Anda"required></textarea>
          <button type='submit' class='btn btn-primary' name='button' style='margin-top:5px;'>Kirim</button>
        </div>
        </form>
        <?php } ?>
      </div>
    <!-- END OF ANSWER SECTION -->

</body>
