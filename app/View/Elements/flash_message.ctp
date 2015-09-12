<?php
/**
 * User: Miquel Ramon Ortega i Tido
 * Date: 02/05/14
 * Time: 11:41
 * @file flash_error.ctp
 *
 * @variable $type
 *        - info (default)
 *        - success
 *        - warning
 *        - danger
 * @variable $message
 */
?>
<div class="alert alert-<?= isset($type)?$type:'info' ?>">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <?= isset($message)?$message:'';?>
</div>