<?php include_once ROOT.'/models/test.php'; ?>


</div>
<?php if (isset($_SESSION['question_id'])) : ?>
    <?php if($_SESSION['question_id'] <= $_SESSION['numberOfQuestions']): ?>
        <input type="submit" class="btn btn-success" name="next" value="<?php echo htmlspecialchars($page); ?>">
    <?php endif ?>

    <?php  if($_SESSION['question_id'] > $_SESSION['numberOfQuestions']) : ?>
        <input type="submit" class="btn btn-success" name="end" value="Закінчити тест/переглянути результати">
    <?php endif ?>
<?php endif ?>


    <?php if (!isset($_SESSION['question_id'])) : ?>
         <input type="submit" class="btn btn-success" name="next" value="Перейти до питання №1">
    <?php endif ?>
</form>
</div>
</div>
</div>
</body>
</html>
