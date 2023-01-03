<?php /** @var $result float */
      /** @var $operations Models\MathOperation[] */
?>
<form>
    Number1: <input name="num_a" value="<?=isset($_GET['num_a']) ? $_GET['num_a']:0?>" type="number"/><br/>
    Number2: <input name="num_b" value="<?=isset($_GET['num_b']) ? $_GET['num_b']:0?>" type="number"/><br/>
    <select name="opetarion">
        <?php foreach ($operations as $operation): ?>
        <option value="<?=$operation;?>"><?=$operation;?></option>
        <?php endforeach ?>
    </select>
    <?php if($result != PHP_INT_MIN): ?>
    Result : <input disabled value="<?= $result ?>"/><br/>
    <?php endif; ?>
    <input type="submit" value="Изчисли"name="sum_btn"/>
</form>
