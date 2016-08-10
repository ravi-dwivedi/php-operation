<link href="style.css" rel="stylesheet" />
<div id="container" style="margin-top: 75px;">
<form>
	<table>
               <tbody>
	                <tr>
				<th class="feature">Id No</th>
				<th class="ravi1"><h2><input  type="text" name="id" id="text"></h2></th>
			
			</tr>
		
			<tr>
				<td class="feature">Name</td>
				<td class="ravi1"><input type="text" id="text" name="name"/></td>
				
			</tr>
			
			<tr>
				<td class="feature">Class</td>
				<td class="ravi1"><input type="text" id="text"  name="class"/></td>
				
			</tr>
             <tr>
				<td class="feature">Grade</td></td>
				<td class="ravi1"><input  type="text" id="text" name="grade" />
			</tr>
            <tr>
				<td class="feature">Address</td></td>
				<td class="ravi1"><input  type="text" id="text" name="address" />
			</tr>
            <tr>
				<td class="feature">Insert</td>
				<td><input  type="submit" name="insert" />
			</tr>
            <tr>
				<td class="feature">Show</td>
				<td ><input  type="submit" name="show" />
			</tr>
            <tr>
				<td class="feature">Reset</td>
				<td><input  type="reset" />
			</tr>
            
 <table>           
</form>
<br /><br /><br />
<?php
if(isset($_REQUEST['insert']))
    {
    if(!empty($_REQUEST['name'])&&!empty($_REQUEST['id'])&&!empty($_REQUEST['class'])&&!empty($_REQUEST['grade'])&&!empty($_REQUEST['address']))
    {
        $filename = "img/data.txt";
        if(file_exists($filename))
        {
          $handler = fopen($filename,"a");
          fwrite($handler,PHP_EOL);
          fwrite($handler,$_REQUEST['id']);
          fwrite($handler,"\t");
          fwrite($handler,$_REQUEST['name']);
          fwrite($handler,"\t");
          fwrite($handler,$_REQUEST['class']);
          fwrite($handler,"\t");
          fwrite($handler,$_REQUEST['grade']);
          fwrite($handler,"\t");
          fwrite($handler,$_REQUEST['address']);
          fwrite($handler,"\n");
          echo "File appended successfully";
          fclose($handler);
          $handler = fopen($filename,"r");
          
           while(!feof($handler))
            {
                $c = fgets($handler);
                echo "<br><br><br>".$c."\t";
            }
             echo "<br><br><br>File open Successfully";
             fclose($handler);
        }
         else
        {
            $b .= "File doesn't exists!!!";
        }
    }
    else 
    {
        echo "First Complete the entries!!!";
    }
    }
?>
</div>
