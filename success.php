<?php
/**
* Class and Function List:
* Function list:
* Classes list:
*/
if (count($success) > 0): ?>
<style type="text/css">
.success {
  width: 100%%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #006d12; 
  color: #006d12; 
  background: #a0eb83; 
  border-radius: 5px; 
  text-align: left;
}
</style>
  <div class="success">
  	<?php foreach ($success as $success): ?>
  	  <p><?php echo $success ?></p>
  	<?php
    endforeach ?>
  </div>
<?php
endif ?>
