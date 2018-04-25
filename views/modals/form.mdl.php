<form method="<?php echo $config["config"]["method"]?>" action="<?php echo $config["config"]["action"]?>">

    <?php foreach ($config["input"] as $name => $attributs):?>

    <?php if($attributs["type"]=="text" || $attributs["type"]=="email" || $attributs["type"]=="number" || $attributs["type"]=="password"):?>

    <input 
           type="<?php echo $attributs["type"];?>" 
           placeholder="<?php echo $attributs["placeholder"];?>"
           name="<?php echo $name;?>"
           <?php echo (isset($attributs["required"]))?"required='required'":"";?>
           ><br>

    <?php endif;?>

    <?php endforeach;?>

    <input type="submit" value="<?php echo $config["config"]["submit"];?>">

</form>