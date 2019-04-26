<h2><?=$title?></h2>

<?=validation_errors()?>

<?=form_open('news/create')?>

Titulo: <br>
<input type="text" name="title" id="title"/><br><br>

Texto: <br>
<textarea name="text" id="" cols="30" rows="10"></textarea><br><br>

<input type="submit" value="Salvar">

</form>