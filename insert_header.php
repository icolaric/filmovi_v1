<html>
<head>
</head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <script src="bootstrap/js/bootstrap.js"></script>
<body>
<div class="container">
    <div class="row">
        <div class="col-0 col-md-3"></div>
        <div class="col-12 col-md-6">
            <span>
                <h2>Unesi novi film</h2>
            </span>
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    
                 
                    <div class="form-group">
                            <label for="title">Naslov filma: </label>
                            <input type="text" class="form-control" name="title" required>
                    </div>
                  
              
                    <div class="form-group">
                            <label for="genre">Žanr:</label>
                            <select name="genre">
                                <option value="1">SF</option>
                                <option value="2">drama</option>
                                <option value="3">triler</option>
                                <option value="4">komedija</option>
                                <option value="5">akcija</option>
                                <option value="6">romantika</option>
                                <option value="7">horor</option>
                            </select>
                    </div>
                    
             <div class="form-group">
                            <label for="year">Godina: </label>
                            <select name="year">
                
                <?php 
                   for($i=date("Y"); $i>=1900; $i--){
                     echo  "<option value=$i>$i</option>";
                }
        ?>
                            </select>
                    </div>
            <div class="form-group">
                            <label for="duration">Trajanje filma-minute: </label>
                            <input type="text" class="form-control" name="duration" required>
                    </div>
                    <div>
            <label for="image">Umetni sliku: </label>
  	  <input type="file" name="image">
  	</div>
  	<div>
  		<button type="submit" name="upload">Unesi</button>
  	</div>
                   
                </form>
               
        </div>
        <div class="col-0 col-md-3"></div>
    </div>
    
